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
		<h1>Silver Lines User Control Panel - Edit {{$user[0]->firstname}}</h1>
		<a href="/">Back to home </a>
		<form role="form" method="POST" action="/update">
			<div class="form-group">
			<label for="exampleInputPassword1">ID</label>
			<input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$user[0]->id}}" readonly>
		  </div>
		  <div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" value="{{$user[0]->firstname}}">
		  </div>
		  <div class="form-group">
			<label>Last Name</label>
			<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" value="{{$user[0]->lastname}}">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Address</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{$user[0]->address}}">
		  </div>
		  <div class="form-group">
			<label>Suburb</label>
			<input type="text" class="form-control" id="suburb" name="suburb" placeholder="Enter Suburb" value="{{$user[0]->suburb}}">
		  </div>
		  <div class="form-group">
			<label>Postcode</label>
			<input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Postcode" value="{{$user[0]->postcode}}">
		  </div>
		  <div class="form-group">
			<label>Contact</label>
			<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact" value="{{$user[0]->contact}}">
		  </div>
		  <div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{$user[0]->email}}">
		  </div>
		  <div class="form-group">
			<label>Notes</label>
			<input type="text" class="form-control" id="notes" name="notes" placeholder="Enter Notes" value="{{$user[0]->notes}}">
		  </div>
		  <div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="{{$user[0]->username}}">
		  </div>
		  <div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value="{{$user[0]->password}}">
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	
	
	
</body>

</html>
