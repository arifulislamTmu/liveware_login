<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public function userLogout()
    {
        Auth::logout();
        session()->flash('message', 'Successfully Logout 😃');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
