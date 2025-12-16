<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller {
    public function index(Request $request) {
        $id = $request->id ?? 1;
        return view('hello.index', ['id' => $id]);
    }

    public function post(Request $request) {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
