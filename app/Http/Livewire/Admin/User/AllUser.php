<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class AllUser extends Component
{
    public function render()
    {
        $users = User::query()->where('role',1)->get();
        return view('livewire.admin.user.all-user',['users'=>$users])->layout('layouts.admin.app');
    }
}
