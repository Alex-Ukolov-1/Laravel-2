<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h1>new page</h1>
   <form method="post" action="/index">
    	{{ csrf_field() }}
    	<div class="">
    		<input type="text" name="name" value="" placeholder="name">
    	</div>
    	<div class="">
    		<input type="text" name="email" value="" placeholder="email">
    	</div>
    	<div class="">
    		<input type="text" name="email_verified_at" value="" placeholder="email_verified_at">
    	</div>
    	<div class="">
    		<input type="text" name="password" value="" placeholder="password">
    	<button type="submit">Submit</button>
    	</div>
	</form>
</body>
</html>