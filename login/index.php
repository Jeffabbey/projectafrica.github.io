<?php session_start(); error_reporting(E_ALL); ?>
<!doctype html>
<html>
	<head>
		<?php
			ob_start(); //clear all html code on top and prevents header already sent by output
			require_once("../conns/url.php"); 
			require_once("../conns/dbc.php"); 
			require_once("../incs/functions.php"); 
			$pname="login to your account";
			$pdesc="Continue by signing in ";
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
        <div class="container ">
            <div class="row justify-content-center">
				<form class="col-md-5" method="POST">
					<div class="row">
						<div class="col-md-12 form-group mt-4">
							<?php require_once "save.php";?>
						</div>
						<div class="col-md-12 form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control form-control-lg"  placeholder=" your email address">
						</div>
						<div class="col-md-12 form-group">
							<label for="pword">Password</label>
							<input type="password" name="pword" class="form-control form-control-lg" placeholder="password here">
						</div>

					</div>
					<div class="row">
						<div class="col-4">
							<input type="submit" value="Sign in" name="submit" class="btn btn-primary btn-lg px">
					<!--		<input type="submit" value="Sign in" name="submit" class="btn btn-primary btn-lg px" data-toggle="modal" data-target="#myModal">-------->
						</div>
						<label class="col-md-4 ">New here ?</label>
						<div class="col-md-4">
							<a  href="../register/" type="submit" class="btn btn-primary btn-lg ">Register</a>
						</div>
					</div>
			   </form>
            </div>
        </div>
    </div>
	
	<script>//prevent resubmission on page refreah
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}
	</script>

		<?php
		require_once "../incs/footer.php";
		require_once "../incs/scripts-bottom.php";
		?>
	</body>
</html>
	