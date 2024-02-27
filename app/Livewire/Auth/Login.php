<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;

    public $password;

    public $remember;

    public $returnUrl = null;

    public $captcha = null;

    public $term_condition;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate([
            'term_condition' => 'required',
            'username' => 'required',
            'password' => 'required|string',
        ], $this->TermConditionValidationMessages());

        if (filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
            $type = 'email';
        } else {
            $type = 'username';
        }

        if (Auth::guard('user')->attempt([$type => $this->username, 'password' => $this->password], $this->remember)) {
            $user = Auth::guard('user')->getLastAttempted();
            request()->session()->regenerate();

            session()->flash('success', 'Logged in successfully!');

            if ($user->role == 'company') {
                return redirect()->route('company.dashboard');
            } elseif ($user->role == 'candidate') {
                return redirect()->route('candidate.dashboard');
            } else {
                return to_route('website.home');
            }
        }

        $this->addError('username', __('the_provided_credentials_do_not_match_our_records'));
    }

    protected function TermConditionValidationMessages()
    {
        return [
            'term_condition.required' => 'Please accept the terms and conditions.',
        ];
    }
}
