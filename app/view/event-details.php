<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1><?= $row['event_title'] ?></h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('events') ?>">Events</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?= $row['event_title'] ?></li>
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

<!-- start slider photo-->
<div class="small_pb small_pt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="gallery_slider list_none carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-dots="false" data-nav="true" data-center="true" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
					<div class="item">
						<img src="<?= admin_public_url('assets/images/') . $row['event_image_1'] ?>" alt="image">
					</div>
					<div class="item">
						<img src="<?= admin_public_url('assets/images/') . $row['event_image_2'] ?>" alt="image">
					</div>
					<div class="item">
						<img src="<?= admin_public_url('assets/images/') . $row['event_image_3'] ?>" alt="image">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end slider photo-->


<!-- START SECTION EVENTS -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-8">
				<div class="single_events">
					<div class="events_title">
						<h2><?= $row['event_title'] ?></h2>
					</div>
					<div class="event_desc">

						<?= htmlspecialchars_decode($row['event_content']) ?>

					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 pt-3 pt-lg-0">
				<div class="sidebar">
					<div class="widget event_detail box_shadow4">
						<h5 class="widget_title">Event Infomation</h5>
						<div class="event_list">
							<ul class="border_bottom_dash">
								<li>
									<div class="classes_cat">
										<label>Days: </label>
										<span><?= $row['event_days'] ?></span>
									</div>
								</li>
								<li>
									<div class="classes_cat">
										<label>Time: </label>
										<span><?= $row['event_time'] ?></span>
									</div>
								</li>
								<li>
									<div class="classes_cat">
										<label>Start Date: </label>
										<span><?= $formattedDate ?></span>
									</div>
								</li>
								<li>
									<div class="classes_student">
										<label>Location: </label>
										<span><?= $row['event_location'] ?></span>
									</div>
								</li>
							</ul>
						</div>
						<a href="mailto:hello@maryli.life" class="btn btn-default btn-block mt-3">Register Now</a>
					</div>

					<?php 
					$query = $db->from('events')
					->where('event_id',$id,'!=')
					->orderby('view', 'DESC')
					->limit(0,2)
					->all();

					?>

					<div class="widget">
						<h5 class="widget_title">Featured Events</h5>
						<div class="carousel_slider owl-carousel owl-theme" data-margin="15" data-dots="false" data-loop="true" data-autoheight="true" data-autoplay="true" data-items="1">

							<?php foreach ($query as $row2): ?>

								<?php $originalDate = $row2['event_start_date'];
								$dateTime = new DateTime($originalDate);
								$formattedDate2 = $dateTime->format('j F'); ?>

								<div class="items">
									<div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
										<div class="event_img">
											<a href="<?= site_url(permalink($row2['event_title'])) . '/' . $row2['event_id'] ?>"><img src="<?= admin_public_url('assets/images/') . $row2['event_image_1'] ?>" alt="event_img"></a>
											<div class="event_date">
												<h5><?= $formattedDate2 ?></h5>
											</div>
										</div>
										<div class="event_info">
											<h5 class="event_title"><a href="#"><?= $row2['event_title'] ?></a></h5>
											<ul class="list_none event_meta">
												<li><i class="ti-time"></i><?= $row2['event_time'] ?></li>
												<li><i class="ti-location-pin"></i><?= $row2['event_location'] ?></li>
											</ul>
										</div>
									</div>
								</div>


							<?php endforeach ?>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION EVENTS -->



<?php require view('static/footer') ?>
