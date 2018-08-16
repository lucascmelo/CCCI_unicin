<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Minha Conta</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
          	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php
              $blogusers = get_users(array(
                'role__in' => array('gestor', 'voluntario'),
                'orderby'  => 'registered',
              ));
              ?>
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>IC</th>
                    <th>Perfíl</th>
                    <th>Último Acesso</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $blogusers as $user ) { ?>
                    <td><?php echo $user->display_name; ?></td>
                    <td>
                      <?php 
                      $ics = get_field('ic_do_voluntario', 'user_'.$user->ID);
                      if (is_array($ics)) {
                        foreach ( $ics as $key => $ic ) {
                          if ($key>0) echo ", ";
                          echo $ic["label"];
                        }
                      }
                      ?>
                    </td>
                    <td><?php echo $user->roles[0]; ?></td>
                    <td><?php echo get_last_login($user->ID); ?></td>
                    <td class="text-center">
                      <a href="#"><i class="fa fa-pencil"></i></a>
                      <a href="#"><i class="fa fa-trash"></i></a>
                      
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          	<?php endwhile;endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>