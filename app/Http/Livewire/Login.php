<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
class Login extends Component
{

    public $email;
    public $password;


    public function render()
    {
        return view('livewire.login');
    }


    // validation
    protected $rules=[
       'email'=>'required',
       'password' => 'required',

    ];


    public function loginFormSubmit()
    {
       $this->validate();

       if(Auth::attempt(['email'=>$this->email,'password'=>$this->password])){
        \Alert::toast('User succefully created!','success');
        $this->email="";
        $this->password="";
        return redirect()->route('home');
       }else{
        $this->password="";
        \Alert::toast('User succefully created!','warning');
        return redirect()->route('login');
       }
    }




}
