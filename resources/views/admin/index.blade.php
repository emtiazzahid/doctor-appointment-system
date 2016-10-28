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
			      <li class="active"><a href="{{ route('adminIndex') }}">Appoinments</a></li>
			      <li><a href="{{ route('doctor') }}">Doctor</a></li>
			      <li><a href="#">Specialities</a></li>
			      <li><a href="#">Branches</a></li>
			      <li><a href="{{ route('userLogout') }}">Logout</a></li>
			    </ul>
			  </div>
			</nav>
		<!-- navigation part -->

	<!-- form part -->
	<div class="col-md-4">
		<form>
		  <div class="form-group">
		    <label for="">Email address:</label>
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
		      <th>D_Name</th>
		      <th>Day</th>
		      <th>Start Time</th>
		      <th>End Time</th>
		      <th>P_Name</th>
		      <th>Age</th>
		      <th>Gander</th>
		      <th>Phone</th>
		      <th>Date</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		 
		  <tbody>
		   @foreach($appointments as $appointments)
		    <tr>
		      <th scope="row">{{ $appointments->id }}</th>
		      <td>{{ $appointments->DoctorName }}</td>
		      <td>{{ $appointments->DaysName }}</td>
		      <td>{{ $appointments->StartTime }}</td>
		      <td>{{ $appointments->EndTime }}</td>
		      <td>{{ $appointments->Name }}</td>
		      <td>{{ $appointments->Age }}</td>
		      <td>{{ $appointments->Gender }}</td>
		      <td>{{ $appointments->Phone }}</td>
		      <td>{{ $appointments->date }}</td>
		      <td><a href="{{ route('deleteAppointmentRow', $appointments->id) }}"><button class="btn btn-danger">Delete</button></a></button></td>
		    </tr>
		    @endforeach
		  </tbody>
		
		</table>
			</div>
			
		<!-- table part end -->

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>"> 
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>