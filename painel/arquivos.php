<?php 
$userID      = get_current_user_id();
$user_info   = get_userdata($userID);
$tax         = get_queried_object();
$taxPermited = get_field('areas_de_acesso', 'user_'.$userID);

if (is_post_type_archive('documentos')) {
  $tax = null;
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-archive fa-fw"></i> <?php echo (is_object($tax) && $tax->term_id) ? $tax->name : 'Arquivos' ?></h1>
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
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  wp_reset_postdata();
                  
                  $args = array(
                    'post_type' => 'documentos',
                    'posts_per_page' => -1
                  );

                  if ($user_info->roles[0] != "administrator") {
                    $args = array(
                      'post_type' => 'documentos',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        'relation' => 'AND',
                        array(
                          'taxonomy'         => 'arquivos',
                          'field'            => 'term_id',
                          'terms'            => array($tax->term_id),
                          'operator'         => 'IN',
                        )
                      )
                    );

                    if (is_object($tax) && $tax->term_id) {
                      if(in_array($tax->term_id, $taxPermited)){
                        $args = array(
                          'post_type' => 'documentos',
                          'posts_per_page' => -1,
                          'tax_query' => array(
                            'relation' => 'AND',
                            array(
                              'taxonomy'         => 'arquivos',
                              'terms'            => array($tax->term_id),
                              'operator'         => 'IN',
                            )
                          )
                        );
                      }else{
                        $args = null;
                        $urlCategories = site_url('painel/arquivos');
                        echo '<tr><td colspan=2><i class="fas fa-circle-notch fa fa-circle-o-notch fa-spin fa-2x"></i></td></tr>';
                        echo '<script>window.location.href = "'.$urlCategories.'"</script>';

                      }
                    }
                  }

                  $files = new WP_Query($args);
                  if ( $files->have_posts() ) : while ( $files->have_posts() ) : $files->the_post();
                  ?>
                  <tr>
                    <td><a href="<?php the_permalink() ?>"><?php the_title(); ?> <small>(saiba mais)</small></a></td>
                    <td><?php echo get_the_date('j \d\e F \d\e Y \à\s H:i'); ?></td>
                  </tr>
                  <?php endwhile;else:?>
                  <tr>
                    <td colspan="2">Nenhum arquivo encontrado.</td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>