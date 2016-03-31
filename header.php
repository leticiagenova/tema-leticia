<?php
$currentPageID = get_the_ID();
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?= Rye::stylesheet() ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--Fonts -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>

  <!-- /Fonts -->
<!-- Icons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri()?>/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri()?>/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri()?>/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri()?>/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri()?>/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri()?>/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri()?>/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri()?>/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri()?>/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?= get_template_directory_uri()?>/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri()?>/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri()?>/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri()?>/icons/favicon-16x16.png">
<link rel="manifest" href="<?= get_template_directory_uri()?>/icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= get_template_directory_uri()?>/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- /Icons -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>

  <div id="header-top">
    <div class="container">
      <div class="text-1">Welcome to Broker Financial Services, we have over 20 years of expertise </div>
      <div class="text-2">25th February 2016 </div>
    </div>
  </div>

  <!-- Logo -->
    <div class="container">
      <div id="header">
         <div id="logo">
            <a href="/"><?= get_bloginfo('name') ?></a>
         </div>
          <!-- Mobile header until 800px -->
          <div class="menu-ipad">
             <div class="icon-mobile">
                 <i class="ion-search"></i>
                 <i class="ion-navicon-round"></i>
              </div>
          </div>


  <!-- Info header Contact, Local, Date -->
        <div id="info">
            <div class="info-col">
                <div class="icon">
                    <i class="ion-ios-telephone-outline"></i>
                </div>
                <div class="info-2" id="phone-mail">
                    <div class="title-info">
                        <a href="callto:1800 234 567">1800 234 567</a>
                    </div>
                    <div class="text-info">
                        <a href="mailto:info@example.com">info@example.com</a>
                    </div>
                </div>
            </div>
            <div class="info-col">
                <div class="icon">
                    <i class="ion-ios-location-outline"></i>
                </div>
               <div class="info-2">
                   <div class="title-info">
                      <p>Goldsmith Hall,</p>
                   </div>
                    <div class="text-info">
                       <p>New York, NY 90210 </p>
                    </div>
                </div>
            </div>
            <div class="info-col">
                <div class="icon">
                    <i class="ion-ios-time-outline"> </i>
                </div>
               <div class="info-2"  id="text-date">
                    <div class="title-info">
                        <p>07:30 – 19:00</p>
                    </div>
                    <div class="text-info">
                        <p>Monday to Friday</p>
                    </div>
               </div>
            </div>
        </div>

    <!-- Search -->
          <div id="search">
              <form action="#">
                  <input id="search-text" type="text" name="search" placeholder="Search...">
                  <button id="submit-button" type="submit"><i class="ion-ios-search-strong"></i></button>
              </form>
          </div>
    <!-- Fim Search -->



          </div>

      </div>
    </div>




























<!--







    <div id="header-menu">
      <a href="#"><i class="fa fa-lock"></i><strong>Client </strong> Log Inn</a>
      <a href="#"><i class="fa fa-bars"></i></a>
      <ul class="header-nav menu">
        <?= renderMenu('header-nav', $currentPageID) ?>
      </ul>
      <div id="header-social">
        <ul class="menu">
            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
        </ul>
      </div>
    </div>
  </div>
  -->
</header>

</body>

