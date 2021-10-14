<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $limit=20;

    public $search;


    public function LoadMore(){
        $this->limit +=20;
    }
    public function render()
    {
        $news=User::search($this->search)->paginate($this->limit);
        return view('admin.show',compact('news'))->extends('layouts.master');
    }
}
