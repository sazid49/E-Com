<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class CategoryList extends Component
{   

    public function addCategory()
    {
        $this->dispatchBrowserEvent('exampleModal');
    }
    public function render()
    {
        return view('livewire.admin.category.category-list')->layout('layouts.admin.app');
    }
}
