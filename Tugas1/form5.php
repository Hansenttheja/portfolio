<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function upd(username,password,jointime,satisfaction,services){
			document.getElementById('username').value=username;
			document.getElementById('password').value=password;
			document.getElementById('jointime').value=jointime;
			// document.getElementById('satisfaction').value=satisfaction;
			if (services=="bad") {
				document.getElementById('service1').checked=true;
			}else if(services=="average"){
				document.getElementById('service2').checked=true;

			}else{
				document.getElementById('service3').checked=true;

			}
			document.getElementById('cmd').value = "update";
		}//chrome
	</script>
</head>
<body>
	<h1>Satisfaction Form</h1>
	<form action="save5.php" method="get">
		<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" id="username"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" id="password"></td>
		</tr>

		<tr>
			<td>Join Date</td>
			<td>:</td>
			<td><input type="date" name="jointime" id="jointime"></td>
		</tr>

		<tr>
			<td>Satisfaction</td>
			<td>:</td>
			<td><input type="range" min="0" max="100" name="satisfaction"></td>
		</tr>

		<tr>
			<td>Services</td>
			<td>:</td>
			<td><input type="radio" name="services" id="service1" value="bad">Bad
			<input type="radio" name="services" id="service2" value="average">Average
			<input type="radio" name="services" id="service3"
			value="good">Good
			</td>
		</tr>
		<tr><td><input type="submit" name="cmd" id="cmd" value="save"></td></tr>
		</table>
	</form>
	<table class="bot" border="2">
			<tr class="top">  
				<th>No</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Phone </th>
				<th>Gender</th>
				<th></th>
				<th></th>
			</tr>
		<?php
			include "koneksi.php";

			$sql="select * from form5";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$username = $result['username'];
				$password =  $result['password'];
				$jointime =  $result['jointime'];
				$satisfaction =  $result['satisfaction'];
				$services =  $result['services'];

			?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $username ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $jointime ?></td>
			<td><?php echo $satisfaction ?></td>
			<td><?php echo $services	 ?></td>
			<td><a href="save5.php?username=<?= $username; ?>&cmd=delete"><button>DELETE</button></a></td>
			<td><button value="update" name="cmd" onclick="upd(<?= "'$username','$password','$jointime','$satisfaction','$services'" ;?>)">UPDATE</button></td>
		</tr>
		<?php
	}
		?>


	</table>
	</body>
</html>
</body>
</html>