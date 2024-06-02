<?php

namespace App\Livewire;
use App\Models\User;

use Livewire\Component;

class Comp extends Component
{

    public function createuser()
    {
       User::create([
        'name'=>'essau',
        'email'=>'essaumushi5000@gmail.com',
        'password'=>'essau500.'
       ]); 
    }
    public function render()
    {
        $user=User::all();
        return view('livewire.comp',compact('user'));
    }
}
