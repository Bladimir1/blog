<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php include 'database.php' ?>
	
	<h1>Blog</h1>
	<hr>
	<div>
		<h3><?php echo $database[$_GET['index']]['title']?></h3>
		<h3><?php echo $database[$_GET['index']]['long']?></h3>
		
	</div>
</body>
</html>