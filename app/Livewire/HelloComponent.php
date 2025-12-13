<?php
namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component {
    public $message = '';
    public $input = '';

    //マウント時のイベント処理
    public function mount() {
        $this->message = '内部コンポーネントの利用';
    }

    //buttonクリックイベント処理
    public function doAction() {
        $this->triggerChildEvent($this->input);
    }

    // 子コンポーネントにイベントを送るメソッド
    public function triggerChildEvent($msg) {
        $this->dispatch('child-event', $msg);
    }

    public function render() {
        $alert = [
            'alert_title' => '重要なお知らせ',
            'alert_content' => 'システムからの重要な通知です。'
        ];
        return view('livewire.hello-component', $alert);
    }


}