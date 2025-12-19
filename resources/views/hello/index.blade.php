@extends('layouts.helloapp')

@section('title', 'インデックス')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <thead>
      <tr>
      <th>Name</th>
      <th>Mail</th>
      <th>Age</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mail }}</td>
        <td>{{ $item->age }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection

