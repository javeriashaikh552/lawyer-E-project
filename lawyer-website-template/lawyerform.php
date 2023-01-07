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
                    <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
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
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link active">Practice</a>
                            <a href="team.php" class="nav-item nav-link">Attorneys</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="clientform.php" class="dropdown-item">Client form</a>
                                    <a href="lawyerform.php" class="dropdown-item">Lawyer form</a>
                                    <!-- <a href="#" class="dropdown-item">Menu Item 3</a> -->
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <!-- <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a> -->
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

 <!-- Appointment Start -->
 <div class="container-fluid py-3">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-9">
                    <div class="rounded p-5 my-7" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">LAWYER REGISTRATION</h1>
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

                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
error_reporting(0);
$lawyer = $_POST['lawyer'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $fax = $_POST['fax'];
  $password = $_POST['password'];


$conn = mysqli_connect("localhost","root","","law");
if(!$conn){
    echo "connection refuse";
}
// $query ="INSERT INTO `client`(`id`, `client`, `city`, `address`, `email`, `phone`, `fax`, `password`) VALUES ('null','$name','$city','$address','$email','$phone','$fax','$password')";

$q= mysqli_query($conn,$query);


if(!$q){
    echo "query not exectired!";
}
else{
    echo "query sucess!";

}
header('location:clientform.php');


?>
<!-- <script>
   window.location.assign("about.php");
</script> -->
<!-- Appointment End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
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