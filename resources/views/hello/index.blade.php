@extends('layouts.helloapp')

@section('title', 'インデックス')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>Livewireコンポーネントの表示</p>
  @livewire('hello-component')
@endsection

