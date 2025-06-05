<?php require admin_view('static/header') ?>

<div class="page-body-wrapper">
	<!-- Page Sidebar Ends-->
	<div class="page-body">
		<!-- Container-fluid starts-->
		<div class="container-fluid">
			<div class="edit-profile">
				<div class="row">
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0">My Profile</h4>
								<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
							</div>
							<div class="card-body">
								<form id="user_edit_bio" class="card" onsubmit="return false;">
									<div class="row mb-2">
										<div class="profile-title">
											<div class="d-flex"><img class="img-70 rounded-circle" alt="" src="<?= public_url('assets/images/users-01.png') ?>">
												<div class="flex-grow-1">
													<h4 class="mb-1"><?= $row['user_firstname'] ?> <?= $row['user_lastname'] ?></h4>
													<p>DESIGNER</p>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-3">
										<h6 class="form-label">Bio</h6>
										<textarea class="form-control" name="user_bio" rows="3"><?= $row['user_bio'] ?></textarea>
									</div>
									<div class="mb-3">
										<label class="form-label">Email-Address</label>
										<input class="form-control" name="user_email2" value="<?= $row['user_email2'] ?>" placeholder="your-email@domain.com">
									</div>
									
									<div class="mb-3">
										<label class="form-label">Website</label>
										<input class="form-control" placeholder="http://Uplor .com" name="user_website" value="<?= $row['user_email2'] ?>">
									</div>
									<div class="form-footer">
										<button class="btn btn-primary btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h4 class="card-title mb-0">Edit Password</h4>
								<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
							</div>
							<div class="card-body">
								<form id="user_edit_pass" class="card" onsubmit="return false;">

									<div class="mb-3">
										<label class="form-label">Password</label>
										<input class="form-control" type="password" name="user_old_password" placeholder="Password">
									</div>

									<div class="mb-3">
										<label class="form-label">New Password</label>
										<input class="form-control" type="password" name="user_password" placeholder="Password Again">
									</div>

									<div class="mb-3">
										<label class="form-label">Password Again</label>
										<input class="form-control" type="password" name="user_password_again" placeholder="Password Again">
									</div>
									
									<div class="form-footer">
										<button class="btn btn-primary btn-block">Save</button>
									</div>
								</form>
							</div>
						</div>

					</div>
					<div class="col-xl-8">
						<form id="user_edit_profile" class="card" onsubmit="return false;">
							<div class="card-header">
								<h4 class="card-title mb-0">Edit Profile</h4>
								<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-5">
										<div class="mb-3">
											<label class="form-label">Company</label>
											<input class="form-control" type="text" name="company" value="<?= $row['company'] ?>" placeholder="Company">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control" type="text" name="user_name" value="<?= $row['user_name'] ?>" placeholder="Username">
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="mb-3">
											<label class="form-label">Email address</label>
											<input class="form-control" type="email" name="user_email" value="<?= $row['user_email'] ?>" placeholder="Email">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">First Name</label>
											<input class="form-control" type="text" name="user_firstname" value="<?= $row['user_firstname'] ?>" placeholder="Company">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<input class="form-control" type="text" name="user_lastname" value="<?= $row['user_lastname'] ?>" placeholder="Last Name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label">Address</label>
											<input class="form-control" type="text" name="address" value="<?= $row['address'] ?>" placeholder="Home Address">
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="mb-3">
											<label class="form-label">City</label>
											<input class="form-control" type="text" name="city" value="<?= $row['city'] ?>" placeholder="City">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="mb-3">
											<label class="form-label">Postal Code</label>
											<input class="form-control" type="number" name="postal_code" value="<?= $row['postal_code'] ?>" placeholder="ZIP Code">
										</div>
									</div>

									<div class="col-md-5">
										<div class="mb-3">
											<label class="form-label">Country</label>
											<select class="form-control btn-square" name="country">
												<option value="">--Select--</option>
												<?php foreach ($countries as $country): ?>
													<option <?= $row['country'] == $country ? 'selected' : '' ?> value="<?= $country ?>"><?= $country ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>

									<div class="col-md-12">
										<div>
											<label class="form-label">About Me</label>
											<textarea class="form-control" rows="4" name="about_me" placeholder="Enter About your description"><?= $row['about_me'] ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer text-end">
								<button class="btn btn-primary" type="submit">Update Profile</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends-->
	</div>
	<!-- footer start-->
</div>
<?php require admin_view('static/footer') ?>