<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@515&display=swap" rel="stylesheet">
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  max-width: 70%;
  width: 100%;
  border:none;
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
position: absolute;
z-index: 15;
left: 15%;
}
form{
	width: 1300px;
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
/*input[type=radio], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}*/
h1	{
	text-align: center;
	font-family: 'Lemonada', cursive;
	 
}
</style>
</head>
	<script type="text/javascript">
		function del(nis){
			location.href="save1.php?nis="+nis+"&cmd=delete";
		}
		function upd(nis,nama,gender,email,dob){
			document.getElementById('nis').value=nis;
			document.getElementById('name').value=nama;
			document.getElementById('email').value=email;
			document.getElementById('dob').value=dob;
			document.getElementById('cmd').value="update";
			if (gender=="male") {
				document.getElementById('gender1').checked = true;
			}else{
				document.getElementById('gender2').checked = true;

			}
		}
	</script>
	<body>
			<h1>Student Membership Form</h1>
	<div class="isi">
	<form action="save1.php" method="GET">
		<table>
			
			<tr>
				<td>NIS :</td>

				<td><input type="number" name="nis" min="1" id="nis" placeholder="Input Your Nis"></td>
			</tr>

			<tr>
				<td>Name :</td>

				<td><input type="text" name="name" id="name" placeholder="Input Your Name"></td>
			</tr>

			<tr>
				<td>Gender :</td>
				<td><input type="radio" id="gender1"  name="gender" value="male">Male
				<input type="radio" id="gender2"  name="gender" value="female">female</td>
			</tr>

			<tr>
				<td>Email :</td>
				<td><input type="email" name="email" id="email" placeholder="Input Your Email"></td>
			</tr>
			
			<tr>
				<td>DOB :</td>
				<td><input type="date" name="dob" id="dob" placeholder="Input Your DOB"  min="1997-01-01" max="2030-12-31"></td>
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
			<th>NIS</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Email</th>
			<th>DOB</th>
			<th></th>
			<th></th>
		</tr>
		<?php
			include "koneksi.php";

			$sql="select * from form1";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$nis=$result['nis'];
				$name=$result['name'];
				$gender=$result['gender'];
				$email=$result['email'];
				$dob=$result['dob'];
			?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $nis ?></td>
			<td><?php echo $name ?></td>
			<td><?php echo $gender ?></td>
			<td><?php echo $email ?></td>
			<td><?php echo $dob ?></td>
			<td><button  value="delete" onclick="del('<?php echo $nis;?>')">DELETE</button>
			<td><button value="update" onclick="upd(<?= "$nis,'$name','$gender','$email','$dob'" ;?>)">UPDATE</button></td>
		</tr>
		<?php
	}
		?>


	</table>
	</div>
</body>
</html>