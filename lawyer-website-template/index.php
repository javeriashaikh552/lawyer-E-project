<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>JUSTICE - Free Lawyer Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Lawyer</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>info@example.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+012 345 6789</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="team.php" class="nav-item nav-link">Attorneys</a>
                            <a href="" class="nav-item nav-link">Services</a>
                            <a href="service.php" class="nav-item nav-link">Appointment</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="lawyerform.php" class="nav-item nav-link">Register</a>
                            <a href="loginpage.php" class="nav-item nav-link">Login</a>
                        </div>
                          <label for="exampleDataList" class="form-label"></label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." style="width:280px;">
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Best Law Agency</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Our fighting Is for your justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Get An Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">We prepared to oppose for you</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">25 Years Experience</h2>
                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">We Provide Reliable And Effective Legal Services</h1>
                    <p>Thank you to the whole team at Higher Level Legal Law Firm. They helped me handle my case and get the refiling resolved efficiently. They went above and beyond in every situation making everything easy and streamlined."</p>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Our Practice</h6>
                    <h1 class="mb-4">Our Practice Areas</h1>
                    <p>As a lawyer, you need to be an expert in your field in order to successfully navigate the complicated waters of the legal ocean. If you’re an aspiring lawyer just starting on your journey, there are a lot of options.                    </p>
                    <a href="" class="btn btn-primary mt-2">More Services</a>
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0"> Civil and corporate law firm offering quality services with special focus on helping clients to achieve their personal & commercial objectives.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">When it's time to go your separate ways, even if you agree on everything, you should have an attorney represent your interests to ensure that your rights are not being violated.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">Commercial law or business law is the body of law which governs business and commerce and is often considered to be a branch of civil law and deals both with issues of private law and public law.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">criminal defence attorneys are forced to innovate to stay competitive. This has resulted in some truly unique websites, some of which we share in this article.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <!-- <div class="container-fluid py-5"> -->
        <!-- <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>

    </div> -->

      <!-- Action Start -->
      <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Call us now for a Free Consultation</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="clientform.php">Client form</a>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="lawyerform.php">lawyer form</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->
    <!-- Appointment End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Best Law Practices</h5>
                                <p class="m-0">The staff and customer service are excellent and all the attorneys are top-notch. They truly care about getting the best results for their clients."</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">Higher Level Legal Law Firm. They helped me handle my case and get the refiling resolved efficiently. They went above and beyond in every situation making everything easy and streamlined."</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">In the midst of life-altering decisions and legal matters, choosing the right attorney for you is a must.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Call us now for a Free Consultation</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Attorneys</h6>
                <h1 class="mb-4">Meet Our Attorneys</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-5.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


   <!-- Testimonial Start -->
   <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>

                 <!-- testimonial Start -->
                 <h1 class="mb-5">Write A Review</h1>

            <div class="container py-2">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-9">
                    <div class="rounded p-5 my-7" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">CLIENT FORM</h1>
                        <form  action="clientform.php" method="post">
                            <div class="form-group">
                                <input type="text"  name ="txtname" class="form-control border-0 p-4" placeholder="Your client Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" name ="txtcity" class="form-control border-0 p-4" placeholder="Your City" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" name ="txtaddress" class="form-control border-0 p-4" placeholder="Your Address" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name ="txtemail" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                           
                            <div class="form-group">
                                <input type="number" name ="txtphone" class="form-control border-0 p-4" placeholder="Your phone no"  />
                            </div>
                      
                            <div class="form-group">
                                <input type="text" name ="txtfax" class="form-control border-0 p-4" placeholder="Your fax no" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="password" name ="txtpassword" class="form-control border-0 p-4" placeholder="Your password" required="required" />
                            </div>

                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Good man, Better Attorney, really helped me figure out what to do with my legal situation.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Crisper Lyfe</h5>
                            <p class="m-0">Business Lawyer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Steven Sedlock was very professional, quick and fair and provided their services at a affordable price. I would highly recommend them.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Steven Sedlock</h5>
                            <p class="m-0">Criminal Lawyer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        I cannot tell you how informative, real and quick his staff responded. The culture there is very unique and quite amazing
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Denise H.</h5>
                            <p class="m-0">Civil law</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        My husband and I recently used there services and to say we we are happy with there services is an understatement.
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Leon Walker</h5>
                            <p class="m-0">Family laywer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">123 Street, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">Justice</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Attorney</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://phpcodex.com">php Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</php>