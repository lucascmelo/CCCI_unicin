<?php get_header(); ?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Arquivos</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Categorias</th>
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  wp_reset_postdata();
                  $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                  $blog = new WP_Query(array('post_type' => 'acesso-restrito', 'paged' => $paged,  'posts_per_page' => 1));
                  if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post();
                  ?>
                  <tr>
                    <td><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></td>
                    <td>
                      <?php 
                      $cats = wp_get_post_terms(get_the_ID(),'category');
                      foreach ($cats as $cat) {
                        echo $cat->name .', ';
                        // echo '<a class="entry-meta__link" href="'.site_url("/category/{$cat->slug}").'">'.$cat->name.'</a> ';
                      }
                      ?>
                    </td>
                    <td><?php the_date(); ?></td>
                  </tr>
                  <?php endwhile;?>
                </tbody>
              </table>
            </div>
            <?php 
            $big = 999999999;
            $pages =  paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'prev_text' => __('<i class="fa fa-chevron-left"></i>'),
              'next_text' => __('<i class="fa fa-chevron-right"></i>'),
              'type' => 'array',
              'total' => $blog->max_num_pages
            ));
            
            if( is_array($pages) ) {
            ?>
            <ul class="pagination">
              <?php
              foreach ( $pages as $page ) {
                echo "<li>$page</li>";
              }
              ?>
            </ul>
            <?php } ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('acesso-restrito/footer'); ?>