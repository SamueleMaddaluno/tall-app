<?php

namespace App\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $email;

    public function subscribe(){

       logger(00001);
    }
    public function render()
    {
        return view('livewire.landing-page');
    }
}
