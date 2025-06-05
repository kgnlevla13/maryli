<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<?php foreach ($query as $row): ?>


				<?php 
				$originalDate = $row['create_date'];
				$dateTime = new DateTime($originalDate);
				$formattedDate = $dateTime->format('j F Y');
				if (isset($row['event_image_1'])) {
                  $m = $row['event_image_1'];
                }
                else{
                  $m = 'video.jpg';
                }
                ?>

				<div class="col-md-6 col-xxl-2 box-col-6">
					<div class="card">
						<div class="blog-box blog-grid text-center product-box">
							<div class="product-img"><img class="img-fluid top-radius-blog" src="<?= admin_public_url('assets/images/') . $m ?>" alt="">
								<div class="product-hover">
									<ul>
										<li title="edit"><a href="<?= admin_url('editeventpost?id=') . $row["event_id"] ?>"><i class="icon-wand"></i></a></li>
										<li title="delete"><a class="delete" table="events" column="event_id" id="<?=$row["event_id"]?>" onclick="delete_post()" ><i class="icon-trash"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="blog-details-main">
								<ul class="blog-social">
									<li><?= $formattedDate ?></li>
									<li><?=$row["view"]?> Views</li>
								</ul>
								<hr>
								<h5 class="f-w-600"><?= $row['event_title'] ?></h5>
								<p class="blog-bottom-details"><?= cut_text($row['event_content'],100) ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			

		</div>
		<?php if ($totalRecord > $pageLimit): ?>
			<div class="pagination-container text-center">
				<ul class="pagination"><?= $db->showPagination(admin_url(route(1) . "?" . $pageParam . "=[page]")) ?></ul>
			</div>
		<?php endif; ?>
	</div>
	

	<style type="text/css">
		.pagination-container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh; /* İsteğe bağlı: Sayfa yüksekliğine göre ayarlayabilirsiniz */
		}
	</style>

	<!-- Container-fluid Ends-->
</div>


<?php require admin_view('static/footer') ?>