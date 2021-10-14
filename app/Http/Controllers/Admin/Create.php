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
  

        $this->Validate([
            'title' =>'required|max:20',
            'excerpt' =>'required|max:255',
            'body'=>'required',
            'photos' =>'image|max:8000'
        ]);
        $GetFileUplaod=\Str::random(20).".".$this->photos->getClientOriginalExtension();
        $this->photos->storeAs('photos',$GetFileUplaod,'hosts');
        User::create([
            'name' => 'Sana Fazil',
            'title'=>$this->title,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'photos' => $GetFileUplaod,

        ]);
        notyf()->livewire()->position('y','top')->addSuccess('the post has been created successfully ');
        return back();
    }
    public function render()
    {
        return view('admin.create')->extends('layouts.master');
    }
}
