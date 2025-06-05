<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center">
				<div class="page-title">
					<h1>Blog</h1>
				</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
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
			<div class="col-lg-9">

				<ul class="blog_container grid_container gutter_medium grid_col2 masonry">
					<li class="grid-sizer"></li>

					<?php foreach ($query as $row): ?>
						<?php
						$originalDate = $row['blogdatetime'];
						$dateTime = new DateTime($originalDate);
						$formattedDate = $dateTime->format('j F Y'); 

						if (isset($row['blogimage'])) {
							$m = $row['blogimage'];
						}
						else{
							$m = 'video.jpg';
						}
						?>
						
						<li class="grid_item">
							<div class="blog_post box_shadow4">
								<div class="blog_img">
								    
									<?php if ($m == 'video.jpg'): ?>
										<div class="fit-videos">
											<iframe width="540" height="360" src="<?= $row['yt_link'] ?>" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
										</div>
									<?php else: ?>
										<a href="<?= site_url(permalink($row['blogtitle'])) . '/' . $row['blog_id'] ?>">
											<img src="<?= admin_public_url('assets/images/') . $row['blogimage'] ?>" alt="blog_small_img1">
										</a>
									<?php endif ?>
									
								</div>
								<div class="blog_content">
									<h5 class="blog_title"><a href="<?= site_url(permalink($row['blogtitle'])) . '/' . $row['blog_id'] ?>"><?= $row['blogtitle'] ?></a></h5>
									<ul class="list_none blog_meta">
										<li><a href="<?= site_url(permalink($row['blogtitle'])) . '/' . $row['blog_id'] ?>"><img src="<?= public_url('assets/images/users-01.png') ?>" alt="image"><span><?= $row['blogauthor'] ?></span></a></li>
										<li><a href="#"><i class="far fa-calendar"></i><?= $formattedDate ?></a></li>
									</ul>
									<p><?= cut_text($row['blogcontent']) ?></p>
									<a href="<?= site_url(permalink($row['blogtitle'])) . '/' . $row['blog_id'] ?>" class="blog_link">Read More</a>
								</div>
							</div>
						</li>

					<?php endforeach ?>
					
				</ul>
			</div>
			<div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
				<div class="sidebar">
					<div class="widget widget_search">
						<form class="search_form" method="GET" action="">
							<input required="" class="form-control" placeholder="Search..." name="q" type="text">
							<button type="submit" title="Search">
								<span class="ti-search"></span>
							</button>
						</form>
					</div>
					<div class="widget widget_recent_post">
						<h5 class="widget_title">Most Read Post</h5>
						<ul class="recent_post border_bottom_dash list_none">
							<?php foreach ($mostreads as $mostread): ?>
								<?php
								$originalDate = $mostread['blogdatetime'];
								$dateTime = new DateTime($originalDate);
								$formattedDate = $dateTime->format('j F Y'); 

								if ($mostread['blogtype'] == 'Image') {
									$m = $mostread['blogimage'];
								}
								else{
									$m = 'video.jpg';
								}
								?>
								<li>
									<div class="post_footer">
										<div class="post_img">
											<a href="<?= site_url(permalink($mostread['blogtitle'])) . '/' . $mostread['blog_id'] ?>"><img src="<?= admin_public_url('assets/images/') . $m ?>" alt="latest_post1"></a>
										</div>
										<div class="post_content">
											<h6><a href="<?= site_url(permalink($mostread['blogtitle'])) . '/' . $mostread['blog_id'] ?>"><?= $mostread['blogtitle'] ?></a></h6>
											<span class="post_date"><?= $formattedDate ?></span>
										</div>
									</div>
								</li>
							<?php endforeach ?>


						</ul>
					</div>
					<div class="widget widget_categories">
						<h5 class="widget_title">Categories</h5>
						<ul class="border_bottom_dash">
							<?php foreach ($allcategories as $allcategory): ?>
								<li><a href="<?= site_url('blog?category=') . $allcategory['category_name'] ?>"><span class="categories_name" data-filter="<?= $allcategory['category_name'] ?>"><?= $allcategory['category_name'] ?></span></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-3 mt-lg-4">
				<?php if ($totalRecord > $pageLimit): ?>
					<ul class="pagination justify-content-center">
						<?= $db->showPagination(site_url('blog' . "?" . $pageParam . "=[page]")) ?>
					</ul>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>
<!-- END SECTION BLOG -->

<?php require view('static/footer') ?>
