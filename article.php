<?php
require 'assets/php/conn.php';
echo $alok['judul'];
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM post WHERE id=$id");
$alok = mysqli_fetch_array($result);
//echo($alok['judul']);
//echo($alok['isi']);
?>
<link rel="stylesheet" type="text/css" href="/anjay/assets/css/index.css">
<!DOCTYPE html>
<html>
<head>
	<nav>
	<ul>
		<h4>menu</h4>
		<li>
			<a href="">project</a>
			<a href="">perpustakaan</a>
			<a href="index.php">home</a>
			<a href="">login</a>
		</li>
	</ul>
</nav>
<br>
<br>
<center>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $alok['judul']?></title>
</head>
<body>
	<div class="anjirr">
		<h1><?php echo $alok['judul']; ?></h1>
		<img src="assets/images/<?php  echo $alok['image']?>">
		<br>
		<p><?php echo $alok['isi']?></p>
	</div>
</body>
<div class="footerx">
	<ul>
		<li>
			<a href="">git</a><br>
			<a href="">facebook</a><br>
			<a href="anjime.php">blog</a><br>
			<a>dionwtn2005@gmail.com</a>
		</li>
	</ul>
	<center> <p>(c) Copyright 2022 Muhammad Rezky Ananda X panini</p></center>
</div>
</html>



