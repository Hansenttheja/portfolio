<?php
include "koneksi.php";

$id=$_GET['id'];
$idpertama=$_GET['idpertama'];
$nama=$_GET['nama'];
$jenis_kelamin=$_GET['jenis_kelamin'];
$telp=$_GET['telp'];
$alamat=$_GET['alamat'];
$cmd=$_GET['cmd'];
$skills1=$_GET['skills1'];
$skills2=$_GET['skills2'];
$skills3=$_GET['skills3'];
$skills4=$_GET['skills4'];
$skills5=$_GET['skills5'];
$skillsgabung = substr($skills1.$skills2.$skills3.$skills4.$skills5 , 0 ,-2);

if ($cmd=="save") {
	$sql= "INSERT INTO ulangan1(nama,jenis_kelamin,telp,alamat,skills) VALUES ('$nama','$jenis_kelamin','$telp','$alamat','$skillsgabung')";
	echo $jenis_kelamin;
	$query = mysqli_query($con, $sql) or die ($sql);
} if ($cmd=="delete") {
	$sql="DELETE FROM ulangan1 WHERE id='$id'";
	$query = mysqli_query($con, $sql) or die ($sql);
}if ($cmd=="update") {
	$sql = "UPDATE  ulangan1 SET nama='$nama' , jenis_kelamin = '$jenis_kelamin' , telp='$telp',alamat='$alamat',skills='$skillsgabung' WHERE id='$idpertama'";
	$query = mysqli_query($con, $sql) or die ($sql);

}

header("location:ulangan1.php");
?>