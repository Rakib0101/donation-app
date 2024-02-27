<?php

namespace App\Livewire\Auth;

use App\Mail\SendResetPasswordMail;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class ForgetPassword extends Component
{
    use SendsPasswordResetEmails;

    public $email;

    public function render()
    {
        return view('livewire.auth.forget-password');
    }

    public function sendPasswordResetLink()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        if (! checkMailConfig()) {
            flashError(__('mail_not_sent_for_the_reason_of_incomplete_mail_configuration'));
        }

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $this->email,
            'token' => $token,
            'created_at' => now(),
        ]);
        $valid_mail = User::where('email', $this->email)->first();
        if ($valid_mail) {
            Mail::to($this->email)->send(new SendResetPasswordMail($token));
        } else {
            flashError(__('User not Found'));
        }
        $this->email = '';
        session()->flash('success', __('we_have_e_mailed_your_password_reset_link'));
        $this->dispatch('flashMessage', ['type' => 'success', 'message' => session('success')]);
    }
}
