<?php

namespace App\Http\Livewire;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GuestCollections extends Component
{
    public $searchTerm , $total_products;
    protected $collections;

    public function mount()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();

        $this->collections = $user->products()->paginate(9)->groupBy('collection_name');
        //$this->collections = Collection::paginate(9);
        return $this->collections;
    }

    public function render()
    {
        if($this->searchTerm <> ""){
            $searchTerm = '%' . $this->searchTerm . '%';
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->collections = $user->products()->where('collection_name', 'like', $searchTerm)->paginate(9)
            ->sortByDesc('updated_at')->groupBy('collection_name');
    
          //  $this->collections = Collection::where('name', 'like', $searchTerm)->paginate(9);
        }else{
            $user = User::where('id', '=', Auth::user()->id)->first();

            $this->collections = $user->products()->paginate(9)->groupBy('collection_name');
            //$this->collections = Collection::paginate(9);
        }

        return view('livewire.guest-collections', ['collections' => $this->collections]);
    }

}
