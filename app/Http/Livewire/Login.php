<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Login extends Component
{

  public $email;
  public $password;
  public $error;

  protected $rules = [
    'email' => 'required|email',
    'password' => 'required',
  ];

  public function handleSubmit(){
    $this->validate();

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
      session()->flash('success', 'You are logged In successfully');

      return redirect(route('home'));
    }else{
      return $this->error = 'Invalid Email or Password';
    }
  }

  public function render()
  {

    return view('livewire.login');
  }
}
