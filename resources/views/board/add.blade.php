@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
  @parent
  投稿ページ
@endsection

@section('content')
  <form action="/board/add" method="post">
    @csrf
    <label>person id: </label>
    <div>
      <input type="number" name="person_id">
    </div>
    <label>title: </label>
    <div>
      <input type="text" name="title">
    </div>
    <label>message</label>
    <div>
      <input type="text" name="message">
    </div>
    <button type="submit">send</button>
  </form>
@endsection

@section('footer')
  copyright 2025 shiosan
@endsection
