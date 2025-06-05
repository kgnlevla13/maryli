<?php require admin_view('static/header') ?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="edit-profile">
			<div class="row">
				<div class="col-xl-12">
					<form id="general" class="card" onsubmit="return false;">
						<div class="card-header">
							<h4 class="card-title mb-0">Site Settings</h4>
							<div class="card-options">
								<a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
									<i class="fe fe-chevron-up"></i></a>
									<a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">WebSite Name</label>
											<input class="form-control" type="text" name="site_name" value="<?= post('site_name') ? post('site_name') : $row['site_name'] ?>" placeholder="WebSite Name.?">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">WebSite Email Address</label>
											<input class="form-control" type="email" name="site_email" value="<?= post('site_email') ? post('site_email') : $row['site_email'] ?>" placeholder="WebSite Email Address.?">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label">Subscribe</label>
											<input class="form-control" type="text" name="subscribe" value="<?= post('subscribe') ? post('subscribe') : $row['subscribe'] ?>" placeholder="write something for your 'Subscribers'.?">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label">Contact</label>
											<input class="form-control" type="text" name="contact" value="<?= post('contact') ? post('contact') : $row['contact'] ?>" placeholder="Get In Touch.?">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label">WebSite Keywords</label>
											<textarea class="form-control" rows="5" name="keywords" placeholder="write 'Keywords' for your website.?"><?= post('keywords') ? post('keywords') : $row['keywords'] ?></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div>
											<label class="form-label">WebSite Description</label>
											<textarea class="form-control" rows="5" name="description" placeholder="write 'Description' for your website.?"><?= post('description') ? post('description') : $row['description'] ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer text-end">
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</form>
					</div>
					<div class="col-xl-4">
						<form id="user_edit_pass" class="card" onsubmit="return false;">
							<div class="card-header">
								<h4 class="card-title mb-0">Administrator Login Information</h4>
								<div class="card-options">
									<a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
										<i class="fe fe-chevron-up"></i></a>
										<a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Account Login ID</label>
									<input class="form-control" type="text" disabled value="<?= session('user_name') ?>" placeholder="Account Login ID">
								</div>
										</div>
										<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Account Old Password</label>
									<input class="form-control" type="password" name="user_old_password" placeholder="Old Password">
								</div>
										</div>
										<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Account New Password</label>
									<input class="form-control" type="password" name="user_password" placeholder="New Password">
								</div>
										</div>
										<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Verify Password</label>
									<input class="form-control" type="password" name="user_password_again" placeholder="Verify Password">
								</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-end">
									<button class="btn btn-primary" type="submit">Save</button>
								</div>
							</form>
						</div>
					<div class="col-xl-4">
						<form id="general2" class="card" onsubmit="return false;">
							<div class="card-header">
								<h4 class="card-title mb-0">Social Media</h4>
								<div class="card-options">
									<a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
										<i class="fe fe-chevron-up"></i></a>
										<a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Facebook</label>
												<input class="form-control" type="text" name="facebook" value="<?= post('facebook') ? post('facebook') : $row['facebook'] ?>" placeholder="write 'Facebook link' for your website.?">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Instagram</label>
												<input class="form-control" type="text" name="instagram" value="<?= post('instagram') ? post('instagram') : $row['instagram'] ?>" placeholder="write 'Instagram link' for your website.?">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Youtube</label>
												<input class="form-control" type="text" name="youtube" value="<?= post('youtube') ? post('youtube') : $row['youtube'] ?>" placeholder="write 'Youtube link' for your website.?">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">InsightTimer</label>
												<input class="form-control" type="text" name="InsightTimer" value="<?= post('InsightTimer') ? post('InsightTimer') : $row['InsightTimer'] ?>" placeholder="write 'InsightTimer link' for your website.?">
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-end">
									<button class="btn btn-primary" type="submit">Save</button>
								</div>
							</form>
						</div>
						<div class="col-xl-4">
							<form id="general3" class="card" onsubmit="return false;">
								<div class="card-header">
									<h4 class="card-title mb-0">Email SMTP Settings</h4>
									<div class="card-options">
										<a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
											<i class="fe fe-chevron-up"></i></a>
											<a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">SMTP Server</label>
													<input class="form-control" type="text" name="smtpserver" value="<?= post('smtpserver') ? post('smtpserver') : $row['smtpserver'] ?>" placeholder="for example: 'smtp.gmail.com'">
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">SMTP Username</label>
													<input class="form-control" type="text" name="smptusername" value="<?= post('smptusername') ? post('smptusername') : $row['smptusername'] ?>" placeholder="for example: 'address@gmail.com'">
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">SMTP Password</label>
													<input class="form-control" type="text" name="smtppassword" value="<?= post('smtppassword') ? post('smtppassword') : $row['smtppassword'] ?>" placeholder="your e-mail password">
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">SMTP Port</label>
													<input class="form-control" type="text" name="smtpport" value="<?= post('smtpport') ? post('smtpport') : $row['smtpport'] ?>" placeholder="for example: '587' or '465'">
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-end">
										<button class="btn btn-primary" type="submit">Save</button>
									</div>
								</form>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header">
												<h4>WebSite Logo Upload</h4>
											</div>
											<div class="card-body">
												<form class="dropzone bg-light-primary" id="singleFileUpload" >
													<div class="dropzone-wrapper">
														<div class="dz-message needsclick"><i class="icon-cloud-up"></i>
															<h6 class="f-w-600">Drop files here or click to upload.</h6>
														</div>
													</div>
												</form>
											</div>
											<div class="card-footer text-end">
												<button class="btn btn-primary" type="button" onclick="uploadLogo()">Save</button>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header">
												<h4>WebSite Favicon Upload</h4>
											</div>
											<div class="card-body">
												<form class="dropzone bg-light-primary" id="singleFileUpload2">
													<div class="dropzone-wrapper">
														<div class="dz-message needsclick"><i class="icon-cloud-up"></i>
															<h6 class="f-w-600">Drop files here or click to upload.</h6>
														</div>
													</div>
												</form>
											</div>
											<div class="card-footer text-end">
												<button class="btn btn-primary" type="button" onclick="uploadLogo2()">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Container-fluid Ends-->
			</div>

			<?php require admin_view('static/footer') ?>

			<script>
				Dropzone.autoDiscover = false;
				var myDropzone = new Dropzone("#singleFileUpload", {
					url: api_url + "/general4",
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
						thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $setting['logo'] ?>")
						this.on("maxfilesexceeded", function(file){
							this.removeFile(file);
							alert("No more files please!");
						});


					}
				});

				function uploadLogo() {
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
				var myDropzone1 = new Dropzone("#singleFileUpload2", {
					url: api_url + "/general5",
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
						thisDropzone.emit("thumbnail", mockFile, "<?= admin_public_url('assets/images/') . $setting['favicon'] ?>")
						this.on("maxfilesexceeded", function(file){
							this.removeFile(file);
							alert("No more files please!");
						});


					}

				});

				function uploadLogo2() {
					myDropzone1.processQueue();
					myDropzone1.on("success", function(file, response) {
						Swal.fire({
							icon: 'success',
							title: 'success!',
							text: response,
						});
					});
					myDropzone1.on("error", function(file, errorMessage) {
						Swal.fire({
							icon: 'error',
							title: 'error!',
							text: errorMessage,
						});
					});
				}
			</script>