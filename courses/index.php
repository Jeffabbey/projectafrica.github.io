<?php session_start(); error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			require_once("../conns/url.php"); 
			require_once("../conns/dbc.php"); 
			require_once("../incs/functions.php"); 
			$pname="Courses";
			$pdesc="Amazing courses just for you !";
			$pimg= $dir;
			$pauthor ="elearn";
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
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h2 class="d-inline-block position-relative text-success text-uppercase pb-2">Online courses</h2>
                        <h3 class="display-5 text-info">Best Courses are Selected Here For You</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/Yoruba-people.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Politics</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-2.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">English language </h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-3.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Biology</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-4.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Additional maths</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-5.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Civic Education</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">English Language</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Politics</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Physiology</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Economics</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Yoruba Language</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?php echo $dir;?>details/">
                        <img class="<?php echo $dir;?>files-fluid" src="<?php echo $dir;?>files/img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web Design & Development</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mr Abiola Kayode</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<!-----------
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg justify-content-center mb-0">
                          <li class="page-item disabled">
                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link rounded-0" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
				---------------------->
            </div>
        </div>
    </div>

	<?php 
	require_once("../incs/footer.php");
	require_once("../incs/scripts-bottom.php");
	?>
	</body>
</html>