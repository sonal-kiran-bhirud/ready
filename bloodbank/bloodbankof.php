<?php
include('connection.php');
//Overall donar count
$query="SELECT COUNT(*) AS total FROM bdonation";
$res= mysqli_query($conn, $query);
$row= mysqli_fetch_assoc($res);
$count= $row['total'];
//today donar count
$queryd="SELECT COUNT(*) AS dtotal FROM bdonation Where DATE(date) = CURDATE()";
$dres= mysqli_query($conn, $queryd);
$drow= mysqli_fetch_assoc($dres);
$dcount= $drow['dtotal'];


//ml to liter
function ml_to_liter($ml) {
  $liter = $ml / 1000;
  return $liter;
}

//Sum the blood group for Availability
//A+ve
$query1="SELECT SUM(Dblood_ml) AS total1 FROM bdonation WHERE Blood='A+ve'";
$res1= mysqli_query($conn, $query1);
$row1= mysqli_fetch_assoc($res1);
$count1= $row1['total1'];
$Apositive=ml_to_liter($count1);

//A-ve
$query2 = "SELECT SUM(Dblood_ml) AS total2 FROM bdonation WHERE Blood='A-ve'";
$res2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($res2);
$count2 = $row2['total2'];
$Anegative=ml_to_liter($count2);

//B+ve
$query3="SELECT SUM(Dblood_ml) AS total3 FROM bdonation WHERE Blood='B+ve'";
$res3= mysqli_query($conn, $query3);
$row3= mysqli_fetch_assoc($res3);
$count3= $row3['total3'];
$Bpositive=ml_to_liter($count3);

//B-ve
$query4="SELECT SUM(Dblood_ml) AS total4 FROM bdonation WHERE Blood='B-ve'";
$res4= mysqli_query($conn, $query4);
$row4= mysqli_fetch_assoc($res4);
$count4= $row4['total4'];
$Bnegative=ml_to_liter($count4);

//O+ve
$query5 = "SELECT SUM(Dblood_ml) AS total5 FROM bdonation WHERE Blood='O+ve'";
$res5 = mysqli_query($conn, $query5);
$row5 = mysqli_fetch_assoc($res5);
$count5 = $row5['total5'];
$Opositive=ml_to_liter($count5);

//O-ve
$query6 = "SELECT SUM(Dblood_ml) AS total6 FROM bdonation WHERE Blood='O-ve'";
$res6 = mysqli_query($conn, $query6);
$row6 = mysqli_fetch_assoc($res6);
$count6 = $row6['total6']; // Adjusted to correct key 'total6'
$Onegative=ml_to_liter($count6);

//AB+ve
$query7 = "SELECT SUM(Dblood_ml) AS total7 FROM bdonation WHERE Blood='AB+ve'";
$res7 = mysqli_query($conn, $query7);
$row7 = mysqli_fetch_assoc($res7);
$count7 = $row7['total7'];
$ABpositive=ml_to_liter($count7);


//AB-ve
$query8="SELECT SUM(Dblood_ml) AS total8 FROM bdonation WHERE Blood='AB-ve'";
$res8= mysqli_query($conn, $query8);
$row8= mysqli_fetch_assoc($res8);
$count8= $row8['total8'];
$ABnegative=ml_to_liter($count8);


?>

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
                background-image: url('images/hosp2.jpg');
                background-size: cover;
              width: 100%;
              height: 600px;}
              
              #bt:hover{
                
                font-weight: bold;
                background-color: purple;
                color: aliceblue;
              }
              #appoint{
                height: 120px;
                border: 2px solid purple;
                border-radius: 10px;
                padding: 10px 30px;
                margin: 15px 30px;
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
                <div><img src="images/doctor girl.webp" alt="image" height="87px" width="90px" style="border-radius: 50%;margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size: 20px; font-weight: bold;">Receptionist</font></div>

                <hr style="margin: 7px; ">
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <!-- <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a href="appointment.php" class="text-decoration-none">Appointment</a>
                  </button> -->
                  <a href="appointment.php" class="text-decoration-none btn" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appointment</a>
                </div><br>
                
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <!-- <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Doctor
                  </button> -->
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Doctor Details</a></li>
                     <li><a class="dropdown-item" href="#"></a></li>
                     <li><a class="dropdown-item" href="#">Emergency</a></li>
                 </ul> -->
                 <a href="rdoctorlist.php" class="text-decoration-none btn" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor</a>
                </div><br>
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <!-- <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-nurse"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   Nurse
                  </button> -->
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Nurse Records</a></li>
                     
                 </ul> -->
                 <a href="rnurselist.php" class="text-decoration-none btn" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-nurse"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nurse</a>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <!-- <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Patients
                  </button> -->
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                     
                     
                     <li><hr></li>
                        <li><a class="dropdown-item" href="ipdview.php">IPD Records</a></li>
                        <li><a class="dropdown-item" href="oopdview.php">OPD Records</a></li>
                        <li><a class="dropdown-item" href="emergencyr.php">Emergency Records</a></li>
                     
                 </ul> -->
                 <a href="rpatient.php" class="text-decoration-none btn" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-nurse"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient</a>
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
                    <!-- <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                     Blood Bank
                  </button> -->
                   <!-- <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Available Blood</a></li>
                     <li><a class="dropdown-item" href="donarlist.php">Donar list</a></li>
                     <li><a class="dropdown-item" href="donation.php">Donar Registration</a></li>
                 </ul> -->
                 <a href="rbloodbank.php" class="text-decoration-none btn" style="width:100%;padding-left:7px;"><i class="fa-solid fa-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood Bank</a>
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
                                                    <a href="logout.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;margin-left:7px;background-color:purple" id="butt"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</button></a></div><br>

                <hr style="margin: 7px; ">
            </div>
            

            <div class="col-sm-10" >
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
                            <a class="nav-link active" aria-current="page" href="receptionistd.php" style="color: aliceblue;">Home</a>
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
                
         
              <div class="container-fluid m-3 p-2">
                  <h3 style="color:#c60000;"><i class="fa-solid fa-hand-holding-droplet"></i>&nbsp;&nbsp;Blood Bank</h3>
                  <hr style="color: purple;">
                  <h5>Available Blood per group in Liters</h5>
                  <div class="row">
                              <div class="col-sm-2" id="appoint">
                                  <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;A+</h2>
                                  <h6>Available - <?php echo $Apositive  ?>&nbsp;liter</h6>
                              </div>
                              <div class="col-sm-2" id="appoint">
                                  <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;B+</h2> 
                                  <h6>Available - <?php echo $Bpositive  ?>&nbsp;liter</h6>

                                  <!-- <div class="row" style="background-color:purple; color: White"> -->
                                  
                              </div>
                              <div class="col-sm-2" id="appoint">
                                  <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;O+</h2>
                                  <h6>Available - <?php echo $Opositive  ?>&nbsp;liter</h6>

                              </div>
                              <div class="col-sm-2" id="appoint">
                                  <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;AB+</h2>
                                  <h6>Available - <?php echo $ABpositive  ?>&nbsp;liter</h6>

                              </div>
                    </div>
                
                
                      <div class="row">
                          <div class="col-sm-2" id="appoint">
                                <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;A-</h2>
                                <h6>Available - <?php echo $Anegative  ?>&nbsp;liter</h6>
                          </div>
                          <div class="col-sm-2" id="appoint">
                                <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;B-</h2>
                                <h6>Available - <?php echo $Bnegative  ?>&nbsp;liter</h6>

                              <!-- <div class="row" style="background-color:purple; color: White"> -->
                              
                          </div>
                          <div class="col-sm-2" id="appoint">
                                <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;O-</h2>
                                <h6>Available - <?php echo $Onegative  ?>&nbsp;liter</h6>

                          </div>
                          <div class="col-sm-2" id="appoint">
                                <h2><i class="fa-solid fa-droplet" style="color:#c60000;"></i>&nbsp;&nbsp;AB-</h2>
                                <h6>Available - <?php echo $ABnegative  ?>&nbsp;liter</h6>

                          </div>
                      </div>
                
                <hr style="color: purple;">
                      <div class="row">
                          <div class="col-sm-2" id="appoint">
                              <h5><i class="fa-solid fa-square-plus" style="color:purple;"></i>&nbsp;Registration</h5>
                              <div class="row">
                                  <div>
                                      
                                      <a class="btn" style="background-color: purple;color:white;" href="donation.php" >New Donar</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-2" id="appoint">
                              <h5><i class="fa-solid fa-user-group" style="color:purple;"></i>&nbsp;Total Donars</h5> 
                              <!-- <div class="row" style="background-color:purple; color: White"> -->
                              
                                <h6>Total Donations - <?php echo $count  ?></h6>
                                
                              
                          </div>
                          <div class="col-sm-2" id="appoint">
                              <h5><i class="fa-solid fa-user-group" style="color:purple;"></i>&nbsp;Today Donars</h5>
                              <h6> Total Donations Today- <?php echo $dcount  ?></h6>
                          </div>
                          <div class="col-sm-2" id="appoint">
                          <h5><i class="fa-solid fa-list-ul"style="color:purple;"></i>&nbsp;Donar List</h5>
                          <a href="donarlist.php" class="btn" style="background-color: purple;color:white;"> View Donar List</a>
                          </div>
                      </div>
                <hr style="color: purple;">
                <p style="color: purple; font-size: 20px; text-align:center;"><i class="fa-solid fa-hand-holding-medical"></i>&nbsp;&nbsp;“Never feel yourself weak, you have the ability to save a life. Just donate blood.”  </p>
                
              </div>
          </div>
        </div>
    </div>
    
</body>
</html> 