@extends('layouts.helloapp');

@section('title', 'Person.delete')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
  <table>
    <tr>
      <th>name:</th>
      <td>{{ $form->name }}</td>
    </tr>
    <tr>
      <th>mail:</th>
      <td>{{ $form->mail }}</td>
    </tr>
    <tr>
      <th>age:</th>
      <td>{{ $form->age }}</td>
    </tr>
  </table>
  <form action="/person/del" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <button type="submit">send</button>
  </form>
@endsection

@section('footer')
  2025 copyright shiosan
@endsection
