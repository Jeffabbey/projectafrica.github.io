		     
<?php
	if(isset($_POST['register'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $image = strtolower($_FILES['avater']['name']);
        $image_tmp = $_FILES['avater']['tmp_name'];
        $pswd = $_POST['password'];
		$check = $_POST['agree'] ;
		
	if(!empty($name || $phone || $email || $pswd)){
		//connction to db
        $con = mysqli_connect("localhost","root","","Project_africa");
		$sql = "SELECT count(*) as sum FROM users WHERE Phone = '".$phone."' ";
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
			//header("refresh:4 ; url='".$dir."login/' ");
		if($image){
		//upload to folder
        $folder = move_uploaded_file($image_tmp, "../files/avaters/$image");
		$target_file = "../files/avaters/$image";
		//filetypes    imagecreatefromjpeg(), imagecreatefromgif(), imagecreatefrompng(),
		
		//$ext = strtolower($ext);
		$ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if ($ext == "gif"){ 
		  $img = imagecreatefromgif($target_file);
		} else if($ext =="png"){ 
		  $img = imagecreatefrompng($target_file);
		} else { 
		  $img = imagecreatefromjpeg($target_file);
        //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        }
		//
		//resizing
		//$orig_image = imagecreatefromjpeg($target_file);
		//$orig_image = imagecreatefromjpeg($target_file);
		$temp_img_info = getimagesize($target_file); 
		$width_orig  = $temp_img_info[0]; //orig width
		$height_orig = $temp_img_info[1]; //orig height
		$width = 36; // custom width
		$height = 36; // custom height
		$des_img_logo = imagecreatetruecolor($width, $height);
		imagecopyresampled($des_img_logo, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
		
		imagejpeg($des_img_logo, $target_file, 100);
	
		}else{
			echo "<div class='alert alert-danger text-center'>oOOps, an eror occured,could'nt upload an empty image ..</div>";
		}
		
		}else{
			echo "<div class='alert alert-danger text-center'>You Did'nt Choose A Profile Image </div>";
		}
    }else{
		echo "<div class='alert alert-danger text-center'>User already exist with a similar phone number in our database</div>";
	}
	
	}else{
		echo "<div class='alert alert-info text-center'>Pls fill the required fields</div>";
	}
	}
?>


	<script>//prevent resubmission on page refreah
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}
	</script>