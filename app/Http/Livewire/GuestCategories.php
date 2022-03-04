<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GuestCategories extends Component
{
    public $searchTerm1 ;
    protected $categories;

    public function mount()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $this->categories = $user->products->sortByDesc('updated_at')->groupBy('category_name');
        return $this->categories;
    }

    public function render()
    {
        if($this->searchTerm1 <> ""){
            $searchTerm1 = '%' . $this->searchTerm1 . '%';
            $user = User::where('id', '=', Auth::user()->id)->first();
            $this->categories = $user->products->where('category_name', 'like', $searchTerm1)->sortByDesc('updated_at')
            ->sortByDesc('updated_at')->groupBy('category_name');
        }else{
            $user = User::where('id', '=', Auth::user()->id)->first();
            $this->categories = $user->products->sortByDesc('updated_at')->groupBy('category_name');
        }

        return view('livewire.guest-categories', ['categories' => $this->categories]);
    }
}
