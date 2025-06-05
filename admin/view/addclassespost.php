<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Add Class Post</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload11">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="classes" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="classtitle"  placeholder="write 'Title' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Days</label>
									<input class="form-control" id="validationCustom01" type="text" name="classdays" placeholder="write 'Days' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Time</label>
									<input class="form-control" id="validationCustom01" type="text" name="classtime"  placeholder="write 'Time' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Location</label>
									<input class="form-control" id="validationCustom01" type="text" name="classlocation"  placeholder="write 'Location' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label>Type:</label>
									<div class="m-checkbox-inline">
										<label for="edo-ani">
											<input class="radio_animated" id="edo-ani" type="radio" value="Text" name="classtype" checked="">Text
										</label>
										<label for="edo-ani1">
											<input class="radio_animated" id="edo-ani1" type="radio" value="Image" name="classtype">Image
										</label>
										<!--
										<label for="edo-ani2">
											<input class="radio_animated" id="edo-ani2" type="radio" value="Audio" name="classtype">Audio
										</label>
										<label for="edo-ani3">
											<input class="radio_animated" id="edo-ani3" type="radio" value="Video" name="classtype">Video
										</label>
										-->
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label>Starting date</label>
									<input class="form-control" type="date" name="classesstartdate"  data-language="en">
								</div>
							</div>
							<!-- <div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom0132">Media Link <small>Youtube or SoundCloud Embed</small></label>
									<input class="form-control" id="validationCustom0132" name="yt_link" type="text" placeholder="write 'Media Link' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div> -->
							<div class="col-sm-12">
								<div class="email-wrapper">
									<div class="theme-form">
										<div class="mb-3">
											<label>Content:</label>
											<textarea id="text-box" class="ckeditor" name="classcontent" cols="10" rows="5"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-showcase text-end mb-5">
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

	var newClassId;

	var myDropzone = new Dropzone("#singleFileUpload11", {
		url: api_url + "/classpageimage",
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
            // FormData'ya newClassId'yi ekleyin
				formData.append('newClassId', newClassId);
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

	$("#classes").on("submit", function (e) {
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

		$.post(api_url + "/classes", $(this).serialize(), null, "json").done(response => {
			if (response.error) {
				Swal.fire({ icon: 'error', title: '!...', text: response.error });
			} else {
				newClassId = response.classId;

            //Swal.fire({ icon: 'success', title: 'success...', text: response.success });

				this.reset();

				for (instance in CKEDITOR.instances) {
					CKEDITOR.instances[instance].setData('');
				}

				myDropzone.processQueue();

				setTimeout(function () {
					window.location.href = site_url +  'admin/classeslist'; 
				}, 3000);
			}
		});
	});



</script>