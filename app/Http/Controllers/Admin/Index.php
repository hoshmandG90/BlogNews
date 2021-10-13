<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\support\Carbon;
use Livewire\WithFileUploads;
class Index extends Component
{

    public $item;
    public function mount(User $user){
        $this->item=$user;
    }
    public function render()
    {
        return view('admin.index')->extends('layouts.master');
    }
}
