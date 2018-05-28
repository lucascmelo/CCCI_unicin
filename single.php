<?php get_header(); ?>
<div class="section-title section-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section__inner">
					<h1 class="ui-title-page"><?php the_title(); ?></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="active"><?php the_title(); ?></li>
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
						<ul class="list-widget list-mark list-mark_mod-a">
							<?php
							$projetos = new WP_Query(array('post_type' => 'projetos', 'posts_per_page'=> -1, 'orderby' => 'post_title', 'order' => 'ASC'));
							 while ( $projetos->have_posts() ) : $projetos->the_post();
							  $link  = (get_field('projetos_link_externo')) ? get_field('projetos_link_externo') : get_permalink();
							  $blank = (get_field('projetos_link_externo')) ? '_blank' : '';
							?>
							<li class='<?php echo (is_single(get_the_ID())) ? "list-mark-active" : ""; ?>'><a href="<?php echo $link; ?>" target="<?php echo $blank; ?>"><?php the_title();?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</aside>
		</div>

		<div class="col-md-9 block-conteudo-principal">
			<section class="section-default wow">
				<?php wp_reset_query(); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2 class="ui-title-block text-center"><?php the_title(); ?></h2>
				<?php $thumb = get_the_post_thumbnail_url(get_the_ID());?>
				<p class="text-center"><img src="<?php echo $thumb; ?>" class="img-responsive img-thumbnail"></p>
				<?php the_content(); ?>
				<?php endwhile;endif; ?>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>
