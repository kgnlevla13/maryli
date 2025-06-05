<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Add Event Post</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone dropzone-secondary bg-light-secondary dz-clickable" id="multiFileUpload">
							<div class="dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
								<p>(upload at least 3 photos.)</p>
							</div>
						</form>
						<form id="events" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="event_title" placeholder="write 'Title' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Days</label>
									<input class="form-control" id="validationCustom01" type="text" name="event_days" placeholder="write 'Days' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Time</label>
									<input class="form-control" id="validationCustom01" name="event_time" type="text" placeholder="write 'Time' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Location</label>
									<input class="form-control" id="validationCustom01" name="event_location" type="text" placeholder="write 'Location' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label>Type:</label>
									<div class="m-checkbox-inline">
										<label for="edo-ani">
											<input class="radio_animated" id="edo-ani" type="radio" value="Text" name="event_type" checked="">Text
										</label>
										<label for="edo-ani1">
											<input class="radio_animated" id="edo-ani1" type="radio" value="Image" name="event_type">Image
										</label>
										<!--
										<label for="edo-ani2">
											<input class="radio_animated" id="edo-ani2" type="radio" value="Audio" name="event_type">Audio
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
									<input class="datepicker-here form-control" name="event_start_date" type="text" data-language="en">
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
											<textarea id="text-box" class="ckeditor" name="event_content" cols="10" rows="5"></textarea>
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

<script type="text/javascript">

	var newEventId;
	Dropzone.autoDiscover = false;

	var myDropzone = new Dropzone("#multiFileUpload", {
		url: api_url + "/eventpageimage",
		maxFiles: 3,
		parallelUploads:3,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,
		uploadMultiple: true,

		init: function () {
			this.on("sending", function (file, xhr, formData) {
				// FormData'ya newEventId'yi ekleyin
				formData.append('newEventId', newEventId);

				// Yükleme başladığında Swal ile bir bildirim göster
				Swal.fire({
					title: 'Uploading...',
					text: 'File is being uploaded. Please wait.',
					allowOutsideClick: false,
					showConfirmButton: false,
					onBeforeOpen: () => {
						Swal.showLoading();
					}
				});
			});

			this.on("success", function (file, response) {
				// Yükleme başarıyla tamamlandığında Swal bildirimini kapat
				Swal.close();

				Swal.fire({
					icon: 'success',
					title: 'Success!',
					text: response,
				});

				//myDropzone.removeAllFiles();
			});

			this.on("error", function (file, errorMessage) {
				// Yükleme hatası oluştuğunda Swal bildirimini kapat
				Swal.close();

				Swal.fire({
					icon: 'error',
					title: 'Error!',
					text: errorMessage,
				});
			});
		}
	});

	$("#events").on("submit", function(e) {
		e.preventDefault();

		for (instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}

		

		if (myDropzone.files.length === 0) {
			Swal.fire({
				icon: 'warning',
				title: 'Warning!',
				text: 'Please select a file.',
			});
			return;
		} else if (myDropzone.files.length < 3 ) {
			Swal.fire({
				icon: 'warning',
				title: 'Warning!',
				text: 'Please select at least 3 images.',
			});
			return;
		}

		$.post(api_url + "/event", $(this).serialize(), null, "json").done(response => {
			if (response.error){
				Swal.fire({icon: 'error', title: '!...', text: response.error});
			} else {
				newEventId = response.eventId;

				if (myDropzone.files.length === 0 ) {
					Swal.fire({ icon: 'success', title: 'Success!...', text: response.success });
				}
				myDropzone.processQueue();

				setTimeout(function () {
					window.location.href = site_url +  'admin/eventlist'; 
				}, 3000);
			}
		});
	});


</script>