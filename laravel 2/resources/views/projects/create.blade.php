@extends('layout')

@section('content')
<p>Send</p>
@endsection

<p>Create</p>
    <form method="post" action="/projects">
    	{{ csrf_field() }}
    	<div class="">
    		<input type="text" name="home" value="" placeholder="home">
    	</div>
    	<div class="">
    		<input type="text" name="about" value="" placeholder="about">
    	</div>
    	<div class="">
    		<input type="text" name="contact" value="" placeholder="contact">
    	<button type="submit">Submit</button>
    	</div>
	</form>