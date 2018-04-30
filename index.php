<?php get_header(); ?>
<?php if( have_rows('banner', 'option') ): ?>
<div class="main-slider main-slider_mod-a slider-pro" id="banner"
  data-slider-width="1920"
  data-slider-height="650">
  <div class="sp-slides">
    <?php while ( have_rows('banner', 'option') ) : the_row(); ?>
    <div class="sp-slide">
      <img class="sp-image img-responsive" src="<?php echo the_sub_field('banner_imagem'); ?>">

      <h1 class="main-slider__title sp-layer"
          data-horizontal="13vw"
          data-vertical="35%"
          data-show-transition="up"
          data-hide-transition="left"
          data-show-duration="800"
          data-show-delay="400"
          data-hide-delay="400">
          <?php echo the_sub_field('banner_titulo'); ?>
      </h1>

      <div class="main-slider__text sp-layer hidden-xs"
          data-horizontal="13vw"
          data-vertical="50%"
          data-height="30%"
          data-width="35%"
          data-show-transition="up"
          data-hide-transition="left"
          data-show-duration="800"
          data-show-delay="1200"
          data-hide-delay="1200">
          <p class="main-slider__text"><?php echo the_sub_field('banner_subtitulo'); ?></p>
          <div class="border-decor border-decor_mod-a"></div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>
<?php /* ?>
<div class="section-banner section-bg-2 wow ">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="banner" id="banner01">
          <div class="banner__description"><?php the_field('frase_enfatica_banner', 'option'); ?></div>
          <div class="banner__btn-wrap">
            <?php if (get_field('frase_enfatica_link_banner', 'option')): ?>
            <a href="<?php echo the_field('frase_enfatica_link_banner', 'option'); ?>" class="btn btn-primary btn_with_icon btn-effect "><?php echo __('FICOU CURIOSO?', 'ccci') ?> <i class="icon arrow_carrot-right"></i></a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php */ ?>

<?php if (have_rows('destaque_home', 'option')): ?>
<div class="section-area wow">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-default border-top conteudo-home">
          <?php $order = 1; ?>
          <?php while(have_rows('destaque_home', 'option')): the_row(); ?>
          <?php $order++; ?>
          <article class="post post_mod-a clearfix">
            <div class="entry-media col-sm-4 <?php echo !($order % 2) ? '' : 'col-md-push-8'; ?>">
              <img class="img-responsive img-thumbnail" src="<?php the_sub_field('destaque_home_imagem') ?>">
            </div>
            <div class="entry-main col-sm-8  <?php echo !($order % 2) ? '' : 'col-md-pull-4'; ?>">
              <div class="entry-header clearfix">
                <div class="entry-header__wrap">
                  <h3 class="entry-title ui-title-inner"><?php the_sub_field('destaque_home_titulo') ?></h3>
                  <div class="border-decor border-decor_mod-b"></div>
                </div>
              </div>
              <div class="entry-content">
                <p><?php the_sub_field('destaque_home_resumo') ?></p>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<section class="section-area section-bg-white wow">
  <div class="title-w-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2 class="title-w-bg__inner">
            <?php echo __('ICs', 'ccci'); ?>
            <a class="btn btn-effect" href="<?php echo site_url('ics'); ?>"><?php echo __('Saiba mais', 'ccci'); ?></a>
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 ics-home">
        <?php
        $instituicoes = new WP_Query(array('post_type' => 'instituicoes', 'posts_per_page'=> -1, 'order' => 'ASC', 'orderby' => 'rand'));
        ?>
        <i class="fa fa-chevron-circle-left ic-nav-left"></i>
        <i class="fa fa-chevron-circle-right ic-nav-right"></i>
        <div class="col-xs-12">
          <div class="col-sm-4 ics-home-col-1 row">
            <figure class="ics-home-img">
              <?php $orderIC = 0; if($instituicoes->have_posts()): while($instituicoes->have_posts()): $instituicoes->the_post(); $orderIC++;?>
                <span data-order="<?php echo $orderIC; ?>" class="<?php echo ($orderIC==1) ? 'active' : '' ?>" style="background-image: url(<?php the_field('ics_logotipo'); ?>);"></span>
              <?php endwhile;endif; ?>
            </figure>
          </div>
          <div class="col-sm-8 ics-home-content">
            <?php $orderIC = 0; if($instituicoes->have_posts()): while($instituicoes->have_posts()): $instituicoes->the_post(); $orderIC++;?>
              <div data-order="<?php echo $orderIC; ?>" class="ics-home-desc <?php echo ($orderIC==1) ? 'active' : '' ?>">
                <h3><a href="<?php the_field('ics_site'); ?>" target="_blank"><?php echo get_the_title() ?></a></h3>
                <?php echo get_field('ics_nome') ?><br>
                <p>
                  <?php echo get_field('resumo_ic') ?><br>
                  <a href="<?php the_field('ics_site'); ?>" target="_blank">Saiba mais</a>
                </p>
              </div>
            <?php endwhile;endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if (have_rows('video', 'option')): while(have_rows('video', 'option')): the_row(); ?>
<section class="section-default section-bg-1 video-link wow">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a class="prettyPhoto-video" href="<?php the_sub_field('video_url') ?>">
          <div class="video-link__img"><img class="img-responsive" src="<?php the_sub_field('video_imagem') ?>"></div>
        </a>
      </div>

      <div class="col-md-6">
        <div class="video-link__wrap">
          <h2 class="video-link__title"><?php echo __('ASSISTA O NOSSO VIDEO', 'ccci'); ?></h2>
          <div class="video-link__description"><?php the_sub_field('video_titulo') ?></div>
          <div class="border-decor border-decor_mod-a"></div>
          <p class="video-link__text"><?php the_sub_field('video_descricao') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;endif; ?>

<?php
$projetos = new WP_Query(array('post_type' => 'projetos', 'posts_per_page'=> 8, 'orderby' => 'rand'));
if($projetos->have_posts()):
?>
<section class="section-area wow">
  <div class="title-w-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="title-w-bg__inner">
            <?php echo __('Ferramentas de Autopesquisa', 'ccci'); ?>
            <a class="btn btn-effect" href="<?php echo site_url('projetos'); ?>"><?php echo __('Saiba mais', 'ccci'); ?></a>
          </h2>
        </div>
      </div>
    </div>
  </div>

  <div class="isotope-frame">
    <div class="isotope-filter">
      <?php
       while ( $projetos->have_posts() ) : $projetos->the_post();
        $thumb = get_the_post_thumbnail_url(get_the_ID(), 'bg-projetos');
        $link  = (get_field('projetos_link_externo')) ? get_field('projetos_link_externo') : get_permalink();
        $blank = (get_field('projetos_link_externo')) ? '_blank' : '';
      ?>
      <div class="isotope-item item-project">
        <img src="<?php echo $thumb; ?>">
        <div class="isotope__hover" style="opacity: 1">
          <div class="isotope__inner">
            <h3 class="isotope__title"><?php the_title(); ?></h3>
            <a class="btn btn-default btn-effect" href="<?php echo $link; ?>" target="<?php echo $blank; ?>"><?php echo __('mais detalhes', 'ccci'); ?></a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
$penseNisso = new WP_Query(array('post_type' => 'pensamentos', 'posts_per_page'=> -1));
if($penseNisso->have_posts()):
?>
<section class="section-area section-bg-1 wow" >
  <div class="title-w-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2 class="title-w-bg__inner title-w-bg__inner_mod-a"><?php echo __('Pense nisso', 'ccci') ?></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="carousel_mod-a owl-carousel owl-theme enable-owl-carousel"
        data-min480="1"
        data-min768="2"
        data-min992="2"
        data-min1200="2"
        data-pagination="false"
        data-navigation="true"
        data-auto-play="4000"
        data-stop-on-hover="true">
          <?php while($penseNisso->have_posts()): $penseNisso->the_post(); ?>
          <div class="reviews">
            <blockquote class="reviews__blockquote">
              <?php the_field('pensamento_frase'); ?>
            </blockquote>
            <div class="reviews__autor">
              <div class="reviews__wrap">
                <div class="reviews__name"><?php the_field('pensamento_autor'); ?></div>
                <div class="reviews__categories"><?php the_field('pensamento_referencia'); ?></div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
/*
$instituicoes = new WP_Query(array('post_type' => 'instituicoes', 'posts_per_page'=> -1));
if($instituicoes->have_posts()):
?>
<section class="section-default wow">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="ui-title-block text-center"><?php echo __('Instituições Conscienciocêntricas', 'ccci') ?></h2>
        <br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="carousel_mod-b owl-carousel owl-theme enable-owl-carousel"
          data-min480="3"
          data-min768="5"
          data-min992="6"
          data-min1200="6"
          data-pagination="false"
          data-navigation="true"
          data-auto-play="2000"
          data-stop-on-hover="true">
          <?php while($instituicoes->have_posts()): $instituicoes->the_post(); ?>
          <div class="clients">
            <a class="clients__link" href="<?php the_field('ics_site'); ?>" target="_blank" title="<?php echo get_the_title().' - '.get_field('ics_nome') ?>">
              <img class="img-responsive" src="<?php the_field('ics_logotipo'); ?>" height="60" width="90">
            </a>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php */ ?>
<?php get_footer(); ?>