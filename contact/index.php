<?php session_start(); error_reporting(E_ALL);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			require_once("../conns/url.php"); 
			require_once("../conns/dbc.php"); 
			require_once("../incs/functions.php"); 
			$pname="Get intouch ";
			$pdesc=" know more <> learn more !";
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
	
	//contact
	 require_once("../incs/contact2.php"); 
	 
	require_once("../incs/footer.php");
	require_once("../incs/scripts-bottom.php");
	?>

	</body>
</html>