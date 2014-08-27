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
		<h1>Silver Lines User Control Panel - Add User</h1>
		<a href="/">Back to home </a>
		<form role="form" method="POST" action="/create">

		  <div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
		  </div>
		  <div class="form-group">
			<label>Last Name</label>
			<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Address</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
		  </div>
		  <div class="form-group">
			<label>Suburb</label>
			<input type="text" class="form-control" id="suburb" name="suburb" placeholder="Enter Suburb">
		  </div>
		  <div class="form-group">
			<label>Postcode</label>
			<input type="text" class="form-control" id="postcode" name="postcode" placeholder="Enter Postcode">
		  </div>
		  <div class="form-group">
			<label>Contact</label>
			<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
		  </div>
		  <div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
		  </div>
		  <div class="form-group">
			<label>Notes</label>
			<input type="text" class="form-control" id="notes" name="notes" placeholder="Enter Notes">
		  </div>
		  <div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
		  </div>
		  <div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	
	
	
</body>

</html>
