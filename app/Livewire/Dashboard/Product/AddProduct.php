<?php

namespace App\Livewire\Dashboard\Product;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class AddProduct extends Component
{
    public $name = "";

    public function render()
    {
        return view('livewire.dashboard.product.add-product');
    }

    public function store()
    {
        $this->validate();
    }
}
