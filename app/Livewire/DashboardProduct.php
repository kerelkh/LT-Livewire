<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class DashboardProduct extends Component
{
    public function render()
    {
        $products = \App\Models\Product::all();
//        dd($products);
        return view('livewire.dashboard-product', compact('products'));
    }
}
