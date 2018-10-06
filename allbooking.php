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
					<a class="nav-link" href="booknow.php">Book Now</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="allbooking.php">All Booking</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="savings.php">Total Saving</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
		<li class="nav-item">
					<a class="nav-link" href="feedback.php">Feedback</a>
				</li>
    </ul>
  </div> 
</nav>
	<div class="container">
		
		<h2 class="text-center" style="margin-top: 50px">All Booking</h2>
		<div class="row" style="margin-top: 50px">
			<div class="col-md-12 mx-auto">
			<table class="table table-responsive mx-auto">
    <thead class="thead-dark ">
      <tr>
        <th>Sl No</th>
		  <th>Email</th>
        <th>Source</th>
        <th>Destination</th>
		 <th>Date</th>
		 <th>Time</th>
		   <th>Actual Fare</th>
		   <th>Shared Fare</th>
      </tr>
    </thead>
    <tbody>
		
		<?php 
		$query = "SELECT  `email`, `source`, `destination`, `date`, `time`,`actualfare`,`shareprice` FROM `booking` WHERE `email`='$email'";
 $count=0;
$result=$link->query($query);
						if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<tr>';
		$count=$count+1;
        echo '<td>'.$count.'</td>';
		 echo '<td>'.$row["email"].'</td>';
		 echo '<td>'.$row["source"].'</td>';
		 echo '<td>'.$row["destination"].'</td>';
		 echo '<td>'.$row["date"].'</td>';
		 echo '<td>'.$row["time"].'</td>';
		 echo '<td>'.$row["actualfare"].'</td>';
		echo '<td>'.$row["shareprice"].'</td>';
		 echo '<tr>';
      
	}
						}
      ?>
			
    </tbody>
  </table>
		</div>
			</div>
	</div>
</body>
</html>