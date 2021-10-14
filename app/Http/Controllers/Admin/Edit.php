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
    public $NewPhotos;
    public function mount(User $user){
        $this->user = $user;
        $this->title = $user->title;
        $this->excerpt = $user->excerpt;
        $this->body = $user->body;
        $this->photos = $user->photos;
    }

    public function Edit(User $user){
    
        $GetFileUplaod=\Str::random(20).".".$this->NewPhotos->getClientOriginalExtension();
        $this->NewPhotos->storeAs('photos',$GetFileUplaod,'hosts');
        $user->update([
            'name' => 'sana Fazil',
            'title' => $this->title,
            'body' => $this->body,
            'excerpt' =>$this->excerpt,
            'photos' =>$GetFileUplaod,
        ]);

        notyf()->livewire()->position('y','top')->addSuccess('updated successfully');
        return back();
    
    }
    public function render()
    {
        return view('admin.edit')->extends('layouts.master');
    }
}
