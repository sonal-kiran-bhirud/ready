<?php
session_start();
include('../connectionn.php');

if(isset($_POST['submit'])){


$pname=$_POST['pname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$indate=$_POST['indate'];
$outdate=$_POST['outdate'];
$rno=$_POST['rno'];
$adhar=$_POST['adhar'];


 $sql="INSERT INTO ipd ( `pname`, `age`, `gender`, `contact`, `address`, `indate`, `outdate`, `rno`, `adhar`) VALUES ('$pname','$age','$gender','$contact','$address','$indate','$outdate','$rno','$adhar')";

$query= mysqli_query($conn, $sql);


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IPD Patient Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
   body {
        background-color: #f8f9fa; 
        box-shadow: 4px 4px 10px grey; 
    }
    .heading {
        background-color: #007bff; 
        color: #fff;
        padding: 10px;
        margin-bottom: 20px;
    }
    .navbar-nav .nav-link:hover {
        background-color: blue;
        color: black;
    }
    .footer {
        background-color: #343a40;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }
    .footer a {
        color: #fff;
    }
</style>
</head>
<body>



<div class="container" style="width:800px;background-color:lavender">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><h4 style="padding-left:210px">Health Care Center</h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <div class="heading text-center">
        <h1>IPD Patient Registration Form</h1>
    </div>
    <form method="post" action ="#" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="patientname" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="patientname" name="patientname" placeholder="Enter patient's name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter patient's age" required>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-check">
                            <label for="gender">Gender :</label>
                            <input type="radio" name="gender"  id="gender" value="male">Male 
                            <input type="radio" name="gender" id="gender" value="female">Female
                            <input type="radio" name="gender" id="gender" value="other">other<br>
                        </div>
                    </div>

                </div>
            
            
                <div class="col-md-6 mb-3">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" required>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter patient's address" required></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fromdate" class="form-label">In-date</label>
                <input type="date" class="form-control" name="fromdate" id="fromdate" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="todate" class="form-label">Out-date</label>
                <input type="date" name="todate"class="form-control" id="todate" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="roomno" class="form-label">Room Number</label>
            <input type="text" class="form-control" id="roomno" name="roomno" placeholder="Enter room number" required>
        </div>
        <div class="mb-3">
            <label for="aadharno" class="form-label">Aadhar Card</label>
            <input type="text" class="form-control" id="aadharno" name="aadharno" placeholder="Enter Aadhar card number" required>
        </div>
       
    
    <footer class="footer">
    <div class="container">
    <input type="checkbox" name="check" id="check"> 


        By submitting this form, I hereby declare that the information provided above is accurate and true to the best of my knowledge.
        </label>
    </div><br>
    <input type="submit" name="submit"  value="submit" class="btn btn-primary "></button>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" class="btn btn-primary" name="reset"  value="reset">
</footer>
</div>
</form>

</body>
</html>