<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Utilisateurs extends Component
{
    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::pagin
        ])
           ->extends("layouts.master")
           ->section('content');
    }
}
