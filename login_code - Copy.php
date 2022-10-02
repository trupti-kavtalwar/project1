<?php 
//error_reporting(1);
include "config.php";
session_start();

$name = $_POST['username'];
$password= $_POST['password'];

 $sql = "SELECT * FROM tab_family WHERE email = '$name' and password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
//$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
 //echo $count; exit; 
if($count == 0 ) {
   //session_register("username");
   $_SESSION['login_user'] = $name;
   
   header("location:index1.php");
}else {
   $error = "Your Login Name or Password is invalid";
}




// $sql = "select * from tab_family where id ='$id'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);
// header("Location:index1.php");
?>
