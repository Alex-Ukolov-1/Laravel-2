<!DOCTYPE html>
<html>
<head>
	<title>@yeild('title-block')</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
@include('inc.header')

@if(Request::is('/'))
@include('inc.hero')
@endif



 <div class="conainer mt-5">
 	@include('inc.messages')
 	
 	<div class="row">
 		<div class="col-8">
        @yield('content')
        </div>
        <div class="col-4">
        @include('inc.asid')
        </div>
    </div>
</div>
@include('inc.footer')
</body>
</html>