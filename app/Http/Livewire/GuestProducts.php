<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GuestProducts extends Component
{
    public $searchTerm2 ;
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
        if($this->searchTerm2 <> ""){
            $searchTerm2 = '%' . $this->searchTerm2 . '%';
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->products = $user->products()->where('name', 'like', $searchTerm2)->paginate(9)
            ->sortByDesc('updated_at');
    
          //  $this->products = Collection::where('name', 'like', $searchTerm2)->paginate(9);
        }else{
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->products = $user->products()->paginate(9);
            //$this->products = Collection::paginate(9);
        }

        return view('livewire.guest-products', ['products' => $this->products]);
    }

}
