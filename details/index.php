<?php session_start(); error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			require_once("../conns/url.php"); 
			require_once("../conns/dbc.php"); 
			require_once("../incs/functions.php"); 
			$pname="course info";
			$pdesc=" Simplified & powerful courses!";
			//$pimg= $favicon ;
			$pimg= $dir;
			$pauthor ="Russian developers";
			$purl= $dir ;
			$pkeywords="learn , improve, online";
			$p_subj=$pname;
			require_once("../incs/metas.php"); 
			require_once("../incs/scripts-top.php"); 
			
		?>
	</head>
	<body>
	<?php 
	require_once("../incs/navbar.php"); 
	require_once("../incs/jumbotron.php"); 
	?>

     
<?php
//teachers array
	$array = array(
	"Instructor"=>"Mr Biola Adamu",
	"Rating"=>"4.5(250)",
	"Lectures"=>"15",
	"Duration"=>"2 Weeks",
	"Skill level"=>"All levels",
	"Language"=>"English & Vernacular"
	);

    //recent courses
    $recents = array(
	"Web Development"=>"150",
	"Politics"=>"40",
	"English Language"=>"10",
	"Additional Maths"=>"2 2",
	"Civic Education"=>"10",
	"Physiology"=>"40",
    "Yoruba" => "20",
     "Economics" => "90",
      "Biology" => "20"
	);

    //courses & Instructors
    $courses = array(
	"Web Development"=>"Chris James",
	"Politics"=>"Mr Biodun Adenuga",
	"English Language"=>"Sam Eyo",
	"Additional Maths"=>"Sampson",
	"Civic Education"=>"Peter Akoye",
	"Physiology"=>"4Elon Musk",
    "Yoruba" => "Mr Yemi ",
    "Economics" => "Epe ",
    "Biology" => "Me  And You"
	);
	
?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h2 class="d-inline-block position-relative text-info text-uppercase pb-2">Course Informations</h2>
                            <h1 class="display-4">Web development</h1>
                        </div>
                        <img class="img-fluid rounded image-responsive w-100 mb-4" src="<?php echo $dir;?>files/img/likethumbs.gif" alt="Image">
                        <p>Programming is the future , We've got your back on this..!</p>
                        
                        <p>Learn how to build responsive and tuning websites in the most convenenient and most preffered way today<br> <?php echo $cname ;?> !</p>
                    </div>

                    <h2 class="mb-3">Related Courses</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <?php foreach($courses as $key => $val){?>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                            <img class="img-fluid" src="<?php echo $dir;?>files/img/courses-2.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3"><?php echo $key; ?></h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i><?php echo $val; ?></span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }?>
                    </div>
               </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-dark round mb-5 py-3">

                        <h3 class="text-white py-3 px-4 m-0">Course Features</h3>
                        <?php #getting course informations from the array ?>
                        <?php foreach($array as $key => $val){?>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3"><?php echo $key?></h6>
                            <h6 class="text-white my-3"><?php echo $val;?></h6>
                        </div>
                        <?php }?>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-success round py-3 px-5" href="">Enroll Now</a>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3">Categories</h2>
                        <ul class="list-group list-group-flush">
                            <?php foreach($recents as $key => $val){?>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0"><?php echo $key;?></a>
                                <span class="badge badge-primary badge-pill"><?php echo $val; ?></span>
                            </li>
                            <?php }?>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        <?php foreach($courses as $key => $val){?>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="<?php echo $dir;?>files/img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6><?php echo $key?></h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i><?php echo $val; ?></small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php 
	require_once("../incs/footer.php");
	require_once("../incs/scripts-bottom.php");
	?>
	</body>
</html>