<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class ProductCreation extends Component
{
    public function render()
    {
        $brand = Brand::query()->latest()->get();
        $category = Category::query()->latest()->get();
        return view('livewire.admin.product.product-creation', compact('brand', 'category'));
    }
}
