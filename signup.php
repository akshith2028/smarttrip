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
	<body class="bg-secondary">
	<div class="container ">
		
		<h2 class="text-center text-light" style="margin-top: 110px">Smart Trip</h2>
		<div class="row">
			<div class="col-md-6 mx-auto card bg-dark text-light shadow-lg" style="margin-top: 50px;padding: 30px">
			<form class="needs-validation" novalidate action="registrationcode.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required >
	  <div class="invalid-feedback">Invalid email</div>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" id="password" required pattern="{4,8}">
	   <div class="invalid-feedback">Atleast 4 charecter long</div>
  </div>
				<div class="form-group">
    <label for="cpwd">Confirm Password:</label>
    <input type="password" class="form-control" id="cpwd" required pattern="{4,8}">
					 <div class="invalid-feedback">Atleast 4 charecter long</div>
  </div>
				<div class="form-group">
    <label for="number">Mobile Number</label>
    <input type="nnumber" class="form-control" id="number" name="number" required pattern="{10}">
					 <div class="invalid-feedback"></div>
  </div>
  <div class="form-group form-check">
   
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
			</div>
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
		  
        if (form.checkValidity() === false || $("#pwd").val()!=$("#cpwd").val()){
			
	if($("#pwd").val()!=$("#cpwd").val())
			  {
				  alert("Password Deosnt Match");
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
</body>
</html>