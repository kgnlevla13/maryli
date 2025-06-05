<?php require admin_view('static/header') ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-7">
			<img class="bg-img-cover bg-center" src="<?=admin_public_url('assets/images/login/login.png')?>" alt="looginpage">
		</div>
		<div class="col-xl-5 p-0">
			<div class="login-card login-dark">
				<div>
					<div>
						<a class="logo text-start" href="index.html">
							<img class="img-fluid for-light" src="<?=admin_public_url('assets/images/logo/logo.png')?>" alt="looginpage">
							<img class="img-fluid for-dark" src="<?=admin_public_url('assets/images/logo/logo_dark.png')?>" alt="looginpage">
						</a>
					</div>
					<div  class="login-main" >
						<form id="login" class="theme-form" onsubmit="return false;">
							<h4>Log in to account</h4>
							<p>Enter your Account Id & Password to log in</p>
							<div class="form-group">
								<label class="col-form-label">Account Id</label>
								<input class="form-control" type="id" required="" name="user_name" placeholder="write your 'Account Id' for login.?">
							</div>
							<div class="form-group">
								<label class="col-form-label">Password</label>
								<div class="form-input position-relative">
									<input class="form-control" type="password" name="user_password" required="" placeholder="*********">
								</div>
							</div>
							<div class="form-group mb-0">
								<div class="checkbox p-0">
									<input id="checkbox1" type="checkbox">
									<label class="text-muted" for="checkbox1">Remember password</label>
								</div>
								<button id="lgn" class="btn btn-primary btn-block w-100" type="submit">Log in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require admin_view('static/footer') ?>