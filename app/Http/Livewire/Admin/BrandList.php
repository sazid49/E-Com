<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class BrandList extends Component
{
    public function dataDelete($id)
    {
        $c = Brand::find($id);
        $c->delete();
        session()->flash('message', 'Brand successfully Deleted.');
    }
    public function render()
    {
        $brand = Brand::query()->latest()->get();
        return view('livewire.admin.brand-list', compact('brand'));
    }
}
