@extends('layout')

@section('content')
<p>Message</p>
@endsection

<h1>Все сообщения</h1>
 @foreach($projects as $project)
 <li>{{$project->home}}."------".{{$project->about}}</li>
 @endforeach 
