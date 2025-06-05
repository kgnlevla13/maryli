<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Offering Section-1</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload8">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="offering1" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Section-1 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="offering1title" value="<?= post('offering1title') ? post('offering1title') : $row['offering1title'] ?>" placeholder="write 'Title' for your section-1.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Section-1 Description</label>
									<textarea class="form-control" rows="5" name="offering1desc" placeholder="write 'Description' for your section-1.?"><?= post('offering1desc') ? post('offering1desc') : $row['offering1desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" onclick="uploadOffering1()" type="submit">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Offering Section-2</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload9" >
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="offering2" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Section-2 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="offering2title" value="<?= post('offering2title') ? post('offering2title') : $row['offering2title'] ?>" placeholder="write 'Title' for your section-2.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Section-2 Description</label>
									<textarea class="form-control" rows="5" name="offering2desc" placeholder="write 'Description' for your section-2.?"><?= post('offering2desc') ? post('offering2desc') : $row['offering2desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" onclick="uploadOffering2()" type="submit">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Offering Section-3</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload10">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="offering3" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Section-3 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="offering3title" value="<?= post('offering3title') ? post('offering3title') : $row['offering3title'] ?>" placeholder="write 'Title' for your section-3.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Section-3 Description</label>
									<textarea class="form-control" rows="5" name="offering3desc" placeholder="write 'Description' for your section-3.?"><?= post('offering3desc') ? post('offering3desc') : $row['offering3desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" onclick="uploadOffering3()" type="submit">Save</button>
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
	var myDropzone = new Dropzone("#singleFileUpload8", {
		url: api_url + "/offeringpageimage",
		maxFiles: 1,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,

		init: function() {

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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['offering1image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		},
	});

	function uploadOffering1() {
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


	Dropzone.autoDiscover = false;
	var myDropzone2 = new Dropzone("#singleFileUpload9", {
		url: api_url + "/offeringpageimage2",
		maxFiles: 1,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,

		init: function() {

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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['offering2image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		},
	});

	function uploadOffering2() {
		myDropzone2.processQueue();
		myDropzone2.on("success", function(file, response) {
			Swal.fire({
				icon: 'success',
				title: 'success!',
				text: response,
			});
		});
		myDropzone2.on("error", function(file, errorMessage) {
			Swal.fire({
				icon: 'error',
				title: 'error!',
				text: errorMessage,
			});
		});
	}

	Dropzone.autoDiscover = false;
	var myDropzone3 = new Dropzone("#singleFileUpload10", {
		url: api_url + "/offeringpageimage3",
		maxFiles: 1,
		acceptedFiles: "image/*",
		addRemoveLinks: true,
		autoProcessQueue: false,
		
		init: function() {

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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['offering3image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		},
	});

	function uploadOffering3() {
		myDropzone3.processQueue();
		myDropzone3.on("success", function(file, response) {
			Swal.fire({
				icon: 'success',
				title: 'success!',
				text: response,
			});
		});
		myDropzone3.on("error", function(file, errorMessage) {
			Swal.fire({
				icon: 'error',
				title: 'error!',
				text: errorMessage,
			});
		});
	}
	

</script>
