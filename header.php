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
              <div class="col-xs-12">
                <div class="top-header__info">
                  <ul class="social-links list-inline">
                    <li><a target="_blank" href="<?php echo site_url('wp-admin') ?>"><?php echo __('Acesso Restrito', 'ccci'); ?></a></li>
                  </ul>
                </div>
                <div class="header-language btn-group">
                  <?php 
                  global $q_config;
                  $language = $q_config['language'];
                  $flag_location = qtranxf_flag_location();
                  ?>
                  <button type="button" class="header-language__btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img alt="<?php echo $q_config['language'] ?>" src="<?php echo $flag_location.$q_config['flag'][$language]; ?>"> <span class="caret"></span></button>
                  <?php echo qtranxf_generateLanguageSelectCode('both'); ?>
                  <!-- <ul class="language-list dropdown-menu list-unstyled" role="menu">
                    <li class="language-list__item"><a class="header-language__link" href="<?php //echo home_url('/') ?>"><img src="<?php //echo plugins_url(); ?>/qtranslate-x/flags/br.png" alt="PT"></a></li>
                    <li class="language-list__item"><a class="header-language__link" href="<?php //echo home_url() ?>/en"><img src="<?php //echo plugins_url(); ?>/qtranslate-x/flags/gb.png" alt="EN"></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-12"><a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo-new.png" alt="logo"></a></div>
            <div class="col-md-9 col-xs-12">
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

                    <a href="<?php echo home_url(); ?>" class="logo pull-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-new.png" alt="logo"></a>
                    <?php navMain(); ?>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>