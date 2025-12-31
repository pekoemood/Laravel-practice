@extends('layouts.helloapp')


  <style>
    nav { margin: 10px 0px; }
    nav span { margin: 5px; font-size: 12pt; }
    nav a { margin: 5px; font-size: 12pt; }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
    nav { margin: 10px; }
    nav div { margin: 0px; font-size: 12pt; }
    svg { width: 25px; height: 25px; margin-bottom: -7px; }
  </style>


@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <thead>
      <tr>
      <th><a href="/hello?sort=name">name</a></th>
      <th><a href="/hello?sort=mail">mail</a></th>
      <th><a href="/hello?sort=age">age</a></th>
      <th>趣味</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mail }}</td>
        <td>{{ $item->age }}</td>
        <td>パソコンいじり</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $items->appends(['sort' => $sort])->links() }}
@endsection

