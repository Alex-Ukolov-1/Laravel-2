@extends('layout')

@section('content')
   <p>Main</p>
   <ul>
   @foreach($tasks as $task)
   <li>{{$task}}</li>
   @endforeach
   </ul>
@endsection

   