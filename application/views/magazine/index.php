<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Good Place">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, Good Place, magazine Good Place">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & css3 magazine Good Place is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>GOOD PLACE</title>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/magazine-48.ico">
          <!-- jQuery 3 -->
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/all.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url('magazine');?>"><strong>GOOD PLACE</strong></a>
						<div class="mobile-toggle">
							<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
						</div>
						<div class="mobile-toggle">
							<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-right"></i></a>
						</div>
					</div>
					<div id="menu-list">
						<ul class="nav-list nav navbar-nav navbar-right">
							<li class="for-tablet nav-title"><a>MAGAZINE</a></li>
							<li><a href="<?php echo base_url('magazine');?>">Home</a></li>
							<li><a href="<?php echo base_url('magazine/magazine');?>">Magazine</a></li>
							<li><a href="<?php echo base_url('magazine/about');?>">About</a></li>
							<!-- <li><a href="<?php echo base_url('magazine/about');?>"><span class="fa fa-search"></span></a></li> -->
							<li class="dropdown magz-dropdown">
								<a href="category.html"><span class="fa fa-search"></span></a>
								<ul class="dropdown-menu">
									<li class="dropdown magz-dropdown">
										<form class="search" autocomplete="on">
											<div class="form-group">
												<div class="input-group">
													<input type="text" name="q" class="form-control" placeholder="Type something here">									
													<div class="input-group-btn">
														<button class="btn btn-primary"><i class="ion-search"></i></button>
													</div>
												</div>
											</div>
										</form>	
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>
        <?php echo $contents;?>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h3>MAGAZINE</h3>
							<div class="block-body">
								<p class="brand-description">
									<a href="<?php echo base_url('magazine/about');?>">
										Tentang Kami
									</a>
								</p>
								<p class="brand-description">
								</p>
								<p class="brand-description">
									Alamat
								</p>
								<p class="brand-description">
									<b class="fa fa-map-marker">&emsp; Jakarta , Indonesia</b>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h3>Ikuti Kami :</h3>
							<div class="block-body">
								<p class="brand-description">
									<a href="https://www.instagram.com/goodplace_ind/">
									    <b class="fa fa-instagram">&emsp; @goodplace_ind</b>
									</a>
								</p>
								<p class="brand-description">
									Email
								</p>
								<p class="brand-description">
									<b class="fa fa-google-plus-square">&emsp; goodplace.ind@gmail.com</b>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- js -->
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.migrate.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="<?php echo base_url();?>assets/scripts/jquery-number/jquery.number.min.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/toast/jquery.toast.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/demo.js"></script>
		<script src="<?php echo base_url();?>assets/js/e-magz.js"></script>
		<script src="<?php echo base_url();?>assets/scripts/touchswipe/jquery.touchSwipe.min.js"></script>
	</body>
</html>