<?php

namespace App\Livewire;
use App\Models\User;

use Livewire\Component;

class Submit extends Component
{
    public $name;
    public $email;
    public $password;
    // public $reloads;
    

    public function submit()
    {


        $this->validate([
             'name'=>'required',
             'email'=>'required|email|unique:users,email',
             'password'=>'required|min:8|max:16',
        ]);


         User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
         ]);

         $this->reset(['name','email','password']);

         //this is the flash message from the session 
         request()->session()->flash('success','The user is succcesfull inserted ');
    }

    public function render()
    {
        $user=User::all();
        return view('livewire.submit',compact('user'));
    }
}
