<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel ="stylesheet" href = "./css/media.css">
  <link rel="stylesheet" href="./swiper/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <title>About-us</title>
</head>

<body>

<?php include './header.php';?>
    
<section class = "about__us">
  <div class = "container-fluid">
    <div class = "row">
			<div class = " col-12 half__top">
					<h2>О нас</h2>
					<img src = "./images/dreamteam.png">
			</div>
    </div>    

		<div class = "row">
			<div class = " col-12 about__us_sacura">
					<h2 class = "bot">Sacura</h2>
					<p> Оптимальный инструмент для создания и поддержки Digital Signage инсталяций для вашего бизнеса</p>
					<div class = "about__us_known">
							<span class = "known">Узнайте как</span>
							<div class ="wrap__known">
							<img class ="red_ellips" src = "./images/Ellipse 1.svg">
							</div>
					</div>
			</div>
    </div> 
	</div>    
</section>

<section class = "worth">
  <div class = "container-fluid">
    <div class = "row">
			<div class = "our__worth">
					<h3>Почему именно мы</h3>
					<p>Нас выбирают за скорость, надежность и профессиональность обслуживания</p>
					<div class = "worth__cart">
							<div class = "wrap__number">
							<h2 class = "number">01</h2>
							</div>
							<ul>
									<li>Первая крутая и вкусная фича, коротко объясняющая суть </li>
									<li>Вторая крутая и вкусная фича, коротко объясняющая суть </li>
									<li>Третья крутая и вкусная фича, коротко объясняющая суть </li>
							</ul>
					</div>

					<div class = "worth__cart rev">
							<div class = "wrap__number">
							<h2 class = "number">02</h2>
							</div>
							<ul>
									<li>Первая крутая и вкусная фича, коротко объясняющая суть </li>
									<li>Вторая крутая и вкусная фича, коротко объясняющая суть </li>
									<li>Третья крутая и вкусная фича, коротко объясняющая суть </li>
							</ul>
					</div>
			</div>
    </div>
	</div>
</section>

<section class = "director">
	<div class = "container">
		<div class = "row director__wrap">
			<div class ="col-6">
				<h2>Директор</h2>
				
				<div class = "wrap__block">
				
					<div class = "quote">
							<img src = "./images/kav.png">
					</div>
							
					<div class = "wrapper__director">
						<p>Приветствую!</p>
						<p>Nec, proin est, ipsum condimentum iaculis tristique pretium. Consectetur amet, suspendisse proin scelerisque. Nunc quisque eu tincidunt porttitor commodo sit. Id aliquam et feugiat dolor, velit, viverra curabitur volutpat.</p>
						<p>Quis vitae turpis dolor pretium, nullam massa risus varius. Ac proin enim cursus interdum ut tincidunt. Blandit duis ut duis faucibus rhoncus urna tempus consectetur adipiscing. Ut in pulvinar duis lectus scelerisque lacus nibh.</p>
						<p class = "top__manager">Иван Иванов, Директор ОАО «Sacura»</p>
					</div>
				</div>
			</div>
							
			<div class = "col-6 manager">
				<figure><img src = "./images/director.png"></figure>
			</div>
					
		</div>
	</div>
</section>

<?php include 'bigfooter.php';?>

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./swiper/js/swiper.js"></script>
	<script src="./swiper/js/slider.js"></script>
</body>

</html>



