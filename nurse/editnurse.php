<?php
session_start();
include('../connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM `nurse` WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
 
// echo($res);

$row = mysqli_fetch_assoc($res);
// echo $row['name'];

?>


<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
       
        body{
            background-image: url('images/re.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            background-attachment: fixed;
            width: 70%;

        }
        #form{
             font-size: 20px; 
        }
        .registration{
            border: 1px solid black;
            border-radius: 15px;
            padding: 25px;
            margin: 5% 15%;
            background-color: white;
            box-shadow: 10px 10px 15px #0c4b7b ;
        }
    </style>

    </head>
    <body>


    <header>
            <h1 class="text-center">Edit Nurse</h1>

        </header>
        
       
       <div class="container-fluid" width="50%">
       <div class="registration">
        <h2 style="text-align: center;color: purple;font-family: Arial, Helvetica, sans-serif;">Registration</h2>
        <form method="post" action ="updatenurse.php" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $id;?>">
            
        <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="<?php echo $row['name'];?>">

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="aadharno">Aadhar No. :</label>
            <input type="text" class="form-control" name="aadharno" id="aadharno" placeholder="1234-4567-7891" value="<?php echo $row['aadharno'];?>">
            </div>
            <div class="col-md-6 mb-3">
            <label for="contact">Conatct :</label>
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact number" value="<?php echo $row['contact'];?>">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="email">Email Id :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?php echo $row['email'];?>">
            </div>
            <div class="col-md-6 mb-3">
            <label for="profession">Profession:</label>
            <select name="profession" id="profession" class="form-control">
              <option value="admin" <?php if($row['profession']== 'admin'){ echo 'selected'; }?>>Admin</option>
              <option value="doctor" <?php if($row['profession']== 'doctor'){ echo 'selected'; }?>>Doctor</option>
              <option value="staff" <?php if($row['profession']== 'staff'){ echo 'selected'; }?>>Staff</option>
              <option value="nurse" <?php if($row['profession']== 'nurse'){ echo 'selected'; }?>>Nurse</option>
              <option value="receptionist" <?php if($row['profession']== 'receptionist'){ echo 'selected'; }?>>Receptionist</option>
              <option value="accountant" <?php if($row['profession']== 'accountant'){ echo 'selected'; }?>>accountant</option>

              
            </select>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                
            <label for="dateofbirth">Date of Birth :</label>
            <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" value="<?php echo $row['dateofbirth'];?>">
            </div>
            <div class="col-md-6 mb-3">
                
            <label for="blood">Choose a Blood Group:</label>
            <select name="blood" id="blood" class="form-control">
            <option value="A+ve" <?php if($row['blood']== 'A+ve'){ echo 'selected'; }?>>A+ve</option>
              <option value="A-ve" <?php if($row['blood']== 'A-ve'){ echo 'selected'; }?>>A-ve</option>
              <option value="B+ve" <?php if($row['blood']== 'B+ve'){ echo 'selected'; }?>>B+ve</option>
              <option value="B-ve" <?php if($row['blood']== 'B-ve'){ echo 'selected'; }?>>B-ve</option>
              <option value="AB+ve" <?php if($row['blood']== 'AB+ve'){ echo 'selected'; }?>>AB+ve</option>
              <option value="AB-ve" <?php if($row['blood']== 'AB-ve'){ echo 'selected'; }?>>AB-ve</option>
              <option value="O+ve" <?php if($row['blood']== 'O+ve'){ echo 'selected'; }?>>O+ve</option>
              <option value="O-ve" <?php if($row['blood']== 'O-ve'){ echo 'selected'; }?>>O-ve</option>
            </select>
            </div>
        </div>

       <div class="row">
            <div class="col-md-6 mb-3">
            <label for="qualification" >Qualification</label>
             <input type="text" name="qualification" class="form-control" id="qualification" value="<?php echo $row['qualification'];?>">
            </div>
            <div class="col-md-6 mb-3">
            
            <label for="department">Department :</label>
             <select name="department">
                <option>select department</option>
                <option value="neurology">Neurology</option>
                <option value="gynaecology">Gynaecology</option>
                <option value="cardiology">Cardiology</option>
                <option value="dermatology">Dermatology</option>
                <option value="radiology">Radiology</option>
                <option value="ortho">Ortho</option>
                <option value="dentistry">Dentistry</option>
               
                
             </select><br>
            </div>
        </div>    



        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="male" <?php echo ($row['gender']== 'male') ?  "checked" : "" ;  ?>> Male
        <input type="radio" name="gender" id="gender" value="female" <?php echo ($row['gender']== 'female') ?  "checked" : "" ;  ?>> Female
        <!--<input type="radio" name="gender" value="other"> Other-->

            <br>

            <label for="address">Address :</label>
            <input type="text" class="form-control" name="address" id="address" style="height: 60px;" value="<?php echo $row['address'];?>">

            
            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="username">Username :</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" value="<?php echo $row['username'];?>">
            
            </div>
            <div class="col-md-6 mb-3">
            <label for="experience">Experience :</label>
            <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter your number" value="<?php echo $row['experience'];?>">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="myfile">Upload your Image:</label>
            <input type="file" class="form-control-file" name="old_file" value="<?php echo $row['myfile'];?>">
            </div>
            
            <div class="col-md-6 mb-3">
            <label for="password">Password :</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo $row['password'];?>"><br>

            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="registrationdate">registration date:</label>
                <input type="text" name="registrationdate" value="<?php echo $row['dateofbirth'];?>" >
            
            </div>
            
            </div>

        </div>
        <input type="submit" class="btn btn-primary" name="update" value="submit">
             <input type="reset" name="reset" value="reset">

        </form>
       </div>
        
    </div>

       
       

    </body>
</html>






































    