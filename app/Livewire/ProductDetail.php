<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    public int $quantity = 0;

    public function rules()
    {
        return [
            'quantity' => 'required|integer|min:1',
        ];
    }

    public function render()
    {
        return view('livewire.product-detail', ['product' => $this->product ]);
    }

    public function mount(string $id)
    {
        $this->product = \App\Models\Product::find($id);
    }

    public function add()
    {
        $this->validate();

        try{
            $existing = \App\Models\cart::where('user_id', Auth::user()->id)->where('product_id', $this->product->id)->first();
            if($existing){
                $existing->quantity += $this->quantity;
                $existing->save();
            }else{
                \App\Models\cart::create([
                    'product_id' => $this->product->id,
                    'user_id' => Auth::user()->id,
                    'quantity' => $this->quantity
                ]);
            }


            return to_route('product.detail', ['id' => $this->product->id]);
        }catch(\Exception $e){
            return redirect()->route('products');
        }
    }
}
