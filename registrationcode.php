<?php 
include("dbfile.php");
$e=$_POST["email"];
$p=$_POST["password"];
$n=$_POST["number"];
$query = "INSERT INTO `user`( `email`, `password`, `number`) VALUES ('$e','$p','$n')";
 
	$result=$link->query($query);
echo '<script>alert("Account created");<script>';
header( 'Location: login.php' );
?>