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
       
        body{
            background-image: url('images/re.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            background-attachment: fixed;
            width: 70%;

        }
      
        
    </style>

    </head>
    <body>
        
        <?php
        
            include('connectionn.php');
            if(isset($_POST['submit'])){
                //print_r($_POST);die;

                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $aadharno=$_POST['aadharno'];
                $dateofbirth=$_POST['dateofbirth'];

                $blood = $_POST['blood'];
                $gender = $_POST['gender'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $mobno = $_POST['mobno'];
                $profession = $_POST['profession'];
                $qualification = $_POST['qualification'];
                $department = $_POST['department'];
                
                 $myfile = $_FILES['myfile']['name'];
                 $tmpmyfile = $_FILES['myfile']['tmp_name'];
                 $folder="uploads/".$myfile;
                
                

                $sql = "INSERT INTO `register` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `mobno`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$mobno', '$profession', '$qualification', '$department', '$myfile')";

            $a = mysqli_query($conn, $sql);


            
            //print_r($a);

            move_uploaded_file($tmpmyfile,  $folder);

            


            if($a){
                $sqll = "SELECT * FROM `register` WHERE `profession` = '$profession' ";
                $res = mysqli_query($conn,$sqll);
                $row = mysqli_fetch_assoc($res);

                if($row){

                    if($row['profession']== 'doctor'){
    
                        $sql1 = "INSERT INTO `doctor` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `mobno`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$mobno', '$profession', '$qualification', '$department', '$myfile')";
                        
                        $d = mysqli_query($conn, $sql1); 
    
                        if($d){
                            echo '<script>
                            $(document).ready(function(){
                                Swal.fire({
                                    title: "Registered!",
                                    text: "Data inserted successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                }).then(function() {
                                    window.location.href = "viewdoctors.php"; // Redirect to login.php after user clicks OK
                                });
                            });
                        </script>';
                        }
                        else{
                            echo "fail";
                        }
                    }
                    
                    elseif($row['profession']== 'receptionist'){
                        $sql2 = "INSERT INTO `receptionist` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `mobno`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$mobno', '$profession', '$qualification', '$department', '$myfile')";
                        
                        $r = mysqli_query($conn, $sql2);
                        
                        if($r){
                            echo '<script>
                            $(document).ready(function(){
                                Swal.fire({
                                    title: "Registered!",
                                    text: "Data inserted successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                }).then(function() {
                                    window.location.href = "viewreceptionist.php"; // Redirect to login.php after user clicks OK
                                });
                            });
                        </script>';
                        }
                        else{
                            echo "fail";
                        }
                    }
                    
                    
                    elseif($row['profession']== 'nurse'){
                        $sql3 = "INSERT INTO `nurse` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `experience` `mobno`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$experience', '$mobno', '$profession', '$qualification', '$department', '$myfile')";
                        
                        $n = mysqli_query($conn, $sql3); 
    
                        if($n){
                            
                            echo '<script>
                            $(document).ready(function(){
                                Swal.fire({
                                    title: "Registered!",
                                    text: "Data inserted successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                }).then(function() {
                                    window.location.href = "viewnurses.php"; // Redirect to login.php after user clicks OK
                                });
                            });
                        </script>';
                        }
                        else{
                            echo "there is some interuption";
                        }
                    }
    
    
    
                }
                
            }

        
        }
        ?>



<div class="container-fluid" width="50%">
       <div class="registration">
        <h2 style="text-align: center;color: purple;font-family: Arial, Helvetica, sans-serif;">Registration</h2>
        <form method="post" action ="#" enctype="multipart/form-data">
            
        <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="aadharno">Aadhar No. :</label>
            <input type="text" class="form-control" name="aadharno" id="aadharno" placeholder="1234-4567-7891">
            </div>
            <div class="col-md-6 mb-3">
            <label for="mobno">Conatct :</label>
            <input type="text" class="form-control" name="mobno" id="mobno" placeholder="Enter your number">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="email">Email Id :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="col-md-6 mb-3">
            <label for="profession">Profession:</label>
            <select name="profession" id="profession" class="form-control">
              <option value="admin">Admin</option>
              <option value="doctor">Doctor</option>
              <option value="staff">Staff</option>
              <option value="nurse">Nurse</option>
              <option value="receptionist">Receptionist</option>
              <option value="accountant">accountant</option>

              
            </select>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                
            <label for="dateofbirth">Date of Birth :</label>
            <input type="date" class="form-control" name="dateofbirth" id="dateofbirth">
            </div>
            <div class="col-md-6 mb-3">
                
            <label for="blood">Choose a Blood Group:</label>
            <select name="blood" id="blood" class="form-control">
            <option value="">Select blood group</option>
              <option value="A+ve">A+ve</option>
              <option value="B+ve">B+ve</option>
              <option value="O+ve">O+ve</option>
              <option value="A-ve">A-ve</option>
              <option value="B-ve">B-ve</option>
              <option value="O-ve">O-ve</option>
              <option value="AB-ve">AB-ve</option>
              <option value="AB+ve">AB+ve</option>
            </select>
            </div>
        </div>

       <div class="row">
            <div class="col-md-6 mb-3">
            <label for="qualification" >Qualification</label>
             <input type="text" name="qualification" class="form-control" id="qualification" >
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
        <input type="radio" name="gender" id="gender" value="male"> Male
        <input type="radio" name="gender" id="gender" value="female"> Female
        <!--<input type="radio" name="gender" value="other"> Other-->

            <br>

            <label for="address">Address :</label>
            <input type="text" class="form-control" name="address" id="address" style="height: 60px;">

            
            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="username">Username :</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username">
            
            </div>
            <div class="col-md-6 mb-3">
            <label for="experience">Experience :</label>
            <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter your number">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="myfile">Upload your Image:</label>
            <input type="file" class="form-control-file" name="myfile" id="myfile" placeholder="">
            
            </div>
            <div class="col-md-6 mb-3">
            <label for="password">Password :</label>
            <input type="password" class="form-control" name="password" id="password"><br>

            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            
            </div>
            
            </div>

        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="submit">
             <input type="reset" name="reset" value="reset">

        </form>
       </div>
        
    </div>
</body>
</html>