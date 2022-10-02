<?php
include "config.php";
$id = $_GET['deleteid'];
$sql = "delete from tab_family where id = '$id'";
$result =mysqli_query($conn, $sql);
header("Location:index.php");

?>