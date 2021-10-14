<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\support\Carbon;
use Livewire\WithFileUploads;
class Edit extends Component
{
    use WithFileUploads;

    public $user;

    public $title;
    public $excerpt;
    public $body;
    public $photos;
    public function mount(User $user){
        $this->user = $user;
        $this->title = $user->title;
        $this->excerpt = $user->excerpt;
        $this->body = $user->body;
        $this->photos = $user->photos;
    }

    public function Edit(User $user){
       
        dd($this->body);
    }
    public function render()
    {
        return view('admin.edit')->extends('layouts.master');
    }
}
