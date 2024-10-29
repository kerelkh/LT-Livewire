<?php

namespace App\Livewire\Components;

use Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        return to_route('login');
    }

    public function render()
    {
        return view('livewire.components.logout');
    }
}
