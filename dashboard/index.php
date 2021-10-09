<?php session_start(); error_reporting(E_ALL);?>
<!doctype html>
<html>
	<head>
		<?php
		require_once("../conns/url.php");
		require_once("../conns/dbc.php");
		require_once("../incs/functions.php");
		$pname = "Dashboard";
		$pdesc = "$pname";
		$pimg = "".$dir."files/img/logo/logo-meta.png";
		$pauthor = "$cname";
		$pkeywords = "$pname, $pauthor, $pdesc, E-commerce, online, online banking";
		$purl = "".$dir."dashboard/";
		require_once("../incs/metas.php");
		require_once("../incs/scripts-top.php");
		?>
	</head>
	<body>
		<?php require_once ("../incs/navbar.php");?>
		
		
		<div class="container">
			<div class="row vh_10">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<h4 align="center" class="welcome"><?php echo $pname; ?></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<?php if(isset($_SESSION['user'])){ ?>
					<h4 align="center"> <i class="fa fa-check-circle text-success"></i> </h4>
					<h4 align="center"> <?php echo strtoupper($uname); ?> </h4>
					<p align="center"> <b> <?php echo $uphone; ?> </b></p>
					
					<?php }else{ ?>
			<div class="jumbotron " style="background:#f1f1f1">
			<h1 align="center"> <i class="fa fa-times text-danger"></i> </h1>
			<h1 class="display-4 text-danger">Acess restricted !</h1><br>
			<p class="lead">kindly <a href='<?php echo $dir;?>login/'> >>login here </a> to Continue to your <b> <?php echo $pname; ?> </b></p>
			<hr class="my-4">
			<p>if you're new here @ <?php echo $cname; ?>, you can still <a href="<?php echo $dir;?>register/" role="button"> >>enroll or create a free account here </a></p>
			<p class="lead">
			<a class="btn btn-primary btn-lg mr-4" href="<?php echo $dir;?>login/" role="button">sign in  </a>
			<span><a class="btn btn-primary btn-lg" href="<?php echo $dir;?>register/" role="button">sign up</a></span>
			</p>
			</div>
			<?php }?>

				</div>
			</div>
		</div>
		
		
		
		<?php
		require_once("../incs/footer.php"); 
		require_once("../incs/scripts-bottom.php"); 
		?>
	</body>
</html>