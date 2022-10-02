<?php
include "config.php";
@extract($_POST);
$sql = "insert into tab_family (name , email, address , password , gender , date) 
        values ('$name' , '$email','$address' , '$password', '$gender' , now() )";
$result = mysqli_query($conn , $sql);
header("Location:homepage.php");
?>