<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1>Offering</h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Offering</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="shape_img">
		<div class="ol_shape11">
			<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
				<img src="<?= public_url('assets/images/project15.png') ?>" alt="image">
			</div>
		</div>
		<div class="ol_shape12">
			<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
				<img src="<?= public_url('assets/images/project7.png') ?>" alt="image">
			</div>
		</div>
	</div>
</section>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION Offering -->
<section>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="bg-white box_shadow4 small_padding animation" data-animation="fadeInRight" data-animation-delay="0.2s">
					<div class="heading_s3">
						<h3><?= $offering['offering1title'] ?></h3>
						<div class="title_icon"><i class="flaticon-lotus"></i></div>
					</div>
					<p><?= $offering['offering1desc'] ?></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="fancy_style1 overlay_bg_30 animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
					<img src="<?= admin_public_url('assets/images/') . $offering['offering1image'] ?>" alt="benifits_img">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Offering -->
<section>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="fancy_style1 overlay_bg_30 animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
					<img src="<?= admin_public_url('assets/images/') . $offering['offering2image'] ?>" alt="benifits_img">
				</div>
			</div>
			<div class="col-md-6">
				<div class="bg-white box_shadow4 small_padding animation" data-animation="fadeInRight" data-animation-delay="0.2s">
					<div class="heading_s3">
						<h3><?= $offering['offering2title'] ?></h3>
						<div class="title_icon"><i class="flaticon-lotus"></i></div>
					</div>
					<p><?= $offering['offering2desc'] ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Offering -->
<section>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="bg-white box_shadow4 small_padding animation" data-animation="fadeInRight" data-animation-delay="0.2s">
					<div class="heading_s3">
						<h3><?= $offering['offering3title'] ?></h3>
						<div class="title_icon"><i class="flaticon-lotus"></i></div>
					</div>
					<p><?= $offering['offering3desc'] ?></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="fancy_style1 overlay_bg_30 animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
					<img src="<?= admin_public_url('assets/images/') . $offering['offering3image'] ?>" alt="benifits_img">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION Offering -->


<?php require view('static/footer') ?>
