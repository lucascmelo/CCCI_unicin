<?php get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  $ancestorsID = get_ancestors(get_the_ID(), 'page');
  $ancestorsID = $ancestorsID[0];
?>
<div class="section-title section-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section__inner">
          <h1 class="ui-title-page" style="text-transform: normal;"><?php echo the_field('page_titulo_principal'); ?></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="active"><?php echo get_the_title($ancestorsID); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <section class="section-default wow">
        <h2 class="ui-title-block text-center"><?php echo the_field('page_titulo_principal'); ?></h2>
        <?php
        $subTitle = get_field('page_subtitulo');
        if (!empty($subTitle)) {
        ?>
        <div class="ui-subtitle-block ui-subtitle-block_mod-a ui-subtitle-block_mod-b text-center wow"><?php echo $subTitle; ?></div>
        <?php } ?>
        <div class="text-center">
        <?php the_content(); ?>
        </div>
      </section>
    </div>
    <div class="col-md-6">
        <?php $instituicoes = new WP_Query(array('post_type' => 'instituicoes', 'posts_per_page'=> -1, 'order' => 'ASC', 'orderby' => 'title')); ?>
      <div class="col-xs-8">
       <h4 class="ui-title-block title-tabela-ics">
        ICs (<?php echo $instituicoes->post_count; ?>)
        <div class="ui-subtitle-block ui-subtitle-block_mod-a ui-subtitle-block_mod-b wow">Ordem cronológica de fundação</div>
       </h4>
       <br>
       
      <table class="table table-ics">
        <tbody>
          <?php
          if($instituicoes->have_posts()): while($instituicoes->have_posts()): $instituicoes->the_post();
            ?>
            <tr>
              <td>
                <strong><a href="<?php the_field('ics_site'); ?>" target="_blank"><?php echo get_the_title() ?></a></strong> <br>
                <?php echo get_field('ics_nome') ?><br>
                <span class="ics-infos">
                    <i class="fa fa-map-marker"></i> <?php the_field('ics_sede'); ?><br>
                    <?php if (get_field('ics_telefone')): ?>
                    <i class="fa fa-phone"></i> <?php the_field('ics_telefone'); ?><br>  
                    <?php endif ?>
                    <?php if (get_field('ics_email')): ?>
                    <i class="fa fa-envelope"></i> <?php the_field('ics_email'); ?><br>
                    <?php endif ?>
                    <?php if (get_field('ics_site')): ?>
                    <a href="<?php the_field('ics_site'); ?>" target="_blank"><?php the_field('ics_site'); ?></a>
                </span>
                <?php endif ?>
              </td>
            </tr>
          <?php endwhile;endif; ?>
        </tbody>
      </table>
    </div>
    </div>
    <div class="col-md-6">
      <div class="col-xs-12">
        <section class="wow">
            <h4 class="ui-title-block text-uppercase text-center title-tabela-ics">
                TIMELINE
                <div class="ui-subtitle-block ui-subtitle-block_mod-a ui-subtitle-block_mod-b wow text-center">Listadas em ordem alfabética</div>
            </h4>
            <br>
          <section id="cd-timeline" class="cd-container">
            <?php
            $isUNICIN = 'cd-timeline-unicin';
            $instituicoes = new WP_Query(array('post_type' => 'instituicoes', 'posts_per_page'=> -1, 'orderby'=>'meta_value_num', 'meta_key'=>'fundacao_ics','order'=> 'ASC'));
            if($instituicoes->have_posts()): while($instituicoes->have_posts()): $instituicoes->the_post();
              if (get_the_title()!='UNICIN') {
                $isUNICIN = '';
              }
            ?>
            <div class="cd-timeline-block">
              <div class="cd-timeline-img <?php echo $isUNICIN; ?>">
                <i class="fa fa-map-marker"></i>
              </div>

              <div class="cd-timeline-content">
                <div class="col-sm-12">
                  <div class="row text-center">
                    <a href="<?php the_field('ics_site'); ?>" target="_blank"><img class='img-responsive' src="<?php the_field('ics_logotipo'); ?>"></a>
                  </div>
                </div>
                <strong class="cd-date">
                  <?php 
                  $date = get_field('fundacao_ics', false, false);
                  $fuso = new DateTimeZone('America/Sao_Paulo');
                  $date = new DateTime($date);
                  $date->setTimezone($fuso);
                  echo $date->format('d/m/Y');
                  ?>
                  </strong>
              </div>
            </div>
            <?php endwhile;endif; ?>
          </section>
        </section>
      </div>
    </div>
  </div>
</div>
<?php endwhile;endif; ?>
<?php get_footer(); ?>