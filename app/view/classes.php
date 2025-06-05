<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1>Classes</h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Classes</li>
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

			<?php foreach ($query as $row): ?>
				<?php 
				$originalDate = $row['classesstartdate'];
				$dateTime = new DateTime($originalDate);
				$formattedDate = $dateTime->format('j M Y');
				?>
				<div class="col-lg-4 col-sm-6">
					<a href="<?= site_url(permalink($row['classtitle'])) . '/' . $row['class_id'] ?>">
						<div class="classes_box box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
							<div class="classes_img">
								<img src="<?= admin_public_url('assets/images/') . $row['classimage'] ?>" alt="image">
								<div class="link_container"></div>
							</div>
							<div class="classes_info">
								<div class="classes_teacher">
									<img src="<?= public_url('assets/images/users-01.png') ?>" alt="image">
									<span>Mary Li</span>
								</div>
								<div class="classes_title">
									<span class="badge badge-pill badge-success"><?= $row['classlocation'] ?></span>
									<h4><a href="<?= site_url(permalink($row['classtitle'])) . '/' . $row['class_id'] ?>"><?= $row['classtitle'] ?></a></h4>
								</div>
								<ul class="classes_schedule">
									<li><i class="ion-calendar"></i><?= $row['classdays'] ?></li>
									<li><i class="ion-android-alarm-clock"></i><?= $formattedDate ?></li>
								</ul>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>

		</div>
		<div class="row">
			<div class="col-12 mt-3 mt-lg-4">
				<?php if ($totalRecord > $pageLimit): ?>

					<ul class="pagination justify-content-center">
						<?= $db->showPagination(site_url('classes' . "?" . $pageParam . "=[page]")) ?>
					</ul>

				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>
<!-- END SECTION CLASSES -->

<?php require view('static/footer') ?>
