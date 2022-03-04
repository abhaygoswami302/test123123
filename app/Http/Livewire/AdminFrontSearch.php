<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class AdminFrontSearch extends Component
{
    public $searchTerm;
    public $products = [], $categories = [];
    public function render()
    {
        if($this->searchTerm <> ""){
            $searchTerm = '%' . $this->searchTerm . '%';
            $this->products = Product::where('name', 'like', $searchTerm)
                        ->orWhere('toy_hash', 'like', $searchTerm)
                        ->orWhere('lego_mf_fig_num', 'like', $searchTerm)
                        ->orWhere('category_name', 'like', $searchTerm)
                                    ->orWhere('collection_name', 'like', $searchTerm)
                                    ->get();
            $this->categories = Category::where('name', 'like', $searchTerm)->get();

        }else{
            $this->products = [];
        }
        return view('livewire.admin-front-search');
    }
}
