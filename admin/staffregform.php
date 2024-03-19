
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
    <script type="text/javascript">
        function preventBack(){
        window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
       

    </script>

    

    <style>
       
        body{
            background-image: url('../images/re.jpeg');
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
        
            include('../connection.php');
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
                
                $registrationdate = $_POST['registrationdate'];
                $registrationdate=date("d-m-Y");
                //print_r($registrationdate);
                
                $experience= $_POST['experience'];
                $contact = $_POST['contact'];
                $profession = $_POST['profession'];
                $qualification = $_POST['qualification'];
                $department = $_POST['department'];
                
                 $myfile = $_FILES['myfile']['name'];
                 $tmpmyfile = $_FILES['myfile']['tmp_name'];
                 $folder="../uploads/".$myfile;



                $sqla = "SELECT * FROM `register` where `aadharno`= '$aadharno' ";
                $resa = mysqli_query($conn,$sqla);
                // print_r($resa);
                // $rowa = mysqli_fetch_assoc($resa);
                //print_r($rowa);

                
                //print_r($res_a);
                // if($rowa ){// $aadharno ==$row_a['aadharno']){
                //     echo "this is done";
                //     if($rowa['aadharno']==$aadharno){
                    if (mysqli_num_rows($resa) > 0) {
                        echo "aadhar number already exists. Please choose another.";
                        echo "already registered!";
                    }else{
                        
                        //print_r("In Else");
                        $sql = "INSERT INTO `register` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `registrationdate`, `experience`, `contact`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$registrationdate', '$experience', '$contact', '$profession', '$qualification', '$department', '$myfile')";
    
                        $a = mysqli_query($conn, $sql);
                        
                        // print_r($a);
                        //move_uploaded_file($tmpmyfile,  $folder);

                        
                        
                        // $target_path = "../upload/"; // Specify the target directory
                        // $target_path = $target_path . basename($_FILES['myfile']['name']);
                
                        // if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
                        //     echo "The file " . basename($_FILES['myfile']['name']) . " has been uploaded";
                        // } else {
                        //     echo "There was an error uploading the file, please try again!";
                        // }
    
    
                        $sql3 = "INSERT INTO `aadhar` ( `name`, `registrationdate`, `role`, `aadharno`, `department`) VALUES ('$name', '$registrationdate', '$profession', '$aadharno', '$department')"; 
                        
                        $res3 = mysqli_query($conn,$sql3);
    
    
    
    
    
    
    
                        if($a){
                            $sql = "SELECT * FROM `register` WHERE `profession` = '$profession' ";
                            $res = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($res);
                            
                            //print_r($row);
                            /*$sql2 = "INSERT INTO `aadhar` (`id`, `name`, `role`, `aadharno`, `department`) VALUES ('$id','$name', '$role', '$aadharno', '$department')"; 
                            $res2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_assoc($res2);*/
        
        
                            
        
                            if($row){
                                //echo "inside row";
        
                                if($row['profession']== 'admin'){
                
                                    $sqle = "INSERT INTO `admin` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `registrationdate`, `experience`, `contact`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$registrationdate', '$experience', '$contact', '$profession', '$qualification', '$department', '$myfile')";
                                    
                                    $e = mysqli_query($conn, $sqle);
                                    move_uploaded_file($tmpmyfile,  $folder);  
                                    //print_r($d);
                
                                    if($e){
                                        echo '<script>
                                        $(document).ready(function(){
                                            Swal.fire({
                                                title: "Registered!",
                                                text: "Data inserted successfully!",
                                                icon: "success",
                                                confirmButtonText: "OK"
                                            }).then(function() {
                                                window.location.href = "viewadmin.php"; // Redirect to login.php after user clicks OK
                                            });
                                        });
                                    </script>';
                                    }
                                    else{
                                        echo "fail";
                                    }
                                }
                                
                                
                                elseif($row['profession']== 'doctor'){
                
                                    $sql1 = "INSERT INTO `doctor` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `registrationdate`, `experience`, `contact`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$registrationdate', '$experience', '$contact', '$profession', '$qualification', '$department', '$myfile')";
                                    
                                    $d = mysqli_query($conn, $sql1);
                                    move_uploaded_file($tmpmyfile,  $folder);  
                                    //print_r($d);
                
                                    if($d){
                                        echo '<script>
                                        $(document).ready(function(){
                                            Swal.fire({
                                                title: "Registered!",
                                                text: "Data inserted successfully!",
                                                icon: "success",
                                                confirmButtonText: "OK"
                                            }).then(function() {
                                                window.location.href = "../doctor/viewdoctors.php"; // Redirect to login.php after user clicks OK
                                            });
                                        });
                                    </script>';
                                    }
                                    else{
                                        echo "fail";
                                    }
                                }
                                
                                elseif($row['profession']== 'receptionist'){
                                    $sql2 = "INSERT INTO `receptionist` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `registrationdate`, `experience`, `contact`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$registrationdate', '$experience', '$contact', '$profession', '$qualification', '$department', '$myfile')";
                                    
                                    $r = mysqli_query($conn, $sql2);
                                    move_uploaded_file($tmpmyfile,  $folder);  

                                    
                                    if($r){
                                        echo '<script>
                                        $(document).ready(function(){
                                            Swal.fire({
                                                title: "Registered!",
                                                text: "Data inserted successfully!",
                                                icon: "success",
                                                confirmButtonText: "OK"
                                            }).then(function() {
                                                window.location.href = "../receptionist/viewreceptionist.php"; // Redirect to login.php after user clicks OK
                                            });
                                        });
                                    </script>';
                                    }
                                    else{
                                        echo "fail";
                                    }
                                }
                                
                                
                                elseif($row['profession']== 'nurse'){
                                    $sql3 = "INSERT INTO `nurse` (`name`, `email`, `address`, `aadharno`, `dateofbirth`, `blood`, `gender`, `username`, `password`, `registrationdate`, `experience`, `contact`, `profession`, `qualification`, `department`, `myfile`) VALUES ('$name', '$email', '$address', '$aadharno', '$dateofbirth', '$blood', '$gender', '$username', '$password', '$registrationdate', '$experience', '$contact', '$profession', '$qualification', '$department', '$myfile')";
                                    
                                    $n = mysqli_query($conn, $sql3); 
                                    move_uploaded_file($tmpmyfile,  $folder);  

                                    

                
                                    if($n){
                                        echo '<script>
                                        $(document).ready(function(){
                                            Swal.fire({
                                                title: "Registered!",
                                                text: "Data inserted successfully!",
                                                icon: "success",
                                                confirmButtonText: "OK"
                                            }).then(function() {
                                                window.location.href = "../nurse/viewnurses.php"; // Redirect to login.php after user clicks OK
                                            });
                                        });
                                    </script>';
                                    }
                                    else{
                                        echo "fail";
                                    }
                                }
                
                
                
                            }
        
                            
                            
                        }
                        
                        
                    }
                

                
               ///[^0-9]/g,'' 
                
            

            

            


                

        
        }
        ?>
        <?php
        // $target_path = "../upload/"; // Specify the target directory
        // $target_path = $target_path . basename($_FILES['myfile']['name']);

        // if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
        //     echo "The file " . basename($_FILES['myfile']['name']) . " has been uploaded";
        // } else {
        //     echo "There was an error uploading the file, please try again!";
        // }
        ?> 



<div class="container-fluid" width="50%">
       <div class="registration">
        <h2 style="text-align: center;color: purple;font-family: Arial, Helvetica, sans-serif;">Registration</h2>
        <form method="post" action ="#" enctype="multipart/form-data" >
            
        <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="aadharno">Aadhar No. :</label>
            <input type="text" class="form-control" name="aadharno" id="aadharno" oninput="this.value=this.value.replace(/[^0-9]/g,'')"    size="12" minlength="12" maxlength="12" placeholder="1234-4567-7891" required>
            </div>
            
            <div class="col-md-6 mb-3">
            <label for="contact">Contact :</label>
            <input type="text" class="form-control" name="contact" id="contact"   size="10" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="email">Email Id :</label>
            <input type="email" class="form-control" name="email" required id="email" placeholder="Enter your email">
            </div>
            <div class="col-md-6 mb-3">
            <label for="profession">Profession:</label>
            <select name="profession" id="profession" class="form-control" required>
              <option value="admin">Admin</option>
              <option value="doctor">Doctor</option>
              
              <option value="receptionist">Receptionist</option>
              <option value="nurse">Nurse</option>
              
              <option value="accountant">accountant</option>
              <option value="staff">Staff</option>

              
            </select>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                
            <label for="dateofbirth">Date of Birth :</label>
            <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" required>
            </div>
            <div class="col-md-6 mb-3">
                
            <label for="blood">Choose a Blood Group:</label>
            <select name="blood" id="blood" class="form-control" required>
            
              <option value="A+ve">A+ve</option>
              <option value="A-ve">A-ve</option>
              <option value="B+ve">B+ve</option>
              <option value="B-ve">B-ve</option>
              <option value="AB+ve">AB+ve</option>
              <option value="AB-ve">AB-ve</option>
              <option value="O+ve">O+ve</option>
              <option value="O-ve">O-ve</option>
            </select>
            </div>
        </div>

       <div class="row">
            <div class="col-md-6 mb-3">
            <label for="qualification" >Qualification</label>
             <input type="text" name="qualification" class="form-control" id="qualification" required>
            </div>
            <div class="col-md-6 mb-3">
            
            <label for="department">Department :</label>
             <select name="department" required>
                
                <option value="neurology">Neurology</option>
                <option value="gynaecology">Gynaecology</option>
                <option value="cardiology">Cardiology</option>
                <option value="dermatology">Dermatology</option>
                <option value="radiology">Radiology</option>
                <option value="orthology">Orthology</option>
                <option value="dentistry">Dentistry</option>
               
                
             </select><br>
            </div>
        </div>    



        <label for="gender" required>Gender:</label>
        <input type="radio" name="gender"  value="male"> Male
        <input type="radio" name="gender"  value="female"> Female
        <!--<input type="radio" name="gender" value="other"> Other-->

            <br>

            <label for="address" required>Address :</label>
            <input type="text" class="form-control" name="address" id="address" style="height: 60px;">

            
            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="username">Username :</label>
            <input type="text" class="form-control" name="username" id="username" required placeholder="Enter your Username">
            
            </div>
            <div class="col-md-6 mb-3">
            <label for="experience">Experience :</label>
            <input type="text" class="form-control" required name="experience" id="experience" placeholder="Enter your number">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
            <label for="myfile">Upload your Image:</label>
            <input type="file" class="form-control-file" name="myfile" id="myfile" placeholder="" accept="image/*;capture=camera">

            <script>
                // const myInput = document.getElementById('myfile');

                // function sendPic() {
                //     const file = myInput.files[0];
                //     // Send the file here (e.g., using FormData and XHR)
                //     // or handle it as needed.
                // }

                // myInput.addEventListener('change', sendPic, false);

            </script>
            
            </div>
            <div class="col-md-6 mb-3">
            <label for="password">Password :</label>
            <input type="password" class="form-control" name="password" id="password" required><br>

            </div>

            <div class="row d-none">
            <div class="col-md-6 mb-3">
                <label for="registrationdate"></label>
                <input type="text" name="registrationdate">
            
            </div>
            
            </div>

        </div>

        <!-- <button type="submit" class="btn btn-primary" name="submit" value="submit">submit</button> -->
            <input type="submit" name="submit" id="submit" class="btn btn-primary">
             <input type="reset" name="reset" value="reset">

        </form>
       </div>
        
    </div>



    <!-- <script>
      document
        .getElementById("name")
        .addEventListener("input", function (event) {
          var nameInput = event.target.value;
          var nameRegex = /^[A-Za-z\s]+$/;
          var nameValidation = document.getElementById("nameValidation");

          if (!nameRegex.test(nameInput)) {
            nameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            nameValidation.textContent = "";
          }
        });

      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          var inputs = document.querySelectorAll("input");
          var isValid = true;

          inputs.forEach(function (input) {
            if (!input.checkValidity()) {
              isValid = false;
            }
          });

          if (!isValid) {
            event.preventDefault();
          }
        });
    </script>

    <script>
      //aadhar field valiadtion
      document
        .getElementById("aadhar")
        .addEventListener("input", function (event) {
          var aadharno = event.target.value;
          var aadharno = /^[A-Za-z\s]+$/;
          var aadharnoValidation =
            document.getElementById("aadharnoValidation");

          if (!nameRegex.test(nameInput)) {
            nameValidation.textContent = "aadhar must contains only numbers.";
          } else {
            nameValidation.textContent = "";
          }
        });

      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          var inputs = document.querySelectorAll("input");
          var isValid = true;

          inputs.forEach(function (input) {
            if (!input.checkValidity()) {
              isValid = false;
            }
          });

          if (!isValid) {
            event.preventDefault();
          }
        });
    </script>

    <script>
      //email filed Valiadtion
      document
        .getElementById("email")
        .addEventListener("input", function (event) {
          var emailInput = event.target.value;
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          var emailValidation = document.getElementById("emailValidation");

          if (!emailRegex.test(emailInput)) {
            emailValidation.textContent =
              "email must contains only lowercaseletters.";
          } else {
            emailValidation.textContent = "";
          }
        });

      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          var inputs = document.querySelectorAll("input");
          var isValid = true;

          inputs.forEach(function (input) {
            if (!input.checkValidity()) {
              isValid = false;
            }
          });

          if (!isValid) {
            event.preventDefault();
          }
        });
    </script>
    <script>
      //password field Validations
      document
        .getElementById("password")
        .addEventListener("input", function (event) {
          var passwordInput = event.target.value;
          var passwordRegex =
            /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
          var passwordValidation =
            document.getElementById("passwordValidation");

          if (!passwordRegex.test(passwordInput)) {
            passwordValidation.textContent =
              "Password must contain at least one digit, one lowercase letter, one uppercase letter, one special character, and be at least 8 characters long.";
          } else {
            passwordValidation.textContent = "";
          }
        });

      // Form submission validation
      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          var inputs = document.querySelectorAll("input");
          var isValid = true;
          inputs.forEach(function (input) {
            if (!input.checkValidity()) {
              isValid = false;
            }
          });

          if (!isValid) {
            event.preventDefault();
          }
        });
    </script> -->
</body>
</html>