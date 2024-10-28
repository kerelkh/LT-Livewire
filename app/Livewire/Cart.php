<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {

        $carts = [
            [
                'name' => 'chair',
                'price' => '400000',
            ],
            [
                'name' => 'bag',
                'price' => '140000',
            ],
        ];

        return view('livewire.cart', compact(['carts']));
    }
}
