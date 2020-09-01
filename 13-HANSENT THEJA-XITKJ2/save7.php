<?php
include "koneksi.php";

$id=$_GET['id'];
$email=$_GET['email'];
$nama=$_GET['nama'];
$gender=$_GET['gender'];
$telp=$_GET['telp'];
$color=$_GET['color'];
$cmd=$_GET['cmd'];



if ($cmd=="SAVE") {
	$sql="INSERT into form7 (id,email,nama,gender,telp,color) values($id,'$email','$nama','$gender','$telp','$color')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form7 where id='$id'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="UPDATE"){
	$sql="UPDATE form7 SET email='$email',nama='$nama',gender='$gender',telp='$telp',color='$color' where id='$id'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form7.php");
?>