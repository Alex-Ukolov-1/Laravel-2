@extends('layouts.app')

@section('title-block')
    Страница контактов
@endsection

@section('content')
<h1>Главная страница</h1>
<p1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p1>
@endsection

@section('aside')
   @parent
    <p>aditionla text</p>
@endsection 