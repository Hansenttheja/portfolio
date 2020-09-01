<?php
session_start();
include "koneksi.php";


$username=$_POST['username'];
$password=$_POST['password'];


$sql="select * from tbuser where username='$username' and password='$password'";
$query = mysqli_query($con,$sql) or die($sql);
$num = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);
$username=$result['username'];
$email=$result['email'];

if ($num ==1) {
	$_SESSION['username']=$username;
	$_SESSION['email']=$email;

	header("location:home.php");
}else{
?>
	<script type="text/javascript">
		location.href="index.php";
		alert("maaf , anda tidak memiliki akses login");
	</script>	
<?php
}
?>