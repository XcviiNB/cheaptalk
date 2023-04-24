<?php

namespace App\Http\Livewire\Authentication;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public $passwordMatch = true;

    public function submit() {

        if ($this->password !== $this->password_confirmation) {
            $this->passwordMatch = false;
            return;
        } else {
            $this->passwordMatch = true;
        }

        $this->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed|string|min:8'
        ],
        [
            'name.required'                     => 'Name is required',
            'email.required'                    => 'Email is required',
            'password.required'                 => 'Password is required'
        ]);

        User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => bcrypt($this->password)
        ]);

        return redirect('/login')->with('message', 'Account registered successfully');
    }

    public function render()
    {
        return view('livewire.authentication.register');
    }
}
