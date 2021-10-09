    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="<?php echo $dir;?>files/img/instructor.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h3 class="d-inline-block position-relative text-info text-uppercase pb-2">About Us</h3>
                        <h1 class="display-6">First Choice For Online Education in Yoruuba Language</h1>
                    </div>
                    <p> 
                        Project Africa Movement through E & S.M. Ogunjobi Memorial Open Learning Center, is focused on eradicating 
                        illiteracy from the African continent. This we aim to achieve by providing free e-learning to all Africans between 
                        the ages of 6(six) to 70(seventy) years old who earnestly desire education but <span id="dots">.....</span> <span id="more" style="display: none;"> cannot afford it.</br>
                        Our vision also captures the overhauling of the educational curriculum of the African continent 
                        to provide a departure from that which we inherited from our erstwhile past colonial masters, by so doing, 
                        liberating the average African thus emancipating their minds from mental slavery and changing the inferiority complex in the mindset of most of the illiterate population.</span>	
                   </p>
				   <button onclick="myFunction()" id="myBtn" class="btn text-info font-italic font-weight-bold fs-2">Read more</button>

                        <script>
                        function myFunction() {
                        var dots = document.getElementById("dots");
                        var moreText = document.getElementById("more");
                        var btnText = document.getElementById("myBtn");
                        //btnText.style.outline = "none";     
                        if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "Read more"; 
                            moreText.style.display = "none";
                        } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "Read less"; 
                            moreText.style.display = "inline";
                        }
                        }
                        </script>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-transparent text-center p-4">
                                <h1 class="text-info" data-toggle="counter-up">12</h1>
                                <h6 class="text-uppercase text-info"><span class="d-block">Subjects</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-white text-center p-4">
                                <h1 class="text-success" data-toggle="counter-up">20</h1>
                                <h6 class="text-uppercase text-success"><span class="d-block">Courses</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-transparent text-center p-4">
                                <h1 class="text-danger" data-toggle="counter-up">15</h1>
                                <h6 class="text-uppercase text-danger"><span class="d-block">Instructors</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-transparent text-center p-4">
                                <h1 class="text-info" data-toggle="counter-up">50</h1>
                                <h6 class="text-uppercase text-info"><span class="d-block">Students</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h3 class="d-inline-block position-relative text-info text-uppercase pb-2">Why Choose Us?</h3>
                        <h1 class="display-4">Why You Should Start Learning With Us?</h1>
                    </div>
                    <p class="mb-4 pb-2">Educational curriculum delivered online in African languages.</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled Instructors</h4>
                            <p>Skilled Instructors
                                Our instrustors are licensed and certified by the local educational system.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Recognized Certificate</h4>
                            <p>Acquire a recognised & Standard certificate on course completion</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Online Classes</h4>
                            <p class="m-0">Self paced learning, right at the comfort of your couch .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="<?php echo $dir;?>files/img/bene.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>------>
