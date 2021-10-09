
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 452px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>physical address </h4>
                                <p class="m-0"><?php echo $cadrs;?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Get in touch</h4>
                                <p class="m-0"><?php echo $cphone;?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0"><?php echo $cemail;?></p>
                            </div>
                        </div>
                    </div>
                </div>

        <div class=" col-lg-6">
        <form method="post">
            <div class="row">
                <div class="col-md-12 form-group">
                   <?php require_once("contact/save.php");?>
                </div> 
				<div class="col-md-6 form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="text" name="eaddress" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subj" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea  name="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" name="send" value="Send Message" class="btn btn-primary btn-lg px-5">
                </div>
            </div>

		</form>
        </div>
            </div>
        </div>
    </div>
