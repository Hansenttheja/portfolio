<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border:none;
}
html{
	position: relative;
display: flex;
justify-content: center;
align-items: center;
}
td, th {
  border: 1px solid #dddddd; q
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
button{
	height: 35px;
	width: 120px;
	border-radius: 35px;
}
div{

}
form{
	width: 100%;
}
/*.save{
	margin-left: 300px;
	margin-top: -170px;
	margin-bottom: 130px;
	border: none;
}
.save td{
	border: none;
}*/
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 18px;
}
input[type=password], select {
	width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=tel], select {
width: 100%;

  margin: 8px 0;

  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
h1	{
	text-align: center;
	font-family: 'Lemonada', cursive;
	 
}		
</style>
<script type="text/javascript">
	function upd(id,username,password,phone,gender){
			document.getElementById('id').value=id;
			document.getElementById('username').value=username;
			document.getElementById('password').value=password;
			document.getElementById('phone').value=phone;
			document.getElementById('cmd').value="update";
			if (gender=="male") {
				document.getElementById('gender1').checked = true;
			}else{
				document.getElementById('gender2').checked = true;

			}
		}

</script>
	<body>	
		<h1>Registration Form</h1>
			<form action="save3.php" method="GET">
				<table border="0">
					<tr>
					<td>ID</td>
					<td>: </td>
					<td><input type="number" name="id" id="id"></td>
				</tr>

				<tr>
					<td>Username</td>
					<td>: </td>
					<td><input type="text" name="username" id="username"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td>: </td>
					<td><input type="password" name="password" id="password"></td>
				</tr>

				<tr>
					<td>Phone</td>
					<td>: </td>
					<td><input type="tel" name="phone" id="phone"></td>
				</tr>

				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><input type="radio" name="gender" id="gender1" value="male">Male
						<input type="radio" name="gender" id="gender2" value="female">Female
					</td>
				</tr>
			</table>
			<button id="cmd" name="cmd" value="save">SAVE</button>

			
		</form>
		<table class="bot" border="6">
			<tr class="top">  
				<th>No</th>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Phone </th>
				<th>Gender</th>
				<th></th>
				<th></th>
			</tr>	
		<?php
			include "koneksi.php";

			$sql="select * from form3";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$id = $result['id'];
				$username =  $result['username'];
				$password =  $result['password'];
				$phone =  $result['phone'];
				$gender =  $result['gender'];
			?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $id ?></td>
			<td><?php echo $username ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $phone ?></td>
			<td><?php echo $gender	 ?></td>
			<td><button><a href="save3.php?id=<?= $id; ?>&cmd=delete">DELETE</a></button></td>
			<td><button value="update" name="cmd" onclick="upd(<?= "$id,'$username','$password',$phone,'$gender'"; ?>)">UPDATE</button></td>
		</tr>
		<?php
	}
		?>


	</table>
	</body>
</html>