<?php require view('static/header') ?>

<!-- START SECTION BREADCRUMB -->
<section class="bg_light_pink breadcrumb_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>About Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="shape_img">
        <div class="ol_shape11">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?= public_url('assets/images/project15.png') ?>" alt="image">
            </div>
        </div>
        <div class="ol_shape12">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img src="<?= public_url('assets/images/project7.png') ?>" alt="image">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION ABOUT -->
<?php if (!empty($abouts)): ?>
    <?php foreach ($abouts as $index => $about): ?>
        <section class="<?= $index % 2 == 0 ? '' : 'bg_gray' ?>">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Text Content - First Part (Next to Image) -->
                    <div class="col-md-6 <?= $index % 2 == 0 ? '' : 'order-md-2' ?> animation" 
                         data-animation="fadeInUp" data-animation-delay="0.3s">
                        <div class="heading_s1">
                            <h2><?= htmlspecialchars($about['abouttitle']) ?></h2>
                        </div>
                        <div class="about-description">
                            <?= htmlspecialchars_decode($about['aboutdesc']) ?>
                        </div>
                    </div>
                    
                    <!-- Image Content -->
                    <div class="col-md-6 <?= $index % 2 == 0 ? '' : 'order-md-1' ?> animation" 
                         data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="about_img">
                            <?php if (!empty($about['aboutimage'])): ?>
                                <img src="<?= admin_public_url('assets/images/') . $about['aboutimage'] ?>" 
                                     alt="<?= htmlspecialchars($about['abouttitle']) ?>"
                                     class="img-fluid rounded shadow-sm"
                                     loading="lazy">
                            <?php else: ?>
                                <div class="placeholder-image d-flex align-items-center justify-content-center bg-light rounded" 
                                     style="height: 400px;">
                                    <i class="fa fa-image fa-3x text-muted"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Description - Full Width Below Image/Text -->
                <?php if (!empty($about['aboutdesc2'])): ?>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="about-additional-content animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                <div class="additional-description">
                                    <?= htmlspecialchars_decode($about['aboutdesc2']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endforeach; ?>
    
    <!-- Pagination Section -->
    <?php if (isset($totalRecord) && $totalRecord > 10): ?>
        <section class="bg_gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pagination_wrap text-center">
                            <ul class="pagination justify-content-center">
                                <?= $db->showPagination(site_url("about?page=[page]")) ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
<?php else: ?>
    <!-- No About Pages Available -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="empty-state py-5">
                        <i class="fa fa-info-circle fa-4x text-muted mb-4"></i>
                        <h3 class="text-muted mb-3">About Content Coming Soon</h3>
                        <p class="text-muted">We're working on updating our about section. Please check back later!</p>
                        <a href="<?= site_url() ?>" class="btn btn-primary mt-3">
                            <i class="fa fa-home"></i> Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- END SECTION ABOUT -->

<?php require view('static/footer') ?>