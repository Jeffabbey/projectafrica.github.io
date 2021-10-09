    <!-- Topbar Start    #f8f9fa!important color for 1st header background-->
    <div class="container-fluid bg-info">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
					<a href="tel:<?php echo $cemail ;?>" class="text-white">
						<b><i class="fa fa-phone-alt mr-2 bg-blue"></i>call us now</b>
					</a>
                    <small class="px-3">|</small>
                  <a href="mailto:<?php echo $cemail ;?>" class="text-white" >
						<b><i class="fa fa-envelope mr-2 bg-blue"></i>send us a mail</b>
					</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php #navbar?>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="<?php echo $dir;?>" class="navbar-brand ml-lg-3">
                <div class="mt-n1">
                <h4 class="m-0 text-uppercase text-primary">
				<img src="<?php echo $dir;?>files/logo/logo.jpg" class=" img-responsive mr-4"/>
                </div>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?php echo $dir;?>" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo $dir;?>about/" class="nav-item nav-link">About us</a>
                    <a href="<?php echo $dir;?>courses/" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo $dir;?>details/" class="dropdown-item">Informations</a>
                            <a href="<?php echo $dir;?>features/" class="dropdown-item">Our Features</a>
                            <a href="<?php echo $dir;?>team/" class="dropdown-item">Our teachers</a>
                            <a href="<?php echo $dir;?>testimony/" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="<?php echo $dir;?>contact/" class="nav-item nav-link">Contact</a>
                </div>
				
				<?php //loggedin users ?>
				<?php // if(isset($_SESSION["user"]) && ($uavater == "" || $uavater!== "")){?>
				<?php if(isset($_SESSION["user"]) && ($uavater)){?>
				<a href="../accounts/">
				<div class="mt-n1">
					<img src="<?php echo $dir;?>files/avaters/<?php echo $uavater ;?>" alt="<?php echo $uname ;?>😷 "
					class="py-2 m-2 px-4 d-lg-block img-responsive rounded-circle mr-4"/>
               </div>
				</a>
				<a href="<?php echo $dir;?>logout/" class="btn btn-primary py-2 px-4  d-lg-block">Logout</a>
				<?php }elseif(isset($_SESSION["user"]) && (!$uavater)){ ?>
				<a href="../accounts/">
				<div class="mt-n1">
					<img src="<?php echo $dir;?>files/img/user.jpg" alt="😷 "
					class="py-2 m-2 px-4 d-lg-block img-responsive rounded-circle mr-4"/>
               </div>
				</a>
				<a href="<?php echo $dir;?>logout/" class="btn btn-primary py-2 px-4  d-lg-block">Logout</a>
				<?php }else{ ?>
				
				<a href="<?php echo $dir;?>login/" class="btn btn-primary py-2 px-4 mr-4  d-lg-block">Login now</a>
                <a href="<?php echo $dir;?>register/" class="btn btn-primary py-2 m-2 px-4 d-lg-block">Register</a>
				<?php }?>
            </div>
        </nav>
    </div>


