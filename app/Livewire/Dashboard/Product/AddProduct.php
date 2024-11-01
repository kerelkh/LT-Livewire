<?php

namespace App\Livewire\Dashboard\Product;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class AddProduct extends Component
{
    #[Validate(['required'])]
    public $name = "";

    #[Validate(['required'])]
    public $stock = 0;

    #[Validate(['required'])]
    public $price = "";


    public function render()
    {
        return view('livewire.dashboard.product.add-product');
    }

    public function store()
    {
        $this->validate();
    }
}
