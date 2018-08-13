<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta name="description" content="É a associação de pessoas físicas e jurídicas com interesses em comum, de caráter educacional, científico, multidimensional, transnacional, sem fins de lucro, interassistencial e universalista, regida por estatuto específico e pelas normas legais pertinentes, fundada em Foz do Iguaçu, em 22 de janeiro de 2005, com o objetivo de promover a integração da Comunidade Conscienciológica Cosmoética Internacional (CCCI) favorecendo a maxiproéxis grupal.">
    <title>UNICIN - UNIÃO DAS INSTITUIÇÕES CONSCIENCIOCÊNTRICAS INTERNACIONAIS</title>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-117352638-3', 'auto');
    ga('send', 'pageview');
    </script>
    <?php wp_head(); ?>
    <?php 
    if (
         is_singular('painel')
      || is_post_type_archive('painel')
      || is_singular('documentos')
      || is_post_type_archive('documentos') 
      || is_tax( 'arquivos')
    ):
    ?>
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/acesso-restrito.css" rel="stylesheet">
    <?php else: ?>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/master.css" rel="stylesheet">
    <?php endif; ?>
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
    <?php 
    if (
         is_singular('painel')
      || is_post_type_archive('painel')
      || is_singular('documentos')
      || is_post_type_archive('documentos') 
      || is_tax( 'arquivos')
    ):
      get_template_part('painel/header');
    else:
    ?>
    <div class="layout-theme animated-css" id="wrapper" data-header="sticky" data-header-top="200">
      <header class="header header_mod-b">
        <div class="top-header navbar-header">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="top-header__info">
                  <ul class="social-links list-inline">
                    <li><a href="<?php echo site_url('painel') ?>"><?php the_field('acesso_restrito', 'option') ?></a></li>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-12"><a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo.png" alt="logo"></a></div>
            <div class="col-md-9 col-xs-12">
              <div class="main-navig">
                <div class="navbar yamm">
                  <?php /* ?>
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
                  <?php */ ?>

                  <div class="navbar-header visible-xs">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  </div>

                  <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                    <?php /* ?>
                    <a class="btn_header_search hidden" href="#"><i class="icon icon_search"></i></a>
                    <div class="search-form-modal transition">
                      <form class="navbar-form header_search_form">
                        <i class="fa fa-times search-form_close"></i>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Pesquisar por...">
                        </div>
                        <button class="btn_search btn btn-primary btn-effect"><?php the_field('buscar', 'option') ?></button>
                      </form>
                    </div>
                    <?php */ ?>

                    <a href="<?php echo home_url(); ?>" class="logo pull-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
                    <?php navMain(); ?>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    <?php endif; ?>