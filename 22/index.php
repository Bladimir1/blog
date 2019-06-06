<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dd.css">
</head>
<body>
	<?php include 'database.php' ?>
	<div class="main">
		<h1>Blog</h1>
		<?php for($i = 0; $i < count($database); $i++){
				echo '<div><hr><h2>' . $database[$i]['title'] . 
				'</h2>' . '<img src="' . $database[$i]['img'] . '">' . '<h3>' . $database[$i]['short'] .
				'</h3><a href="page.php?index=' . $i  .'">Next</a></div>';
			};
		?>
		<hr>
	</div>
	<?php echo $_GET['name'] . ' ' . $_GET['surname']?>
</body>
</html>
