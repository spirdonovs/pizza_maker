<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Logout;
use Auth;

class Navbar extends Component
{
    public function logoutUser(){
      Auth::logout();

      return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
