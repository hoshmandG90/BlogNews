<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\models\user;
class Table extends Component
{
    use WithPagination;
    public function render()
    {
        $Latest=User::latest()->paginate(20);
        return view('admin.table',compact('Latest'))->extends('layouts.master');
    }
}
