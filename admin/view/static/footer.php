
<?php if (session('user_name')): ?>
	<!-- footer start-->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
					<p class="mb-0 f-w-600">
						<script>
							let currentYear = new Date().getFullYear();
							let copyrightYear = document.querySelector('.footer-copyright');
							copyrightYear.textContent = `Copyright © 2023 - ${currentYear}`;
						</script>
					</p> All Rights Reserved.
					<p class="mb-0 f-w-600">made with <i class="fa fa-heart"></i> </p>
				</div>
			</div>
		</div>
	</footer>
<?php endif ?>

</div>
</div>

<!-- latest jquery-->
<script src="<?= admin_public_url('assets/js/jquery.min.js') ?>"></script>
<!-- Bootstrap js-->
<script src="<?= admin_public_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
<!-- feather icon js-->
<script src="<?= admin_public_url('assets/js/icons/feather-icon/feather.min.js') ?>"></script>
<script src="<?= admin_public_url('assets/js/icons/feather-icon/feather-icon.js') ?>"></script>
<!-- scrollbar js-->
<script src="<?= admin_public_url('assets/js/scrollbar/simplebar.js') ?>"></script>
<script src="<?= admin_public_url('assets/js/scrollbar/custom.js') ?>"></script>
<!-- Sidebar jquery-->
<script src="<?= admin_public_url('assets/js/config.js') ?>"></script>
<?php if (session('user_name')): ?>
    <!-- Plugins JS start-->
    <script src="<?= admin_public_url('assets/js/sidebar-menu.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/sidebar-pin.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/slick/slick.min.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/slick/slick.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/header-slick.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/notify/bootstrap-notify.min.js') ?>"></script>

    <?php if (route(1) == 'index'): ?>
        <script src="<?= admin_public_url('assets/js/chart/apex-chart/apex-chart.js') ?>"></script>
        <script src="<?= admin_public_url('assets/js/chart/apex-chart/stock-prices.js') ?>"></script>
        <script src="<?= admin_public_url('assets/js/chart/apex-chart/moment.min.js') ?>"></script>
    <?php endif ?>

    <script src="<?= admin_public_url('assets/js/editor/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/editor/ckeditor/adapters/jquery.js') ?>"></script>

    <!-- calendar js-->
    <script src="<?= admin_public_url('assets/js/dashboard/default.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/notify/index.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datatable/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datatable/datatables/datatable.custom.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datatable/datatables/datatable.custom1.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/height-equal.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/animation/wow/wow.min.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/general-widget.js') ?>"></script>

    <script src="<?= admin_public_url('assets/js/dropzone/dropzone.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/dropzone/dropzone-script.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/filepond/filepond-plugin-image-preview.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/filepond/filepond-plugin-file-rename.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/filepond/filepond-plugin-image-transform.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/filepond/filepond.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/filepond/custom-filepond.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/tooltip-init.js') ?>"></script>


    <script src="<?= admin_public_url('assets/js/flat-pickr/flatpickr.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/flat-pickr/custom-flatpickr.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/select2/tagify.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/select2/tagify.polyfills.min.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/select2/intltelinput.min.js') ?>"></script>

    <script src="<?= admin_public_url('assets/js/datepicker/date-range-picker/moment.min.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datepicker/date-range-picker/datepicker-range-custom.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/typeahead/handlebars.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/typeahead/typeahead.bundle.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/typeahead/typeahead.custom.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/typeahead-search/handlebars.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/typeahead-search/typeahead-custom.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datepicker/date-picker/datepicker.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datepicker/date-picker/datepicker.en.js') ?>"></script>
    <script src="<?= admin_public_url('assets/js/datepicker/date-picker/datepicker.custom.js') ?>"></script>
    <!-- Plugins JS Ends-->
<?php endif ?>
<!-- Theme js-->
<script src="<?= admin_public_url('assets/js/script.js') ?>"></script>
<script src="<?= admin_public_url('assets/js/api.js') . '?t=' . time(); ?>"></script>
<!-- Plugin used-->
<script>
    new WOW().init();
</script>

<script>
// Admin URL helper function
function admin_url(path = '') {
	const baseUrl = '<?= admin_url() ?>'; // PHP'den gelen base URL
	return baseUrl + (path ? (path.startsWith('/') ? path : '/' + path) : '');
}

// Debug için console log ekleyin
console.log('Admin URL helper loaded');
console.log('Base admin URL:', admin_url());
</script>
</body>
</html>
