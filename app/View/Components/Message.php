<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Message extends Component
{
    private $id;
    private $data;
    private $msg;

    public function __construct($id = 1)
    {
        $this->msg = 'ランダムなPOSTデータを表示します。';
        $this->id = $id;
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $this->id);
        $this->data = $response->json();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message', [
            'id' => $this->id,
            'data' => $this->data,
            'msg' => $this->msg
        ]);
    }
}
