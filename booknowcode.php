<?php
session_start();
	$email = $_SESSION['email'];
include("dbfile.php");
$s=$_POST["s"];
$d=$_POST["d"];

$date=$_POST["date"];
$time=$_POST["time"];


$query = "INSERT INTO `booking`(`email`, `source`, `destination`, `date`, `time`) VALUES ('$email',$s','$d','$date','$time')";
 
	$result=$link->query($query);
	if($result) // will return true if succefull else it will return false
	{
		$data["done"]="true";
	}
	else
	{
		$data["done"]="false";
		
	}
echo json_encode($data);
?>