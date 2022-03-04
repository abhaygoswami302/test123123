<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Collection as ModelsCollection;
use App\Models\Subseries;
use App\Models\Temporary;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LegoMinifiguresImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        if(count($rows) > 500){
            return redirect()->back()->with('limit_exceeded_lego_mf', 'Limit Exceeded , Upload CSV With Max 500 Products Only');
        }

        $collection_name = ModelsCollection::where('name', '=', 'Lego MiniFigures')->first();

        if($collection_name == null){
            $mycollection = new ModelsCollection();
            $mycollection->name = 'Lego MiniFigures';
            $mycollection->description = 'Lego MiniFigures';
            $mycollection->save();
        }

        $lm_collection = ModelsCollection::where('name', '=', 'Lego MiniFigures')->first();


        $category_name = Category::where('name', '=', 'Lego MiniFigures')->first();

        if($category_name == null){
            $mycategory = new Category();
            $mycategory->collection_id = $lm_collection->id;
            $mycategory->collection_name = $lm_collection->name;
            $mycategory->name = 'Lego MiniFigures';
            $mycategory->description = 'Lego MiniFigures';
            $mycategory-> save();
        }

        $lm_category = Category::where('name', '=', 'Lego MiniFigures')->first();


        $subseries_name = Subseries::where('name', '=', 'Lego MiniFigures')->first();

        if($subseries_name == null){
            $mysubseries = new Subseries();
            $mysubseries->category_id = $lm_category->id;
            $mysubseries->collection_id = $lm_collection->id;
            $mysubseries->name = 'Lego MiniFigures';
            $mysubseries->series_name = 'Lego MiniFigures';
            $mysubseries->collection_name = 'Lego MiniFigures';
            $mysubseries->category_name = 'Lego MiniFigures';
            $mysubseries-> save();
        }

        $lm_series = Subseries::where('name', '=', 'Lego MiniFigures')->first();

        foreach ($rows as $key => $row) {
            $digits = 10;
            $random= rand(pow(10, $digits-1), pow(10, $digits)-1);

            $digits123 = 5;
            $random123= rand(pow(10, $digits123-1), pow(10, $digits123)-1);

            $toy_hash = 'toy_hash_for_lego_mf'.$random.'__'.$random123;

            $image_path1 = null; $image_path2 = null; $image_path3 = null;
            $image_path4 = null; $image_path5 = null;

        //    if($row['image1'] == null || File::exists(public_path("/tempimages/".$row['image1'])) == false){
            
            if($row['image1'] == null){
                    $image_path1 = null;
            }else{
                $image_path1 = "/tempimages/".$row['image1'];         
            }

            if($row['image2'] == null){
                $image_path2 = null;
            }else{
                $image_path2 = "/tempimages/".$row['image2'];
            }
            
            if($row['image3'] == null){
                $image_path3 = null;
            }else{
                $image_path3 = "/tempimages/".$row['image3'];
            }
            
            if($row['image4'] == null){
                $image_path4 = null;
            }else{
                $image_path4 = "/tempimages/".$row['image4'];
            }

            if($row['image5'] == null){
                $image_path5 = null;
            }else{
                $image_path5 = "/tempimages/".$row['image5'];
            }

            Temporary::create([
                'collection_id' => $lm_collection->id,
                'collection_name' => $lm_collection->name,
                'series' => 'Lego MiniFigures',
                'casting_name' => 'Lego MiniFigures',
                'category_id' => $lm_category->id,
                'subseries_id' => $lm_series->id,
                'name'  => $row['name'],
                'category_name' =>  'Lego MiniFigures',
                'subseries_name' =>  'Lego MiniFigures',
                'theme' =>  'Lego MiniFigures',
                'model_name' =>  'Lego MiniFigures',
                'year' =>'0000',
                'visibility' => $row['visibility'],
                'toy_hash' => $toy_hash,
                'lego_mf_fig_num' => $row['fig_num'],
                'lego_mf_name' => $row['name'],
                'lego_mf_num_parts' => $row['num_parts'],
                'image1' => $image_path1,
                'image2' => $image_path2,
                'image3' => $image_path3,
                'image4' => $image_path4,
                'image5' => $image_path5,
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
        
        return redirect()->back()->with('lego_minifigures_imported', 'Lego Minifigures CSV Uploaded Successfully');
    }
    }
}
