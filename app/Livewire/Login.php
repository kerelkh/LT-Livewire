<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate(['required', 'email'])]
    public string $email = "";

    #[Validate(['required'])]
    public string $password = "";


    public function store()
    {
        if(Auth::attempt($this->validate()))
        {
            return to_route('home');
        }

        session()->flash('error', 'Email or password does not match');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
