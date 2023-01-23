<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    // validation 

    protected $rules=[
       'name'=>'required|max:8',
       'email'=>'required|unique:users|email',
       'password' => 'required|confirmed|min:6',
       'password_confirmation'=>'required',
    ];



    public function regiserFormSubmit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        session()->flash('message', 'User succefully create 😃');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
