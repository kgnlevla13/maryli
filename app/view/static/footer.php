<!-- START FOOTER -->
<footer class="bg_footer">
  <div class="container">
    <!-- START SECTION SUBSCRIBE -->
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="heading_s3 mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
              <h3>Subscribe Our Newsletter</h3>
            </div>
            <p class="m-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.03s"><?= $setting['subscribe'] ?></p>
          </div>
          <div class="col-lg-6">
            <div class="newsletter_form animation" data-animation="fadeInUp" data-animation-delay="0.3s">
              <form id="subscribe" onsubmit="return false;">
                <input type="email" class="form-control rounded-0" required="" name="email" placeholder="Enter Email Address">
                <button type="submit" title="Subscribe" class="btn btn-default rounded-0" name="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END SECTION SUBSCRIBE -->
    <div class="row align-items-center">
      <div class="col-12">
        <div class="bottom_footer border_top_transparent">
          <div class="row">
            <div class="col-md-6">
              <p class="copyright m-md-0 text-center text-md-left">
                <script>
                  let currentYear = new Date().getFullYear();
                  let copyrightYear = document.querySelector('.copyright');
                  copyrightYear.textContent = `Copyright © ${currentYear}`;
                </script>
              </p>
            </div>
            <div class="col-md-6">
              <ul class="list_none footer_link text-center text-md-right">
                <li><a href="<?= site_url('cookie') ?>">Cookie</a></li>
                <li><a href="<?= site_url('termsofuse') ?>">Terms of use</a></li>
                <li><a href="<?= site_url('privacypolicy') ?>">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape_img">
    <div class="ol_shape12">
      <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
        <img src="<?= public_url('assets/images/project9.png') ?>" alt="image">
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="<?= public_url('assets/js/jquery-1.12.4.min.js') ?>"></script>
<!-- jquery-ui js -->
<script src="<?= public_url('assets/js/jquery-ui.js') ?>"></script>
<!-- popper min js -->
<script src="<?= public_url('assets/js/popper.min.js') ?>"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="<?= public_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- owl-carousel min js  -->
<script src="<?= public_url('assets/owlcarousel/js/owl.carousel.min.js') ?>"></script>
<!-- magnific-popup min js  -->
<script src="<?= public_url('assets/js/magnific-popup.min.js') ?>"></script>
<!-- waypoints min js  -->
<script src="<?= public_url('assets/js/waypoints.min.js') ?>"></script>
<!-- parallax js  -->
<script src="<?= public_url('assets/js/parallax.js') ?>"></script>
<!-- jquery dd js  -->
<script src="<?= public_url('assets/js/jquery.dd.min.js') ?>"></script>
<!-- countdown js  -->
<script src="<?= public_url('assets/js/jquery.countdown.min.js') ?>"></script>
<!-- jquery.counterup.min js -->
<script src="<?= public_url('assets/js/jquery.counterup.min.js') ?>"></script>
<!-- jquery.parallax-scroll js -->
<script src="<?= public_url('assets/js/jquery.parallax-scroll.js') ?>"></script>
<!-- fit video  -->
<script src="<?= public_url('assets/js/jquery.fitvids.js') ?>"></script>
<!-- imagesloaded js -->
<script src="<?= public_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
<!-- isotope min js -->
<script src="<?= public_url('assets/js/isotope.min.js') ?>"></script>
<!-- cookie js -->
<script src="<?= public_url('assets/js/js.cookie.js') ?>"></script>
<!-- scripts js -->
<script src="<?= public_url('assets/js/scripts.js') ?>"></script>
<script src="<?= public_url('assets/js/api.js') ?>"></script>

<script>
$(document).ready(function() {
  // Cookie kontrolü
  if(!Cookies.get('ebookSubmitted')) {
    setTimeout(function() {
      $('#ebookModal').modal('show');
    }, 1000);
  }

  // Modal gösterildiğinde formu resetle
  $('#ebookModal').on('show.bs.modal', function() {
    $('#modal-step-1').show();
    $('#modal-step-2').hide();
    $('#ebookForm')[0].reset();
  });

  // Form gönderimi
  $('#ebookForm').submit(function(e) {
    e.preventDefault();
    var name = $('#ebook-name').val();
    var email = $('#ebook-email').val();

    // Always show modal-step-2 after form submission
    $('#modal-step-1').hide();
    $('#modal-step-2').show();

    // Set cookie regardless of AJAX result
    Cookies.set('ebookSubmitted', 'true', { expires: 30 });

    // Still make the AJAX call to record data
    $.ajax({
      url: api_url + '/ebook',
      method: 'POST',
      data: {name: name, email: email},
      success: function(response) {
        console.log(response); // Log the response
      },
      error: function(xhr) {
        console.log(xhr); // Log any errors
      }
    });
  });

  // Modal kapatıldığında cookie kontrolü
  $('#ebookModal').on('hidden.bs.modal', function() {
    if(Cookies.get('ebookSubmitted')) {
      $(this).modal('hide');
    }
  });
});
</script>

</body>

</html>