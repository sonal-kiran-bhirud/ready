<?php
session_start();
include('../connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM `register` WHERE id = '$id'";
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

    </head>
    <body>


    <header>
            <h1 class="text-center">Edit staff</h1>

        </header>
        
       <div style="width:50%;margin:auto;">
       <form action="updatestaff.php" method="post" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $id;?>">

             <label for="name">Doctor Name:</label>
             <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name'];?>"><br>

             <label for="email">Email ID:</label>
             <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'];?>"><br>

             <label for="address">Address :</label>
             <input type="text" name="address" class="form-control" id="address" value="<?php echo $row['address'];?>"><br>

             <label for="aadharno">Aadhar No :</label>
             <input type="number" name="aadharno" class="form-control" id="aadharno" value="<?php echo $row['aadharno'];?>"><br>

             <label for="dateofbirth">Date of Birth:</label>
             <input type="date" name="dateofbirth" class="form-control" id="dateofbirth" value="<?php echo $row['dateofbirth'];?>"><br>

             <label for="blood">blood grp :</label>
             <select name="blood">
             <option value="A+ve" <?php if($row['blood']== 'A+ve'){ echo 'selected'; }?>>A+ve</option>
              <option value="A-ve" <?php if($row['blood']== 'A-ve'){ echo 'selected'; }?>>A-ve</option>
              <option value="B+ve" <?php if($row['blood']== 'B+ve'){ echo 'selected'; }?>>B+ve</option>
              <option value="B-ve" <?php if($row['blood']== 'B-ve'){ echo 'selected'; }?>>B-ve</option>
              <option value="AB+ve" <?php if($row['blood']== 'AB+ve'){ echo 'selected'; }?>>AB+ve</option>
              <option value="AB-ve" <?php if($row['blood']== 'AB-ve'){ echo 'selected'; }?>>AB-ve</option>
              <option value="O+ve" <?php if($row['blood']== 'O+ve'){ echo 'selected'; }?>>O+ve</option>
              <option value="O-ve" <?php if($row['blood']== 'O-ve'){ echo 'selected'; }?>>O-ve</option>
             </select><br>
             

             <label for="gender">Gender :</label>
             <input type="radio" name="gender"  id="gender" value="male"  <?php echo ($row['gender']== 'male') ?  "checked" : "" ;  ?>>Male 
             <input type="radio" name="gender" id="gender" value="female"  <?php echo ($row['gender']== 'female') ?  "checked" : "" ;  ?>>Female<br>


             <label for="username">Username</label>
             <input type="text" name="username" class="form-control" id="username" value="<?php echo $row['username'];?>" placeholder="enter username"><br>

             <label for="password">Password</label>
             <input type="password" class="form-control" name="password"  id="password" value="<?php echo $row['password'];?>" placeholder="enter Password"><br>

             <label for="contact">Mobile No :</label>
             <input type="number" class="form-control" name="contact"  id="contact" maxlength="10" value="<?php echo $row['contact'];?>" placeholder="enter mobile number"><br>

             <label for="profession">Profession :</label>
             <select name="profession">
                <option>select profession</option>
                <option value="doctor" <?php if($row['profession']== 'doctor'){ echo 'selected'; }?>>doctor</option>
                <option value="nurse" <?php if($row['profession']== 'nurse'){ echo 'selected'; }?>>nurse</option>
                <option value="receptionist" <?php if($row['profession']== 'receptionist'){ echo 'selected'; }?>>receptionist</option>
                <option value="accountant" <?php if($row['profession']== 'accountant'){ echo 'selected'; }?>>accountant</option>
                <option value="admin" <?php if($row['profession']== 'admin'){ echo 'selected'; }?>>admin</option>
               
                
             </select><br>

             <label for="qualification" >qualification</label>
             <input type="text" name="qualification" class="form-control" id="" value="<?php echo $row['qualification'];?>"  >

             <label for="department" >department</label>
             <select name="department">
                <option>select profession</option>
                <option value="neurology" <?php if($row['deparment']== 'neurology'){ echo 'selected'; }?>>neurology</option>
                
                <option value="gynaecology" <?php if($row['deparment']== 'gynaecology'){ echo 'selected'; }?>>gynaecology</option>
                
                <option value="cardiology" <?php if($row['deparment']== 'cardiology'){ echo 'selected'; }?>>cardiology</option>
                
                <option value="dermatology" <?php if($row['deparment']== 'dermatology'){ echo 'selected'; }?>>dermatology</option>
                
                <option value="radiology" <?php if($row['deparment']== 'radiology'){ echo 'selected'; }?>>radiology</option>
                
                <option value="ortho" <?php if($row['deparment']== 'ortho'){ echo 'selected'; }?>>ortho</option>
                <option value="dentistry" <?php if($row['deparment']== 'dentistry'){ echo 'selected'; }?>>dentistry</option>
             

             <input type="file" name="myfile">Myfile
             <input type="text" name="old_file" value="<?php echo $row['myfile'];?>">


             <input type="submit" name="updatestaff" value="submit">
             <input type="reset" name="reset" value="reset">


        </form>
        </div>

    </body>
</html>