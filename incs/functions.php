<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$sql="select * from Company where id='1'";
$result=runSQL($sql);
$data=mysqli_fetch_array($result);
$cname=$data['comp_name'];
$cmotto=$data['comp_motto'];
$cdesc=$data['comp_desc'];
$cemail=$data['comp_email'];
$cphone=$data['comp_phone'];
$cadrs=$data['comp_address'];

//echo $cname;
//note c stands for company
//note u stands for users

//get users owner info
if(isset($_SESSION['user'])){ 
$user_id = $_SESSION['user'];
$sql="select * from users WHERE Id='".$user_id."'";
$result=runSQL($sql);
$data=mysqli_fetch_array($result);
$id=$data['Id'];
$uname =$data['Name'];
$uphone =$data['Phone'];
$uemail =$data['Email'];
$uavater =$data['Avater'];
$upswd =$data['Password'];
$uagree =$data['Password'];

//echo $uemail ;
}

/*
//resizing image using php gd
$original = imagecreatefromjpeg("ORIGINAL.jpg");
$resized = imagecreatetruecolor(NEW WIDTH, NEW HEIGHT);
imagecopyresampled($resized, $original, 0, 0, 0, 0, NEW WIDTH, NEW HEIGHT, WIDTH, HEIGHT);
imagejpeg($resized, "RESIZED.jpg");
*/
?>