<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kisalala</title>
	<link rel="stylesheet" href="style.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
	

	<div class="container">

		<header>
			<h1><a href="index.php">Kisalala</a></h1>
			<p class="lead">One love <3</p>
		</header>


		<script>
			 setInterval(function(){
			 	$('#refresh').load("index.php #refresh");
			 }, 3000);
    
		</script>
		<div id="refresh" class="content">
			<?php 
				$current_image = rand(1, 3);				
			 ?>
			<img src="images/<?php echo $current_image?>.jpg" alt="current_image">
		</div>
		

		<footer>
			<p>&copy 2017</p>
		</footer>
	</div>

</body>
</html>