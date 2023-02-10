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
            <!-- Navbar-->
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

            <div class="card mb-4">
            <h1 class="mt-4 heading"><span><i class="fa-regular fa-star"></i></span> ADD CLIENT <span><i class="fa-regular fa-star"></i></span></h1>

                <div class="card-body">

            <form action="clientinsert.php" method="POST" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
                <!-- client name -->
                <div class="form-group">
                <label for="colFormLabel">Client Name</label>
                <input type="text" name ="client" class="form-control" id="colFormLabel" placeholder="Enter client name">
               </div>
               <br>
               <!-- client city -->
               <div class="form-group">
                <label for="colFormLabel">City</label>
                <input type="text" name ="city" class="form-control" id="colFormLabel" placeholder="Enter your city">
               </div>
               <br>
               <!-- client Address -->
               <div class="form-group">
                <label for="colFormLabel">Address</label>
                <input type="text" name ="address" class="form-control" id="colFormLabel" placeholder="Enter your address">
               </div>
               <br>
                <!-- client Email -->
                <div class="form-group">
                <label for="colFormLabel">Email</label>
                <input type="email" name ="email" class="form-control" id="colFormLabel" placeholder="Enter your Email">
               </div>
               <br>

               <!-- client phone no -->
               <div class="form-group">
                <label for="colFormLabel">Phone no</label>
                <input type="numbers" name ="phone" class="form-control" id="colFormLabel" placeholder="Enter mobile no">
               </div>
               <br>
               <!-- client fax no -->
               <div class="form-group">
                <label for="colFormLabel">Fax no</label>
                <input type="numbers" name ="fax" class="form-control" id="colFormLabel" placeholder="Enter fax no">
               </div>
               <br>
               <!-- client password -->
               <div class="form-group">
                <label for="colFormLabel">Password</label>
                <input type="password" name ="password" class="form-control" id="colFormLabel" placeholder="Enter your password">
               </div>
               <br>
               <input type="submit" class="btn btn-primary" value="submit"> 
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
