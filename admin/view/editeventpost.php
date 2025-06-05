<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Edit Event Post</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone dropzone-secondary bg-light-secondary dz-clickable" id="multiFileUpload">
							<div class="dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
								<p>(upload at least 3 photos.)</p>
							</div>
						</form>
						<form id="events" class="row needs-validation" novalidate="" onsubmit="return false;">
                            <input type="hidden" value="<?= $row['event_id'] ?>" name="event_id">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="event_title" value="<?= post('event_title') ? post('event_title') : $row['event_title'] ?>" placeholder="write 'Title' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Days</label>
									<input class="form-control" id="validationCustom01" type="text" name="event_days" value="<?= post('event_days') ? post('event_days') : $row['event_days'] ?>" placeholder="write 'Days' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Time</label>
									<input class="form-control" id="validationCustom01" name="event_time" type="text" value="<?= post('event_time') ? post('event_time') : $row['event_time'] ?>" placeholder="write 'Time' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Location</label>
									<input class="form-control" id="validationCustom01" name="event_location" type="text" value="<?= post('event_location') ? post('event_location') : $row['event_location'] ?>" placeholder="write 'Location' for your event.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label>Type:</label>
									<div class="m-checkbox-inline">
										<label for="edo-ani">
											<input class="radio_animated" id="edo-ani" type="radio" value="Text" name="event_type" <?= $row['event_type'] == 'Text' ? 'checked' : '' ?>>Text
										</label>
										<label for="edo-ani1">
											<input class="radio_animated" id="edo-ani1" type="radio" value="Image" name="event_type" <?= $row['event_type'] == 'Image' ? 'checked' : '' ?>>Image
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
									<input class="datepicker-here form-control" name="event_start_date" type="text" value="<?=$row['event_start_date']?>" data-language="en">
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
											<textarea id="text-box" class="ckeditor" name="event_content" cols="10" rows="5"><?= post('event_content') ? post('event_content') : $row['event_content'] ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-showcase text-end">
								<button class="btn btn-primary" type="submit">Save Event</button>
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
	
	var newEventId = <?= json_encode($row['event_id']) ?>;

	var myDropzone = new Dropzone("#multiFileUpload", {
		url: api_url + "/editeventpageimage",
		maxFiles: 3,
		parallelUploads: 3,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,
		uploadMultiple: true,

		init: function () {
			this.on("thumbnail", function(file, dataUrl) {
				$('.dz-image').last().find('img').attr({width: '100%', height: '100%'});
			});

			this.on("success", function(file) {
				$('.dz-image').css({"width":"100%", "height":"auto"});
			});

			// Mevcut resimleri göster
			var thisDropzone = this;
			<?php if(!empty($row['event_image_1'])): ?>
			var mockFile1 = { name: 'Event Image 1', size: 12345, type: 'image/jpeg' };
			thisDropzone.emit("addedfile", mockFile1);
			thisDropzone.emit("success", mockFile1);
			thisDropzone.emit("thumbnail", mockFile1, "<?= admin_public_url('assets/images/') . $row['event_image_1'] ?>");
			<?php endif; ?>

			<?php if(!empty($row['event_image_2'])): ?>
			var mockFile2 = { name: 'Event Image 2', size: 12345, type: 'image/jpeg' };
			thisDropzone.emit("addedfile", mockFile2);
			thisDropzone.emit("success", mockFile2);
			thisDropzone.emit("thumbnail", mockFile2, "<?= admin_public_url('assets/images/') . $row['event_image_2'] ?>");
			<?php endif; ?>

			<?php if(!empty($row['event_image_3'])): ?>
			var mockFile3 = { name: 'Event Image 3', size: 12345, type: 'image/jpeg' };
			thisDropzone.emit("addedfile", mockFile3);
			thisDropzone.emit("success", mockFile3);
			thisDropzone.emit("thumbnail", mockFile3, "<?= admin_public_url('assets/images/') . $row['event_image_3'] ?>");
			<?php endif; ?>

			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});

			this.on("sending", function (file, xhr, formData) {
				formData.append('newEventId', newEventId);
			});

			this.on("success", function (file, response) {
				Swal.fire({
					icon: 'success',
					title: 'Success!',
					text: 'Images uploaded successfully!',
				});
			});

			this.on("error", function (file, errorMessage) {
				Swal.fire({
					icon: 'error',
					title: 'Error!',
					text: errorMessage,
				});
			});
		}
	});

	// Form submit olayını düzelt
	$("#events").on("submit", function(e) {
		e.preventDefault();

		// CKEditor içeriğini güncelle
		for (instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}

		// Önce form verilerini kaydet
		$.post(api_url + "/eventedit", $(this).serialize(), null, "json").done(response => {
			if (response.error) {
				Swal.fire({ 
					icon: 'error', 
					title: 'Error!', 
					text: response.error 
				});
			} else {
				// Başarılı ise mesaj göster
				Swal.fire({ 
					icon: 'success', 
					title: 'Success!', 
					text: response.success 
				});

				// Eğer yeni dosyalar seçildiyse onları da yükle
				if (myDropzone.files.length > 0) {
					myDropzone.processQueue();
				}

				// 2 saniye sonra event list sayfasına yönlendir
				setTimeout(function() {
					window.location.href = site_url + 'admin/eventlist';
				}, 2000);
			}
		}).fail(function() {
			Swal.fire({ 
				icon: 'error', 
				title: 'Error!', 
				text: 'An error occurred while saving.' 
			});
		});
	});

	// Ayrı bir fonksiyon ile sadece resim yükleme
	function uploadEventImages() {
		if (myDropzone.files.length > 0) {
			myDropzone.processQueue();
		} else {
			Swal.fire({
				icon: 'info',
				title: 'Info',
				text: 'No new images to upload.'
			});
		}
	}

</script>