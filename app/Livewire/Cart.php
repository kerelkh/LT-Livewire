<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {

//        $carts = [
//            [
//                'name' => 'chair',
//                'price' => '400000',
//            ],
//            [
//                'name' => 'bag',
//                'price' => '140000',
//            ],
//        ];

        $carts = \App\Models\cart::all();

        $total = "0";
        if($carts->count() > 0){
            foreach($carts as $cart){
                $total = $total + ($cart->product->price * $cart->quantity);
            }
        }

        return view('livewire.cart', compact(['carts', 'total']));
    }
}
