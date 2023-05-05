<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        $product = Product::query()->latest()->get();
        return view('livewire.admin.product.product-list', compact('product'));
    }
}
