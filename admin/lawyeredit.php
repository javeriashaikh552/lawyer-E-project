<?php
 $conn = mysqli_connect("localhost","root","","law");         //hostname username password databasename
 if(!$conn) {
     echo "connection refuse!";
     header('Location:lawyer.php');
 } 
 else {
     echo "connection established!";
 }
 $id = $_GET['id'];
 $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from lawyer where id='$id'"));
?>
    
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Law admin - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
        .heading{
            text-align:center;
            font-family:fantasy;
            src: url(sansation_bold.woff);
            margin-bottom:30px;
        }
    </style>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">Lawyer Website</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                DASHBOARD
                            </a>
                            <a class="nav-link" href="lawyer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-vcard"></i></div>
                               LAWYER
                            </a>
                            <a class="nav-link" href="client.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                               CLIENTS
                            </a>
                            <a class="nav-link" href="service.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               SERVICES
                            <a class="nav-link" href="appointment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                APPOINTMENT
                            </a>
                            <a class="nav-link" href="testimonial.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                                TESTIMONIAL
                            </a>
                            <a class="nav-link" href="contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                                CONTACT-US
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

           <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                <h1 class="mt-4 heading"><span><i class="fa-regular fa-star"></i></span> LAWYER EDIT <span><i class="fa-regular fa-star"></i></span></h1>

             </div>

            <div class="card mb-4 card-form">
                <div class="card-body">
                <form action="lawyerupdate.php" method="POST">
            <div class="form-group row">
              <!-- id -->
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="numbers" readonly value="<?= $row['id'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Id can not be changed" name="id">
                </div>
                <!-- laywer name -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Lawyer Name</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['lawyer'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="lawyer">
                </div>
                <!-- city -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">City</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['city'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your city" name="city">
                </div>
                <!-- address -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['address'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your address" name="address">
                </div>
                <!-- email -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email"  value="<?= $row['email'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your email" name="email">
                </div>
                <!-- mobile -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Mobile no</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?= $row['mobile'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your mobilr no" name="mobile">
                </div>
                <!-- fax no -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Fax no</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?= $row['fax'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your fax no" name="fax">
                </div>
                <!-- practice area -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Practice</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['practice'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your practice area" name="practice">
                </div>

                <!-- password -->
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password"  value="<?= $row['password'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your subject" name="password">
                </div>
                <br><br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>

                </div>
            </div>
        </div>
    </main>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</php>
