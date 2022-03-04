<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class FrontSearch extends Component
{
    public $searchTerm;
    public $myproducts = [];
    
    public function render()
    {       
        if($this->searchTerm <> ""){
            $searchTerm = '%' . $this->searchTerm . '%';
            /*$this->myproducts = Product::where('visibility', '=', '1')
                                    ->orWhere('name', 'like', $searchTerm)
                                    ->orWhere('category_name', 'like', $searchTerm)
                                    ->orWhere('collection_name', 'like', $searchTerm)
                                    ->get();*/
            $this->myproducts = Product::where('name', 'like', $searchTerm)
            ->where('visibility', '=', 1)
            ->orWhere('toy_hash', 'like', $searchTerm)
            ->orWhere('category_name', 'like', $searchTerm)
            ->orWhere('category_name', 'like', $searchTerm)
            ->orWhere('collection_name', 'like', $searchTerm)
            ->get();
           // dd($this->myproducts);
        }else{
            $this->myproducts = [];
        }
        
        return view('livewire.front-search');
    }
}
