<?php get_header(); ?>
<div class="section-title section-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__inner">
                    <h1 class="ui-title-page"><?php echo the_field('pagina_nao_encontrada', 'option'); ?></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
          </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="section-default wow">
                <h2 class="ui-title-block text-uppercase text-center"><?php the_field('pagina_nao_encontrada', 'option'); ?></h2>
                <a class="btn" href="<?php echo home_url(); ?>"><?php the_field('voltar_para_a_pagina_inicial') ?></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>

