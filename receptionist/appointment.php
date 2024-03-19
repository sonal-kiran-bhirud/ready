

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

        /* .dropdown-menu,li,dropdown-item:hover{
            background-color: purple;
        }
        .dropdown:hover{
            background-color: purple;} */

            .dropdown-item:hover{
                background-color: purple;
                
            }

            .btn:hover{
                
                color: aliceblue;
                background-color: purple;

            }

            #imgp{
                margin-left: 10px;
                position: absolute;
                z-index: 1;
                
            }

            #imgs{
              position: relative;
                background-image: url('../images/hosp2.jpg');
                background-size: cover;
              width: 100%;
              height: 600px;}
              
              #bt:hover{
                
                font-weight: bold;
                background-color: purple;
                color: aliceblue;
              }
              #appoint{
                height: 100px;
                border: 2px solid purple;
                border-radius: 10px;
                padding: 10px 20px;
                margin: 10px;
              }
    </style>

</head>
<body>
    <div class="fluid-container">
        
        <div class="row">
            <div class="col-sm-2 " style="outline: 2px solid gray;">
                    <center><img width="100" align="center" src="../images/1600w-hbl5vlZh180.webp"><br>
                        <font color="PURPLE" style="font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;">Health Care</font>
                    </center>
                <hr style="margin: 7px; ">
                <div><img src="../images/doctor girl.webp" alt="image" height="87px" width="90px" style="border-radius: 50%;margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size: 20px; font-weight: bold;">Receptionist</font></div>

                <hr style="margin: 7px; ">
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Appointment
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Doctor Details</a></li>
                     <li><a class="dropdown-item" href="#"></a></li>
                     <li><a class="dropdown-item" href="#">Emergency</a></li>
                 </ul> -->
                </div><br>
                
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Doctor
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Doctor Details</a></li>
                     <li><a class="dropdown-item" href="#"></a></li>
                     <li><a class="dropdown-item" href="#">Emergency</a></li>
                 </ul> -->
                </div><br>
                
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-nurse"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   Nurse
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Nurse Records</a></li>
                     
                 </ul> -->
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Patients
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                     
                     <li><hr></li>
                        <li><a class="dropdown-item" href="ipdview.php">IPD Records</a></li>
                        <li><a class="dropdown-item" href="oopdview.php">OPD Records</a></li>
                        <li><a class="dropdown-item" href="emergencyr.php">Emergency Records</a></li>
                     
                 </ul> -->
                </div><br>


                

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-money-bill-transfer"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Billing
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                    
                     
                 </ul> -->
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                     Blood Bank
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Available Blood</a></li>
                     <li><a class="dropdown-item" href="donarlist.php">Donar list</a></li>
                     <li><a class="dropdown-item" href="donation.php">Donar Registration</a></li>
                 </ul> -->
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-boxes-stacked"></i>&nbsp;&nbsp;&nbsp;
                     Departments
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Neurologist</a></li>
                     <li><a class="dropdown-item" href="#">Gynecologist</a></li>
                     <li><a class="dropdown-item" href="#">Cardiologist</a></li>
                     <li><a class="dropdown-item" href="#">Dermatologist</a></li>
                     <li><a class="dropdown-item" href="#">Radiologist</a></li>
                     <li><a class="dropdown-item" href="#">Orthopedic</a></li>
                     <li><a class="dropdown-item" href="#">ICU</a></li>
                     <li><a class="dropdown-item" href="#">Dental</a></li>
                 </ul> -->
                </div><br>

               
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-warehouse"></i>&nbsp;
                    Inventory System
                  </button>
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Medical Supplies</a></li>
                     <li><a class="dropdown-item" href="#">Pharmaceuticals</a></li>
                     <li><a class="dropdown-item" href="#">Equipment</a></li>
                     <li><a class="dropdown-item" href="#">Laboratory and Diagnostic Equipment</li>
                     <li><a class="dropdown-item" href="#">Maintenance and Repair Parts</a></li>
                 </ul> -->
                </div><br>
                                                <div>
                                                    <a href="../logout.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;margin-left:7px;background-color:purple" id="butt"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</button></a>
                                                </div><br>

                <hr style="margin: 7px; ">
            </div>
            

            <div class="col-sm-10" >
                <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                    <div class="container-fluid" style="background-color:purple">
                        <a class="navbar-brand" href="#">
                            <img src="../images/1600w-hbl5vlZh180.webp" alt="Bootstrap" width="55" height="54" style="border-radius: 50%;">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <a class="navbar-brand home" href="#" onclick="history.back(); return false;"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="white" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
                  <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5"/>
                 </svg></a> -->
                         
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="receptionistdashboard.php" style="color: aliceblue;">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue;"></a>
                          </li>
                          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                              Profession
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="AdminDashboard.php">Admin</a></li>
                              <li><a class="dropdown-item" href="Docterd.php">Doctor</a></li>
                              <li><a class="dropdown-item" href="staffd.php">Staff</a></li>
                              <li><a class="dropdown-item" href="Accountant.php">Accountant</a></li>
                              <li><a class="dropdown-item" href="Nurse.php">Nurse</a></li>
                              <li><a class="dropdown-item" href="Receptionsist.php">Receptionist</a></li>
                              
                            </ul>
                          </li> -->
                          
                            </ul>
                            <div class="input-group mb-3" width=50% style="margin-left:55%;margin-top:15px">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" >
                            <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                      </div>
                    </div>
                    
                  </nav>
                
         
              <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-2" id="appoint">
                        <h5><i class="fa-solid fa-square-plus" style="color:purple;"></i>&nbsp;Appointment</h5>
                        <div class="row">
                            <div>
                                <!-- <button type="submit" class="btn" style="background-color: purple;color:white;"><a class="btn" href="register.php">New Appiontment</a></button> -->
                                <a class="btn" style="background-color: purple;color:white;" href="#">New Appiontment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3" id="appoint">
                        <h5><i class="fa-regular fa-calendar-check" style="color:purple;"></i>&nbsp;Total Appointment</h5>
                    </div>
                    <div class="col-sm-3" id="appoint">
                        <h5><i class="fa-solid fa-square-plus" style="color:green;"></i>&nbsp;Upcoming Appointment</h5>
                    </div>
                    <div class="col-sm-3" id="appoint">
                        <h5><i class="fa-solid fa-rectangle-xmark" style="color:red;"></i>&nbsp;Cancelled Appointment</h5>
                    </div>
                </div>
                <hr style="color: purple;">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5>Appointment List-</h5>
                            </div>
                            <div class="col-sm-3">
                                <!-- <a href="appointmentlist.php" >See more</a><br> -->
                                <input type="date" value="date" class="form-control">
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Dr.Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>Shubham</td>
                                    <td>Dr.Shekhar</td>
                                    <td>25 March 2024</td>
                                    <td>Confirm</td>
                                    <td>edit delete</td>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-sm-5">
                    <img src="../images/hmsapp.jpg" alt="sideimage" class="img-fluid rounded">
                    </div>
                </div>
                
              </div>
               

            </div>

        </div>
    </div>
    
</body>
</html>