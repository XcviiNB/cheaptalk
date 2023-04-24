<?php

namespace App\Http\Livewire\Authentication;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $errormsg;

    public function submit() {
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required|string'
        ],
        [
            'email.required'    => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->errormsg = "Email does not exist.";
        } else {
            $login = auth()->attempt([
                'email'     => $this->email,
                'password'  => $this->password
            ]);

            if (!$login) {
                $this->errormsg = "Password is incorrect.";
            } else {
                redirect('/');
            }
        }
    }

    public function render()
    {
        return view('livewire.authentication.login');
    }
}
