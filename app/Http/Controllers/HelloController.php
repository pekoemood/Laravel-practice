<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller {
    public function index(Request $request) {
      if (isset($request->id)) {
        $param = ['id' => $request->id];
        $items = DB::select('select * from people where id = :id', $param);
      } else {
        $items = DB::select('select * from people');
      }
      return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request) {
      $items = DB::select('select * from people');
      return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request) {
      return view('hello.add');
    }

    public function create(Request $request) {
      $params = [
        'name' => $request->name,
        'mail' => $request->mail,
        'age' => $request->age,
      ];
      DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $params );
      return redirect('/hello');
    }
}
