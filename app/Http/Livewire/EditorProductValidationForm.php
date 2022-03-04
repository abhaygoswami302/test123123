<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditorProductValidationForm extends Component
{
    use WithFileUploads;
    
    public $year, $colour, $tampo, $base_colour, $type, $window_colour;
    public $interior_colour, $wheel_type, $visibility, $country, $notes;
    public $toy_hash, $col_hash, $series_hash, $class;
    public $image1, $image2, $image3, $image4, $image5;

    protected $rules = [
        'year' => 'required|numeric',
        'colour' => 'max:255',
        'tampo' => 'max:255|nullable',
        'base_colour' => 'max:255|nullable',
        'type' => 'max:255|nullable',
        'window_colour' => 'max:255|nullable',
        'interior_colour' => 'max:255|nullable',
        'wheel_type' => 'max:255|nullable',
        'country' => 'max:255|nullable',
        'class' => 'max:255|required',
        'notes' => 'nullable',
        'visibility' => 'required|max:20',
        'toy_hash' => 'max:50|required|unique:temporaries,toy_hash|unique:products,toy_hash',
        'col_hash' => 'max:50',
        'series_hash' => 'max:50',
        'image1' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
        'image2' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
        'image3' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
        'image4' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
        'image5' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
    ];

    public function updated()
    {
        $this->validate();
    }
   
    public function render()
    {
        return view('livewire.editor-product-validation-form');
    }
}
