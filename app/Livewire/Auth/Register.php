<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    public $name;

    public $email;

    public $selectedUserType;

    public $password;

    public $cpassword;

    public $returnUrl = null;

    public $captcha = null;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function mount()
    {
        $this->selectedUserType = 'candidate';
    }

    public function register()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',
            'captcha' => config('captcha.active') ? 'required' : '',
        ], $this->customValidationMessages());

        $user = User::create([
            'name' => $this->name,
            'username' => strtolower(str_replace(' ', '-', $this->name)),
            'email' => $this->email,
            'role' => $this->selectedUserType,
            'password' => bcrypt($this->password),
        ]);

        //to call email verification
        event(new Registered($user));

        // Login user
        auth()->guard('user')->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        // Regenerate session and redirect to dashboard
        request()->session()->regenerate();
        session()->flash('success', 'Registration successful');

        return to_route('website.home');
    }

    protected function customValidationMessages()
    {
        return [
            'cpassword.required' => 'The confirmation password field is required.',
            'cpassword.same' => 'The confirmation password does not match the password.',
        ];
    }
}
