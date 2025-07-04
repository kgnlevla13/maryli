<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Privacy Policy</h4>
					</div>
					<div class="card-body add-post">
						<form id="privacypolicy" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="email-wrapper">
									<div class="theme-form">
										<div class="mb-3">
											<label>Content:</label>
											<textarea class="ckeditor" name="content" id="editor12" cols="10" rows="25">
												<?= post('content') ? post('content') : $row['content'] ?>
											</textarea>
											<div id="editor"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-showcase text-end">
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>

<?php require admin_view('static/footer') ?>

<script>
	
</script>