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
		<!-- navigation part -->
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Admin</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li><a href="{{ route('adminIndex') }}">Appoinments</a></li>
			      <li><a href="{{ route('doctor') }}">Doctor</a></li>
			      <li><a href="{{ route('specialities') }}">Specialities</a></li>
			      <li class="active"><a href="{{ route('branches') }}">Branches</a></li>
			      <li><a href="{{ route('userLogout') }}">Logout</a></li>
			    </ul>
			  </div>
			</nav>
		<!-- navigation part -->

	<!-- form part -->
	<div class="col-md-4">
		<form>
		  <div class="form-group">
		    <label for="">Add Branch</label>
		    <input type="text" class="form-control" id="">
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<!-- form part -->

			<!--Appointment table part -->
	<div class="col-md-8">
				
		<table class="table table-sm table-inverse">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Name</th>
		    </tr>
		  </thead>
		 
		  <tbody>
		  @foreach($branches as $branches)
		    <tr>
		      <th scope="row">{{ $branches->id }}</th>
		      <td>{{ $branches->name }}</td>
		    </tr>
		    @endforeach
		  
		   </tbody>
		
		</table>
			</div>
			
		<!-- table part end -->

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>