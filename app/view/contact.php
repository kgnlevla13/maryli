<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1>Contact</h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
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


<!-- START SECTION CONTACT -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
				<div class="heading_s2">
					<h3>Get In touch</h3>
				</div>
				<p><?= $setting['contact'] ?></p>
			</div>
			<div class="col-lg-8 col-md-6 mt-4 mt-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
				<div class="field_form icon_form">
					<form id="contact" name="enq" onsubmit="return false;">
						<div class="row">
							<div class="form-group col-lg-6">
								<div class="form-input">
									<span>
										<i class="ti-user"></i>
									</span>
									<input required="required" placeholder="Name *" id="first-name" class="form-control" name="name" type="name">
								</div>
							</div>
							<div class="form-group col-lg-6">
								<div class="form-input">
									<span>
										<i class="ti-email"></i>
									</span>
									<input required="required" placeholder="Email *" id="email" class="form-control" name="email" type="email">
								</div>
							</div>
							<div class="form-group col-12">
								<div class="form-input">
									<span>
										<i class="ti-folder"></i>
									</span>
									<input placeholder="Subject *" id="subject" class="form-control" name="subject" type="text">
								</div>
							</div>
							<div class="form-group col-lg-12">
								<div class="form-input">
									<span>
										<i class="ti-comments"></i>
									</span>
									<textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="9"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<button type="submit" title="Your message has been sent.!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Send</button>
							</div>
							<div class="col-lg-12 text-center">
								<div id="alert-msg" class="alert-msg text-center"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION CONTACT -->


<?php require view('static/footer') ?>
