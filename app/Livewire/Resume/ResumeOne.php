<?php

namespace App\Livewire\Resume;

use Livewire\Component;

class ResumeOne extends Component
{
    public $resume;
    public $name;

    public function mount($resume)
    {
        $this->resume = $resume;
    }

    public function render()
    {
        return view('livewire.resume.resume-one');
    }
}
