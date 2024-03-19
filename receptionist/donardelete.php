<!Doctype html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    </head>
<body>
<?php 
include('connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM `bdonation` WHERE `id` = '$id'";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo '<script>
        $(document).ready(function(){
            Swal.fire({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform deletion
                    
                    Swal.fire(
                        "Deleted!",
                        "Your imaginary file has been deleted.",
                        "success"
                    ).then((result) => {
                        // Redirect to the desired page after deletion
                        window.location.href = "donarlist.php";
                    });
                } else {
                    // Handle cancel action
                    Swal.fire(
                        "Cancelled",
                        "Your imaginary file is safe :)",
                        "error"
                    ).then((result) => {
                        // Redirect to the desired page after cancellation
                        window.location.href = "donarlist.php";
                    });
                }
            });
        });
    </script>';
} else {
    echo "fail";
} 
?>

