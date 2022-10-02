<?php
include "config.php";
@extract($_POST);
$sql = "insert into tab_family (name , email, password , date) 
        values ('$name' , '$email', '$password', now() )";
$result = mysqli_query($conn , $sql);
header("Location:index.php");
?>