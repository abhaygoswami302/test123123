<?php

namespace App\Http\Livewire;

use App\Models\Casting;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Mainlineseries;
use App\Models\Subseries;
use App\Models\Theme;
use Livewire\Component;

class EditorProductForm extends Component
{
    public $categories = [];
    public $subseries = [];
    public $casting_name = [];
    public $myseries = null;
    public $myseries123 = [];
    public $collection_name = null;
    public $product_name;
    public $seriesFlag = 0;
    public $casting_name123 = [];
    public $castingFlag = 0;

    public $selectedCat = NULL;
    public $selectedSeries = NULL;
    public $selectedMyseries = Null;

    public function mount()
    {
        $this->categories = Category::where('collection_name', '=', 'Hot Wheels')->orderBy('name')->get();
        $this->subseries = collect();
    }
    public function render()
    {
        $themes = Theme::all();
       
        return view('livewire.editor-product-form', ['themes' => $themes]);

    }

    public function updatedSelectedCat($category)
    {
        if (!is_null($category)) {
            $this->subseries = Subseries::where('category_id', $category)->orderBy('name')->get();
            $this->casting_name = [];
            $this->casting_name123 = [];
            $this->myseries = null;
            $this->myseries123 = [];
            $this->collection_name = null; 
        }
    }

    public function updatedSelectedSeries($series)
    {
        if($this->selectedSeries == ""){
            $this->selectedSeries = null;
            $this->casting_name = [];
            $this->casting_name123 = [];
            $this->myseries = null;
            $this->myseries123 = [];
            $this->collection_name = null; 
            return;
        }
        if (!is_null($series)) {
            $this->sub = Subseries::where('id', $series)->first();

            if($this->sub->category_name <> 'Mainline'){
                $this->mycasting = Casting::where('subseries_id', '=', $this->sub->id)->orderBy('casting_name')->get();
                $this->casting_name =  $this->mycasting;
            }

            $collection = Collection::where('id', '=', $this->sub->collection_id)->first();

            if($this->sub->category_name == 'Mainline'){
                $this->seriesFlag = 1;
                $mysubseries = Mainlineseries::where('subseries_id', '=', $this->sub->id)->distinct()->get(['name']);
                
                $this->myseries123 = $mysubseries;
            }else{
                $this->seriesFlag = 0;
                $this->myseries = $this->sub->series_name;
            }
            $this->collection_name = $collection->name;
        }
    }

    public function updatedSelectedMyseries($name)
    {
        $this->castingFlag =  1;
        $this->casting_name123 = Mainlineseries::where('subseries_id', '=', $this->selectedSeries)
                                        ->where('name', '=', $name)->get();
        $mysubseries = Mainlineseries::where('subseries_id', '=', $this->sub->id)->distinct()->get(['name']);
        $this->myseries123 = $mysubseries;
    }
}
