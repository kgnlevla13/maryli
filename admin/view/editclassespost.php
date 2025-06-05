<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Edit Class Post</h4>
					</div>
					<div class="card-body add-post">
						<form class="dropzone bg-light-primary" id="singleFileUpload12">
							<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
								<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
							</div>
						</form>
						<form id="classesedit" class="row needs-validation" novalidate="" onsubmit="return false;">
							<input type="hidden" name="class_id" value="<?= $row['class_id'] ?>">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="classtitle" value="<?= post('classtitle') ? post('classtitle') : $row['classtitle'] ?>"  placeholder="write 'Title' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Days</label>
									<input class="form-control" id="validationCustom01" type="text" name="classdays" value="<?= post('classdays') ? post('classdays') : $row['classdays'] ?>" placeholder="write 'Days' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Time</label>
									<input class="form-control" id="validationCustom01" type="text" name="classtime" value="<?= post('classtime') ? post('classtime') : $row['classtime'] ?>"  placeholder="write 'Time' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Location</label>
									<input class="form-control" id="validationCustom01" type="text" name="classlocation" value="<?= post('classlocation') ? post('classlocation') : $row['classlocation'] ?>"  placeholder="write 'Location' for your class.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label>Type:</label>
									<div class="m-checkbox-inline">
										<label for="edo-ani">
											<input class="radio_animated" id="edo-ani" type="radio" value="Text" name="classtype" <?= $row['classtype'] == 'Text' ? 'checked' : '' ?>>Text
										</label>
										<label for="edo-ani1">
											<input class="radio_animated" id="edo-ani1" type="radio" value="Image" name="classtype" <?= $row['classtype'] == 'Image' ? 'checked' : '' ?>>Image
										</label>
										<label for="edo-ani2">
											<input class="radio_animated" id="edo-ani2" type="radio" value="Audio" name="classtype" <?= $row['classtype'] == 'Audio' ? 'checked' : '' ?>>Audio
										</label>
										<label for="edo-ani3">
											<input class="radio_animated" id="edo-ani3" type="radio" value="Video" name="classtype" <?= $row['classtype'] == 'Video' ? 'checked' : '' ?>>Video
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label>Starting date</label>
									<input id="datepicker" class=" form-control" type="date" name="classesstartdate" value="<?=$row['classesstartdate']?>"  data-language="en">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="email-wrapper">
									<div class="theme-form">
										<div class="mb-3">
											<label>Content:</label>
											<textarea id="text-box" class="ckeditor" name="classcontent" cols="10" rows="5"><?= post('classcontent') ? post('classcontent') : $row['classcontent'] ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-showcase text-end mb-5">
								<button class="btn btn-primary" onclick="uploadClassImage()" type="submit">Save</button>
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

	var newClassId = <?= $row['class_id'] ?>;

	var myDropzone = new Dropzone("#singleFileUpload12", {
		url: api_url + "/editclasspageimage",
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
			thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $row['classimage'] ?>")
			this.on("maxfilesexceeded", function(file){
				this.removeFile(file);
				alert("No more files please!");
			});

			this.on("sending", function (file, xhr, formData) {
            // FormData'ya newClassId'yi ekleyin
				formData.append('newClassId', newClassId);
			});
			
		}
	});

	function uploadClassImage() {
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