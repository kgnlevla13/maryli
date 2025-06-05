<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Edit About Post</h4>
					</div>
					<div class="card-body add-post">
								
								<form class="dropzone bg-light-primary" id="aboutImageUpload">
									<div class="m-0 dz-message needsclick">
										<i class="icon-cloud-up"></i>
										<h6 class="f-w-600 mb-0">Drop new image here or click to upload.</h6>
										<span class="note needsclick">(Only JPG, JPEG, PNG, GIF, WEBP files allowed. Max 5MB)</span>
									</div>
								</form>
						<!-- About Form -->
						<form id="aboutEditForm" class="row needs-validation" novalidate="">
							<input type="hidden" name="id" value="<?= $row['id'] ?>">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="abouttitle">About Title</label>
									<input class="form-control" id="abouttitle" type="text" name="abouttitle" value="<?= post('abouttitle') ? post('abouttitle') : $row['abouttitle'] ?>" placeholder="Enter about title" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">About Description</label>
									<textarea class="ckeditor" rows="9" name="aboutdesc" placeholder="Enter about description"><?= post('aboutdesc') ? post('aboutdesc') : $row['aboutdesc'] ?></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">About Description 2 (Optional)</label>
									<textarea class="ckeditor" rows="9" name="aboutdesc2" placeholder="Enter additional description (optional)"><?= post('aboutdesc2') ? post('aboutdesc2') : $row['aboutdesc2'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-3">
								<button class="btn btn-primary" type="submit">Update About Post</button>
								<a href="<?= admin_url('aboutlist') ?>" class="btn btn-secondary">Cancel</a>
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

<script type="text/javascript">

	Dropzone.autoDiscover = false;

	var newAboutId = <?= $row['id'] ?>;

	var myDropzone = new Dropzone("#aboutImageUpload", {
		url: api_url + "/editaboutpageimage",
		maxFiles: 1,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,
		init: function () {

			this.on("thumbnail", function(file, dataUrl) {
				$('.dz-image').last().find('img').attr({width: '100%', height: '100%'});
			}),
			this.on("success", function(file) {
				$('.dz-image').css({"width":"100%", "height":"auto"});
			});

			var thisDropzone = this;
			var mockFile = { name: 'Name Image', size: 12345, type: 'image/jpeg' };
			thisDropzone.emit("addedfile", mockFile);
			thisDropzone.emit("success", mockFile);
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['aboutimage'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});

			this.on("sending", function (file, xhr, formData) {
            // FormData'ya newAboutId'yi ekleyin
				formData.append('newAboutId', newAboutId);
			});
			
		}
	});

	function uploadAboutImage() {
		myDropzone.processQueue();
		myDropzone.on("success", function(file, response) {
			Swal.fire({
				icon: 'success',
				title: 'success!',
				text: response,
			});
		});
		myDropzone.on("error", function(file, errorMessage) {
			Swal.fire({
				icon: 'error',
				title: 'error!',
				text: errorMessage,
			});
		});
	}

</script>