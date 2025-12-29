@extends('layouts.helloapp')

@section('title', 'Person.Edit')

@section('menubar')
  @parent
  編集ページ
@endsection

@section('content')
  @if (count($errors) > 0)
    <div>
      <ul>
        @foreach ($errors as $error )
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="/person/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <label>name:</label>
    <div>
      <input type="text" name="name" value="{{ $form->name }}">
    </div>
    <label>mail:</label>
    <div>
      <input type="text" name="mail" value="{{ $form->mail }}">
    </div>
    <label>age:</label>
    <div>
      <input type="text" name="age" value="{{ $form->age }}">
    </div>
    <button type="submit">send</button>
  </form>
@endsection

@section('footer')
  copyright 2025 shio
@endsection
