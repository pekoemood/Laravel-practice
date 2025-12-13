<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Notification extends Component {
    public $title;
    public $content;

    #[On('child-event')]
    public function handleChildEvent($msg) {
        $this->content = '親からの送信：' . $msg;
    }

    public function render() {
        return view('livewire.notification');
    }
}