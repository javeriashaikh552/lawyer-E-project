
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
    </head>
    <style>
        .heading{
            text-align:center;
            font-family:fantasy;
            src: url(sansation_bold.woff);
        }
        .btn22{
            background-color:black;
            border:none;
            width:150px;

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
                <h1 class="mt-4 heading"><span><i class="fa-regular fa-star"></i></span>SERVICES <span><i class="fa-regular fa-star"></i></span></h1>

                        <div>
                        <a class="btn btn-primary btn22" href="serviceadd.php" role="button">Add New</a>
                        </div>
             </div>
             <br>

                      <div class="card mb-4" style="border:solid LightGrey 1px;">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Lawyer Name</th>
                                            <th>City</th>
                                            <th>Service</th>
                                            <th>Experience</th>
                                            <th>Certificate</th> 
                                            <th>Action</th>                                       
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>                                          
                                        <th>id</th>
                                        <th>Lawyer Name</th>
                                        <th>City</th>
                                        <th>Service</th>
                                        <th>Experience</th>
                                        <th>Certificate</th>
                                        <th>Action</th>                                                                                  
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                    include('include/config.php');
                       $query="SELECT * from `service`";
                       $result = mysqli_query($conn,$query);
                       if(mysqli_num_rows($result)){
                       
                     while ($row = mysqli_fetch_array($result)){
                    ?>
                <tr>
                     <td><?= $row['id'] ?></td>
                    <td><?= $row['lawyer'] ?></td>
                    <td><?= $row['city'] ?></td>
                    <td><?= $row['service'] ?></td>
                    <td><?= $row['experience'] ?></td>
                    <td><img src="images/<?= $row['image'] ?>" width="50px" height="50px" alt="" style="margin-left:30%; margin-right:30%;" ></td>
                    <td> <a  href ="serviceedit.php?id=<?=$row['id']?>" class="btn btn-success" style="margin-left:20%;">Edit</a>
                    <a  href ="serviceremove.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td> 
                </tr>
    
                <?php
                   } }
                ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                   
                </main>
                
            </div>
         

        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</php>
