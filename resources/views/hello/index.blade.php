@extends('layouts.helloapp')

@section('title', 'インデックス')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <h2>コンポーネント</h2>
  <x-package-message id="{{$id}}">
    <p>＊これはコンポーネント内に追加したコンテンツです。</p>
  </x-package-message>
  <p>*上がコンポーネントの表示です。</p>
@endsection

