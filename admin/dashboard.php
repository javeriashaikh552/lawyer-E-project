<?php
$conn = mysqli_connect("localhost","root","","law");

?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lawyer website-Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
              <!-- icon link -->
      <link rel="shortcut icon" href="./img/logo.png">

    </head>
    <style>
        .heading{
            text-align:center;
            font-family:fantasy;
            src: url(sansation_bold.woff);
            margin-bottom:40px;
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
                            <a class="nav-link" href="#">
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
                    <h1 class="mt-4 heading"><span><i class="fa-regular fa-star"></i></span> DASHBOARD<span><i class="fa-regular fa-star"></i></span></h1>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-2 col-md-5">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">LAWYER</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    $query = "SELECT COUNT(*) AS 'count' FROM `lawyer`";
                                    $result = mysqli_query ($conn , $query);
                                    $row = mysqli_fetch_assoc ($result);
                                    echo $count = $row['count'];
                                    ?> 
                                        <a class="small text-white stretched-link" href="lawyer.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-5">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">CLIENT</div>
                                   
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    $query = "SELECT COUNT(*) AS 'count' FROM `client`";
                                    $result = mysqli_query ($conn , $query);
                                    $row = mysqli_fetch_assoc ($result);
                                    echo $count = $row['count'];
                                    ?> 
                                        <a class="small text-white stretched-link" href="./client.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-5">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">SERVICES</div>
                                
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    $query = "SELECT COUNT(*) AS 'count' FROM `service`";
                                    $result = mysqli_query ($conn , $query);
                                    $row = mysqli_fetch_assoc ($result);
                                    echo $count = $row['count'];
                                    ?> 
                                        <a class="small text-white stretched-link" href="service.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-5">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">APPOINTMENT</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    $query = "SELECT COUNT(*) AS 'count' FROM `appointment`";
                                    $result = mysqli_query ($conn , $query);
                                    $row = mysqli_fetch_assoc ($result);
                                    echo $count = $row['count'];
                                    ?> 
                                        <a class="small text-white stretched-link" href="appointment.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-5">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">TESTMONIAL</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    $query = "SELECT COUNT(*) AS 'count' FROM `testimonial`";
                                    $result = mysqli_query ($conn , $query);
                                    $row = mysqli_fetch_assoc ($result);
                                    echo $count = $row['count'];
                                    ?> 
                                        <a class="small text-white stretched-link" href="testimonial.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
    
                        </div>


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
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
