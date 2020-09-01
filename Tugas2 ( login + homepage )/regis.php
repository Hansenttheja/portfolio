<?php
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="INSERT into tbuser (username,password,email) values('$username','$password','$email')";
$query=mysqli_query($con,$sql) or die($sql);
echo "Register Berhasil";

?>

<a href="index.php">Login</a>