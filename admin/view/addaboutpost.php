<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Add About Post</h4>
					</div>
					<div class="card-body add-post">
						
								<form class="dropzone bg-light-primary" id="aboutImageUpload">
									<div class="m-0 dz-message needsclick">
										<i class="icon-cloud-up"></i>
										<h6 class="f-w-600 mb-0">Drop image here or click to upload.</h6>
										<span class="note needsclick">(Only JPG, JPEG, PNG, GIF, WEBP files allowed. Max 5MB)</span>
									</div>
								</form>
						<!-- About Form -->
						<form id="aboutForm" class="row needs-validation" novalidate="">
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

<script type="text/javascript">

	Dropzone.autoDiscover = false;

	var newAboutId;

	var myDropzone = new Dropzone("#aboutImageUpload", {
		url: api_url + "/aboutpageimage",
		maxFiles: 1,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,
		init: function () {
			this.on("addedfile", function (file) {
            // Eğer dosya varsa işlemi devam ettir
				if (this.files.length > 1) {
					this.removeFile(this.files[0]);
				}
			});

			this.on("sending", function (file, xhr, formData) {
            // FormData'ya newAboutId'yi ekleyin
				formData.append('newAboutId', newAboutId);
			});

			this.on("success", function (file, response) {
				Swal.fire({
					icon: 'success',
					title: 'success!',
					text: response,
				});

				myDropzone.removeAllFiles();
			});

			this.on("error", function (file, errorMessage) {
				Swal.fire({
					icon: 'error',
					title: 'error!',
					text: errorMessage,
				});
			});
		}
	});

	$("#aboutForm").on("submit", function (e) {
		e.preventDefault();

		for (instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}

    // Eğer dosya seçilmemişse işlemi devam ettirme
		if (myDropzone.files.length === 0) {
        // Burada kullanıcıya bir uyarı verebilirsiniz
			Swal.fire({
				icon: 'warning',
				title: 'Warning!',
				text: 'Please select a file.',
			});
			return;
		}

		$.post(api_url + "/about", $(this).serialize(), null, "json").done(response => {
			if (response.error) {
				Swal.fire({ icon: 'error', title: '!...', text: response.error });
			} else {
				newAboutId = response.aboutId;

            //Swal.fire({ icon: 'success', title: 'success...', text: response.success });

				this.reset();

				for (instance in CKEDITOR.instances) {
					CKEDITOR.instances[instance].setData('');
				}

				myDropzone.processQueue();

				setTimeout(function () {
					window.location.href = site_url +  'admin/aboutlist'; 
				}, 3000);
			}
		});
	});
</script>