<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class BrandCreation extends Component
{
     public $title;
    public $editID;

    protected $rules = [
        'title' => 'required|min:2',
    ];

    public function mount()
    {
        $this->editID = request('edit');

        if($this->editID != null){
            $c = Brand::find($this->editID);
            $this->title = $c->title;
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
            $c = Brand::find($this->editID);
            $c->update([
                'title' => $this->title
            ]);
            session()->flash('message', 'Brand successfully updated.');
        }else{
            Brand::create([
                'title' => $this->title
            ]);

            $this->title = '';

            session()->flash('message', 'Brand successfully created.');
        }

    }
    public function render()
    {
        return view('livewire.admin.brand-creation');
    }
}
