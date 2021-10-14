<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;

class Login extends Component
{

    public $username;
    public $password;

    public $check;


    public function updated($Field){
        $this->ValidateOnly($Field,[ 
    'username' =>'required|string|max:10',
    'password'=>'required|string|max:25'
    ]);
    
}
    public function login(){
        $this->Validate([
            'username' =>'required|string|max:10',
            'password'=>'required|string|max:25'
        ]);
        if($this->username == 'sanafazil' && $this->password =='sana1234'){

            return redirect()->to(route('home'));
        }else{
            $this->check='The username and password dose not match';
        }
    }
    public function render()
    {
        return view('admin.login')->extends('layouts.base');
    }
}
