<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Mainlineseries;
use App\Models\Subseries;
use Livewire\Component;

class AdminCastingForm extends Component
{
    public $categories;
    public $subseries;
    public $mainlineFlag = 0;
    public $series123 = [];
    
    public $selectedState = NULL;
    public $selectedMainline = NULL;

    public function mount()
    {
        $this->categories = Category::where('name', '<>', 'Lego MiniFigures')->latest()->get();
        $this->subseries = collect();
    }

    public function render()
    {
        return view('livewire.admin-casting-form');
    }

    public function updatedSelectedMainline($id)
    {
        $this->subseries123 = Subseries::where('category_id', $this->selectedState)->first();

        if($this->subseries123->category_name == 'Mainline'){
            $this->mainlineFlag = 1;
            $myseries = Mainlineseries::where('subseries_id', '=', $id)->get();
            $this->series123 = $myseries;
            return;
        }else{
            $this->mainlineFlag = 0;

        }
    }

    public function updatedSelectedState($category)
    {
        if($this->selectedState == ""){
            $this->collections = null;
            $this->subseries = [];
            $this->series123 = [];
            return;
        }

        if (!is_null($category)) {
            $this->subseries = Subseries::where('category_id', $category)->get();
            $this->mainlineFlag = 0;

        }
    }



}
