<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from menu where `menu_id` = '$_GET[menu_id]'");

header("Location:admin.php");

?>