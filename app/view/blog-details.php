<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1><?= $row['blogtitle'] ?></h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('blog') ?>">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?= $row['blogtitle'] ?></li>
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

<!-- START SECTION BLOG -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single_post">
					<?php 
					if (isset($row['blogimage'])) {
						$m = $row['blogimage'];
					}
					else{
						$m = 'video.jpg';
					}

					?>
					<div class="blog_img">
						<?php if ($m == 'video.jpg'): ?>
							<div class="fit-videos">
								<iframe width="540" height="360" src="<?= $row['yt_link'] ?>" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
							</div>
						<?php else: ?>
							<img src="<?= admin_public_url('assets/images/') . $row['blogimage'] ?>" alt="blog_img1">
						<?php endif ?>
						
					</div>
					<div class="single_post_content">
						<div class="blog_text">
							<h2 class="blog_title"><?= $row['blogtitle'] ?></h2>
							<ul class="list_none blog_meta">
								<li><a href="#"><img src="<?= public_url('assets/images/users-01.png') ?>" alt="image"><span><?= $row['blogauthor'] ?></span></a></li>
								<li><a href="#"><i class="far fa-calendar"></i><?= $formattedDate ?></a></li>
							</ul>
							<?= htmlspecialchars_decode($row['blogcontent']) ?>
							<div class="border-top border-bottom blog_post_footer">
								<div class="row justify-content-between align-items-center">
									<div class="col-md-8 mb-3 mb-md-0">
										<div class="tags">
											<?php foreach ($tagdata as $item): ?>
												<a href="<?= site_url('blog?tag=') . $item['value'] ?>"><?= $item['value'] ?></a>
											<?php endforeach ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="post_navigation">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto">
								<a href="<?= isset($prev_post['blogtitle']) ? site_url(permalink($prev_post['blogtitle'])) . '/' . $prev_post['blog_id'] : '#' ?>">
									<div class="d-flex align-items-center">
										<i class="ion-ios-arrow-thin-left mr-2"></i>
										<div>
											<span>previous Post</span>
										</div>
									</div>
								</a>
							</div>
							<div class="col-auto">
								<a href="<?= isset($next_post['blogtitle']) ? site_url(permalink($next_post['blogtitle'])) . '/' . $next_post['blog_id'] : '#' ?>">
									<div class="d-flex align-items-center flex-row-reverse text-right">
										<i class="ion-ios-arrow-thin-right ml-2"></i>
										<div>
											<span>Next Post</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION BLOG -->

<?php require view('static/footer') ?>
