<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\support\Carbon;
use Livewire\WithFileUploads;


class Create extends Component
{

    use WithFileUploads;

    public $title;
    public $excerpt;
    public $body;
    public $photos;
    public function store(){
        $GetFileUplaod=\Str::random(20).".".$this->photos->getClientOriginalExtension();
        $this->photos->storeAs('photos',$GetFileUplaod,'hosts');

        User::create([
            'name' => 'Sana Fazil',
            'title'=>$this->title,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'photos' => $GetFileUplaod,

        ]);

    }
    public function render()
    {
        return view('admin.create')->extends('layouts.master');
    }
}
