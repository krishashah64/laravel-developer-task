<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.admin.user-management');
    }
}
