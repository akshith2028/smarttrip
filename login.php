<?php 
				include("dbfile.php");
			if(isset($_POST['submit']))
			{
				$uname=trim($_POST['email']);
				$pass=trim($_POST['pass']);
				$query="SELECT * FROM `user` WHERE email='$uname' and password='$pass'";
				$result=$link->query($query);
				$row = $result->fetch_assoc();
			
				if($row)
				{
					session_start();
					$_SESSION['email'] = $row['email'];
					$_SESSION['number'] = $row['number'];
					
					echo "<script>alert('Login successful'); window.location='booknow.php';</script>";
				}else
				{
							
					echo "<script>alert('Check your username and password');window.location='login.php';</script>";
				}
			}
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

<body class="bg-secondary">
	<div class="container ">
		
		<h2 class="text-center text-light" style="margin-top: 110px">Smart Trip</h2>
		<div class="row">
			<div class="col-md-6 mx-auto card bg-dark text-light shadow-lg" style="margin-top: 50px;padding: 30px">
			<form  class="needs-validation" novalidate  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"  name="pass" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
		</div>
	</div>
	<script>
				// Example starter JavaScript for disabling form submissions if there are invalid fields
				(function() 
				{
				  'use strict';
				  window.addEventListener('load', function() 
				  {
					// Fetch all the forms we want to apply custom Bootstrap validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function(form) 
					{
					  form.addEventListener('submit', function(event) 
					  {
						if (form.checkValidity() === false)
						{
						  event.preventDefault();
						  event.stopPropagation();
						 
								  
						}
						form.classList.add('was-validated');
					  }, false);
					});
				  }, false);
				})();
			
			</script>
</body>
</html>