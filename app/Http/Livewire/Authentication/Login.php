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
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->errormsg = "Sorry your account is invalid";
            $this->email    = "";
            $this->password = "";
        } else {
            $login = auth()->attempt([
                'email'     => $this->email,
                'password'  => $this->password
            ]);

            if (!$login) {
                $this->errormsg = "Invalid credentials";
                $this->email    = "";
                $this->password = "";
            } else {
                redirect('/');
            }
        }
    }

    // public function clear() {
    //     $this->email    = "";
    //     $this->password = "";
    // }

    public function render()
    {
        return view('livewire.authentication.login');
    }
}
