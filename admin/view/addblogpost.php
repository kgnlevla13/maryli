<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Add Blog Post</h4>
					</div>
					<div class="card-body add-post">
							<form class="dropzone bg-light-primary" id="singleFileUpload12">
								<div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
									<h6 class="f-w-600 mb-0">Drop files here or click to upload.</h6>
								</div>
							</form>
						<form id="blogs" class="row needs-validation" novalidate="" onsubmit="return false;">
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Title</label>
									<input class="form-control" id="validationCustom01" type="text" name="blogtitle" placeholder="write 'Title' for your blog.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<label for="validationCustom01">Author</label>
									<input class="form-control" id="validationCustom01" type="text" name="blogauthor" placeholder="write 'Author' for your blog.?" required="">
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="mb-3">
									<label>Type:</label>
									<div class="m-checkbox-inline">
										<label for="edo-ani">
											<input class="radio_animated" id="edo-ani" type="radio" value="Text" name="blogtype" checked="">Text
										</label>
										<label for="edo-ani1">
											<input class="radio_animated" id="edo-ani1" type="radio" value="Image" name="blogtype">Image
										</label>
										<label for="edo-ani2">
											<input class="radio_animated" id="edo-ani2" type="radio" value="Audio" name="blogtype" checked="">Audio
										</label>
										<label for="edo-ani3">
											<input class="radio_animated" id="edo-ani3" type="radio" value="Video" name="blogtype">Video
										</label>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="row g-3">
									<div class="col-sm-6">
										<div class="row g-2">
											<div class="col-12">
												<label class="form-label m-0" for="validationServer01">Add Category</label>
											</div>
											<div class="col-12">
												<select class="form-select" id="validationDefault042" name="blogcategory" required="">
													<option selected="" value="">choose a category</option>
													<?php foreach ($categories as $category): ?>
														
														<option value="<?= $category['category_name'] ?>"><?= $category['category_name'] ?></option>

													<?php endforeach ?>
												</select>
												<p class="f-light">You can choose a category for your blog post.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row g-2 product-tag">
											<div class="col-12">
												<label class="form-label d-block m-0" for="validationServer01">Add Tag</label>
											</div>
											<div class="col-12">
												<input name="blogtag"  placeholder="write 'Tags' for your blog.?">
												<p class="f-light">You can add tags to your blog post.</p>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="category-buton">
											<a class="btn button-primary bg-light-primary font-primary" href="#!" data-bs-toggle="modal" data-bs-target="#category-pill-modal">
												<i class="me-2 fa fa-plus"></i>Create New Category</a>
											</div>
											
										</div>
									</div>
								</div>
								<br>
								<div class="col-12">
									<div class="row g-3">
										<div class="col-sm-6">
											<div class="row">
												<div class="col-12">
													<label class="form-label" for="validationServer01">Publish Status</label>
													<select class="form-select" id="validationDefault04" name="status" required="">
														<option selected="" value="Publish">Publish</option>
														<option value="Drafts">Drafts</option>
														<option value="Unpublish">Unpublish</option>
													</select>
													<p class="f-light">Choose the status</p>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="row">
												<div class="col-12">
													<label class="form-label" for="validationServer01">Publish Date & Time</label>
													<div class="input-group flatpicker-calender product-date">
														<input class="form-control" name="blogdatetime" id="datetime-local1" type="date">
													</div>
													<p class="f-light">Choose the date & time</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="col-sm-12">
									<div class="mb-3 mt-3">
										<label for="validationCustom01">Add your "YouTube Video Link" or "Soundcloud Link" here.</label>
										<input class="form-control" id="validationCustom0132" type="text" name="yt_link" placeholder="If you will add an image, leave this field blank." required>
										<div class="valid-feedback">Looks good!</div>
									</div>
								</div>
								<br>
								<div class="col-sm-12">
									<div class="email-wrapper">
										<div class="theme-form">
											<div class="mb-3">
												<label>Content:</label>
												<textarea id="text-box" class="ckeditor" name="blogcontent" cols="10" rows="5"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="btn-showcase text-end mb-1">
									<button class="btn btn-primary" type="submit">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="category-pill-modal" tabindex="-1" aria-labelledby="#category-pill-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="category-pill-modalLabel">Create new category / Delete</h1>
						<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body custom-input">
						<div class="create-category">
							<form id="category" class="row needs-validation" novalidate="" onsubmit="return false;">
								<label class="form-label" for="validationServer01">Category Name <span class="txt-danger"> *</span></label>
								<input class="form-control m-0" id="validationServer01" type="text" name="category_name" required="" placeholder="write 'Category' for your blog.?">
								<div class="modal-footer">
									<button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
									<button class="btn btn-primary" type="submit">Add</button>
								</div>
							</form>
							<label class="form-label mt-3" for="validationServer01"> <span class="txt-danger"> * Delete Category </span></label>
							<select class="form-select" id="categoryDropdown">
								<?php foreach ($categories as $key => $category1): ?>
									<option value="<?= $category1['category_id'] ?>"><?= $category1['category_name'] ?></option>
								<?php endforeach ?>
							</select>
							<div class="modal-footer">
								<a class="btn btn-danger delete" table="categories" column="category_id" onclick="deleteCategory()">Delete</a>
							</div>
							
							<script>
								function deleteCategory() {
									var selectedCategory = document.getElementById("categoryDropdown").value;

									delete_post(selectedCategory);
								}
							</script>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends-->
	</div>
	<?php require admin_view('static/footer') ?>

	<script type="text/javascript">

		var input = document.querySelector('input[name=blogtag]');

		new Tagify(input)

		Dropzone.autoDiscover = false;

		var newClassId;

		var myDropzone = new Dropzone("#singleFileUpload12", {
			url: api_url + "/blogpageimage",
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
						title: 'Error!',
						text: errorMessage,
					});
				});
			}
		});

		$("#blogs").on("submit", function (e) {
			e.preventDefault();

			for (instance in CKEDITOR.instances) {
				CKEDITOR.instances[instance].updateElement();
			}

			var ytLink = document.getElementById("validationCustom0132").value;

			ytLink = ytLink.trim();

			if (myDropzone.files.length === 0 & ytLink === "") {
				Swal.fire({
					icon: 'warning',
					title: 'Warning!',
					text: 'Please select a file.',
				});
				return;
			}

			$.post(api_url + "/blog", $(this).serialize(), null, "json").done(response => {
				if (response.error) {
					Swal.fire({ icon: 'error', title: '!...', text: response.error });
				} else {
					newClassId = response.classId;

					if (myDropzone.files.length === 0 & ytLink != "") {
						Swal.fire({ icon: 'success', title: 'success!...', text: response.success });
					}

            //Swal.fire({ icon: 'success', title: 'success...', text: response.success });

					this.reset();

					for (instance in CKEDITOR.instances) {
						CKEDITOR.instances[instance].setData('');
					}

					myDropzone.processQueue();

					setTimeout(function () {
						window.location.href = site_url +  'admin/bloglist'; 
					}, 3000);
				}
			});
		});

	</script>
	