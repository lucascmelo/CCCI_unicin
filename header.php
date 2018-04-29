<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/master.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/conditionizr-4.3.0.min.js"></script>
    <script>
    conditionizr.config({
    assets: '<?php echo get_template_directory_uri(); ?>/assets',
    tests: {}
    });
    </script>
  </head>
  <body class='<?php body_class(); ?>'>
    <div id="page-preloader"><span class="spinner"></span></div>
    <div class="layout-theme animated-css" id="wrapper" data-header="sticky" data-header-top="200">
      <header class="header header_mod-b">
        <div class="top-header navbar-header">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class='pull-left'>
                  <div class="top-header__contacts"><i class="icon icon_mail"></i><a class="header-contacts__link" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></div>
                  <div class="top-header__contacts"><i class="icon icon_phone"></i><?php the_field('telefone', 'option'); ?></div>
                </div>
                <div class="top-header__info pull-left">
                  <ul class="social-links list-inline">
                    <?php
                    $facebook = get_field('facebook', 'option');
                    $twitter = get_field('twitter', 'option');
                    $gplus = get_field('google_plus', 'option');
                    $youtube = get_field('youtube', 'option');
                    $instagram = get_field('instagram', 'option');
                    ?>
                    <?php if ($facebook!=""): ?>
                    <li><a target="_blank" href="<?php echo $facebook; ?>"><i class="icon social_facebook"></i></a></li>
                    <?php endif ?>
                    <?php if ($twitter!=""): ?>
                    <li><a target="_blank" href="<?php echo $twitter; ?>"><i class="icon social_twitter"></i></a></li>
                    <?php endif ?>
                    <?php if ($gplus!=""): ?>
                    <li><a target="_blank" href="<?php echo $gplus; ?>"><i class="icon social_googleplus"></i></a></li>
                    <?php endif ?>
                    <?php if ($youtube!=""): ?>
                    <li><a target="_blank" href="<?php echo $youtube; ?>"><i class="icon social_youtube"></i></a></li>
                    <?php endif ?>
                    <?php if ($instagram!=""): ?>
                    <li><a target="_blank" href="<?php echo $instagram; ?>"><i class="icon social_instagram"></i></a></li>
                    <?php endif ?>
                  </ul>
                </div>
              </div>

              <div class="col-md-3">
                <div class="top-header__info">
                  <ul class="social-links list-inline pull-right">
                    <li><a target="_blank" href="<?php echo site_url('wp-admin') ?>"  title="<?php echo __('Acesso Restrito', 'ccci'); ?>" data-toggle="tooltip" data-placement="bottom"><i class="icon icon_lock"></i></a></li>
                  </ul>
                </div>
                <div class="header-language btn-group">
                  <button type="button" class="header-language__btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">PT <span class="caret"></span></button>
                  <ul class="language-list dropdown-menu list-unstyled" role="menu">
                    <li class="language-list__item"><a class="header-language__link" href="#">ENG</a></li>
                    <li class="language-list__item"><a class="header-language__link" href="#">fr</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-xs-12"><a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a></div>
            <div class="col-md-10 col-xs-12">
              <div class="main-navig">
                <div class="navbar yamm">
                  <a class="btn_header_search visible-xs hide" href="#"><i class="icon icon_search"></i></a>
                  <div class="search-form-modal transition">
                    <form class="navbar-form header_search_form">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pesquisar por...">
                      </div>
                      <button class="btn_search btn btn-primary btn-effect">Buscar</button>
                      <i class="fa fa-times search-form_close"></i>
                    </form>
                  </div>
                  <div class="navbar-header visible-xs">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  </div>

                  <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                    <a class="btn_header_search hidden" href="#"><i class="icon icon_search"></i></a>
                    <div class="search-form-modal transition">
                      <form class="navbar-form header_search_form">
                        <i class="fa fa-times search-form_close"></i>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Pesquisar por...">
                        </div>
                        <button class="btn_search btn btn-primary btn-effect"><?php echo __('Buscar', 'ccci') ?></button>
                      </form>
                    </div>

                    <a href="<?php echo home_url(); ?>" class="logo pull-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
                    <?php navMain(); ?>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>