<?php

namespace App\Livewire;

use Livewire\Component;

class ListPage extends Component
{
    public function render()
    {
        return view('livewire.list-page')->extends('layouts.list');
    }
}
