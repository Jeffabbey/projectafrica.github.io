<style>
	  /* Make the image fully responsive 
  .carousel-inner img {
    width: 100%;
    height: 200px;
  }
  
  .carousel-item:after {
  content:"";
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background:rgba(0,0,0,0.8);
}
*
</style>

<div id="demo" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo $dir;?>files/img/page-header.jpg" class="img-fluid img-responsive" alt="header image" style="height:200px" width="100" height="100">
					<div class="carousel-caption">
					<h1 class="text-white mt-2"><?php echo $pname;?></h1>
					<b class="text-white display-4"><?php echo $pdesc;?></b>
					</div>   
				</div>

			</div>
		</div>

