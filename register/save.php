		     
<?php
	if(isset($_POST['register'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $image = strtolower($_FILES['avater']['name']);
        $image_tmp = $_FILES['avater']['tmp_name'];
        $pswd = $_POST['password'];
		$check = $_POST['agree'] ;
		
	if(!empty($name && $phone && $email && $pswd && $check)){
		//connction to db
        $con = mysqli_connect("localhost","root","","Project_africa");
		$sql = "SELECT count(*) as sum FROM users WHERE Phone = '".$phone."' AND Email = '".$email."' ";
		$run = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($run);
		$sum = $data["sum"];
		
	if($sum < 1){	
		//insertion
        $query = "insert into users (Name, Phone, Email,  Avater, Password, Agree ) 
		values ('$name','$phone', '$email','$image', '$pswd', '$check')";
        $result = mysqli_query($con, $query);

	if($result){
		echo "<div class='alert alert-success text-center'>Success ! Account created nicely <a href='".$dir."login/'>Continue here</a></div>";
		header("refresh:4 ; url='".$dir."login/' ");
		$target_file = "../files/avaters/$image";

		//image file extension			
		$ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if($image){
		//if(($image) && ($ext == '"jpg" || "jpeg" || "png" || "gif" || "svg"') ){
		//upload to folder
        $folder = move_uploaded_file($image_tmp, "../files/avaters/$image");
		$target_file = "../files/avaters/$image";
		//resizing
		$orig_image = imagecreatefromjpeg($target_file);
		$temp_img_info = getimagesize($target_file); 
		$width_orig  = $temp_img_info[0]; //orig width
		$height_orig = $temp_img_info[1]; //orig height
		$width = 40; // custom width
		$height = 40; //  custom height
		$des_img_logo = imagecreatetruecolor($width, $height);
		imagecopyresampled($des_img_logo, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
		
		imagejpeg($des_img_logo, $target_file, 100);
	
		}else{
			echo "<script> alert('<div class='alert alert-danger text-center'>Invalid or empty image !</div>')</script>";
		}
		
		}else{
			echo "<div class='alert alert-danger text-center'>You Did'nt Choose A Profile Image </div>";
		}
		}else{
			echo "<div class='alert alert-danger text-center'>User already exist with a similar phone number in our database</div>";
		}
		
		}else{
			echo "<div class='alert alert-warning text-center'>Kindly fill-out all required fields<font color='red'>( * ) </font>to continue </div>";
		}
	}
?>


	<script>//prevent resubmission on page refreah
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}
	</script>