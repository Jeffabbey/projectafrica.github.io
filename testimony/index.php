<?php session_start(); error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			require_once("../conns/url.php"); 
			require_once("../conns/dbc.php"); 
			require_once("../incs/functions.php"); 
			$pname="Evidences & testimonies";
			$pdesc="Our satisfied students   !";
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
	/*nav and jumbotron--*/
	require_once("../incs/navbar.php"); 
	require_once("../incs/jumbotron.php"); 
	
	/*Testimonials--*/
	require_once("../incs/testimonials.php"); 

	require_once("../incs/footer.php");
	require_once("../incs/scripts-bottom.php");
	?>
	</body>
</html>