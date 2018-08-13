<?php 
$tax = get_queried_object(); 
if (is_post_type_archive('documentos')) {
  $tax = null;
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><?php echo (is_object($tax) && $tax->term_id) ? $tax->name : 'Arquivos' ?></h1>
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
                  
                  $args = array(
                    'post_type' => 'documentos',
                    'posts_per_page' => -1,
                  );

                  if (is_object($tax) && $tax->term_id) {
                    $args = array_merge(
                      $args, 
                      array('tax_query' => array(
                        'relation' => 'AND',
                        array(
                          'taxonomy'         => 'arquivos',
                          'terms'            => array($tax->term_id),
                          'operator'         => 'IN',
                        )
                    )));
                  }

                  $blog = new WP_Query($args);
                  if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post();
                  ?>
                  <tr>
                    <td><a href="<?php the_permalink() ?>"><?php the_title(); ?> <small>(saiba mais)</small></a></td>
                    <td>
                      <?php 
                      $cats = wp_get_post_terms(get_the_ID(),'arquivos');
                      $catsCount = 0;
                      foreach ($cats as $cat) {
                        if ($catsCount>0) {
                          echo ', ';
                        }
                        echo $cat->name;
                        $catsCount++;
                      }
                      ?>
                    </td>
                    <td><?php echo get_the_date(); ?></td>
                  </tr>
                  <?php endwhile;?>
                </tbody>
              </table>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>