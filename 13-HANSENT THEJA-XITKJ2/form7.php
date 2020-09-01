<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
	<style type="text/css">
html{
	font-family: 'Chilanka', cursive;
	background: #ddd;		
}
table{
	width: 100%;
	border-collapse: collapse;
	margin-bottom: 15px;
}
tr:nth-child(even) {
 	background-color: #eee;
}
h1{
	text-align: center;
}
tr{
	text-align: center;
}
.button{
background-image: linear-gradient(to bottom right, #03fcfc, #0341fc);
border: 1px solid #03fcfc;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
#cmd{
	margin-left: 430px;
	background-image: linear-gradient(to bottom right, #e1eb34, #00ff04);
	border:none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
}
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
  padding: 12px 15px;
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
input[type=time], select {
  width: 100%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 18px;
}
input[type=tel], select {
  width: 100%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 18px;
}

	</style>
<body>
	<script type="text/javascript">
		function del(id){
		location.href="save7.php?id="+id+"&cmd=delete";
	}
	function upd(id,email,nama,gender,telp,color){
		document.getElementById('id').value = id;
		document.getElementById('email').value = email;
		document.getElementById('nama').value = nama;	

		if (gender=="L") {
			document.getElementById('gender1').checked = true;
		}else{
			document.getElementById('gender2').checked = true;
		}
		document.getElementById('telp').value = telp;				
		document.getElementById('color').value = color;
		document.getElementById('cmd').innerHTML = "UPDATE";
		document.getElementById('cmd').value = "UPDATE";
		
	}
	</script>
	<form action="save7.php" method="GET">
		<table>
			<h1>Form Random Pt2</h1>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="number"  name="id" id="id"></td>	
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" id="email"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>


			<tr>
				<td>Jenis Pelapis Lapangan</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" id="gender1" 	 value="L">Male
					<input type="radio" name="gender" id="gender2" value="P">Female
					
				</td>
			</tr>

			<tr>
				<td>Warna</td>
				<td>:</td>
				<td><input type="color" name="color" id="color"></td>
			</tr>

			<tr>
				<td>Telp</td>
				<td>:</td>
				<td><input type="tel" name="telp" id="telp"></td>
			</tr>

			<table>
				<tr>
					<input type="submit" name="cmd" id="cmd" value="SAVE">
					<input type="hidden" name="namalama" id="namalama">
				</tr>
			</table>
		</table>
	</form>
	<table>
		<tr bgcolor="#02ed0a" align="center">
			<th>No</th>
			<th>ID</th>
			<th>Email</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Telp</th>
			<th>Color</th>
			<th colspan="3">Action</th>
		</tr>

		<?php
			include "koneksi.php";


			$sql="select * from form7";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$id=$result['id'];
				$email=$result['email'];
				$nama=$result['nama'];
				$gender=$result['gender'];
				$telp=$result['telp'];
				$color=$result['color'];
		?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $id; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $gender; ?></td>
			<td><?php echo $telp ?></td>
			<td><?php echo $color; ?><td bgcolor="<?php echo $color?>" style="width: 45px;"></td> </td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "'$id'"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "'$id','$email','$nama','$gender','$telp','$color'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>