<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\models\user;
class Table extends Component
{
    use WithPagination;

    public $search;

    public function delete($itemId){
        
        $image = user::findorfail($itemId);        
        unlink("upload/photos/".$image->photos);    
        user::where("id", $image->id)->delete();
        notyf()->livewire()->position('y','top')->addError('the record has been deleted');
        return back();

    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $Latest=User::latest()->paginate(20);
        return view('admin.table',compact('Latest'))->extends('layouts.master');
    }
}
