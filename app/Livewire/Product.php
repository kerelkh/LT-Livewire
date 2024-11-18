<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        $products = \App\Models\Product::orderBy('created_at', 'desc')->get();
        return view('livewire.product', compact('products'));
    }
}
