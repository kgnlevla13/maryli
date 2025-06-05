<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Home Section-1</h4>
					</div>
					<div class="card-body add-post">
						<form id="section1" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Section-1 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="section1title" value="<?= post('section1title') ? post('section1title') : $row['section1title'] ?>" placeholder="write 'Title' for your section-1.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Section-1 Description</label>
									<input class="form-control" id="validationCustom01" type="text" name="section1desc" value="<?= post('section1desc') ? post('section1desc') : $row['section1desc'] ?>" placeholder="write 'Description' for your section-1.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="card-footer col-sm-4">
								<div class="mb-3">
									<label for="validationCustom01">SectionBox-1 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="sectionbox1title" value="<?= post('sectionbox1title') ? post('sectionbox1title') : $row['sectionbox1title'] ?>" placeholder="write 'Title' for your sectionbox-1.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="card-footer col-sm-4">
								<div class="mb-3">
									<label for="validationCustom01">SectionBox-2 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="sectionbox2title" value="<?= post('sectionbox2title') ? post('sectionbox2title') : $row['sectionbox2title'] ?>" placeholder="write 'Title' for your sectionbox-2.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="card-footer col-sm-4">
								<div class="mb-3">
									<label for="validationCustom01">SectionBox-3 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="sectionbox3title" value="<?= post('sectionbox3title') ? post('sectionbox3title') : $row['sectionbox3title'] ?>" placeholder="write 'Title' for your sectionbox-3.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">SectionBox-1 Description</label>
									<textarea class="form-control" rows="5" name="sectionbox1desc" placeholder="write 'Description' for your sectionbox-1.?"><?= post('sectionbox1desc') ? post('sectionbox1desc') : $row['sectionbox1desc'] ?></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">SectionBox-2 Description</label>
									<textarea class="form-control" rows="5" name="sectionbox2desc" placeholder="write 'Description' for your sectionbox-2.?"><?= post('sectionbox2desc') ? post('sectionbox2desc') : $row['sectionbox2desc'] ?></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">SectionBox-3 Description</label>
									<textarea class="form-control" rows="5" name="sectionbox3desc" placeholder="write 'Description' for your sectionbox-3.?"><?= post('sectionbox3desc') ? post('sectionbox3desc') : $row['sectionbox3desc'] ?></textarea>
								</div>
							</div>
							<div class="card-footer col-sm-4">
								<div class="mb-3">
									<label for="validationCustom01">SectionBox-4 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="sectionbox4title" value="<?= post('sectionbox4title') ? post('sectionbox4title') : $row['sectionbox4title'] ?>" placeholder="write 'Title' for your sectionbox-4.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="card-footer col-sm-4">
								<div class="mb-3">
									<label for="validationCustom01">SectionBox-5 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="sectionbox5title" value="<?= post('sectionbox5title') ? post('sectionbox5title') : $row['sectionbox5title'] ?>" placeholder="write 'Title' for your sectionbox-5.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="card-footer col-sm-4">
								<div class="mb-3">
									<label for="validationCustom01">SectionBox-6 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="sectionbox6title" value="<?= post('sectionbox6title') ? post('sectionbox6title') : $row['sectionbox6title'] ?>" placeholder="write 'Title' for your sectionbox-6.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">SectionBox-4 Description</label>
									<textarea class="form-control" rows="5" name="sectionbox4desc" placeholder="write 'Description' for your sectionbox-4.?"><?= post('sectionbox4desc') ? post('sectionbox4desc') : $row['sectionbox4desc'] ?></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">SectionBox-5 Description</label>
									<textarea class="form-control" rows="5" name="sectionbox5desc" placeholder="write 'Description' for your sectionbox-5.?"><?= post('sectionbox5desc') ? post('sectionbox5desc') : $row['sectionbox5desc'] ?></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label class="form-label">SectionBox-6 Description</label>
									<textarea class="form-control" rows="5" name="sectionbox6desc" placeholder="write 'Description' for your sectionbox-6.?"><?= post('sectionbox6desc') ? post('sectionbox6desc') : $row['sectionbox6desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end">
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Home Section-2</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload4">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="section2" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-12">
								<div class="mb-3">
									<label for="validationCustom01">Section-2 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="section2title" value="<?= post('section2title') ? post('section2title') : $row['section2title'] ?>" placeholder="write 'Title' for your section-2.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Section-2 Description</label>
									<textarea class="form-control" rows="5" name="section2desc" placeholder="write 'Description' for your section-2.?"><?= post('section2desc') ? post('section2desc') : $row['section2desc'] ?></textarea>
								</div>
							</div>
							<div class="btn-showcase text-end mb-1">
								<button class="btn btn-primary" onclick="uploadsection2()" type="submit">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Home Section-3</h4>
					</div>
					<div class="card-body add-post">
						<form id="section3" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Section-3 Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="section3title" value="<?= post('section3title') ? post('section3title') : $row['section3title'] ?>" placeholder="write 'Title' for your section-3.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Section-3 Description</label>
									<input class="form-control" id="validationCustom01" type="text" name="section3desc" value="<?= post('section3desc') ? post('section3desc') : $row['section3desc'] ?>" placeholder="write 'Description' for your section-3.?" required="">
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
	

	Dropzone.autoDiscover = false;
	var myDropzone = new Dropzone("#singleFileUpload4", {
		url: api_url + "/homepageothersimage",
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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['section2image'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});
		}, 

	});


	function uploadsection2() {
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