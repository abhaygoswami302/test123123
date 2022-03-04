<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Http\Request;

class CollectionSelect extends Component
{
    public $casting, $flag = 1, $myproducts = 0;
    protected $products;
    public $level = 0, $all123;

    public $selectedAll = null;
    public $selectedLevel = null;

    public array $selectedRows;

    public function render()
    {
        $this->products = Product::where('casting_name', '=', $this->casting)->where('visibility', '=', '1')->paginate(30);
        return view('livewire.collection-select', ['products' => $this->products]);
    }

    public function levelClicked($all123)
    {
        dd($this->all123);
        if($this->level == 0){
            $this->level = 1;
            $this->myproducts = 1;
        }
        // now the property $this->level will contain all the selected values
    }

    public function hydratedSelectedLevel($value)
    {
        dd($value);
    }

    public function allClicked($flag)
    {
        if($this->flag == 0){
            if($this->level == 0){
                $this->level = 1;
            }else{
                $this->level = 0;
            }
        }else{
            if($this->level == 0){
                $this->level = 1;
            }else{
                $this->level = 0;
            }
        }
    }

    public function doSomethingWithRows()
    {
        dd($this->selectedRows);        
    }

}
