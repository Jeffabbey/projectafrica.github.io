<?php session_start(); error_reporting(E_ALL); ?>
<!doctype html>
<html>
	<head>
		<?php
			ob_start();
			require_once("../conns/url.php"); 
			require_once("../conns/dbc.php"); 
			require_once("../incs/functions.php"); 
			$pname="Enrol for a course now";
			$pdesc="Sign up, get trained ";
			//$pimg= $favicon ;
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
		<div class="site-section">
			<div class="container">
				<div class="row justify-content-center">
					<form class="col-md-5" method="POST" enctype="multipart/form-data" >
						<div class="row">
						<div class="col-md-12 form-group mt-4">
							<?php require_once "save.php";?>
						</div>
							<div class="col-md-12 form-group">
								<label for="name">Name</label>
								<input  type="text" name="name" placeholder=" first name & last name *" class="form-control form-control-lg" >
							</div>	
														
							<div class="col-md-12 form-group">
								<label for="phone">Phone number</label>
								<input  type="phone" name="phone" placeholder="active phone number * " class="form-control form-control-lg">
							</div>
							
							<div class="col-md-12 form-group">
								<label for="email">Email address</label>
								<input  type="email" name="email" placeholder="valid email address *" class="form-control form-control-lg">
							</div>

							<div class="col-md-6 form-group">
								<label for="avater">picture (optional)</label>
								<input  type="file" name="avater" class="form-control form-control-lg">
							</div>

							<div class="col-md-6 form-group">
								<label for="password">Password</label>
								<input  type="password" name="password" placeholder="create password *" class="form-control form-control-lg">
							</div>

							<div class=" col-md-12 form-group">
								<input type="checkbox" name="agree" checked  id="defaultCheck" value="agreed">
								<label class="" for="defaultCheck">Agreement to our terms </label>
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<button  type="submit" name="register" class="btn btn-primary btn-lg ">enter</button>
							</div>
							<label class="col-md-4">Already registered ?</label>
							<div class="col-md-4"> 
								<a href='../login/' type="submit" class="btn btn-primary btn-lg ">Login in</a>
							</div>
						</div>
				   </form>
				</div>
			</div>
		</div>

		<?php
			require_once "../incs/footer.php";
			require_once "../incs/scripts-bottom.php";
		?>
	</body>
</html>