<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Collection;
use Livewire\Component;

class AdminSubseries extends Component
{
    public $categories;
    public $collections;
    public $series;
    
    public $name = null;
    public $selectedState = NULL;

    public function mount()
    {
        $this->categories = Category::where('name', '<>', 'Lego MiniFigures')->latest()->get();
        $this->collections = null;
        $this->series = null;
    }

    public function render()
    {
        return view('livewire.admin-subseries');
    }

    public function updatedSelectedState($category)
    {
        if($this->selectedState == ""){
            $this->collections = null;
            $this->series = null;
            return;
        }

        if (!is_null($category)) {
            $mycollections = Category::where('id', $category)->first();
            $this->collections = $mycollections->collection_name;
            $this->series = $mycollections->name ." : " . $this->name;
        }
    }

    public function UpdatingName()
    {
        $this->selectedState = null;
        $this->collections = null;
        $this->series = null;
        return;
    }
}
