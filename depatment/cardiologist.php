<?php 
session start();
include('connectionn.php');

$sql = "SELECT `id`, `name`, `email`, `aadharno`, `gender`, `mobno`, `qualification`, `myfile` FROM `doctor`;";        
$res = mysqli_query($conn, $sql);

?>