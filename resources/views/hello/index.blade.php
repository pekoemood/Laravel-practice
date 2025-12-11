@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ

@endsection

@section('content')
  <p>Livewireコンポーネントの表示</p>
  @livewire('hello-component')
@endsection