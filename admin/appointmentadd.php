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
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Lawyer Website</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="lawyer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-vcard"></i></div>
                               Lawyer
                            </a>


                            <a class="nav-link" href="client.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                               Clients
                            </a>

                            <a class="nav-link" href="service.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Services
                            </a>
                            <a class="nav-link" href="appointment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                Appointment
                            </a>


                            <a class="nav-link" href="testimonial.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                                Testimonial
                            </a>
                            <a class="nav-link" href="contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                                Contact-Us
                            </a>


                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4 align-item-center">Client Add page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Client Add page</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
             </div>

            <div class="card mb-4">
                <div class="card-body">

            <form action="appointmentinsert.php" method="POST" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
                <!-- client name -->
                <div class="form-group">
                <label for="colFormLabel"> ID</label>
                <input type="text" name ="id" class="form-control" id="colFormLabel" placeholder="Enter ID">
               </div>
               <br>
               <!-- client city -->
               <div class="form-group">
                <label for="colFormLabel">name</label>
                <input type="name" name ="name" class="form-control" id="colFormLabel" placeholder="Enter your name">
               </div>
               <br>
               <!-- client Address -->
               <div class="form-group">
                <label for="colFormLabel">email</label>
                <input type="email" name ="email" class="form-control" id="colFormLabel" placeholder="Enter your email">
               </div>
               <br>
                <!-- client Email -->
                <div class="form-group">
                <label for="colFormLabel">Date</label>
                <input type="Date" name ="Date" class="form-control" id="colFormLabel" placeholder="Enter your Date">
               </div>
               <br>
              
               <!-- client phone no -->
               <div class="form-group">
                <label for="colFormLabel">Time</label>
                <input type="Time" name ="Time" class="form-control" id="colFormLabel" placeholder="Enter Time">
               </div>
               <br>
                <!-- client fax no -->
                <div class="form-group">
                <label for="colFormLabel">Service</label>
                <input type="text" name ="Service" class="form-control" id="colFormLabel" placeholder="Enter Service">
               </div>
               <br>
               <!-- client password -->
               <div class="form-group">
                <label for="colFormLabel">image</label>
                <input type="file" name ="image" class="form-control" id="colFormLabel" placeholder="Enter your image">
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
