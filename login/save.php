<?php 
if(isset($_POST["submit"])){
 $email=$_POST["email"];
 $pword=$_POST["pword"];
 if(!empty($email || $pword)){
	 $sql = "SELECT count(*) as sum FROM Users WHERE Email = '".$email."' AND Password = '".$pword."' ";
	 $run = runSQL($sql);
	 $data = mysqli_fetch_array($run);
	 $sum = $data["sum"];
 if($sum > 0 ){
	 $sql = " SELECT * FROM Users WHERE Email = '".$email."' AND Password = '".$pword."' ";
	  $run = runSQL($sql);
	  $data = mysqli_fetch_array($run);
	  $uid = $data["Id"];	
	  $name = $data["Name"];
	  $_SESSION["user"] = $uid;		
	  echo "<div class='alert alert-success'> 
				<img src='".$dir."files/img/like2.png' class='img-fluid image-responsive'/> 
				Dear $name your login is successful.
			</div>";
		ob_start();
		header("refresh:5, url='../dashboard/'");
 }else{
	 echo "<div class='alert alert-info text-danger'>
				<img src='".$dir."files/img/warn2jfif.jfif' class='img-fluid image-responsive'/> 
				Invalid login details <a href='".$dir."register/'> Signup here</a>
			</div>";
 }	
 }else{
	  echo "<div class='alert alert-danger'> <img src='".$dir."files/img/warn2jfif.jfif' class='img-fluid image-responsive'/>  Your email & password  required to continue.</div>";
 }

 }
?>