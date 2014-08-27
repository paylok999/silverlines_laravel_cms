<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel PHP Framework</title>
	
</head>
<body>
	<div class="container">
		<h1>Silver Lines User Control Panel</h1>
		<a href="/create">Create new user</a>
		@foreach($users as $user)
		<div class="row">
		  <div class="col-md-1">{{$user->firstname}}</div>
		  <div class="col-md-1">{{$user->lastname}}</div>
		  <div class="col-md-1">{{$user->address}}</div>
		  <div class="col-md-1">{{$user->suburb}}</div>
		  <div class="col-md-1">{{$user->postcode}}</div>
		  <div class="col-md-1">{{$user->contact}}</div>
		  <div class="col-md-1">{{$user->email}}</div>
		  <div class="col-md-1">{{$user->notes}}</div>
		  <div class="col-md-1">{{$user->username}}</div>
		  <div class="col-md-1">{{$user->password}}</div>
		   <div class="col-md-1"><a href="/edit/{{$user->id}}">Edit</a></div>
		   <div class="col-md-1"><a href="/delete/{{$user->id}}">Delete</a></div>
		</div>
		@endforeach
	</div>
	
	
	
</body>

</html>
