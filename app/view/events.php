<?php require view('static/header') ?>

<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1>events</h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Events</li>
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




<!-- START SECTION EVENTS -->
<section>
	<div class="container">
		<div class="row justify-content-center">



			<?php foreach ($query as $row): ?>

				<?php 
				$originalDate = $row['event_start_date'];
				$dateTime = new DateTime($originalDate);
				$formattedDate = $dateTime->format('j M');
				if (isset($row['event_image_1'])) {
                  $m = $row['event_image_1'];
                }
                else{
                  $m = 'video.jpg';
                }
				?>

				<div class="col-lg-4 col-md-6">
					<div class="event_box event_box_style1 box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
						<div class="event_img">
						    <?php if ($m == 'video.jpg'): ?>
                                <div class="fit-videos">
                                  <iframe width="540" height="360" src="<?= $row['yt_link'] ?>" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                </div>
                            <?php else: ?>
                                <a href="<?= site_url(permalink($row['event_title'])) . '/' . $row['event_id'] ?>"><img src="<?= admin_public_url('assets/images/') . $row['event_image_1'] ?>" alt="event_img"></a>
                            <?php endif ?>
							<div class="event_date">
								<h5><?= $formattedDate ?></h5>
							</div>
						</div>
						<div class="event_info">
							<h5 class="event_title"><a href="<?= site_url(permalink($row['event_title'])) . '/' . $row['event_id'] ?>"><?= $row['event_title'] ?></a></h5>
							<ul class="list_none event_meta">
								<li><i class="ti-time"></i><?= $row['event_time'] ?></li>
								<li><i class="ti-location-pin"></i><?= $row['event_location'] ?></li>
							</ul>
						</div>
					</div>
				</div>

			<?php endforeach ?>


		</div>
	</div>
</section>
<!-- END SECTION EVENTS -->

<?php require view('static/footer') ?>
