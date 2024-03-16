

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountant Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6ee00b2260.js" crossorigin="anonymous"></script>

    <style>
        #img{
            padding-left: 10px;
        }

        #butt:hover{
            background-color: purple;
            color: aliceblue;

        }
    </style>

</head>
<body>
    <div class="fluid-container">
        <div class="row">
            <div class="col-sm-2 " style="outline: 2px solid gray;">
            <center><img width="100" align="center" src="images/1600w-hbl5vlZh180.webp"><br>
                    <font color="PURPLE" style="font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;">Health Care</font>
                </center>
                <hr style="margin: 7px; ">
                <div><img src="images/Accountant1.jpg" alt="image" height="80px" width="80px" style="border-radius: 50%;margin-left: 9px;"><font style="font-size: 20px; font-weight: bold;">Accountant</font></div>

                <hr style="margin: 7px; ">
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-money-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Billing
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="billing.php">Automated Billing</a></li>
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                    
                     
                 </ul>
                </div><br>
                

                <!-- <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Insurance
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                     
                     <li><hr></li>
                        <li><a class="dropdown-item" href="#">IPD Records</a></li>
                        <li><a class="dropdown-item" href="#">OPD Records</a></li>
                        <li><a class="dropdown-item" href="#">Emergency Records</a></li>
                     
                 </ul>
                </div><br> -->

                             


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-hand-holding-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Insurance
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Insurance Claim Processing</a></li>
                     
                 </ul>
                </div><br>


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-regular fa-share-from-square"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Expense Tracking
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Expense Tracking</a></li>
                    
                     
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-regular fa-clipboard"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    Financial Reporting
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Financial Reporting</a></li>
                 </ul>
                </div><br><br><br><br><br>

                                                <div> 
                                                    <a href="logout.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</button></a></div><br>

                <hr style="margin: 7px; ">
            </div>

            <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                    <div class="container-fluid" style="background-color:purple">
                        <a class="navbar-brand" href="#">
                            <img src="images/1600w-hbl5vlZh180.webp" alt="Bootstrap" width="55" height="54" style="border-radius: 50%;">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="" style="color: aliceblue;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue;"></a>
                          </li>
                          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                              Dashboard
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="AdminDashboard.php">Admin</a></li>
                              <li><a class="dropdown-item" href="Docterd.php">Doctor</a></li>
                              <li><a class="dropdown-item" href="staffd.php">Staff</a></li>
                              <li><a class="dropdown-item" href="Accountant.php">Accountant</a></li>
                              <li><a class="dropdown-item" href="Nurse.php">Nurse</a></li>
                              <li><a class="dropdown-item" href="receptionistd.php">Receptionist</a></li>
                              
                            </ul>
                          </li> -->
                          
                        </ul>
                        <div class="input-group mb-3" width=50% style="margin-left:55%;margin-top:15px">
                           <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" >
                         <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <!-- <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                      </div>
                    </div>
                  </nav>
                
                  <div class="container" style="margin-top: 50px;">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    
                                    <!-- <img src="images/doctor2.jpg" class="img-fluid rounded-start" alt="..."> -->
                                    <i class="fa-solid fa-calendar fa-xs mt-4" style="color: #B197FC;padding: 20px; font-size: 40px;"></i>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">EARNING (Monthly)</h5>
                                      <p><?php echo "$0" ?></p>

                                      
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    
                                    <img src="images/nurse1.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Nurse</h5>
                                      <p><?php ?></p>

                                      
                                      
                                    </div>
                                  </div>
                                </div>
                              </div> -->

                              
                        </div>

                        <div class="col-sm-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <!-- <img src="images/dept.jpg" height="70px" width="70px" class="img-fluid rounded-start" alt="..."> -->
                                    <i class="fa-solid fa-calendar fa-xs mt-4" style="color: #B197FC;padding: 20px; font-size: 40px;"></i>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">EARNING (Annual)</h5>
                                      <p><?php echo "$0"?></p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <!-- <img src="images/patients.jpg" class="img-fluid rounded-start" alt="..."> -->
                                    <i class="fa-solid fa-calendar fa-xs mt-4" style="color: #B197FC;padding: 20px; font-size: 40px;"></i>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">EARNING (Daily)</h5>
                                      <p><?php echo "$0"?></p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <!-- <div class="col-sm-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="images/blood.png" height="90px" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Blood Bank</h5>
                                      <p><?php ?></p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div> -->
                    </div>
                  </div>
            </div>




        </div>
    </div>
    
</body>
</html>