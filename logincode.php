<?php 
session_start();
if( isset( $_SESSION['logged'] ) ) {
   header( 'Location: booknow.php' );
   }else {
	include("dbfile.php");
     $e=$_POST["email"];
$p=$_POST["pass"];
	$query = "INSERT INTO `user`( `email`, `password`, `number`) VALUES ('$e','$p','$n',)";
 
	$result=$link->query($query);
   }


echo '<script>alert("Account created");<script>';
header( 'Location: login.php' );
?>