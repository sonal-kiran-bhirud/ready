<?php
        session_start();
        //$id = $_SESSION['id'];

        include('../connection.php');



         $sql = "SELECT `id`, `name`, `email`, `aadharno`, `gender`, `contact`, `qualification`, `myfile` FROM `doctor`;";      
        $res = mysqli_query($conn, $sql);

    ?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

   <!-- <script type="text/javascript">
        function preventBack(){
        window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
       

    </script> -->

    <style>
        

#pdt{
    text-align:center;
    font-size:15px;
    font-weight:bold;
}

#header1
    {
        webkit-
        position: sticky;
        padding-top: 25px;
        padding-bottom: 25px;
        background-color: purple;
        color: white;
        text-align: center;
        font-size: 20px;
        
       
    }

    #font1{
        text-align:center;
        font-size:30px;
        font-weight:bold;
        
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
                <div><img src="../images/doctor girl.webp" alt="image" height="80px" width="80px" style="border-radius: 50%;margin-left: 9px;">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size: 20px; font-weight: bold;">Doctor</font></div>

                <hr style="margin: 7px; ">
                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     Doctor
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="doctordashboard.php">Doctor Dashboard</a></li>
                     <li><a class="dropdown-item" href="doctorlist.php">Doctor List</a></li>
                     
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Patients
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Patients Records</a></li>
                     
                     <li><hr></li>
                        <li><a class="dropdown-item" href="#">IPD Records</a></li>
                        <li><a class="dropdown-item" href="#">OPD Records</a></li>
                        <li><a class="dropdown-item" href="#">Emergency Records</a></li>
                     
                 </ul>
                </div><br>

                             


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-user-nurse"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   Nurse
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Nurse Records</a></li>
                     
                 </ul>
                </div><br>


                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-money-bill-transfer"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Accountant
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="billing.php">Billing</a></li>
                    
                     
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-droplet"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                     Blood Bank
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Available Blood</a></li>
                     <li><a class="dropdown-item" href="donarlist.php">Donar list</a></li>
                     <li><a class="dropdown-item" href="donation.php">Donar Registration</a></li>
                 </ul>
                </div><br>

                <div class="dropdown" style="width:100%;margin-left:7px">
                    <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%;padding-left:7px;"><i class="fa-solid fa-boxes-stacked"></i>&nbsp;&nbsp;&nbsp;
                     Departments
                  </button>
                   <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Neurologist</a></li>
                     <li><a class="dropdown-item" href="#">Gynecologist</a></li>
                     <li><a class="dropdown-item" href="#">Cardiologist</a></li>
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
                     <li><a class="dropdown-item" href="Inventory.php">Medical Supplies</a></li>
                     <li><a class="dropdown-item" href="#">Pharmaceuticals</a></li>
                     <li><a class="dropdown-item" href="#">Equipment</a></li>
                     <li><a class="dropdown-item" href="#">Laboratory and Diagnostic Equipment</li>
                     <li><a class="dropdown-item" href="#">Maintenance and Repair Parts</a></li>
                 </ul>
                </div><br> 

                                            <div>
                                                <a href="../admin/staffregform.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt"><i class="fa-solid fa-address-card"></i>&nbsp;New Register</button></a></div><br>

                                                <div>
                                                    <a href="logout.php" class="text-decoration-none"><button class="form-control" style="text-decoration: none;" id="butt"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</button></a></div><br>

                <hr style="margin: 7px; ">
            </div>
        

            <div class="col-sm-10">




   
                <div class="fluid-container" >

                    <header id="header1" class="sticky-lg-top">

                        <div class="fluid-container" >
                            <div class="row" >
                                <div class="col-lg-1">
                                    <a class="nav-link active" aria-current="page" href="../doctor/doctorboard.php" style="color: aliceblue;">Home</a>

                                </div>
                                <div class="col-lg-3">
                                        <div class="" style="">
                                            <div class="">
                                                
                                                <h5 class="card-title"><p id="pdt"><?php 
                                                echo "Day: " . date("l") . "<br>";
                                                echo "<br>";
                                                echo "Date: " . date("Y/m/d"); ?></p>
                                                </h5>
                                            </div>
                                        </div>
                                </div>
                                    

                                <div class="col-lg-4">
                                        
                                                <h5  id="font1">Doctor List
                                                </h5>
                                    
                                </div>

                                <div class="col-lg-4">
                                    <div class="" style="">
                                        
                                            <div class="input-group mb-3" width="10%" style="margin-left:0%;margin-top:15px">
                                            <!-- <button class="btn btn-primary" name="" value="back"><a href="doctordashboard.php"></a>back</button> -->
                                            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" style="margin-left:30%" name="" id="search" onkeyup="searchfun()">
                                            <button class="btn btn-outline-primary" type="button" id="button-addon2" style="margin-right:3%"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>

                                        
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </header>

            


            <div class="container table-responsive">

                <table class="table table-border" style="width:80%" id="mytable">
                    <tr>
                    <th>Sr no.</th>
                    <th>name</th>
                    <th>email</th>
                    <th>aadharno</th>
                    <th>Gender</th>
                    <th>contact</th>
                    <th>qualification</th>
                    <th>profile photo</th>
                    <th>detailedview</th>
                    <th>option</th>
                        
                    </tr>

                        <?php 
                        $cn = 1;
                        while($row= mysqli_fetch_assoc($res)){



                        ?>
                    <tr>
                        <td><?php echo $cn++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['aadharno']; ?></td>

                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['qualification']; ?></td>
                        <td><img src="../uploads/<?php echo $row['myfile']; ?>" style="width:100px;height:100px;"></td>
                        <td><a href="profile.php?id=<?php echo $row['id']; ?>"><i class="fa-regular fa-eye"></i></a></td>


                        <td><a href="editdoctor.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" style="font-size:30px;color:black;"></i> </a>
                        <a href="deletedoctor.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash " style="font-size:30px;color:red;"></i></a></td>
                            
                            
                    </tr>
                        <?php } ?>


                    <script>
                    function searchfun(){
                        let filter = document.getElementById('search').value.toUpperCase();
                        let mytab = document.getElementById('mytable');
                        let tr = mytab.getElementsByTagName('tr');

                        for(var i=0;i<tr.length;i++){


                            
                                
                                    let td= tr[i].getElementsByTagName('td')[1];
                                    let td2= tr[i].getElementsByTagName('td')[3];
                                    
                                    
                                    // console.log(td);
                                    if(td || td2){
                                        let textvalue = td.textContent || td.innerHTML;
                                        let textvalue2 = td2.textContent || td2.innerHTML;
                                        
                                        
                                        if(textvalue.toUpperCase().indexOf(filter)>-1) {
                                            tr[i].style.display=""; 
                                            
                                        }else if(textvalue2.toUpperCase().indexOf(filter)>-1) {
                                            tr[i].style.display=""; 
                                        
                                        }else{
                                            tr[i].style.display="none"; 

                                        }
                                    }
                                    // elseif(td2){
                                    //     let textvalue2 = td2.textContent || td2.innerHTML;
                                    //     if(textvalue2.toUpperCase().indexOf(filter)>-1){
                                    //         tr[i].style.display=""; 
                                    //     } else {
                                    //         tr[i].style.display="none"; 
                                    //     }
                                    // }

                        }

                    }
                    
                            
                            
                    </script>
                </table>
                </div>
                </div>
            </div>
        
       
    </body>
</html>