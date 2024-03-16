<!DOCTYPE html>
<html lang="en">
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


    <title>Document</title>
    <style>
          *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-image: url('images/loginbackground1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #left-cont{
            padding: 10%;
        }
        #form{
             font-size: 20px; 
        }
        .login{
            border: 1px solid black;
            border-radius: 15px;
            padding: 25px;
            background-color:  #A7CCDE;
            color: white;
            box-shadow: 10px 10px 15px #0c4b7b ;
        }
        #username,#password{
            background-color: transparent;
        }
    </style>
</head>
<body>
    
    <?php 
session_start();
include('connectionn.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    /* $profession = $_POST['profession'];
$sql = "SELECT * FROM `register` WHERE `username` = '$username' AND `password` = '$password'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);*/
$sql = "SELECT * FROM `register` WHERE `username` = '$username' AND `password` = '$password'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
//print_r ($row);

if($row){
   
    $_SESSION['aadharno'] = $row['aadharno'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    echo "some";

    if($row['profession']== 'admin'){
       
        header('location:admin/admindashboard.php');

    }
    elseif($row['profession']== 'doctor'){
       
        header('location:doctor/doctordashboard.php');

    }
    elseif($row['profession']== 'nurse'){

        header('location:nurse/nursedashboard.php');

    }
    elseif($row['profession']== 'receptionist'){

        header('location:receptionist/receptionistdashboard.php');

    }
    
}
else{
        
        echo '<script>
        $(document).ready(function(){
            Swal.fire({
                title: "Failed to Login!",
                text: "Invalid credentials!",
                icon: "warning",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.href = "login.php"; // Redirect to login.php after user clicks OK
            });
        });
    </script>';
}

}

/*if($row){
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name']; 
    $_SESSION['id'] = $row['id'];
    // echo  $_SESSION['email'];  die; 
    header('location:doctor.php');

}
else{
    echo "Wrong email and password";
}*/
?>




<div class="container-fluid" style="margin: 0px; padding: 0px;">
        <div class="row" style="margin: 0px; padding: 0px;">
            <!-- <div class="col-7" style="margin: 0px; padding: 0px;">
                <img src="images/backlogin.jpg" alt="body" width="100%" style="margin-right: 0px;">
            </div> -->
        
        
            <div class="col-sm-7" id="left-cont">
                <img src="images/loginpro.jpg" alt="profile" class="float-end" height="150px">
                
                <div class="login">
                <h2>Hello, <br>
                Welcome Back</h2>
                
                <form method="post" action="#">  
                    <div class="main">



                    Username: <input type="text" name="username" id="username" class="form-control" placeholder="Enter username"><br><br>
            
                    
                    Password: <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                    <!-- Password: <input type="text" name="profession" id="profession" placeholder="Enter your password"> -->

                <input type="submit" class="btn btn-success" name="login" id="login">Login 
            </div>
    </form>
    
</body>
</html>