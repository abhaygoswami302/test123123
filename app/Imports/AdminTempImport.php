<?php

namespace App\Imports;

use App\Models\Casting;
use App\Models\Category;
use App\Models\Collection as ModelsCollection;
use App\Models\Mainlineseries;
use App\Models\Product;
use App\Models\Subseries;
use App\Models\Temporary;
use App\Models\Theme;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Filesystem\Filesystem;
use Maatwebsite\Excel\Concerns\WithValidation;
use File;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class AdminTempImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $flag = 0;

        if(count($rows) > 500){
            return redirect()->back()->with('message', 'Limit Exceeded , Upload CSV With Max 500 Products Only');
        }

        Validator::make($rows->toArray(), [
            '*.name'  => 'required',
            '*.category_name' => 'required',
            '*.subseries_name' => 'required',
            '*.model_name' => 'required',
            '*.year' => 'required|numeric',
            '*.toy_hash' => 'required|unique:temporaries,toy_hash|unique:products,toy_hash',
        ])->validate();

       

        foreach ($rows as $key => $row) {
            $temppp = Temporary::where('toy_hash', '=', $row['toy_hash'])->first();
            if($temppp <> null){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => '1Toy Hash Already Exists', 'row' => $row, 'line' => $key]);
            }
        }

        foreach ($rows as $key => $row) {
            $temppp = Product::where('toy_hash', '=', $row['toy_hash'])->first();
            if($temppp <> null){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => '2Toy Hash Already Exists', 'row' => $row, 'line' => $key]);
            }
        }
        
       foreach ($rows as $key => $row) {
            $category = Category::where('name', '=', $row['category_name'])->first();
            $subseries = Subseries::where('name', '=', $row['subseries_name'])->first();

         
            if($category == null){
                $collection = ModelsCollection::where('name', '=', $row['collection_name'])->first();
         
                if($collection == null){
                    $key = $key+2;
                    return redirect()->back()->with(['csverror' => 'Collection Does Not Exists', 'row' => $row, 'line' => $key]); 
                }
                $category = new Category();
                $category->collection_id = $collection->id;
                $category->collection_name = $collection->name;
                $category->name = $row['category_name'];
                $category->description = 'N/A';
                $category->save();
            }

            if($subseries == null && $row['category_name'] == 'Mainline'){
                $collection = ModelsCollection::where('name', '=', $row['collection_name'])->first();
                $category = Category::where('name', '=', $row['category_name'])->first();

                $subseries = new Subseries();
                $subseries->category_id = $category->id;
                $subseries->collection_id = $collection->id;
                $subseries->name = $row['subseries_name'];
                $subseries->series_name = $row['mainline_series'];
                $subseries->collection_name = $collection->name;
                $subseries->category_name = $category->name;
                $subseries->save();

            }

            if($subseries == null && $row['category_name'] <> 'Mainline' && $row['mainline_series'] == null){
                $collection = ModelsCollection::where('name', '=', $row['collection_name'])->first();
                $category = Category::where('name', '=', $row['category_name'])->first();
            
                $subseries = new Subseries();
                $subseries->category_id = $category->id;
                $subseries->collection_id = $collection->id;
                $subseries->name = $row['subseries_name'];
                $subseries->series_name = $category->name . ' : ' . $row['subseries_name'];
                $subseries->collection_name = $collection->name;
                $subseries->category_name = $category->name;
                $subseries->save();  
            }

            if($row['category_name'] == 'Mainline' &&  $row['mainline_series'] <> null){
                $category = Category::where('name', '=', $row['category_name'])->first();
                $series123 = Subseries::where('category_id', '=', $category->id)
                ->where('name', '=', $row['subseries_name'])
                ->where('category_name', '=', $category->name)->first();

                if($series123 == null){
                    $subseries = new Subseries();
                    $subseries->category_id = $category->id;
                    $subseries->collection_id = $collection->id;
                    $subseries->name = $row['subseries_name'];
                    $subseries->series_name = $category->name . ' : ' . $row['subseries_name'];
                    $subseries->collection_name = $collection->name;
                    $subseries->category_name = $category->name;
                    $subseries->save();
                }
       
                $series123 = Subseries::where('name', '=', $row['subseries_name'])
                ->where('category_name', '=', $category->name)->first();

                $mainlineseries123 = Mainlineseries::where('subseries_id', '=', $series123->id)
                                        ->where('name', '=', $row['mainline_series'])
                                        ->where('casting_name', '=', $row['casting_name'])->first();

                if($mainlineseries123 == null){
                    $mainline_series = new Mainlineseries();
                    $mainline_series->subseries_id = $series123->id;
                    $mainline_series->name = $row['mainline_series'];
                    $mainline_series->subseries_name = $series123->name;
                    $mainline_series->category_name = $category->name;
                    $mainline_series->casting_name = $row['casting_name'];
                    $mainline_series->save();
                }
            }

            $castings = Casting::where('casting_name', '=', $row['casting_name'])->first(); 
           
            if($row['casting_name'] <> null && $castings == null){
                
                $subseries_id = Subseries::where('name', '=', $row['subseries_name'])
                ->where('category_name', '=', $category->name)->first();
           
                if($subseries_id == null){
                    $subseries = new Subseries();
                    $subseries->category_id = $category->id;
                    $subseries->collection_id = $collection->id;
                    $subseries->name = $row['subseries_name'];
                    $subseries->series_name = $category->name . ' : ' . $row['subseries_name'];
                    $subseries->collection_name = $collection->name;
                    $subseries->category_name = $category->name;
                    $subseries->save();
                }
       
                $subseries_id = Subseries::where('name', '=', $row['subseries_name'])
                ->where('category_name', '=', $category->name)->first();

                $casting = new Casting();
                $casting->subseries_id = $subseries_id->id; 
                $casting->subseries_name = $subseries_id->name; 
                $casting->casting_name = $row['casting_name']; 
                $casting->save();
            }


            if($category == null && $flag == 0){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => 'Category Does Not Exists', 'row' => $row, 'line' => $key]);
            }elseif($subseries == null && $flag == 0){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => 'Subseries Does Not Exists', 'row' => $row, 'line' => $key]);
            }
            $collection = ModelsCollection::where('id', '=', $subseries->collection_id)->first();
            
            $theme = Theme::where('name', '=', $row['theme'])->first();

            if($row['theme'] <> null){
                $theme = new Theme();
                $theme->name = $row['theme'];
                $theme->description = 'N/A';
                $theme->save();
            }

            if($collection == null && $flag == 0){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => 'Collection Does Not Exists', 'row' => $row, 'line' => $key]);
            }elseif($theme == null && $flag == 0 && $row['theme'] <> null){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => 'Theme Does Not Exists', 'row' => $row, 'line' => $key]);
            }
       }


       foreach ($rows as $key => $row) {

            $category = Category::where('name', '=', $row['category_name'])->first();
            $subseries = Subseries::where('name', '=', $row['subseries_name'])->first();

            $collection = ModelsCollection::where('id', '=', $subseries->collection_id)->first();
            $theme = Theme::where('name', '=', $row['theme'])->first();
        
            if($theme == null){
                $theme_id = null;
            }else{
                $theme_id = $theme->id;
            }

            if(($row['visibility'] == 'visible' || $row['visibility'] == '1') && $row['visibility'] <> '0'){
                $visibility = '1';
            }else{
                $visibility = '0';
            }

            $image_path1 = null; $image_path2 = null; $image_path3 = null;
            $image_path4 = null; $image_path5 = null;

        //    if($row['image1'] == null || File::exists(public_path("/tempimages/".$row['image1'])) == false){
            
            if($row['image1'] == null || File::exists(public_path("/tempimages/hotwheelsimages/".$row['image1'])) == false){
                    $image_path1 = null;
            }else{
                $image_path1 = "/tempimages/hotwheelsimages/".$row['image1'];         
            }

            if($row['image2'] == null || File::exists(public_path("/tempimages/hotwheelsimages/".$row['image2'])) == false){
                $image_path2 = null;
            }else{
                $image_path2 = "/tempimages/hotwheelsimages/".$row['image2'];
            }
            
            if($row['image3'] == null || File::exists(public_path("/tempimages/hotwheelsimages/".$row['image3'])) == false){
                $image_path3 = null;
            }else{
                $image_path3 = "/tempimages/hotwheelsimages/".$row['image3'];
            }
            
            if($row['image4'] == null || File::exists(public_path("/tempimages/hotwheelsimages/".$row['image4'])) == false){
                $image_path4 = null;
            }else{
                $image_path4 = "/tempimages/hotwheelsimages/".$row['image4'];
            }

            if($row['image5'] == null || File::exists(public_path("/tempimages/hotwheelsimages/".$row['image5'])) == false){
                $image_path5 = null;
            }else{
                $image_path5 = "/tempimages/hotwheelsimages/".$row['image5'];
            }

            if($row['mainline_series'] == null){
                $myseries_name =  $category->name . " : " . $subseries->name;
            }else{
                $myseries_name = $row['mainline_series'];
            }

            $date = intval($row['series_hash']);
            $series_hash_day = (int)Date::excelToDateTimeObject($date)->format('d');
            $series_hash_month = Date::excelToDateTimeObject($date)->format('m');

           $text = $row['notes'];  
            $text = str_replace("\r\n","\n",$text);

            $paragraphs = preg_split("/[\n]{2,}/",$text);
            foreach ($paragraphs as $key => $p) {
                $paragraphs[$key] = "<p>".str_replace("\n","<br />",$paragraphs[$key])."</p>";
            }

            $text = implode("", $paragraphs);

            Temporary::create([
                'collection_id' => $collection->id,
                'collection_name' => $collection->name,
                'series' => $myseries_name,
                'casting_name' => $row['casting_name'],
                'category_id' => $category->id,
                'subseries_id' => $subseries->id,
                'theme_id' => $theme_id,
                'name'  => $row['name'],
                'category_name' => $row['category_name'],
                'subseries_name' => $row['subseries_name'],
                'theme' => $row['theme'],
                'model_name' => $row['model_name'],
                'year' => $row['year'],
                'colour' => $row['colour'],
                'tampo' => $row['tampo'],
                'base_colour' => $row['base_colour'],
                'type' => $row['type'],
                'window_colour' => $row['window_colour'],
                'interior_colour' => $row['interior_colour'],
                'wheel_type' => $row['wheel_type'],
                'visibility' => $visibility,
                'country' => $row['country'],
                'notes' => $text,
                'toy_hash' => $row["toy_hash"],
                'col_hash' => $row["col_hash"],
                'series_hash' => $series_hash_day."/".$series_hash_month,
                'class' => $row["class"],
                'image1' => $image_path1,
                'image2' => $image_path2,
                'image3' => $image_path3,
                'image4' => $image_path4,
                'image5' => $image_path5,
            ]);
      
            $flag = 1;
       }

       foreach($rows as $row){
        $users = Temporary::all();
        $usersUnique = $users->unique('toy_hash');
        $usersDupes = $users->diff($usersUnique);
            if($usersDupes->isEmpty() == false){
                $key=$key-2;
                //$temporary09 = Temporary::where('toy_hash', '=', $usersDupes[0]->toy_hash)->orderBy('updated_at', 'DESC')->first();
                //dd($temporary09);
                //$temporary09->delete();
                $tempppppp = Temporary::all();
                foreach($tempppppp as $temp90){
                    $temp90->delete();
                }
                return redirect()->back()->with(['csverror123' => 'Toy Hash Already Exists', 'row' => $usersDupes]);
            }
        }

       if($flag == 1){
        return redirect()->back()->with('csvmessage', 'CSV Uploaded Successfully | Images Uploaded Successfully');
       }

    }

}
