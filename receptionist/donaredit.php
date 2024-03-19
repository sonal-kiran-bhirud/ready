<?php
session_start();
include('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM `bdonation` WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
 
// echo($res);

$row = mysqli_fetch_assoc($res);
// echo $row['name'];

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .registration{
            margin: 20px 10%;
            background-color: white;
            height: auto;
            padding: 10px;
            border: 2px solid purple;
            border-radius: 18px;
            line-height: 2.5;
            font-size: 20px;
        }
       
        h1{
          padding: 10px;
          text-align: center;
          color: White;
          font-family: Arial, Helvetica, sans-serif;
           background-color:purple;
           border-radius: 18px;
           margin: 10px 10px 0px 10px;
        }
        body{
          background-color:  #ffe6ff;
        }
        #btn{
            background-color: purple;
            color:White;
        }
        #btn a{
          color:White;
        }
        #btn:hover{
          background-color:White;
          color:purple;

        }
        #reset:hover{
          background-color:White;
          color:purple;

        }
        #btn:hover a{
          color:purple;

        }


    </style>

    </head>
    <body>
      <div class="container-fluid" width="50%">
              <div class="registration">
              
                <h1><img src="images/1600w-hbl5vlZh180.webp" alt="logo" style="height: 50px;float:left;"><i class="fa-solid fa-hand-holding-droplet" style="color:White;"></i> Blood Donation </h1>
                <hr style="color:White;">
                  <div class="container mb-2 mt-3 p-4" style="border-radius: 18px;border:2px solid purple;">
                      <form action="donarupdate.php" method="post" enctype="multipart/form-data" >

                      <p style="color: red; text-align: center;">Every blood donor is a lifesaver.</p>
                      <hr style="color: purple;">
                        <div class="row">
                          <div class="col-md-4">
                          <input type="hidden" id="id" name="id" value="<?php echo $id?>">
                            <label for="fname" class="form-label">FirstName</label>
                            <input type="text" class="form-control" name="fname" value="<?php echo $row['Fname'];?>" />
                          </div>
                          <div class="col-md-4">
                            <label for="mname" class="form-label">MiddleName</label>
                            <input type="text" class="form-control"  name="mname" value="<?php echo $row['Mname'];?>"/>
                          </div>
                          <div class="col-md-4">
                            <label for="lname" class="form-label">LastName</label>
                            <input type="text" class="form-control" name="lname" value="<?php echo $row['Lname'];?>"/>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $row['Email'];?>"/>
                          </div>
                          <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="contact" value="<?php echo $row['Contact'];?>"/>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 ">
                            <label for="blood" class="form-label">Bloodgroups</label>
                          
                          <select class="form-control" name="blood">
                          <option value="Select Blood Group">Select Blood Group</option>
                            <option value="O+ve"<?php if($row['Blood']== 'O+ve'){ echo 'selected';}?>>O+ve</option>
                            <option value="O-ve"<?php if($row['Blood']== 'O-ve'){ echo 'selected';}?>>O-ve</option>
                            <option value="B+ve"<?php if($row['Blood']== 'B+ve'){ echo 'selected';}?>>B+ve</option>
                            <option value="B-ve"<?php if($row['Blood']== 'B-ve'){ echo 'selected';}?>>B-ve</option>
                            <option value="AB+ve"<?php if($row['Blood']== 'AB+ve'){ echo 'selected';}?>>AB+ve</option>
                            <option value="AB-ve"<?php if($row['Blood']== 'AB-ve'){ echo 'selected';}?>>AB-ve</option>
                            <option value="A+ve"<?php if($row['Blood']== 'A+ve'){ echo 'selected';}?>>A+ve</option>
                            <option value="A-ve"<?php if($row['Blood']== 'A-ve'){ echo 'selected';}?>>A-ve</option>
                          </select>
                          </div>
                          
                          <div class="col-md-6">
                            <label for="donate" class="form-label">Donar Donated Blood(ml)-</label>
                            <input type="text" class="form-control" name="donate"/>
                          </div>
                        </div>
                          <div class="row">
                                <div class="col-md-6">
                                    <label for="height" class="form-label">Height</label>
                                    <input type="text" class="form-control" name="height" value="<?php echo $row['Height'];?>"/>
                                </div>
                                <div class="col-md-6">
                                  <label for="weight" class="form-label">weight</label>
                                  <input type="text" class="form-control" name="weight" value="<?php echo $row['Weight'];?>"/>
                                </div>
                          </div>
                        

                          <div class="row">
                            <div class="col-md-6">
                              <label for="dob">Date of Birth</label>
                              <input type="date" name="dob" class="form-control" value="<?php echo $row['Dob'];?>">
                            </div>
                            <div class="col-md-6">
                              <label for="date">Blood Donate Date</label>
                              <input type="date" name="date" class="form-control" value="<?php echo $row['Date'];?>">
                            </div>
                          </div>

                          
                          <div class="col-md-12">
                            <label for="dona">Have you Donate previously?</label>
                              <div class="section1">
                              
                              <input type="radio" value="Yes" <?php echo ($row['Donate previsiously']== 'Yes') ? "checked" : "" ; ?> name="dona" id="input" height="18px">
                              <label for="id1">Yes</label>
                              
                              <input type="radio" value="No" <?php echo ($row['Donate previsiously']== 'No') ? "checked" : "" ; ?> name="dona" id="input">
                              <label for="id2">No</label>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <input type="checkbox" name="check" id="input">
                            <label for="check">I have read and understood all the information presented.</label><br><br>
                          
                          </div>
                          <hr style="color: purple;">
                    
                          <!-- <div class="row justify-content-center">
                            <div class="col-md-2">
                              <input type="submit" class="btn btn-primary form-control p-2 fs-5" name="submit" value="Submit">
                            </div>
                            <div class="col-md-2">
                              <input type="reset" class="btn btn-danger form-control p-2 fs-5" name="reset" value="Reset">
                            </div>
                            <div class="col-md-2">
                              <button  class="btn btn-primary form-control">
                             <a href="#" onclick="history.back(); return false;" style="color:White;" class="p-2 fs-5 text-decoration-none"><i class="fas fa-arrow-left"></i> Back</a>
                             </button>
                            </div>
                          </div> -->
                          <div class="row justify-content-center">
                            <div class="col-md-2">
                              <input type="submit" class="btn btn-primary form-control p-2 fs-5" name="update" value="Submit"id="btn">
                            </div>
                            <div class="col-md-2">
                              <input type="reset" class="btn btn-danger form-control p-2 fs-5" name="reset" value="Reset" id="reset">
                            </div>
                            <div class="col-md-2">
                              <button  class="btn btn-primary form-control" id="btn">
                             <a href="#" onclick="history.back(); return false;" class="p-2 fs-5 text-decoration-none"><i class="fas fa-arrow-left"></i> Back</a>
                             </button>
                            </div>
                          </div>
                    </form>
                    
                  </div>
                
              </div>
              
          </div>
</body>
</html>