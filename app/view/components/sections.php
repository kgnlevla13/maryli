   <?php $section = $db->from('homepageothers')->first(); ?>  
   <!-- START SECTION BENIFIT -->
   <section class="pb_70">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
          <div class="heading_s1">
            <h2><?= $section['section1title'] ?></h2>
          </div>
          <p><?= $section['section1desc'] ?></p>
          <div class="small_divider clearfix"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            <div class="box_icon">
              <i class="flaticon-strong-body"></i>
            </div>
            <div class="intro_desc">
              <h5><?= $section['sectionbox1title'] ?></h5>
              <p> <?= $section['sectionbox1desc'] ?> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            <div class="box_icon">
              <i class="flaticon-flexibility"></i>
            </div>
            <div class="intro_desc">
              <h5><?= $section['sectionbox2title'] ?></h5>
              <p> <?= $section['sectionbox2desc'] ?> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            <div class="box_icon">
              <i class="flaticon-healthy-lifestyle"></i>
            </div>
            <div class="intro_desc">
             <h5><?= $section['sectionbox3title'] ?></h5>
             <p> <?= $section['sectionbox3desc'] ?> </p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-sm-6">
        <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
          <div class="box_icon">
            <i class="flaticon-blood-flow"></i>
          </div>
          <div class="intro_desc">
            <h5><?= $section['sectionbox4title'] ?></h5>
            <p> <?= $section['sectionbox4desc'] ?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
          <div class="box_icon">
            <i class="flaticon-drops-blood"></i>
          </div>
          <div class="intro_desc">
            <h5><?= $section['sectionbox5title'] ?></h5>
            <p> <?= $section['sectionbox5desc'] ?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="icon_box box_shadow4 text-center icon_box_style1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
          <div class="box_icon">
            <i class="flaticon-adrenal-gland"></i>
          </div>
          <div class="intro_desc">
            <h5><?= $section['sectionbox6title'] ?></h5>
            <p> <?= $section['sectionbox6desc'] ?> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END SECTION BENIFIT -->
<!-- START SECTION ABOUT -->
<section class="bg_gray">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
        <div class="heading_s1">
          <h2><?= $section['section2title'] ?></h2>
        </div>
        <p> <?= $section['section2desc'] ?></p>
        <a href="<?= site_url('about') ?>" class="btn btn-default rounded-0">Read More</a>
      </div>
      <div class="col-md-6">
        <div class="about_img animation" data-animation="fadeInUp" data-animation-delay="0.2s">
          <img data-parallax='{"y": -30, "smoothness": 20}' src="<?= admin_public_url('assets/images/') . $section['section2image'] ?>" alt="about_img" loading="lazy">
        </div>
      </div>
    </div>
  </div>
  <div class="shape_img">
    <div class="ol_shape1">
      <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
        <img src="<?= public_url('assets/images/project11.png') ?>" alt="image" loading="lazy">
      </div>
    </div>
    <div class="ol_shape2">
      <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
        <img src="<?= public_url('assets/images/project8.png') ?>" alt="image" loading="lazy">
      </div>
    </div>
  </div>
</section>
<!-- END SECTION ABOUT -->
<?php 
$blogs = $db->from('blog')
->where('status','Publish')
->where('blogdatetime ', 'NOW()', '<')
->orderby('blog_id', 'DESC')
->limit(0,3)
->all();
?>
<!-- START SECTION BLOG -->
<section class="pb_70">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8 col-md-10 text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
        <div class="heading_s1">
          <h2><?= $section['section3title'] ?></h2>
        </div>
        <p><?= $section['section3desc'] ?> </p>
        <div class="small_divider clearfix"></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($blogs as $blog): ?>
        <?php 
        $originalDate = $blog['create_date'];
        $dateTime = new DateTime($originalDate);
        $formattedDate = $dateTime->format('j F Y');
        if (isset($blog['blogimage'])) {
          $m = $blog['blogimage'];
        }
        else{
          $m = 'video.jpg';
        }
        ?>
        <div class="col-lg-4 col-md-6">
          <div class="blog_post box_shadow4 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            <div class="blog_img">
              <?php if ($m == 'video.jpg'): ?>
                <div class="fit-videos">
                  <iframe width="540" height="360" src="<?= $blog['yt_link'] ?>" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </div>
              <?php else: ?>
                <a href="<?= site_url(permalink($blog['blogtitle'] ) . '/' . $blog['blog_id'])  ?>"><img src="<?= admin_public_url('assets/images/') . $blog['blogimage'] ?>" alt="blog_small_img1" loading="lazy"></a>
              <?php endif ?>
            </div>
            <div class="blog_content">
              <h5 class="blog_title"><a href="<?= site_url(permalink($blog['blogtitle'] ) . '/' . $blog['blog_id'])  ?>"><?= $blog['blogtitle'] ?></a></h5>
              <ul class="list_none blog_meta">
                <li><a href="#"><img src="<?= public_url('assets/images/users-01.png') ?>" alt="image" loading="lazy"><span>Mary Li</span></a></li>
                <li><a href="#"><i class="far fa-calendar"></i><?=$formattedDate?></a></li>
              </ul>
              <p><?= cut_text($blog['blogcontent']) ?></p>
              <a href="<?= site_url(permalink($blog['blogtitle'] ) . '/' . $blog['blog_id'])  ?>" class="blog_link">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
  <!-- END SECTION BLOG -->