<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<title>Document</title>
</head>
<body>
<div class="container">
	<?php	require	"block/header.php";	?>
	<div class="container__form">
	<form action="#"	method="post"	enctype="multipart/form-data">
	<div class="container__banner">
	
	<div class="container__banner-text">
		<a href="">Admire Stylish 
Dresses & Looks</a>
		<p>If we wanted to build a human-level tool to offer 
automated outfit advice, we needed to understand 
people’s fashion taste. </p>
		<button>Show More</button>
	</div>
	</div>
	<div class="container__form-temp">
	
	<?php	require	"block/w-c.php";	?>
	
	<?php	require	"block/p-l.php";	?>

	
	<div class="containeer__you-may-like">
	<div class="product__card"></div>
	<div class="product__card2"></div>
	<div class="product__card3"></div>
	</div>
	
	</div>
	</form>
	</div>
	<?php	require	"block/footer.php";	?>
	</div>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script	src="js/script.js"></script>
</body>
</html>