<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        return view('admin.table')->extends('layouts.master');
    }
}
