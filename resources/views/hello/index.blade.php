@extends('layouts.helloapp')

@section ('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>

  @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビュー'])

@endsection

@section('footer')
copyright 2019 daki
@endsection
