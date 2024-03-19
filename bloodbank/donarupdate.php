<!Doctype html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    </head>
<body><?php 
session_start();
include('../connection.php');
if(isset($_POST['update'])){
    
    extract($_POST);

    $id = $_POST['id'];
   

    $sql = "UPDATE `blooddonation` SET `name`='$name',`email`='$email',`contact`='$contact',`blood`='$blood',`bloodquantity`='$bloodquantity',`height`='$height',`weight`='$weight',`dateofbirth`='$dateofbirth',`date`='$date', `prevdonation`='$prevdonation', `prevdonationmonth`='$prevdonationmonth' WHERE `id`='$id'";

    
    
     
   $res = mysqli_query($conn, $sql);
    if($res){
        echo '<script>
        $(document).ready(function(){
            Swal.fire({
                title: "Good job!",
                text: "Data updated successfully!",
                icon: "success",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.href = "donarlist.php"; // Redirect to view2.php after user clicks OK
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