<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    public $message = 'Hello, Livewire!';
    public $count = 0;

    public function updateMessage() {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.hello-component');
    }
}
