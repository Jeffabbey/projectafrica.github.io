<?php session_start(); error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		require_once("conns/url.php"); 
		require_once("conns/dbc.php"); 
		require_once("incs/functions.php"); 
		$pname="Elearn";
		$pdesc=" #1  Online * simplified education  .";
		//$pimg= $favicon ;
		$pimg= $dir;
		$pauthor ="elearn";
		$purl= $dir ;
		$pkeywords="learn , improve, online";
		$p_subj=$pname;
		require_once("incs/metas.php"); 
		require_once("incs/scripts-top.php"); 
		
	?>
</head>
<body>
	<?php 
	require_once("incs/navbar.php"); 
	require_once("incs/jumbotron1.php"); 
	
	#about
	require_once("incs/aboutus.php");
	
	#feature
	require_once("incs/features.php"); 
	?>
   
    <div class="container-fluid px-0 py-2">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h2 class="d-inline-block position-relative text-info text-uppercase pb-2">Courses</h2>
                    <h1 class="display-6">explore courses </h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid bg-red" src="<?php echo $dir;?>files/img/courses-2.jpg" placeholder="400 X 400" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Yoruba</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Segun Faith</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="<?php echo $dir;?>details/">Course info</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="<?php echo $dir;?>files/img/courses-2.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">english language</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Biodun Ali</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="<?php echo $dir;?>details/">Course info</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="<?php echo $dir;?>files/img/courses-3.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">yoruba</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Barr Oluwadamilare Tosin</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="<?php echo $dir;?>details/">Course info</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="<?php echo $dir;?>files/img/courses-4.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">course info</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Barr Oluwadamilare Tosin</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="<?php echo $dir;?>details/">Course info</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="<?php echo $dir;?>files/img/courses-5.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">computer science</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Barr Oluwadamilare Tosin</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="<?php echo $dir;?>details/">Course info</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="course-image">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Mathematics</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Barr Oluwadamilare Tosin</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(240)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="<?php echo $dir;?>courses/">Course info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<?php #Instructors?>
	<?php require_once("incs/team.php");?>
	
	<?php #Testimonials?>
	<?php require_once("incs/testimonials.php");?>

	<?php #contact?>
	<?php require_once("incs/contact.php"); ?>
	
	<?php 
	require_once("incs/footer2.php");
	require_once("incs/scripts-bottom.php");
	?>
	
	<script>//prevent resubmission on page refreah
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}
	</script>
</body>
</html>