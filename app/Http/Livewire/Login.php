<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
   
    public $email;
    public $password;

    // validation 
    protected $rules=[
       'email'=>'required',
       'password' => 'required',
      
    ];


    public function loginFormSubmit()
    {
       $this->validate();

       if(Auth::attempt(['email'=>$this->email,'password'=>$this->password])){
        session()->flash('message', 'User succefully login 😃');
        return redirect()->route('home');
       }else{
        session()->flash('message_error', 'Email or password worng 😇');
        return redirect()->route('login');
       }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
