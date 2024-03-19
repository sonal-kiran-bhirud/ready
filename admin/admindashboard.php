

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6ee00b2260.js" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript">
        function preventBack(){
        window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
       

    </script> -->


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
                <center><img width="100" align="center" src="../images/medicalc.webp">
                    <font color="PURPLE" style="font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;">Health Care</font>
                </center>
                <hr style="margin: 7px; ">
                <div><img src="../images/doctor girl.webp" alt="image" height="80px" width="80px" style="border-radius: 50%;margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size: 20px; font-weight: bold;">Admin</font></div>

                <hr style="margin: 7px; ">
                <div>
                        <a href="staffregform.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt"><i class="fa-solid fa-address-card"></i>&nbsp;New Register</button></a></div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Doctor
                  </button>
                   <ul class="dropdown-menu">
                    
                     <li><a class="dropdown-item" href="../doctor/viewdoctors.php">Doctor List</a></li>
                     
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Patients
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                     
                     <li><hr></li>
                        <li><a class="dropdown-item" href="../receptionist/viewipd.php">IPD Records</a></li>
                        <li><a class="dropdown-item" href="#">OPD Records</a></li>
                        <li><a class="dropdown-item" href="#">Emergency Records</a></li>
                     
                 </ul>
                </div><br>

                             


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-nurse"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   Nurse
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="../nurse/viewnurses.php">Nurse Records</a></li>
                     
                 </ul>
                </div><br>


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-money-bill-transfer"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Billing
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                    
                     
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                     Blood Bank
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Available Blood</a></li>
                     <li><a class="dropdown-item" href="#">Donar list</a></li>
                     <li><a class="dropdown-item" href="#">Donar Registration</a></li>
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-boxes-stacked"></i>&nbsp;&nbsp;&nbsp;
                     Departments
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Neurologist</a></li>
                     <li><a class="dropdown-item" href="#">Gynecologist</a></li>
                     <li><a class="dropdown-item" href="../department/cardiologist.php">Cardiologist</a></li>
                     <li><a class="dropdown-item" href="#">Dermatologist</a></li>
                     <li><a class="dropdown-item" href="#">Radiologist</a></li>
                     <li><a class="dropdown-item" href="#">Orthopedic</a></li>
                     <li><a class="dropdown-item" href="#">ICU</a></li>
                     <li><a class="dropdown-item" href="#">Dental</a></li>
                 </ul>
                </div><br>


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-warehouse"></i>&nbsp;
                    Inventory System
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Medical Supplies</a></li>
                     <li><a class="dropdown-item" href="#">Pharmaceuticals</a></li>
                     <li><a class="dropdown-item" href="#">Equipment</a></li>
                     <li><a class="dropdown-item" href="#">Laboratory and Diagnostic Equipment</li>
                     <li><a class="dropdown-item" href="#">Maintenance and Repair Parts</a></li>
                 </ul>
                </div><br> 

                                            

                                                <div>
                                                    <a href="../logout.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</button></a></div><br>

                <hr style="margin: 7px; ">
            </div>

            <div class="col-sm-10">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                    <div class="container-fluid" style="background-color:purple">
                        <a class="navbar-brand" href="#">
                            <img src="../images/medicalc.webp" alt="Bootstrap" width="55" height="54" style="border-radius: 50%;">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="../admindashboard.php" style="color: aliceblue;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue;"></a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                              Dashboard
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="AdminDashboard.php">Admin</a></li>
                              <li><a class="dropdown-item" href="../doctor/doctordashboard.php">Doctor</a></li>
                              <li><a class="dropdown-item" href="staffd.php">Staff</a></li>
                              <li><a class="dropdown-item" href="../accountant/accountant.php">Accountant</a></li>
                              <li><a class="dropdown-item" href="../nursedashboard.php">Nurse</a></li>
                              <li><a class="dropdown-item" href="../receptionist/receptionistdashboard.php">Receptionist</a></li>
                              
                            </ul>
                          </li>
                          
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

                        <div class="col-sm-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    
                                    <img src="../images/doct1.jpeg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Doctors</h5>
                                      <p><?php ?></p>

                                      
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    
                                    <img src="../images/nurse1.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Nurse</h5>
                                      <p><?php ?></p>

                                      
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>

                              
                        </div>

                        <div class="col-sm-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="../images/dept.jpg" height="70px" width="70px" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Departments</h5>
                                      <p><?php ?></p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="../images/patients.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Patients</h5>
                                      <p><?php ?></p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="../images/blood.png" height="90px" class="img-fluid rounded-start" alt="..." style="height:90px;width:90px">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: purple;">Blood Bank</h5>
                                      <p><?php ?></p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
            </div>




        </div>
    </div>
    
</body>
</html>