<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
	<style type="text/css">
html{
	font-family: 'Chilanka', cursive;
/*	background: #ddd;*/		
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
.button{
background-image: linear-gradient(to bottom right, #e1eb34, #00ff04);
border:none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
#cmd{
	margin-left: 430px;
}

	</style>
</head>
<script type="text/javascript">
	function del(id){
		location.href="saveulangan.php?id="+id+"&cmd=delete";
	}
	function upd(id,nama,jenis_kelamin,telp,alamat,skills){
		document.getElementById('nama').value= nama;
		if (jenis_kelamin=="L") {
			document.getElementById('laki').checked = true;
		}else{
			document.getElementById('perempuan').checked = true;
		}
		document.getElementById('telp').value= telp;
		document.getElementById('alamat').value= alamat;
		if (skills.includes("HTML")) {
			document.getElementById('skills1').checked = true;
		}
		if (skills.includes("CSS")) {
			document.getElementById('skills2').checked = true;
		}
		if (skills.includes("Javascript")) {
			document.getElementById('skills3').checked = true;
		}
		if (skills.includes("PHP")) {
			document.getElementById('skills4').checked = true;
		}
		if (skills.includes("MYSQL")) {
			document.getElementById('skills5').checked = true;
		}
		document.getElementById('cmd').innerHTML = "update";
		document.getElementById('cmd').value = "update";
		document.getElementById('idpertama').value=id;
		
	}
</script>
<body>
	<h1>Registration Form</h1>
<form action="saveulangan.php" method="GET">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" id="laki" value="L">Male
				<input type="radio" name="jenis_kelamin" id="perempuan"  value="P">Female</td>
		</tr>

		<tr>
			<td>Telp</td>
			<td>:</td>
			<td><input type="tel" name="telp" id="telp"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" id="alamat"></td>
		</tr>
		<tr>
			<td>Skills</td>
			<td>:</td>
			<td><input type="checkbox" name="skills1" id="skills1" value="HTML, ">HTML
				<input type="checkbox" name="skills2" id="skills2" value="CSS, ">CSS
				<input type="checkbox" name="skills3" id="skills3" value="Javascript, ">Javascript
				<input type="checkbox" name="skills4" id="skills4" value="PHP, ">PHP
				<input type="checkbox" name="skills5" id="skills5" value="MYSQL, ">MYSQL
			</td>
		</tr>
	</table>

		<table>	
			<td><input type="submit" name="cmd" id="cmd" class="button" value="save">
			<input type="reset" class="button">
			<input type="hidden" name="idpertama" id="idpertama">
		</table>
		


</form>

	<table>
		<tr bgcolor="#02ed0a" align="center"> 
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Telp</th>
			<th>Alamat</th>
			<th>Skills</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		    include "koneksi.php";

		    $sql="select * from ulangan1";
		    $query=mysqli_query($con,$sql);
		    $num=mysqli_num_rows($query);

		    for ($i=1; $i <=$num ; $i++) { 
		    	$result=mysqli_fetch_array($query);
		    	$id = $result['id'];
		    	$nama = $result['nama'];
		    	$jenis_kelamin = $result['jenis_kelamin'];
		    	$telp = $result['telp'];
		    	$alamat = $result['alamat'];
		    	$skills = $result['skills'];
		    
		?>

		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $nama?></td>
			<td><?php echo $jenis_kelamin?></td>
			<td><?php echo $telp?></td>
			<td><?php echo $alamat?></td>
			<td><?php echo $skills?></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "$id"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "$id,'$nama','$jenis_kelamin','$telp','$alamat','$skills'"?>)"></td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>