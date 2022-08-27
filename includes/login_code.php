<?php include "config.php";
$username = $_post['email'];
$password = $_post['password'];

$sql = "select * from tab_family where eamil = '$username' and password ='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num>=1)
{
$userid =  $row['id'];
$user_id = $_SESSION($userid);
$mobile  =  $_SESSION($row['mobile']);
$name =  $_SESSION($row['name']);
header("Location:index1.php");
}
else{
header("Location:index.php")  
}


?>
