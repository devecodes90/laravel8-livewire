<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Utilisateurs extends Component
{
    public function render()
    {
        return view('livewire.utilisateurs.index')
           ->layout("layouts.master")
           ->section('content');
    }
}
