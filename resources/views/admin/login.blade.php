<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		
	<!-- form part -->
	<div class="col-md 6">
		<form action="{{ route('userSignIn') }}" method="post">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="hidden" name="_token" value="{{ Session::token() }}">
		    <input type="email" name="email" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" name="password" class="form-control" id="pwd">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<!-- form part -->

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>"> 
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>