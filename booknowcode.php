<?php
session_start();
	$email = $_SESSION['email'];
include("dbfile.php");
$s=$_POST["source"];
$d=$_POST["destination"];

$date=$_POST["date"];
$time=$_POST["time"];
$query = "SELECT `pid`, `name`, `pos` FROM `places` WHERE `name`='$s'";
 $result=$link->query($query);
	if($result->num_rows > 0) // will return true if succefull else it will return false
	{
		 while($row = $result->fetch_assoc()) {
			$spos=$row["pos"];
			
		 }
	}
$query = "SELECT `pid`, `name`, `pos` FROM `places` WHERE `name`='$d'";
 $result=$link->query($query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$dpos=$row["pos"];
	
if($dpos-$spos==1)
{
	$fare=30;
}
if($dpos-$spos==2)
{
	$fare=30*2;
}
if($dpos-$spos==3)
{
	$fare=30*3;
}
if($dpos-$spos==4)
{
	$fare=30*4;
}
if($dpos-$spos==5)
{
	$fare=30*5;
}
	}}
$query = "INSERT INTO `booking`(`email`, `source`, `destination`, `date`, `time`,`actualfare`,`shareprice`) VALUES ('$email','$s','$d','$date','$time','$fare','$fare')";

	$result=$link->query($query);
	if($result) // will return true if succefull else it will return false
	{
		 $query ="SELECT count(*) as c FROM `booking` WHERE 1 ";
$result=$link->query($query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$c=$row["c"];
	}
}
		$query = "UPDATE `booking` SET `shareprice`=`actualfare`/$c WHERE 1";
		$result=$link->query($query);
	echo '<script>alert("Booking Done");<script>';
header( 'Location: allbooking.php' );
	}
	else
	{
		echo '<script>alert("Booking not Done");<script>';
header( 'Location: allbooking.php' );
		
	}

echo json_encode($data);
?>