<!Doctype html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    </head>
<body>
<?php 

include('../connection.php');
if(isset($_POST['updatestaff'])){
    // print_r($_POST);die;
    extract($_POST);
// print_r($_FILES);die;
    $id = $_POST['id'];
    $old_file = $_POST['old_file'];
    
    $myfile = $_FILES["myfile"]["name"];
    $tmpmyfile = $_FILES["myfile"]["tmp_name"];
    $folder = "uploads/" .$myfile;

   

    $sql = "UPDATE `register` SET `name`='$name',`email`='$email', `address`='$address', `aadharno`='$aadharno', `dateofbirth`='$dateofbirth' , `blood`='$blood', `gender`='$gender', `username`='$username', `password`='$password', `contact`='$contact', `profession`='$profession', `qualification`='$qualification', `department`='$department',`myfile`='myfile' WHERE `id` = '$id'"; 
   $res = mysqli_query($conn,$sql); 
    if($res){
        echo '<script>
        $(document).ready(function(){
            Swal.fire({
                title: "Good job!",
                text: "Data updated successfully!",
                icon: "success",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.href = "viewstaff.php"; // Redirect to viewdoctors.php after user clicks OK
            });
        });
    </script>';
    }
    else{
        echo "fail to update data";
    }
}


?>

</body>
</html>