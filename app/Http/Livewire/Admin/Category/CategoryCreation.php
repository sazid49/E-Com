<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryCreation extends Component
{

    public $name;
    public $editID;

    protected $rules = [
        'name' => 'required|min:2',
    ];

    public function mount()
    {
        $this->editID = request('edit');

        if($this->editID != null){
            $c = Category::find($this->editID);
            $this->name = $c->title;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        if($this->editID){
            $c = Category::find($this->editID);
            $c->update([
                'title' => $this->name
            ]);
            session()->flash('message', 'Category successfully updated.');
        }else{
            Category::create([
                'title' => $this->name
            ]);

            $this->name = '';

            session()->flash('message', 'Category successfully created.');
        }

    }
    public function render()
    {
        return view('livewire.admin.category.category-creation')->layout('layouts.admin.app');
    }
}
