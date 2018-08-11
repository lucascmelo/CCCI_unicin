<?php get_header(); ?>
<div class="section-title section-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section__inner">
          <h1 class="ui-title-page"><?php the_title(); ?></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('acesso-restrito'); ?>"><?php the_field('acesso_restrito', 'option') ?></a></li>
            <li class="active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="section-default mrg-rt-10">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
        <article class="post post_mod-h clearfix">
          <div class="entry-date"><span class="entry-date__number"><?php the_date('d'); ?></span><?php the_date('M'); ?></div>
          <div class="entry-main">
            <div class="entry-meta">
              <span class="entry-meta__item">
                <?php 
                $cats = get_categories();
                foreach ($cats as $cat) {
                  echo '<a class="entry-meta__link" href="'.site_url("/category/{$cat->slug}").'">'.$cat->name.'</a> ';
                }
                ?>
              </span>              
            </div>
            <div class="entry-header clearfix">
              <h3 class="entry-title ui-title-inner"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="entry-content">
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </article>
        <?php endwhile;endif; ?>
      </div>
    </div>

    <div class="col-md-3">
      <aside class="sidebar sidebar_right">

        <section class="widget widget_searce">
          <h3 class="widget-title widget-title_mod-a ui-title-inner">search blog</h3>
          <div class="border-decor border-decor_mod-b"></div>
          <div class="widget-content">
            <form method="get" class="form-search" id="search-global-form">
              <input class="form-control form-search__input" type="text" placeholder="Keyword ...">
            </form>
          </div>
        </section>

        <section class="widget">
          <h3 class="widget-title widget-title_mod-a ui-title-inner">categories</h3>
          <div class="border-decor border-decor_mod-b"></div>
          <div class="widget-content">
            <ul class="list-widget list-mark list-mark_mod-b">
              <li><a href="blogs-list.html">Home Renovation</a></li>
              <li><a href="blogs-list.html">Green Buildings</a></li>
              <li><a href="blogs-list.html">Construction</a></li>
              <li><a href="blogs-list.html">Mining Industry</a></li>
              <li><a href="blogs-list.html">Latest Offers</a></li>
            </ul>
          </div>
        </section>

        <section class="widget">
          <h3 class="widget-title widget-title_mod-a ui-title-inner">tags cloud</h3>
          <div class="border-decor border-decor_mod-b"></div>
          <div class="widget-content">
            <ul class="list-tags">
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">Latest Offers</a></li>
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">Construction</a></li>
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">Green Buildings</a></li>
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">How to Build</a></li>
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">Room Decoration</a></li>
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">Tips</a></li>
              <li class="list-tags__item"><a class="btn btn-effect" href="home-1.html">Basic Tricks</a></li>
            </ul>
          </div>
        </section>
      </aside>
    </div>
  </div>
</div>
<?php get_footer(); ?>