 <?php $slider = $db->from('homepagesliders')->first(); ?>
 <!-- START SECTION BANNER -->
  <section class="banner_slider banner_slide_half full_screen p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active bg_light_pink">
          <div class="banner_slide_content">
            <div class="container">
              <div class="row justify-content-end align-items-center">
                <div class="col-xl-6 col-md-5">
                  <div class="banner_img text-center">
                    <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
                      <img data-parallax='{"y": -30, "smoothness": 20}' src="<?= admin_public_url('assets/images/') . $slider['slider1image'] ?>" alt="image" loading="lazy">
                    </div>
                    <div class="circle_bg1">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-7">
                  <div class="banner_content animation" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"> <?= $slider['slider1title'] ?></h2>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><?= $slider['slider1desc'] ?> </p>
                    <a class="btn btn-default rounded-0 animation" href="<?= site_url('blog') ?>" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                    <a class="btn btn-white rounded-0 animation" href="<?= site_url('contact') ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Me</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner_shape">
            <div class="shape2">
              <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
                <img src="<?= public_url('assets/images/project14.png') ?>" alt="image" loading="lazy">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item bg_light_yellow">
          <div class="banner_slide_content">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                  <div class="banner_img2 text-center">
                    <div class="animation border_img" data-animation="fadeInRight" data-animation-delay="0.5s">
                      <img data-parallax='{"y": -30, "smoothness": 20}' src="<?= admin_public_url('assets/images/') . $slider['slider2image'] ?>" alt="image" loading="lazy">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-7 order-md-first">
                  <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"><?= $slider['slider2title'] ?> </h2>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><?= $slider['slider2desc'] ?></p>
                    <a class="btn btn-default rounded-0 animation" href="<?= site_url('classes') ?>" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                    <a class="btn btn-white rounded-0 animation" href="<?= site_url('contact') ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Me</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner_shape">
            <div class="shape3">
              <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.3s">
                <img src="<?= public_url('assets/images/project5.png') ?>" alt="image" loading="lazy">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item bg_light_gold">
          <div class="banner_slide_content">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                  <div class="banner_img3 text-center">
                    <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                      <img data-parallax='{"y": -30, "smoothness": 20}' src="<?= admin_public_url('assets/images/') . $slider['slider3image'] ?>" alt="image" loading="lazy">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-7 order-md-first">
                  <div class="banner_content animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s"><?= $slider['slider3title'] ?></h2>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><?= $slider['slider3desc'] ?></p>
                    <a class="btn btn-default rounded-0 animation" href="<?= site_url('offering') ?>" data-animation="fadeInUp" data-animation-delay="0.7s">Learn More</a>
                    <a class="btn btn-white rounded-0 animation" href="<?= site_url('contact') ?>" data-animation="fadeInUp" data-animation-delay="0.8s">Contact Me</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner_shape">
            <div class="shape3">
              <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="<?= public_url('assets/images/project12.png') ?>" alt="image" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_nav">
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
      </div>
    </div>
  </section>
  <!-- END SECTION BANNER -->