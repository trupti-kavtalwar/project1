<?php
include "config.php";
@extract($_POST);
$sql = "update tab_family  set name ='$name', email ='$email',address ='$address',password ='$password',gender ='$gender'
         where id = '$id'";
$result =mysqli_query($conn, $sql);
header("Location:index.php");

?>