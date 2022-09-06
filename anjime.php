<?php 
require "assets/php/conn.php";

$wanjir = mysqli_query($conn, 'SELECT * FROM post');
	echo $bjir['judul'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/anjay/assets/css/index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my blog<3</title>
</head>
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
<br>
<br>
<center>
	<h1>Blog</h1>
			<?php while ($bjir = mysqli_fetch_array($wanjir)) {?>
	<div class="card">
		<img src="assets/images/test.jpeg"><br>
		<a href="article.php?id=<?php echo $bjir['id']; ?>"><strong><?php echo $bjir['judul'];?></strong></a>
	</div>
	<br>
		<?php }?>
</body>
</html>