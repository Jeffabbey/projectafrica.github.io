<?php 
	function runSQL($sql){
		$server = "localhost";
		$user = "root";
		$pswd = "";
		$db = "Project_africa";
	$con = mysqli_connect($server, $user, $pswd , $db);
	$run = mysqli_query($con, $sql);
	return $run;
	mysqli_close($con);
	
	echo $con ? "Connected" : "Not connected";
	}
	
?>