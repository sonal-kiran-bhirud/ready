<?php
session_start();

include('../connection.php');

$id=$_GET['id'];

$sql1="SELECT * FROM `doctor` WHERE id='$id'";
$res1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($res1);
$name = $row1['name'];

$sql= "SELECT * FROM patients WHERE doctor='$name'";
$res = mysqli_query($conn, $sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient <Details></Details></title>

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

            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                    <div class="container-fluid" style="background-color:purple">
                        <a class="navbar-brand" href="#">
                            <img src="../images/1600w-hbl5vlZh180.webp" alt="Bootstrap" width="55" height="54" style="border-radius: 50%;">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item" >
                            <a class="nav-link active" aria-current="page" href="#" onclick="history.back() return false;" style="color: aliceblue;">back</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue;"></a>
                          </li>
                         
                          
                        </ul>
                        <div class="input-group mb-3" width=50% style="margin-left:55%;margin-top:15px">
                           <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" id="search" onkeyup="searchfun()">
                         <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                       
                      </div>
                    </div>
                  </nav>
                
                  <div class="container" style="margin-top: 20px;">
                    <div class="row" style="font-size: 20px;">
                        
                        <div class="col-sm-8">
                          <h4>Dr.<?php echo $name; ?></h4>
                          <h2 class="fs-1 text-primary">Patient List-</h2>
                          

                        </div>
                        <!-- <div class="col-sm-4">
                          <a href="donation.php" class="float-end text-decoration-none border border-primary p-2 m-2 rounded"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;New Donar</a>
                        </div> -->
                      </div>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="mytable">
                            <thead>
                                <tr>
                                <th>Sr. No</th>
                                <th>Patient Name</th>
                                <th>Patient Type</th>
                                <th>Conatct</th>
                                <th>Blood Group</th>
                                <!-- <th>Height</th> -->
                                <!-- <th>Weight</th> -->
                                <!-- <th>DOB</th> -->
                                <th>Gender</th>
                                <th>Aadhar</th>
                                <th>View profile</th>
                                <th>Action</th>

                                </tr> 
                            </thead>
                            <tbody>
                            <?php
                                $cn =1;
                                while($row = mysqli_fetch_assoc($res)){
                                ?>
                                <tr>
                                    <td><?php echo $cn++ ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['patient'] ?></td>
                                    <td><?php echo $row['contact'] ?></td>
                                    <td><?php echo $row['blood'] ?></td>
                                    <td><?php echo $row['gender'] ?></td>
                                    <td><?php echo $row['aadharno'] ?></td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="editpatient.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" style="font-size:20px; color:black;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="deletepatient.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="font-size:20px; color:red;"></i></a></td>
                                </tr>
                            </tbody>
                            <?php } ?>

                            <script>
                              function searchfun(){
                                  let filter = document.getElementById('search').value.toUpperCase();
                                  let mytab = document.getElementById('mytable');
                                  let tr = mytab.getElementsByTagName('tr');

                                  for(var i=0;i<tr.length;i++){


                                      
                                          
                                              let td= tr[i].getElementsByTagName('td')[4];
                                              let td2= tr[i].getElementsByTagName('td')[1];
                                    
                                    
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

                                  }

                              }
                              
                                      
                                      
                                  
                              


                          </script>
                        </table>
                        
                    </div>
                  </div>
            </div>




        </div>
    </div>
    
</body>
</html> 