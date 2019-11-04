@extends('layouts.helloapp')

@section ('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>

  @component('components.message')

  @emdcomponent
@endsection

@section('footer')
copyright 2019 daki
@endsection
