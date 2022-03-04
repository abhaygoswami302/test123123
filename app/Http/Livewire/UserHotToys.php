<?php



namespace App\Http\Livewire;



use App\Models\UserCollection;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;



class UserHotToys extends Component

{

    public $count_exceeded = 0, $categories, $subseries;



    public function mount()

    {

        if(Auth::user()->membership == 'Standard'){

            $collection_count = UserCollection::where('user_id', '=', Auth::user()->id)->get();

            if(count($collection_count) >= 1000){

                return $this->count_exceeded++;

            }

        }

    }



    public function render()

    {

        return view('livewire.user-hot-toys');

    }

}

