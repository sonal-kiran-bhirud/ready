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
        
        <?php
        
            include('../connectionn.php');
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

                
                

            $sql = "INSERT INTO `register` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `mobno`,`profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username','$password', '$mobno', '$profession', '$qualification', '$department', '$myfile')";

            $a = mysqli_query($conn, $sql); 



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
                            $sql3 = "INSERT INTO `nurse` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `mobno`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$mobno', '$profession', '$qualification', '$department', '$myfile')";
                            
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
            
            
            
        
            <label for="name">Staff Name:</label>
             <input type="text" name="name" class="form-control" id="name"><br>

             <label for="email">Email ID:</label>
             <input type="email" name="email" class="form-control" id="email"><br>

             <label for="address">Address :</label>
             <input type="text" name="address" class="form-control" id="address"><br>

             <label for="aadharno">Aadhar No :</label>
             <input type="number" name="aadharno" class="form-control" id="aadharno"><br>

             <label for="dateofbirth">Date of Birth:</label>
             <input type="date" name="dateofbirth" class="form-control" id="dateofbirth"><br>

             <label for="blood">blood grp :</label>
             <select name="blood">
                <option>select blood grp</option>
                <option value="A+ve">A+ve</option>
                <option value="A-ve">A-ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B-ve">B-ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="AB-ve">AB-ve</option>
                <option value="O+ve">O+ve</option>
                <option value="O-ve">O-ve</option>
             </select><br>
             

             <label for="gender">Gender :</label>
             <input type="radio" name="gender"  id="gender" value="male">Male 
             <input type="radio" name="gender" id="gender" value="female">Female<br>


             <label for="username">Username</label>
             <input type="text" name="username" class="form-control" id="username" placeholder="enter username"><br>

             <label for="password">Password</label>
             <input type="password" class="form-control" name="password"  id="password" placeholder="enter Password"><br>

             <label for="mobno">Mobile No :</label>
             <input type="number" class="form-control" name="mobno"  id="mobno" maxlength="10" placeholder="enter mobile number"><br>

             <label for="profession">Profession :</label>
             <select name="profession">
                <option>select profession</option>
                <option value="doctor">doctor</option>
                <option value="nurse">nurse</option>
                <option value="receptionist">receptionist</option>
                <option value="accountant">accountant</option>
                <option value="admin">admin</option>
               
                
             </select><br>

             <label for="qualification" >qualification</label>
             <input type="text" name="qualification" class="form-control" id="" >

             <label for="department" >department</label>
             <input type="text" name="department" class="form-control" id="" >

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


            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="myfile">Upload your Image:</label>
            <input type="file" class="form-control-file" name="myfile" id="myfile" placeholder="">
            </div>
            
            </div>

             <input type="submit" class="btn btn-primary" name="submit" value="submit">
             <input type="reset" name="reset" value="reset">
        </form>
       </div>
        
    </div>
</body>
</html>