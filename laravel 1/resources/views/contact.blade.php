@extends('layouts.app')

@section('title-block')
    Страница контактов
@endsection

@section('content')
    <h1>Страница контактов</h1>

   
    <form action="{{ route('contact-form') }}" method="post">
         @csrf
    	<div class="form-group">
    		<label for="home">Введите имя</label>
    		<input type="text" name="home" placeholder="input name" id="name" class="form-control">
    	</div>

    	<div class="form-group">
    		<label for="about">Email</label>
    		<input type="text" name="about" placeholder="input name" id="email" class="form-control">
    	</div>

    	<div class="form-group">
    		<label for="contact">Введите имя</label>
    		<input type="text" name="contact" placeholder="input name" id="subject" class="form-control">
    	</div>

    	<button type="submit" class="btn btn-success">send this</button>
    </form>
@endsection