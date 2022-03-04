<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use App\Models\UserCollection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProductsSearch extends Component
{
    public $searchTerm ;
    protected $products;

    public function mount()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();

        $this->products = $user->products()->paginate(9);
        //$this->products = Collection::paginate(9);
        return $this->products;
    }

    public function render()
    {
        if($this->searchTerm <> ""){
            $searchTerm = '%' . $this->searchTerm . '%';
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->products = $user->products()->where('name', 'like', $searchTerm)
            ->orWhere('toy_hash', 'like', $searchTerm)
            ->orWhere('category_name', 'like', $searchTerm)
            ->orWhere('series', 'like', $searchTerm)
            ->paginate(9)
            ->sortByDesc('updated_at');
    
          //  $this->products = Collection::where('name', 'like', $searchTerm)->paginate(9);
        }else{
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->products = $user->products()->paginate(9);
            //$this->products = Collection::paginate(9);
        }

        return view('livewire.user-products-search', ['products' => $this->products]);
    }

    public function bookmark($product)
    {
        $check = UserCollection::where([
            ['user_id', '=', Auth::user()->id],
            ['product_id', '=', $product['id']]
        ])->first();
        if ($check) {
            $bookmark2 = UserCollection::where('id', '=', $check->id)->first();
            $bookmark2->delete();
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->products = $user->products()->paginate(9);
            return $this->products;
        }
    }
   
}
