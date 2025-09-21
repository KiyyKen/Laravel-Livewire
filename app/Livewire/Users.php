<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Users Page')]

class Users extends Component
{
    public function render()
    {
        return view('livewire.users');
    }
}
