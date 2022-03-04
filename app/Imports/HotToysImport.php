<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Collection as ModelsCollection;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subseries;
use App\Models\Temporary;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Filesystem\Filesystem;
use File;

class HotToysImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        if(count($rows) > 500){
            return redirect()->back()->with('error', 'Limit Exceeded , Upload CSV With Max 500 Products Only');
        }

        Validator::make($rows->toArray(), [
            '*.toy_name'  => 'required',
            '*.category_name' => 'required',
            '*.toy_hash' => 'required',
        ])->validate();

        foreach ($rows as $key => $row) {
            $temppp = Temporary::where('toy_hash', '=', $row['toy_hash'])->first();
            if($temppp <> null){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => 'Toy Hash Already Exists', 'row' => $row, 'line' => $key]);
            }
        }

        foreach ($rows as $key => $row) {
            $temppp = Product::where('toy_hash', '=', $row['toy_hash'])->first();
            if($temppp <> null){
                $key = $key+2;
                return redirect()->back()->with(['csverror' => 'Toy Hash Already Exists', 'row' => $row, 'line' => $key]);
            }
        }

        $collection_name = ModelsCollection::where('name', '=', 'Hot Toys')->first();

        if($collection_name == null){
            $mycollection = new ModelsCollection();
            $mycollection->name = 'Hot Toys';
            $mycollection->description = 'Hot Toys';
            $mycollection->save();
        }

        $lm_collection = ModelsCollection::where('name', '=', 'Hot Toys')->first();


        foreach ($rows as $key => $row) {
            $category = Category::where('name', '=', $row['category_name'])->first();

            if($category == null){
                $collection = ModelsCollection::where('name', '=', 'Hot Toys')->first();
         
                $category = new Category();
                $category->collection_id = $collection->id;
                $category->collection_name = $collection->name;
                $category->name = $row['category_name'];
                $category->description = 'N/A';
                $category->save();
            }
        }
        
        foreach ($rows as $key => $row) {

                $category = Category::where('name', '=', $row['category_name'])->first();

                if($category <> null){
                    $subseries_name = Subseries::where('name', '=', $row['subseries_name'])
                                                    ->where('collection_name', '=', 'Hot Toys')->first();
        
                    if($subseries_name == null){
                        $mysubseries = new Subseries();
                        $mysubseries->category_id = $category->id;
                        $mysubseries->collection_id = $lm_collection->id;
                        $mysubseries->name = $row['subseries_name'];
                        $mysubseries->series_name = $row['subseries_name'];
                        $mysubseries->collection_name = 'Hot Toys';
                        $mysubseries->category_name = 'Hot Toys';
                        $mysubseries-> save();
                    }
                }
            
        }


        foreach ($rows as $key => $row) {

            
        $image_path1 = null; $image_path2 = null; $image_path3 = null;
        $image_path4 = null; $image_path5 = null; $image_path6 = null;
        $image_path7 = null; $image_path8 = null; $image_path9 = null;
        $image_path10 = null; $image_path11 = null; $image_path12 = null;
        $image_path13 = null; $image_path14 = null; $image_path15 = null;
        $image_path16 = null; $image_path17 = null; $image_path18 = null;
        $image_path19 = null; $image_path20 = null; $image_path21 = null;
        $image_path22 = null; $image_path23 = null; $image_path24 = null;
        $image_path25 = null; $image_path26 = null; $image_path27 = null;
        $image_path28 = null; $image_path29 = null; $image_path30 = null;
        $image_path31 = null; $image_path32 = null; $image_path33 = null;
        $image_path34 = null; $image_path35 = null; $image_path36 = null;
        $image_path37 = null; $image_path38 = null; 


        if($row['image1'] == null || File::exists(public_path("/tempimages/".$row['image1'])) == false){
            $image_path1 = null;
        }else{
            $image_path1 = "/tempimages/".$row['image1'];         
        }        

        if($row['image2'] == null || File::exists(public_path("/tempimages/".$row['image2'])) == false){
            $image_path2 = null;
        }else{
            $image_path2 = "/tempimages/".$row['image2'];
        }
        
        if($row['image3'] == null || File::exists(public_path("/tempimages/".$row['image3'])) == false){
            $image_path3 = null;
        }else{
            $image_path3 = "/tempimages/".$row['image3'];
        }
        
        if($row['image4'] == null || File::exists(public_path("/tempimages/".$row['image4'])) == false){
            $image_path4 = null;
        }else{
            $image_path4 = "/tempimages/".$row['image4'];
        }

        if($row['image5'] == null || File::exists(public_path("/tempimages/".$row['image5'])) == false){
            $image_path5 = null;
        }else{
            $image_path5 = "/tempimages/".$row['image5'];
        }

        if($row['image6'] == null || File::exists(public_path("/tempimages/".$row['image6'])) == false){
            $image_path6 = null;
        }else{
            $image_path6 = "/tempimages/".$row['image6'];
        }

        if($row['image7'] == null || File::exists(public_path("/tempimages/".$row['image7'])) == false){
            $image_path7 = null;
        }else{
            $image_path7 = "/tempimages/".$row['image7'];
        }

        if($row['image8'] == null || File::exists(public_path("/tempimages/".$row['image8'])) == false){
            $image_path8 = null;
        }else{
            $image_path8 = "/tempimages/".$row['image8'];
        }

        if($row['image9'] == null || File::exists(public_path("/tempimages/".$row['image9'])) == false){
            $image_path9 = null;
        }else{
            $image_path9 = "/tempimages/".$row['image9'];
        }

        if($row['image10'] == null || File::exists(public_path("/tempimages/".$row['image10'])) == false){
            $image_path10 = null;
        }else{
            $image_path10 = "/tempimages/".$row['image10'];
        }

        if($row['image11'] == null || File::exists(public_path("/tempimages/".$row['image11'])) == false){
            $image_path11 = null;
        }else{
            $image_path11 = "/tempimages/".$row['image11'];
        }

        if($row['image12'] == null || File::exists(public_path("/tempimages/".$row['image12'])) == false){
            $image_path12 = null;
        }else{
            $image_path12 = "/tempimages/".$row['image12'];
        }

        if($row['image13'] == null || File::exists(public_path("/tempimages/".$row['image13'])) == false){
            $image_path13 = null;
        }else{
            $image_path13 = "/tempimages/".$row['image13'];
        }

        if($row['image14'] == null || File::exists(public_path("/tempimages/".$row['image14'])) == false){
            $image_path14 = null;
        }else{
            $image_path14 = "/tempimages/".$row['image14'];
        }

        if($row['image15'] == null || File::exists(public_path("/tempimages/".$row['image15'])) == false){
            $image_path15 = null;
        }else{
            $image_path15 = "/tempimages/".$row['image15'];
        }

        if($row['image16'] == null || File::exists(public_path("/tempimages/".$row['image16'])) == false){
            $image_path16 = null;
        }else{
            $image_path16 = "/tempimages/".$row['image16'];
        }

        if($row['image17'] == null || File::exists(public_path("/tempimages/".$row['image17'])) == false){
            $image_path17 = null;
        }else{
            $image_path17 = "/tempimages/".$row['image17'];
        }

        if($row['image18'] == null || File::exists(public_path("/tempimages/".$row['image18'])) == false){
            $image_path18 = null;
        }else{
            $image_path18 = "/tempimages/".$row['image18'];
        }

        if($row['image19'] == null || File::exists(public_path("/tempimages/".$row['image19'])) == false){
            $image_path19 = null;
        }else{
            $image_path19 = "/tempimages/".$row['image19'];
        }

        if($row['image20'] == null || File::exists(public_path("/tempimages/".$row['image20'])) == false){
            $image_path20 = null;
        }else{
            $image_path20 = "/tempimages/".$row['image20'];
        }

        if($row['image21'] == null || File::exists(public_path("/tempimages/".$row['image21'])) == false){
            $image_path21 = null;
        }else{
            $image_path21 = "/tempimages/".$row['image21'];
        }

        if($row['image22'] == null || File::exists(public_path("/tempimages/".$row['image22'])) == false){
            $image_path22 = null;
        }else{
            $image_path22 = "/tempimages/".$row['image22'];
        }

        if($row['image23'] == null || File::exists(public_path("/tempimages/".$row['image23'])) == false){
            $image_path23 = null;
        }else{
            $image_path23 = "/tempimages/".$row['image23'];
        }

        if($row['image24'] == null || File::exists(public_path("/tempimages/".$row['image24'])) == false){
            $image_path24 = null;
        }else{
            $image_path24 = "/tempimages/".$row['image24'];
        }

        if($row['image25'] == null || File::exists(public_path("/tempimages/".$row['image25'])) == false){
            $image_path25 = null;
        }else{
            $image_path25 = "/tempimages/".$row['image25'];
        }

        if($row['image26'] == null || File::exists(public_path("/tempimages/".$row['image26'])) == false){
            $image_path26 = null;
        }else{
            $image_path26 = "/tempimages/".$row['image26'];
        }

        if($row['image27'] == null || File::exists(public_path("/tempimages/".$row['image27'])) == false){
            $image_path27 = null;
        }else{
            $image_path27 = "/tempimages/".$row['image27'];
        }

        if($row['image28'] == null || File::exists(public_path("/tempimages/".$row['image28'])) == false){
            $image_path28 = null;
        }else{
            $image_path28 = "/tempimages/".$row['image28'];
        }

        if($row['image29'] == null || File::exists(public_path("/tempimages/".$row['image29'])) == false){
            $image_path29 = null;
        }else{
            $image_path29 = "/tempimages/".$row['image29'];
        }

        if($row['image30'] == null || File::exists(public_path("/tempimages/".$row['image30'])) == false){
            $image_path30 = null;
        }else{
            $image_path30 = "/tempimages/".$row['image30'];
        }

        if($row['image31'] == null || File::exists(public_path("/tempimages/".$row['image31'])) == false){
            $image_path31 = null;
        }else{
            $image_path31 = "/tempimages/".$row['image31'];
        }

        if($row['image32'] == null || File::exists(public_path("/tempimages/".$row['image32'])) == false){
            $image_path32 = null;
        }else{
            $image_path32 = "/tempimages/".$row['image32'];
        }

        if($row['image33'] == null || File::exists(public_path("/tempimages/".$row['image33'])) == false){
            $image_path33 = null;
        }else{
            $image_path33 = "/tempimages/".$row['image33'];
        }

        if($row['image34'] == null || File::exists(public_path("/tempimages/".$row['image34'])) == false){
            $image_path34 = null;
        }else{
            $image_path34 = "/tempimages/".$row['image34'];
        }

        if($row['image35'] == null || File::exists(public_path("/tempimages/".$row['image35'])) == false){
            $image_path35 = null;
        }else{
            $image_path35 = "/tempimages/".$row['image35'];
        }

        if($row['image36'] == null || File::exists(public_path("/tempimages/".$row['image36'])) == false){
            $image_path36 = null;
        }else{
            $image_path36 = "/tempimages/".$row['image36'];
        }

        if($row['image37'] == null || File::exists(public_path("/tempimages/".$row['image37'])) == false){
            $image_path37 = null;
        }else{
            $image_path37 = "/tempimages/".$row['image37'];
        }

        if($row['image38'] == null || File::exists(public_path("/tempimages/".$row['image38'])) == false){
            $image_path38 = null;
        }else{
            $image_path38 = "/tempimages/".$row['image38'];
        }

        $category = Category::where('name', '=', $row['category_name'])->first();
        $lm_series = Subseries::where('name', '=', $row['subseries_name'])
                                    ->where('collection_name', '=', 'Hot Toys')->first();
            
            if($row['visibility'] <> '1'){
                $visibility = 0;
            }else{
                $visibility = 1;
            }

          $text = $row['notes'];  
$text = str_replace("\r\n","\n",$text);

$paragraphs = preg_split("/[\n]{2,}/",$text);
foreach ($paragraphs as $key => $p) {
    $paragraphs[$key] = "<p>".str_replace("\n","<br />",$paragraphs[$key])."</p>";
}

$text = implode("", $paragraphs);


            Temporary::create([
                'collection_id' => $lm_collection->id,
                'collection_name' => $lm_collection->name,
                'series' => $row['subseries_name'],
                'casting_name' => 'Hot Toys',
                'category_id' => $category->id,
                'subseries_id' => $lm_series->id,
                'name'  => $row['toy_name'],
                'category_name' =>  $category->name,
                'subseries_name' =>  $row['subseries_name'],
                'theme' =>  'Hot Toys',
                'model_name' =>  $row['model_name'],
                'year' => $row['year'],
                'notes' => $text,
                'visibility' => $visibility,
                'toy_hash' => $row['toy_hash'],
                'image1' => $image_path1,
                'image2' => $image_path2,
                'image3' => $image_path3,
                'image4' => $image_path4,
                'image5' => $image_path5,
                'image6' => $image_path6,
                'image7' => $image_path7,
                'image8' => $image_path8,
                'image9' => $image_path9,
                'image10' => $image_path10,
                'image11' => $image_path11,
                'image12' => $image_path12,
                'image13' => $image_path13,
                'image14' => $image_path14,
                'image15' => $image_path15,
                'image16' => $image_path16,
                'image17' => $image_path17,
                'image18' => $image_path18,
                'image19' => $image_path19,
                'image20' => $image_path20,
                'image21' => $image_path21,
                'image22' => $image_path22,
                'image23' => $image_path23,
                'image24' => $image_path24,
                'image25' => $image_path25,
                'image26' => $image_path26,
                'image27' => $image_path27,
                'image28' => $image_path28,
                'image29' => $image_path29,
                'image30' => $image_path30,
                'image31' => $image_path31,
                'image32' => $image_path32,
                'image33' => $image_path33,
                'image34' => $image_path34,
                'image35' => $image_path35,
                'image36' => $image_path36,
                'image37' => $image_path37,
                'image38' => $image_path38,
            ]);

           

            /*
            'collection_id' => $lm_collection->id,
                'collection_name' => $lm_collection->name,
                'category_id' => $lm_category->id,
                'subseries_id' => $lm_series->id,
                'category_name' => $lm_category->name,
                'subseries_name' => 'Lego Minifigs',
                'series' => 'Lego Minifigs',
                'model_name' => 'Lego Minifigs',
                'year' => '0000',
                'toy_hash' => $toy_hash,
                'visibility' => '1',
            */

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
        return redirect()->back()->with('hot_toys_imported', 'Hot Toys CSV Uploaded Successfully');
    }else{
        return redirect()->back();
    }

    }
}
