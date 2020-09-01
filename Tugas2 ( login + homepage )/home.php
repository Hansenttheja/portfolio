<?php
include"secure.php";
$username = $_SESSION['username'];	
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Srisakdi&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<style type="text/css">

.top{	
	background: url("back.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 300px;	
	padding: 20px;	
	text-align: center;
	font-family: 'Lobster', cursive;
	font-size: 50px;
}
.logout{
	float: right;
	text-decoration: none;
	color: white;
	font-size: 32px;
}
.right{
	background-image: linear-gradient(to right, #34c9eb , #3480eb);
	font-family: 'Lobster', cursive;
	border-radius: 30px;
}
.right h1{
	margin-left: 18px;
}

.img{
	float: left;
	padding:20px;
	margin: 20px;
	margin-bottom: 100px;
	margin-top: 50px;
}
.column {
  float: left;
  width: 31%;
  padding: 10px;
  text-align: center;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.skills h1{
	text-align: center;
}
.skills{
	width: 1200px;
	font-family: 'Indie Flower', cursive;
	font-size: 30px;
	margin-left: 80px;
	border-radius: 30px;
	background-image: linear-gradient(to right, #34c9eb , #3480eb);
}
.introduction{
	text-align: center;
	font-family: 'Indie Flower', cursive;
}
.info{
	font-size: 30px;
}
.fotobawah{
	float: left;
	width: 50%;
}
.fotobawah img{
	width: 300px;
}
.imgbot:after {
  content: "";
  display: table;
  clear: both;
}
.infobottom{
	text-align: center;
	font-size: 30px;
}
.interest{
	width: 100%;
	background: rgba(9, 150, 232,0.7);
	color: white;
	font-family: 'Indie Flower', cursive;
	float: left;
	margin-top: 30px;

}
.intinfo{
	padding: 20px;
	font-family: 'Architects Daughter', cursive;
}

.regis{
	float: right;
	position: relative;
	margin-top: -70px;
	text-align: center;
  	cursor: pointer;
  	font-size:24px;
}
.regis{
    position: relative;
    background-color: #f39c12;
    border: none;
    width: 200px;
    padding: 20px;
    border-radius: 30px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
}

.regis:hover{
   background:#fff;
   box-shadow:0px 2px 10px 5px #97B1BF;
   color:#000;
}

.regis:after {
    content: "";
    background: #f1c40f;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    border-radius: 30px;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s;
}

.regis:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s;
}
.animate{
	animation: type 3s;
	overflow: hidden;
	white-space: nowrap;
	text-align: center;
}
@keyframes type{
	0%
	{	
		text-align: center;
		width: 0%;
	}
	100%{
		text-align: center;
		width: 100%;
	}
}
.neon{
	color: blue;
	text-shadow: 0 0 30px #0000f2;
}
.neon:after{
	color: blue;
	filter: blur(15px);
}
</style>
</head>
<body>
	<div class="top">
		<a href="logout.php" class="logout">Logout</a>
		<h1 class="animate"><?php echo "Welcome $username"?></h1>
	</div>

	<div class="introduction">
		<h1 class="neon">Hello , This is My Web If you landed here it means that you want to hire me as your web builder and this is me </h1>	
	</div>

	<div class="mid">
		<div class="col left">
			
		</div>
		<div class="col right">
			<div class="info">
				<div class="img">
				<img src="foto.jpeg" style="width: 250px;border-radius: 50%;">	
				</div>
			<h1>Information</h1>
			<p class="">Name : Hansent Theja</p>
			<p class="">Class : 11th Grade</p>
			<p class="">Age : 15</p>
			<p class="">Contact : +62 857-5200-7851</p>
			<p class="">Email : hansenttheja@gmail.com and hansent.6664@ski.sch.id</p>
			</table>
		</div>
	</div>

	<div class="skills">
		<h1>Skills</h1>
			<div class="bot">
				<div class="row">

		 			<div class="column">
		 				<img src="html.png">
		    			<h2>HTML</h2>
		  			</div>

					  <div class="column">
					    <img src="css.png" style="width: 300px;height: 300px;">
		    			<h2>CSS</h2>
					  </div>

					  <div class="column" >
					    <img src="php.png" style="width: 300px;height: 300px;">
					    <h2>PHP</h2>
					  </div> 

				</div>
			</div>
		</div>

		<div class="infobottom">
			<h3>Personal Web Builder</h3>
			<p>The Platform I Use for Storing My Work :</p>
			<h3></h3>
		</div>

		<div class="imgbot">
			<div class="fotobawah">
				<img src="github.png" style="width: 250px;padding: 30px; margin-left: 55%;border-right: 3px solid #ddd;padding-left: 20px;">
			</div>
			<div class="fotobawah">
				<img src="gitlab.png">
			</div>
		</div>

		<div class="interest"> 
			<div class="intinfo">
				<h1>Are You Interested?</h1>
				<h3>If You Are Just Click The Button!!</h3>
				<button class="regis">Click ME!!!</button>
			</div>	
		</div>
</body>
</html>
