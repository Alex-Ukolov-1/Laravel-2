@extends('layouts.app')

@section('title-block')
    Страница контактов
@endsection

@section('content')
<h1>Все сообщения</h1>
   @foreach($data as $el)
   <div class="alert alert-info">
   	<h3>{{$el->home}}</h3>>
   	<p>{{$el->about}}</p>
   	<a href="#"><button class="btn btn-warning">детальнее</button></a>
   </div>
   @endforeach
@endsection 