<?php get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
 $ancestorsID = get_ancestors(get_the_ID(), 'page');
 $ancestorsID = $ancestorsID[0];
 $ancestorsIDFirst = $ancestorsID;

 if (get_field('url_redirect')) {
 	wp_redirect(get_field('url_redirect'));
 	echo '<script type="text/javascript">window.location = "'.get_field('url_redirect').'"</script>';
 	exit;
 }
 if (get_field('pagina_redirect')) {
	echo '<script type="text/javascript">window.location = "'.get_field('pagina_redirect').'"</script>';
	exit;
 }
?>
<div class="section-title section-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section__inner">
					<h1 class="ui-title-page"><?php the_title(); ?></h1>
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
		<div class="col-md-3">
			<aside class="sidebar wow">
				<div class="widget widget_mod-a">
					<div class="widget-content">
						<?php
						$subpages = array();
						$ancestorsID = get_ancestors($ancestorsID, 'page');
						$ancestorsID = $ancestorsID[0];
						
						$ancestorsID = ($ancestorsID==null) ? $ancestorsIDFirst : $ancestorsID;
						if ($ancestorsIDFirst==NULL) {

							$subpages = get_pages(array(
								'child_of' => get_the_ID(),
								'parent ' => get_the_ID(),
								'hierarchical' => 0,
								// 'sort_column' => 'menu_order',
								'sort_column' => 'post_name',
								'sort_order' => 'asc'
							));
						}else{
							$subpages = get_pages(array(
								'child_of' => $ancestorsID, 
								'sort_column' => 'menu_order'
								// 'sort_column' => 'post_name'
							));
						}

						?>
						<ul class="list-widget list-mark list-mark_mod-a">
							<?php
							$agendaPage = get_post($ancestorsID);
							$agendaSlug = $agendaPage->post_name;
							if ($agendaSlug == 'agenda' || is_page('agenda')) {
							?>
							<li class='<?php echo (is_page('agenda')) ? "list-mark-active " : ""; ?>'><a href="<?php echo site_url('agenda');?>"><?php echo get_the_title($agendaPage);?></a></li>
							<?php
							}
							?>
							<?php foreach ($subpages as $page): ?>
								<?php 
								$childOfSubPage = get_ancestors($page->ID, 'page');
								$childOfSubPageClass = "";
								if ($childOfSubPage[0] != $ancestorsID) {
									$childOfSubPageClass = 'child-sub';
								}
								?>
								
							<li class='<?php echo (is_page($page->ID)) ? "list-mark-active " : ""; echo $childOfSubPageClass; ?>'><a href="<?php echo $page->guid;?>"><?php echo $page->post_title;?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<?php if($ancestorsID == get_id_by_slug('unicin')): ?>
				<div class="widget">
					<div class="widget-content">
						<?php /* ?>
						<?php $estatuto = get_field('estatuto', 'option'); ?>
						<a class="download-link" href="<?php echo $estatuto['url']; ?>" download><i class="icon flaticon-pdf17"></i><?php echo __('Estatuto', 'ccci'); ?></a>

						<?php $organograma = get_field('estatuto', 'option'); ?>
						<a class="download-link" href="<?php echo $organograma['url']; ?>" download><i class="icon flaticon-pdf17"></i><?php echo __('Organograma', 'ccci'); ?></a>
						<?php */ ?>
					</div>
				</div>
				<?php endif; ?>
			</aside>
		</div>

		<div class="col-md-9 block-conteudo-principal">
			<section class="section-default wow">
				<h2 class="ui-title-block text-center"><?php echo the_field('page_titulo_principal'); ?></h2>
				<?php
				$subTitle = get_field('page_subtitulo');
				?>
				<div class="ui-subtitle-block ui-subtitle-block_mod-a ui-subtitle-block_mod-b text-center wow"><?php echo ($subTitle) ? $subTitle : '&nbsp;'; ?></div>

				<?php the_content(); ?>

				<div class="row">
					<?php
					if( have_rows('page_colunas_de_conteudo') ):
						while ( have_rows('page_colunas_de_conteudo') ) :
							the_row();
					?>
					<div class="col-sm-12">
						<h3 class="ui-title-inner ui-title-inner_small ui-title-inner_mod-a"><?php the_sub_field('page_colunas_de_conteudo_titulo'); ?></h3>
						<div class="border-decor border-decor_mod-b border-decor_mod-d"></div>
						<?php the_sub_field('page_colunas_de_conteudo_conteudo'); ?>
					</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</section>

			<?php if (is_page('autopesquisologia')): ?>
				<!-- <div class="row"> -->
					<!-- <div class="col-md-12 block-conteudo-principal"> -->
						<section class="wow ferramentas-de-autopesquisa">
							<div class="ui-subtitle-block ui-subtitle-block_mod-a ui-subtitle-block_mod-b text-center wow"><?php the_field('ferramentas_de_autopesquisa', 'option'); ?></div>
							<?php 
							$projetos = new WP_Query(array('post_type' => 'projetos', 'posts_per_page'=> -1, 'orderby' => 'rand', 'order' => 'ASC'));

							if ( $projetos->have_posts() ) : while ( $projetos->have_posts() ) : $projetos->the_post(); 
								$thumb = get_the_post_thumbnail_url(get_the_ID(), 'bg-projetos');
								$link  = (get_field('projetos_link_externo')) ? get_field('projetos_link_externo') : get_permalink();
								$blank = (get_field('projetos_link_externo')) ? '_blank' : '';
								?>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<article class="post post_mod-f clearfix wow">
										<div class="entry-main">
											
											<div class="entry-media">
												<a href="<?php echo $link; ?>">
													<img class="img-responsive" src="<?php echo $thumb; ?>">
												</a>
											</div>
											<div class="entry-header clearfix">
												<h3 class="entry-title ui-title-inner"><a href="<?php echo $link ?>" target="<?php echo $blank; ?>"><?php the_title(); ?></a></h3>
												<div class="border-decor border-decor_mod-b"></div>
											</div>
											<a class="link" href="<?php echo $link; ?>" target="<?php echo $blank ?>">Saiba mais</a>
										</div>
									</article>
								</div>
							<?php endwhile;endif;?>
						</section>
					<!-- </div> -->
				<!-- </div> -->
			<?php endif; ?>
		</div>
	</div>
</div>
<?php if($ancestorsID == get_id_by_slug('unicin')): ?>
<?php if (1==2): ?>
<div class="section-progress no-bg-color-parallax parallax-yellow wow" id="charstart">
	<ul class="bg-slideshow">
		<li>
			<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-contadores.jpg)" class="bg-slide"></div>
		</li>
		<li>
			<div style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-contadores.jpg))" class="bg-slide"></div>
		</li>
	</ul>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="list-progress list-progress_mod-a list-unstyled">
					<li class="list-progress__item clearfix">
						<div class="list-progress__wrap">
							<span class='icon'>
								<i class="fa fa-file-text-o"></i>
							</span>
							<div class="list-progress__inner">
								<span class="list-progress__percent chart total-verbetes" data-percent=""><span class="percent"></span></span>
								<span class="list-progress__name"><?php echo __('VERBETES ESCRITOS', 'ccci') ?></span>
							</div>
						</div>
					</li>
					<li class="list-progress__item clearfix">
						<div class="list-progress__wrap">
							<span class="icon">
								<i class="fa fa-book"></i>
							</span>
							<div class="list-progress__inner">
								<span class="list-progress__percent chart" data-percent="<?php the_field('livros_publicados', 'option') ?>"><span class="percent"></span></span>
								<span class="list-progress__name"><?php echo __('LIVROS <br> PUBLICADOS', 'ccci'); ?></span>
							</div>
						</div>
					</li>
					<li class="list-progress__item clearfix">
						<div class="list-progress__wrap">
							<span class="icon">
								<i class="fa fa-users"></i>
							</span>
							<div class="list-progress__inner">
								<span class="list-progress__percent chart" data-percent="<?php the_field('voluntarios_ativos', 'option') ?>"><span class="percent"></span></span>
								<span class="list-progress__name"><?php echo __('VOLUNTÁRIOS ATIVOS', 'ccci') ?></span>
							</div>
						</div>
					</li>
					<li class="list-progress__item clearfix">
						<div class="list-progress__wrap">
							<span class="icon">
								<i class="fa fa-graduation-cap"></i>
							</span>
							<div class="list-progress__inner">
								<span class="list-progress__percent chart" data-percent="<?php the_field('cursos_ministrados', 'option') ?>"><span class="percent"></span></span>
								<span class="list-progress__name"><?php echo __('CURSOS MINISTRADOS', 'ccci'); ?></span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="section-area wow">
	<div class="container">
		<div class="row">
			<?php /* ?>
			<div class="col-xs-12 hide">
				<section class="section-default border-top">
					<h2 class="ui-title-block text-center"><?php the_field('voluntarios_translate', 'option'); ?></h2>
					<div class="ui-subtitle-block text-center"><?php the_field('minipecas_do_maximecanismo', 'option'); ?></div>
					<div class="carousel_mod-b owl-carousel owl-theme enable-owl-carousel"
					data-min480="1"
					data-min768="2"
					data-min992="3"
					data-min1200="4"
					data-pagination="false"
					data-navigation="true"
					data-auto-play="400000"
					data-stop-on-hover="true">
						<?php
						if( have_rows('voluntarios', 'option') ):
							while ( have_rows('voluntarios', 'option') ) :
								the_row();
						?>
						<section class="staff">
							<div class="staff__img" style="background-image: url(<?php the_sub_field('voluntario_foto', 'option') ?>)">
								<div class="staff__inner">
									<div class="staff__description"><?php the_sub_field('voluntario_descricao', 'option') ?></div>
									<span class="staff__contacts"></span>
								</div>
							</div>
							<h3 class="staff__name ui-title-inner"><?php the_sub_field('voluntario_nome', 'option') ?></h3>
							<div class="staff__categories"></div>
						</section>
						<?php
							endwhile;
						endif;
						?>
					</div>
				</section>
			</div>
			<?php */ ?>
			<div class="col-xs-12">
				<h2 class="ui-title-block text-center"><?php the_field('voluntarios_translate', 'option'); ?></h2>
				<div class="ui-subtitle-block text-center"><?php the_field('minipecas_do_maximecanismo', 'option'); ?></div>
				<?php
						if( have_rows('voluntarios', 'option') ):
							while ( have_rows('voluntarios', 'option') ) :
								the_row();
						?>
						<div class="col-xs-6 col-sm-4 col-md-3">
							<section class="staff volutarios-item">
								<div class="staff__img" style="background-image: url(<?php the_sub_field('voluntario_foto', 'option') ?>)">
									<div class="staff__inner">
										<div class="staff__description"><?php the_sub_field('voluntario_descricao', 'option') ?></div>
										<span class="staff__contacts"></span>
									</div>
								</div>
								<h3 class="staff__name ui-title-inner"><?php the_sub_field('voluntario_nome', 'option') ?></h3>
								<div class="staff__categories"></div>
							</section>
						</div>
						<?php
							endwhile;
						endif;
						?>
			</div>
		</div>
	</div>
</div>
<?php endif; // fim do contador e voluntários ?>
<?php endwhile;endif; // fim do loop; ?>
<?php get_footer(); ?>
