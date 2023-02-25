<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class Register extends Component
{
  public $name;
  public $email;
  public $password;
  public $error;

  protected $rules = [
    'name' => 'required',
    'email' => 'required|unique:users',
    'password' => 'required',
  ];


  public function handleSubmit(){
    $this->validate();

    $hashedPass = Hash::make($this->password);
    $user = User::create([
      'name' => $this->name,
      'email' => $this->email,
      'password' => $hashedPass,
    ]);

    if ($user) {
      session()->flash('success', 'You are registered successfully!');
      return redirect(route('login'));
    }else{
      return $this->error = "Something went wrong";
    }
  }


  public function render()
  {
    return view('livewire.register');
  }
}
