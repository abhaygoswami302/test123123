<?php



namespace App\Http\Livewire;



use App\Models\Like;

use App\Models\Product;

use App\Models\User;

use App\Models\UserCollection;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;



class Liked extends Component

{

    public $product , $toggle = 10, $flag = 0, $count_exceeded = 0;



    public function mount($product)

    {

        $check = UserCollection::where([

            ['user_id', '=', Auth::user()->id],

            ['product_id', '=', $product['id']]

        ])->get();

        if($check){

            foreach ($check as $key => $c1) {

                return $this->flag++;

            }

        }

    }



    public function save($product)

    {

            $check = UserCollection::where([

                ['user_id', '=', Auth::user()->id],

                ['product_id', '=', $product['id']]

            ])->first();

            if ($check) {

                $bookmark2 = UserCollection::where('id', '=', $check->id)->first();

                $bookmark2->delete();



                $product = Product::where('id', '=', $product['id'])->first();

                $product->updated_at = now();

                $product->save();

                

                $this->toggle = 0;

                return $this->flag = 0;

            }else{



                $user_membership = User::where('id', '=', Auth::user()->id)->first();

                if($user_membership->membership == 'Standard'){

                    $collection_count = UserCollection::where('user_id', '=', Auth::user()->id)->get();

                    if(count($collection_count) >= 1000){

                        return $this->count_exceeded++;

                    }

                }



                $bookmark = new UserCollection();

                $bookmark->user_id = Auth::user()->id;

                $bookmark->product_id = $product['id'];

                $bookmark->save();

                

                $product = Product::where('id', '=', $product['id'])->first();

                $product->updated_at = now();

                $product->save();

                $this->toggle = 1;



                return $this->flag++;

            }

       

    }



    public function render()

    {

        return view('livewire.liked');

    }

}

