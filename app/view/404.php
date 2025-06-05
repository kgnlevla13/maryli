<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1>Page Not Found</h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">404</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="shape_img">
		<div class="ol_shape11">
			<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
				<img src="<?= public_url('assets/images/shape11.png') ?>" alt="image">
			</div>
		</div>
		<div class="ol_shape12">
			<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
				<img src="<?= public_url('assets/images/shape12.png') ?>" alt="image">
			</div>
		</div>
		<div class="ol_shape13">
			<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
				<img src="<?= public_url('assets/images/shape7.png') ?>" alt="image">
			</div>
		</div>
	</div>
</section>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION 404 -->
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-12 col-md-9 text-center">
				<div class="error_txt text_default">404</div>
				<div class="heading_s2 mb-2">
					<h5>oops! The page you requested was not found!</h5>
				</div>
				<p>The page you are looking for was moved, removed, renamed or might never existed.</p>
				<a href="<?= site_url() ?>" class="btn btn-outline-black">Back To Home</a>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION 404 -->


<?php require view('static/footer') ?>
