<?php $url = "/turqua/assets/" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="<?= $url ?>css/normalize.css">
	<link rel="stylesheet" href="<?= $url ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= $url ?>css/style.css">
	<link rel="stylesheet" href="<?= $url ?>js/slider/settings.css">

	<script src="<?= $url ?>js/jquery-1.10.2.min.js"></script>
	<script src="http://yeni.mediaclick.com.tr/mp-include/themes/mediaclick/assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= $url ?>js/slider/themepunch.revolution.min.js"></script>
	<script src="<?= $url ?>js/slider/themepunch.tools.min.js"></script>
	<script src="<?= $url ?>js/slider/jquery-migrate.min.js"></script>
	<script src="<?= $url ?>js/mediaclick.js"></script>


</head>
<body>

	<div class="header-bg"></div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
				</div>
				<div class="col-md-9">
					<a href="#" class="home active"></a>
					<div class="menu">
						<ul>
							<li><a href="#" data-link="2">KURUMSAL</a></li>
							<li><a href="#" data-link="3">PROJELER</a></li>
							<li><a href="#">TATİL EVLERİ</a></li>
							<li><a href="#">HABERLER</a></li>
							<li><a href="#">İLETİŞİM</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="ease-1 ease-section" data-link="1">
		<div class="full-screen">
			<div class="fullscreenbanner-container">
				<div class="fullscreenbanner" >
					<ul>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
							<img src="images/java-01.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" alt="Slide 2">
						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
							<img src="images/java-01.jpg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" alt="Slide 2">
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="text-bg"> </div>
	</section>

	<section class="ease-2 ease-section" data-link="2">
		<div class="bg">
		</div>
		<div class="text-bg"></div>
	</section>

	<section class="ease-3 ease-section" data-link="3">
		<div class="bg">
		</div>
		<div class="text-bg"></div>
	</section>


	<a href="javascript: void(0)" class="down-button"><img src="images/down.png" alt=""></a>

	<footer>
		
	</footer>

</body>
</html>