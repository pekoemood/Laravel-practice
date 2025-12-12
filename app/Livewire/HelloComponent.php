<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component {
    public $message = "";
    public $name = "";
    public $pass = "";
    public $check = "";

    public function mount() {
        $this->message = 'Event hook';
        $this->name = 'no name';
        $this->check = 'no check.';
    }

    public function updating($propertyName) {
        $this->check = $propertyName;
    }

    public function updatingName($propertyValue) {
        $this->message = 'update: ' . $this->check . '="' . $propertyValue . '"';
    }

    public function updatingPass($propertyValue) {
        $this->message = 'update:' . $this->check . '="' . $propertyValue . '"';
    }

    public function updateMessage() {
        // not used;
    }

    public function render() {
        return view('livewire.hello-component');
    }
}