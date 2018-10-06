<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Smart trip</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">

		<a class="navbar-brand" href="#">Smart trip</a>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
	


		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="booknow.php">Book Now</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="allbooking.php">All Booking</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="savings.php">Total Saving</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="card bg-dark text-light" style="margin-top: 50px">
		<h2 class="text-center" style="margin-top: 50px">Book Now</h2>
		<div class="row" style="margin-top: 20px">
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="source">Select Source:</label>
					<select class="form-control" id="source">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="destination">Select Destination:</label>
					<select class="form-control" id="destination">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">

			
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" class="form-control" id="date">
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="time">Time</label>
					<input type="time" class="form-control" id="time">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">

	
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<button class="btn-primary form-control">Book Now</button>
				</div>
			</div>
		</div>
			</div>
	</div>
</body>
</html>