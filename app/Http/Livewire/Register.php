<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    
    public function render()
    {
        return view('livewire.register');
    }




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
        
         Alert::toast('User succefully created!','success');
        return redirect()->route('login');
    }

  
}
