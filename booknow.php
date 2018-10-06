<?php
	session_start();
	$email = $_SESSION['email'];
	
	if(!(isset($_SESSION['email']))){
		header("location:login.php");
		
	}
include("dbfile.php");
?>
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
					<a class="nav-link" href="feedback.php">Feedback</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="card bg-dark text-light" style="margin-top: 50px">
		<h2 class="text-center" style="margin-top: 50px">Book Now</h2>
		<form class="needs-validation" novalidate method="post" action="booknowcode.php">
			<div class="row" style="margin-top: 20px">
			<div class="col-md-4 mx-auto">
				
				<div class="form-group">
					<label for="source">Select Source:</label>
					<select class="form-control" id="source" name="source" required >
						<option>Please Select Source</option>
						<?php
						$query = "SELECT `pid`, `name`, `pos` FROM `places` WHERE 1";
 
$result=$link->query($query);
						if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<option>'.$row["name"].'</option>';
    }
}
						
						
							?>
						</select>
					<div class="invalid-feedback" id="sin">
        Select an option
      </div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="destination">Select Destination:</label>
					<select class="form-control" id="destination" required  name="destination" >
						<option>Please Select Destination</option>
						<?php
						$query = "SELECT `pid`, `name`, `pos` FROM `places` WHERE 1";
 
$result=$link->query($query);
						if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<option>'.$row["name"].'</option>';
    }
}
						
						
							?>
					</select>
					<div class="invalid-feedback" id="din">
        Select an option
      </div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">

			
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" class="form-control" id="date"  name="date"  required pattern="{0,15}" id="date">
					<div class="invalid-feedback">
        Please Select Date
      </div>
				</div>
				
			</div>
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<label for="time">Time</label>
					<input type="time" class="form-control" id="time" name="time" required pattern="[a-z]{1,15}" id="time">
					<div class="invalid-feedback">
        Please Select Time
      </div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">

	
			<div class="col-md-4 mx-auto">
				<div class="form-group">
					<button class="btn-primary form-control" type="submit">Book Now</button>
				</div>
			</div>
		</div>
			</div>
	</div>
		</form>
	</div>
	</div>
	<script>

   $( document ).ready(function() {

(function() {
  'use strict';
  window.addEventListener('load', function() {

    var forms = document.getElementsByClassName('needs-validation');
    
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
		  
        if (form.checkValidity() === false || $('#source').find(":selected").val()=="Please Select Source"|| $('#destination').find(":selected").val()=="Please Select Destination") {
			 $('#sin').hide();
			$('#din').hide();
          if($('#source').find(":selected").val()=="Please Select Source")
			  {
				  $('#sin').show();
			  }
			if($('#destination').find(":selected").val()=="Please Select Destination")
			  {
				    $('#din').show();
			  }
			
			event.preventDefault();
          event.stopPropagation();
        }
		  
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
	});
</script>
</body>
</html>