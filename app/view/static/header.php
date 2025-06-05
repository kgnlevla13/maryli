<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="tinynest" name="author">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (isset($setting['description'])): ?>
		<meta name="description" content="<?= $setting['description'] ?>">
	<?php endif ?>
	<?php if (isset($setting['keywords'])): ?>
		<meta name="keywords" content="<?= $setting['keywords'] ?>">
	<?php endif ?>
	<!-- SITE TITLE -->
	<title> <?= $setting['site_name'] ?> | <?= isset($meta['title']) ? $meta['title'] : 'mindflowcollective.org' ?></title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= admin_public_url('assets/images/' . $setting['favicon']) ?>">
	<!-- Animation CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/animate.css') ?>">
	<!-- Latest Bootstrap min CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<!-- Icon Font CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/ionicons.min.css') ?>">
	<!-- FontAwesome CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/all.min.css') ?>">
	<!-- Flaticon Font CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/flaticon.css') ?>">
	<!-- Themify Font CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/themify-icons.css') ?>">
	<!--- owl carousel CSS-->
	<link rel="stylesheet" href="<?= public_url('assets/owlcarousel/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?= public_url('assets/owlcarousel/css/owl.theme.css') ?>">
	<link rel="stylesheet" href="<?= public_url('assets/owlcarousel/css/owl.theme.default.min.css') ?>">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/magnific-popup.css') ?>">
	<!-- jquery-ui CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/jquery-ui.css') ?>">
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= public_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= public_url('assets/css/responsive.css') ?>">
	<link rel="stylesheet" id="layoutstyle" href="<?= public_url('assets/color/theme-default.css') ?>">

	<script type="text/javascript">
		var api_url = '<?=site_url('api')?>';
		var app_url = '<?=site_url('app')?>';
		var site_url = '<?=site_url()?>';
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<!-- Google tag (gtag.js) -->

<!-- Google tag (gtag.js) -->

<body>

	<!-- social media -->
	<section class="scrollup001">
		<ul class="social-media-container">
			<a class="btn-default001" href="<?= $setting['facebook'] ?>" target="_blank">
				<li class="social-media facebook">
					<i class="ti-facebook"></i>facebook
				</li>
			</a>
			<a class="btn-default001" href="<?= $setting['instagram'] ?>" target="_blank">
				<li class="social-media instagram">
					<i class="ti-instagram"></i>instagram
				</li>
			</a>
			<a class="btn-default001" href="<?= $setting['youtube'] ?>" target="_blank">
				<li class="social-media youtube">
					<i class="ti-youtube"></i>youtube
				</li>
			</a>
			<a class="btn-default001" href="<?= $setting['InsightTimer'] ?>" target="_blank">
				<li class="social-media youtube">
					<i class="fab fa-typo3"></i>insightTimer
				</li>
			</a>
			<a class="btn-default001" href="public/assets/docs/yoga-made-simple-by-mary-li-e-book.pdf" target="_blank" download="yoga-made-simple.pdf">
				<li class="social-media youtube" style="font-size:22px;">
					<i class="ti-download"></i>Yoga Made Simple
				</li>
			</a>
		</ul>
	</section>
	<!-- social media -->
	

    <!-- Modal -->
    <div class="modal fade" id="ebookModal" tabindex="-1" role="dialog" aria-labelledby="ebookModalLabel">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ebookModalLabel">Download Your Free Yoga E-Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal-step-1">
            <p>Enter your information below to receive your free copy of "Yoga Made Simple" by Mary Li:</p>
            <form id="ebookForm">
              <div class="form-group">
                <label for="ebook-name">Name</label>
                <input type="name" class="form-control" id="ebook-name" name="name" required>
              </div>
              <div class="form-group">
                <label for="ebook-email">Email</label>
                <input type="email" class="form-control" id="ebook-email" name="email" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-danger w-100">Get Your Free E-Book</button>
              </div>
            </form>
          </div>
          <div class="modal-body" id="modal-step-2" style="display:none;">
            <div class="text-center">
              <i class="fa fa-check-circle fa-4x text-success mb-3"></i>
              <h4>Thank You!</h4>
              <p>Your free e-book will be sent to your e-mail address as soon as possible.</p>
              <p>Please check your inbox or spam and download "Yoga Made Simple".</p>
            </div>
            <button type="button" class="btn btn-danger w-100" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

	<!-- LOADER
	<div id="preloader">
		<div class="loading_wrap">
			<img src="<?= public_url('assets/images/loading.gif') ?>" alt="cat-gif">
		</div>
	</div>
	END LOADER -->

	<!-- START HEADER -->
	<header class="header_wrap fixed-top dark_skin main_menu_uppercase main_menu_weight_600 transparent_header">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="<?= site_url() ?>">
					<img class="logo_light" src="<?= public_url('assets/images/logo_white.png') ?>" alt="logo">
					<img class="logo_dark" src="<?= admin_public_url('assets/images/' . $setting['logo']) ?>" alt="logo">
					<img class="logo_default" src="<?= admin_public_url('assets/images/' . $setting['logo']) ?>" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<?php
					$menuItems = array(
						'Home' => 'index',
						'About' => 'about',
						'Offering' => 'offering',
						'Events' => 'events',
						'Classes' => 'classes',
						'Blog' => 'blog',
						'Contact' => 'contact'
					);
					?>

					<ul class="navbar-nav">
						<?php foreach ($menuItems as $label => $route): ?>
							<li>
								<a class="nav-link <?= route(0) == $route ? 'active' : '' ?>" href="<?= site_url($route) ?>"><?= $label ?></a>
							</li>
						<?php endforeach; ?>
					</ul>

				</div>
			</nav>
		</div>
	</header>
  <!-- END HEADER -->