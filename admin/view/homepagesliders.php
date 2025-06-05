<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Home Slider-1</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload" >
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="slider1" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Slider-1 Title</label>
									<input class="form-control" id="validationCustom01" type="text" value="<?= post('slider1title') ? post('slider1title') : $row['slider1title'] ?>" name="slider1title" placeholder="write 'Title' for your slider-1.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Slider-1 Description</label>
									<textarea class="form-control" rows="5" name="slider1desc" placeholder="write 'Description' for your slider-1.?"><?= post('slider1desc') ? post('slider1desc') : $row['slider1desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" type="submit" onclick="uploadSlider1()">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Home Slider-2</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload2">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="slider2" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Slider-2 Title</label>
									<input class="form-control" id="validationCustom01" type="text" value="<?= post('slider2title') ? post('slider2title') : $row['slider2title'] ?>" name="slider2title" placeholder="write 'Title' for your slider-2.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Slider-2 Description</label>
									<textarea class="form-control" rows="5" name="slider2desc" placeholder="write 'Description' for your slider-2.?"><?= post('slider2desc') ? post('slider2desc') : $row['slider2desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" type="submit" onclick="uploadSlider2()">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Home Slider-3</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload3">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="slider3" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Slider-3 Title</label>
									<input class="form-control" id="validationCustom01" type="text" value="<?= post('slider3title') ? post('slider3title') : $row['slider3title'] ?>" name="slider3title" placeholder="write 'Title' for your slider-3.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Slider-3 Description</label>
									<textarea class="form-control" rows="5" name="slider3desc" placeholder="write 'Description' for your slider-3.?"><?= post('slider3desc') ? post('slider3desc') : $row['slider3desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" type="submit" onclick="uploadSlider3()">Save</button>
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
	var myDropzone = new Dropzone("#singleFileUpload", {
		url: api_url + "/homepageslidersimage",
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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['slider1image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		},
	});

	function uploadSlider1() {
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
	var myDropzone2 = new Dropzone("#singleFileUpload2", {
		url: api_url + "/homepageslidersimage2",
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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['slider2image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		},
	});

	function uploadSlider2() {
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
	var myDropzone3 = new Dropzone("#singleFileUpload3", {
		url: api_url + "/homepageslidersimage3",
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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['slider3image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		},
	});

	function uploadSlider3() {
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