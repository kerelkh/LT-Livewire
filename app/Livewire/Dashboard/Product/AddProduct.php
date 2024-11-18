<?php

namespace App\Livewire\Dashboard\Product;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class AddProduct extends Component
{
    public string $name = "";
    public int $stock = 0;
    public string $price = "";

    public function rules()
    {
        return [
            'name' => 'required|min:3|unique:products,name',
            'stock' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.product.add-product');
    }

    public function store()
    {
        $this->validate();

        $res = Product::create([
            'name' => $this->name,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);

        return redirect()->route('dashboard.product')->with('success', 'Product added successfully');
    }
}
