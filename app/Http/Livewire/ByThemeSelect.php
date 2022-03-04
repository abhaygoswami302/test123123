<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use App\Models\UserCollection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ByThemeSelect extends Component
{
    public $themename;
    public $selectedProducts = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $designTemplate = 'tailwind';
    protected $products;
    public $flag, $duplicate_flag;
    public $count_exceeded = 0;

    public function render()
    {
        $this->bulkDisabled = count($this->selectedProducts) < 1;
        return view('livewire.by-theme-select', ['products' => 
                                    Product::where('theme', '=', $this->themename)
        ->where('visibility', '=', '1')->paginate(30)]);
    }

    public function updateSelected()
    {
        foreach($this->selectedProducts as $product123){
            $product_duplicate = UserCollection::where('user_id', '=', Auth::user()->id)
                                    ->where('product_id', '=', $product123)->first();
            if($product_duplicate <> null){
                $user_membership = User::where('id', '=', Auth::user()->id)->first();
                if($user_membership->membership == 'Standard'){
                    $collection_count = UserCollection::where('user_id', '=', Auth::user()->id)->get();
                    if(count($collection_count) >= 5){
                        return $this->count_exceeded++;
                    }
                }

                $this->duplicate_flag = 1;
            }
        }

        if($this->duplicate_flag == 0){
            foreach($this->selectedProducts as $product){

                $user_membership = User::where('id', '=', Auth::user()->id)->first();
                if($user_membership->membership == 'Standard'){
                    $collection_count = UserCollection::where('user_id', '=', Auth::user()->id)->get();
                    if(count($collection_count) >= 5){
                        return $this->count_exceeded++;
                    }
                }

                $usercollection = new UserCollection();
                $usercollection->user_id = Auth::user()->id;
                $usercollection->product_id = $product;
                $usercollection->save();
                $this->flag = 1;
            }
        }
    
        $this->selectedProducts = [];
        $this->selectAll = false;
    }

    public function updatedSelectAll($value)
    {
        if($value){
            $this->selectedProducts = Product::where('theme', '=', $this->themename)
            ->where('visibility', '=', '1')->pluck('id');
        }else{
            $this->selectedProducts = [];
        }
    }

}
