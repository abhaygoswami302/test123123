<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Collection as ModelsCollection;
use App\Models\Subseries;
use App\Models\Temporary;
use App\Models\Theme;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Filesystem\Filesystem;
use File;

class TempImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $flag = 0;

        Validator::make($rows->toArray(), [
            '*.name'  => 'required',
            '*.category_name' => 'required',
            '*.subseries_name' => 'required',
            '*.model_name' => 'required',
            '*.year' => 'required|numeric',
            '*.wheel_type' => 'required',
            '*.country' => 'required',
            '*.toy_hash' => 'required|unique:products,toy_hash|unique:temporaries,toy_hash',
        ])->validate();

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
                $subseries->casting = $row['casting_name'];
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
                $subseries->casting = $row['casting_name'];
                $subseries->save();  
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

            if($row['image5'] == null || File::exists(public_path("/tempimages/".$row['image1'])) == false){
                $image_path5 = null;
            }else{
                $image_path5 = "/tempimages/".$row['image5'];
            }
            
            Temporary::create([
                'user_id' => Auth::user()->id,
                'collection_id' => $collection->id,
                'collection_name' => $collection->name,
                'series' => $category->name . " : " . $subseries->name,
                'casting_name' => $subseries->casting,
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
                'notes' => $row['notes'],
                'toy_hash' => $row["toy_hash"],
                'col_hash' => $row["col_hash"],
                'series_hash' => $row["series_hash"],
                'class' => $row["class"],
                
                'image1' => $image_path1,
                'image2' => $image_path2,
                'image3' => $image_path3,
                'image4' => $image_path4,
                'image5' => $image_path5,
            ]);

            $flag = 1;
       }

       if($flag == 1){
        return redirect()->back()->with('csvmessage', 'CSV Uploaded Successfully | Images Uploaded Successfully');
       }
    }
}
