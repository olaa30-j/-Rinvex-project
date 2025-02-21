<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.product-list', [
            'products' => Product::all(),
        ]);
    }
}
