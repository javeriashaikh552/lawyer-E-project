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
        .btn22{
            background-color:black;
            width:20%;
            margin-left:32%;
            color:white;
        }
        .btn22:hover{
            background-color:grey;
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
                <h1 class="mt-4 heading"><span><i class="fa-regular fa-star"></i></span> ADD SERVICES <span><i class="fa-regular fa-star"></i></span></h1>

             </div>

            <div class="card mb-4 card-form">
                <div class="card-body">

            <form action="serviceinsert.php" method="POST" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
                <!-- lawyer name -->
                <div class="form-group">
                <label for="colFormLabel">Lawyer Name</label>
                <input type="text" name ="lawyer" class="form-control" id="colFormLabel" placeholder="Enter Lawyer name">
               </div>
               <br>
               <!-- lawyer city -->
               <div class="form-group">
                <label for="colFormLabel">City</label>
                <input type="text" name ="city" class="form-control" id="colFormLabel" placeholder="Enter your city">
               </div>
               <br>
               <!-- lawyer Service -->
               <div class="form-group">
                <label for="colFormLabel">Service</label>
                <input type="text" name ="service" class="form-control" id="colFormLabel" placeholder="Enter the service">
               </div>
               <br>
                 <!-- lawyer Experience -->
                <div class="form-group">
                <label for="colFormLabel">Experience</label>
                <input type="text" name ="experience" class="form-control" id="colFormLabel" placeholder="Enter your experience">
               </div>
               <br>

               <!-- cirtificate -->
               <div class="form-group">
                <label for="exampleFormControlFile1">Certificate(Please provide your lawyer prove, such as bar council card, certificate e.t.c)</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
               </div>
               <br>
               <input type="submit" class="btn btn22" value="submit"> 
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
