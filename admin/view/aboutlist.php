<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-12">
				<div class="d-flex justify-content-between align-items-center">
					<h4>About Posts</h4>
					<a href="<?= admin_url('addaboutpost') ?>" class="btn btn-primary">
						<i class="icon-plus"></i> Add New About Post
					</a>
				</div>
			</div>
		</div>
		
		<div class="row">
			<?php if (!empty($query)): ?>
				<?php foreach ($query as $row): ?>
					<?php 
					$originalDate = $row['created_at'];
					$dateTime = new DateTime($originalDate);
					$formattedDate = $dateTime->format('j F Y');
					?>

					<div class="col-md-6 col-xxl-3 box-col-6">
						<div class="card">
							<div class="blog-box blog-grid text-center product-box">
								<div class="product-img">
									<?php if (!empty($row['aboutimage'])): ?>
										<img class="img-fluid top-radius-blog" 
											 src="<?= admin_public_url('assets/images/') . $row['aboutimage'] ?>" 
											 alt="<?= htmlspecialchars($row['abouttitle']) ?>"
											 style="height: 200px; object-fit: cover;">
									<?php else: ?>
										<div class="placeholder-image d-flex align-items-center justify-content-center bg-light" 
											 style="height: 200px;">
											<i class="fa fa-image fa-3x text-muted"></i>
										</div>
									<?php endif; ?>
									
									<div class="product-hover">
										<ul>
											<li title="Edit">
												<a href="<?= admin_url('editaboutpost?id=') . $row["id"] ?>">
													<i class="icon-wand"></i>
												</a>
											</li>
											<li title="delete"><a class="delete" table="aboutpage" column="id" id="<?=$row["id"]?>" onclick="delete_post()" ><i class="icon-trash"></i></a></li>
										</ul>
									</div>
								</div>
								
								<div class="blog-details-main">
									<ul class="blog-social">
										<li><i class="icon-calendar"></i> <?= $formattedDate ?></li>
										<li>
											<span class="badge badge-<?= $row['status'] == 'active' ? 'success' : 'secondary' ?>">
												<?= ucfirst($row['status']) ?>
											</span>
										</li>
									</ul>
									<hr>
									<h5 class="f-w-600"><?= htmlspecialchars($row['abouttitle']) ?></h5>
									<p class="blog-bottom-details">
										<?= cut_text($row['aboutdesc'], 100) ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			<?php else: ?>
				<div class="col-12">
					<div class="card">
						<div class="card-body text-center py-5">
							<i class="icon-info fa-4x text-muted mb-3"></i>
							<h4>No About Posts Found</h4>
							<p class="text-muted">Start by creating your first about post.</p>
							<a href="<?= admin_url('addaboutpost') ?>" class="btn btn-primary">
								<i class="icon-plus"></i> Create About Post
							</a>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<!-- Container-fluid Ends-->
</div>

<?php require admin_view('static/footer') ?>