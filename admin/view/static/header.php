<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?=admin_public_url('assets/images/favicon.png')?>" type="image/x-icon">
  <link rel="shortcut icon" href="<?=admin_public_url('assets/images/favicon.png')?>" type="image/x-icon">
  <title>Admin Control Panel | <?= isset($meta['title']) ?  $meta['title'] : '' ?></title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/font-awesome.css')?>">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/vendors/icofont.css')?>">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/vendors/themify.css')?>">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/vendors/flag-icon.css')?>">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/vendors/feather-icon.css')?>">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/slick.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/slick-theme.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/scrollbar.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/animate.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/datatables.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/date-range-picker/flatpickr.min.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/date-picker.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/dropzone.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/filepond.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/filepond-plugin-image-preview.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/intltelinput.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/tagify.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= admin_public_url('assets/css/vendors/flatpickr/flatpickr.min.css') ?>">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/vendors/bootstrap.css')?>">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/style.css')?>">
  <link id="color" rel="stylesheet" href="<?=admin_public_url('assets/css/color-1.css')?>" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?=admin_public_url('assets/css/responsive.css')?>">

  <script type="text/javascript">
    var api_url = '<?=admin_url('api')?>';
    var app_url = '<?=site_url('app')?>';
    var site_url = '<?=site_url()?>';
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body <?= session('user_status') == 3 ? 'class="dark-only" ' : (session('user_status') == 4 ? '' : '') ?>>

  <?php if (session('user_name')): ?>

    <div class="loader-wrapper">
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div> 
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div> 


    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="<?= site_url() ?>">
            <img class="img-fluid for-light" src="<?= admin_public_url('assets/images/logo/logo.png') ?>" alt="" />
            <img class="img-fluid for-dark" src="<?= admin_public_url('assets/images/logo/logo_light.png') ?>" alt="" />
          </a></div>
        </div>

        <div class="col-4 col-xl-4 page-title">
          <?php $currentRoute = route(1); ?>
          <h4 class="f-w-700"><?= ucfirst(route(1) == 'index' ? 'Dashboard' : (isset($meta['title']) ? $meta['title'] : '')) ?>
        </h4>
        <nav>
          <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
            <li class="breadcrumb-item"><a href="<?= admin_url() ?>"> <i data-feather="home"> </i></a></li>

            <?php
            $currentMenu = null;
            foreach ($menus as $menu) {
              if ($menu['url'] == $currentRoute || (isset($menu['submenu']) && in_array($currentRoute, array_column($menu['submenu'], 'url')))) {
                $currentMenu = $menu;
                break;
              }
            }
            ?>

            <?php if ($currentMenu): ?>
              <?php if (isset($currentMenu['submenu'])): ?>
                <li class="breadcrumb-item "><?= $currentMenu['title'] ?></li>
                <li class="breadcrumb-item f-w-400 active"><?= isset($meta['title']) ?  $meta['title'] : '' ?></li>
              <?php else: ?>
                <li class="breadcrumb-item f-w-400  "><?= $currentMenu['title'] ?></li>
              <?php endif; ?>
            <?php endif; ?>
          </ol>
        </nav>
      </div>


      <!-- Page Header Start-->
      <div class="header-wrapper col m-0">
        <div class="row">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="<?= admin_url() ?>"><img class="img-fluid" src="<?= admin_public_url('assets/images/logo/logo.png') ?>" alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="stroke-icon sidebar-toggle status_toggle middle">
                <use href="<?= admin_public_url('assets/svg/icon-sprite.svg#toggle-icon') ?>"></use>
              </svg>
            </div>
          </div>
          <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
              <li>
                <span class="header-search">
                  <svg>
                    <use href="<?= admin_public_url('assets/svg/icon-sprite.svg#search') ?>"></use>
                  </svg>
                </span>
              </li>
              <li>
                <div class="form-group w-100">
                  <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative d-flex align-items-center">
                      <svg class="search-bg svg-color">
                        <use href="<?= admin_public_url('assets/svg/icon-sprite.svg#search') ?>"></use>
                      </svg>
                      <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search .." name="q" title="">
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div id="darklight" class="mode">
                  <svg>
                    <use href="<?= admin_public_url('assets/svg/icon-sprite.svg#moon') ?>"></use>
                  </svg>
                </div>
              </li>
              <li title="www.mindflowcollective.org">
                <div class="flex-shrink-0">
                  <a href="https://mindflowcollective.org/" target="_blank"><i data-feather="monitor"></i></a>
                </div>
                <div class="flex-grow-1"></div>
              </li>
              <li title="log out">
                <div class="flex-shrink-0">
                  <a href="<?= admin_url('exit') ?>"><i data-feather="log-out"></i></a>
                </div>
                <div class="flex-grow-1"></div>
              </li>
              <li class="profile-nav onhover-dropdown px-0 py-0">
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Header Ends-->
    </div>
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper" data-layout="stroke-svg">
        <div>
          <div class="logo-wrapper"><a href="<?= admin_url() ?>"><img class="img-fluid" src="<?= admin_public_url('assets/images/logo/logo_light.png') ?>" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
              <svg class="stroke-icon sidebar-toggle status_toggle middle">
                <use href="<?= admin_public_url('assets/svg/icon-sprite.svg#toggle-icon') ?>"></use>
              </svg>
              <svg class="fill-icon sidebar-toggle status_toggle middle">
                <use href="<?= admin_public_url('assets/svg/icon-sprite.svg#fill-toggle-icon') ?>"></use>
              </svg>
            </div>
          </div>
          <div class="logo-icon-wrapper"><a href="<?= admin_url() ?>"><img class="img-fluid" src="<?= admin_public_url('assets/images/logo/logo-icon.png') ?>" alt=""></a></div>


           <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="<?= admin_url() ?>"><img class="img-fluid" src="<?= admin_public_url('') ?>assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>

                <?php foreach ($menus as $menu) : ?>
                  <?php if (isset($menu['header'])) : ?>
                    <?php if ($menu['header'] === 'General') : ?>
                      <li class="sidebar-main-title">
                        <div>
                          <h6 class="lan-1"><?= $menu['header'] ?></h6>
                        </div>
                      </li>
                    <?php else : ?>
                      <li class="sidebar-main-title">
                        <div>
                          <h6><?= $menu['header'] ?></h6>
                        </div>
                      </li>
                    <?php endif; ?>
                  <?php endif; ?>

                  <?php if (isset($menu['submenu'])) : ?>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="<?= $menu['url'] ?>">
                      <svg class="stroke-icon">
                        <use href="<?= admin_public_url('assets/svg/icon-sprite.svg') ?>#<?= $menu['icon']['stroke'] ?>"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?= admin_public_url('assets/svg/icon-sprite.svg') ?>#<?= $menu['icon']['fill'] ?>"></use>
                      </svg><span><?= $menu['title'] ?></span></a>
                      <ul class="sidebar-submenu">
                        <?php foreach ($menu['submenu'] as $submenu) : ?>
                          <li><a href="<?= $submenu['url'] == 'mailto:birds@tinynest.xyz' ?  $submenu['url'] : admin_url($submenu['url']) ?>"><?= $submenu['title'] ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                    </li>
                  <?php else : ?>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="<?= $menu['url'] == 'mailto:birds@tinynest.xyz' ?  $menu['url'] : admin_url($menu['url']) ?>">
                      <svg class="stroke-icon">
                        <use href="<?= admin_public_url('assets/svg/icon-sprite.svg') ?>#<?= $menu['icon']['stroke'] ?>"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?= admin_public_url('assets/svg/icon-sprite.svg') ?>#<?= $menu['icon']['fill'] ?>"></use>
                      </svg><span><?= $menu['title'] ?></span></a></li>
                    <?php endif; ?>
                  <?php endforeach; ?>

                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>



          </div>
        </div>
        <!-- Page Sidebar Ends-->

        <?php endif ?>