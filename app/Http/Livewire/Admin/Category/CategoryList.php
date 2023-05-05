<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{

    public function addCategory()
    {
        $this->dispatchBrowserEvent('exampleModal');
    }

    public function dataDelete($id)
    {
        $c = Category::find($id);
        $c->delete();
        session()->flash('message', 'Category successfully Deleted.');
    }
    public function render()
    {
        $category = Category::query()->latest()->get();
        return view('livewire.admin.category.category-list', compact('category'))->layout('layouts.admin.app');
    }
}
