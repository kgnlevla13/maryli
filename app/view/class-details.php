<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1><?= $row['classtitle'] ?></h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('classes') ?>">Classes</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?= $row['classtitle'] ?></li>
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

<!-- START SECTION CLASSES -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single_classes">
					<div class="classes_img">
						<img src="<?= admin_public_url('assets/images/') . $row['classimage'] ?>" alt="classes_img_big">
					</div>
					<div class="classes_detail">
						<div class="classes_title">
							<h2><?= $row['classtitle'] ?></h2>
						</div>
						<div class="countent_detail_meta">
							<ul>
								<li>
									<div class="teacher_img">
										<img src="<?= public_url('assets/images/users-01.png') ?>" alt="teacher_img">
										<div class="teacher_info">
											<label>Author:</label>
											<a href="#">Mary Li</a>
										</div>
									</div>
								</li>
								<li>
									<div class="classes_days">
										<label>Days: </label>
										<span><?= $row['classdays'] ?></span>
									</div>
								</li>
								<li>
									<div class="classes_time">
										<label>Time: </label>
										<span><?= $row['classtime'] ?></span>
									</div>
								</li>
								<li>
									<div class="classes_date">
										<label>Start Date: </label>
										<span><?= $formattedDate ?></span>
									</div>
								</li>
								<li>
									<div class="classes_location">
										<label>Location: </label>
										<span><?= $row['classlocation'] ?></span>
									</div>
								</li>
								<div style="text-align: right; padding-top: 7px;">
									<a href="mailto:<?= $setting['site_email'] ?>" class="btn btn-default btn-sm">Register Now</a>
								</div>
							</ul>
						</div>
					</div>
					<div class="classes_desc">
						<?= htmlspecialchars_decode($row['classcontent']) ?>
					</div>
					<!-- <div class="row justify-content-between align-items-center">
						<div class="col-md-8 mb-3 mb-md-0">
							<div class="tags">
								<a href="#">Gym</a>
								<a href="#">Fitness</a>
								<a href="#">Cardio</a>
								<a href="#">Cycling</a>
							</div>
						</div>
					</div> -->
					<br>
				</div>
			</div>
		</div>
		<div class="post_navigation">
			<div class="row align-items-center justify-content-between">
				<div class="col-auto">
					<a href="<?= isset($prev_post['classtitle']) ? site_url(permalink($prev_post['classtitle'])) . '/' . $prev_post['class_id'] : '#' ?>">
						<div class="d-flex align-items-center">
							<i class="ion-ios-arrow-thin-left mr-2"></i>
							<div>
								<span>previous class</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-auto">
					<a href="<?= isset($next_post['classtitle']) ? site_url(permalink($next_post['classtitle'])) . '/' . $next_post['class_id'] : '#' ?>">
						<div class="d-flex align-items-center flex-row-reverse text-right">
							<i class="ion-ios-arrow-thin-right ml-2"></i>
							<div>
								<span>next class</span>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION CLASSES -->

<?php require view('static/footer') ?>
