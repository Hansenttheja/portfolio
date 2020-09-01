<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@515&display=swap" rel="stylesheet">
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
input[type=color], select {
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
</head>
	<script type="text/javascript">
		function del(username){
			location.href="save4.php?username="+username+"&cmd=delete";
		}
		function upd(username,password,team,numb,color){
			document.getElementById('username').value=username;
			document.getElementById('password').value=password;
			document.getElementById('color').value=color;
			document.getElementById('numb').value=numb;
			document.getElementById('cmd').value="update";
			if (team=="marvel") {
				document.getElementById('team1').checked = true;
			}else{
				document.getElementById('team2').checked = true;

			}
		}
	</script>
	<body>
			<h1>Random Form</h1>
	<div class="isi">
	<form action="save4.php" method="GET">
		<table>
			
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username"  id="username" placeholder="Input Your username"></td>
			</tr>

			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" id="password" placeholder="Input Your password"></td>
			</tr>

			<tr>
				<td>Team :</td>
				<td><input type="radio" id="team1"  name="team" value="marvel">Marvel
				<input type="radio" id="team2"  name="team" value="DC">DC</td>
			</tr>

			<tr>
				<td>Favorite Number :</td>
				<td><input type="number" min="0" name="numb" id="numb" placeholder="Input Your Number"></td>
			</tr>
			
			<tr>
				<td>favorite Color :</td>
				<td><input type="color" name="color" id="color"></td>
			</tr>

</table>
<table class="save">
			<tr>
				<td><button id="cmd" name="cmd" value="save">SAVE</button></td>
			</tr>
		</table>
	</form>
	<table>
		<tr class="top">  
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Team</th>
			<th>Number</th>
			<th>Color</th>
			<th></th>
			<th></th>
		</tr>
		<?php
			include "koneksi.php";

			$sql="select * from form4";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$username=$result['username'];
				$password=$result['password'];
				$team=$result['team'];
				$numb=$result['numb'];
				$color=$result['color'];
			?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $username ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $team ?></td>
			<td><?php echo $numb ?></td>
			<td colspan=""><?php echo $color ?><td bgcolor="<?php echo $color?>" width="30px"></td></td>
			<td><button value="delete" name="cmd" onclick="del('<?php echo $username;?>')">DELETE</button></td>
			<td><button value="update" onclick="upd(<?= "'$username','$password','$team','$numb','$color'" ;?>)">UPDATE</button></td>
		</tr>
		<?php
	}
		?>


	</table>
	</div>
</body>
</html>