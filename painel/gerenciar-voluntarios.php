<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-address-book"></i> Gerenciar Voluntários</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
          	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php if (isset($_GET['id'])): ?>
                <?php
                $user = get_user_by('ID', $_GET['id']);
                $date_format = get_option('date_format') . ' ' . get_option('time_format');
                ?>

                <form role="form">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                  <div class="row">
                    <div class="col-sm-4 col-xs-12 ">
                      <div class="form-group">
                        <label>Login</label>
                        <p class="form-control-static"><?php echo $user->user_login; ?></p>
                      </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 ">
                      <div class="form-group">
                        <label>Data do Cadastro</label>
                        <p class="form-control-static"><?php echo mysql2date($date_format, $user->user_registered, true); ?></p>
                      </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 ">
                      <div class="form-group">
                        <label>Último Acesso</label>
                        <p class="form-control-static"><?php $lastLogin = get_last_login($user->ID); echo ($lastLogin) ? $lastLogin : "Nunca entrou"; ?></p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" name="first_name" value="<?php echo $user->first_name ?>">
                      </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label>Sobrenome</label>
                        <input class="form-control" name="last_name" value="<?php echo $user->last_name ?>">
                      </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?php echo $user->user_email ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label>Areas de Acesso <small>(Categorias permitidas)</small></label>
                        <?php 
                        $userAreas = get_field('areas_de_acesso', 'user_'.$user->ID);
                        $allAreas = get_categories(array(
                          'taxonomy' => 'arquivos',
                        ));
                        foreach ( $allAreas as $area ) {
                        ?>
                        <div class="checkbox">
                          <label>
                            <input name="ic_do_voluntario" value="<?php echo $area->term_id; ?>" type="checkbox" <?php echo (in_array($area->term_id, $userAreas)) ? 'checked' : '' ?>><?php echo $area->name; ?>
                          </label>
                        </div>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label>Instituições Conscienciocêntricas</label>
                        <?php 
                        $userICs = get_field('ic_do_voluntario', 'user_'.$user->ID);
                        $userICArr  = array();
                        if (is_array($userICs)) {
                          foreach ( $userICs as $key => $ic ) {
                            $userICArr[] = $ic["value"];
                          }
                        }
                        
                        $allICs = get_field_object('field_5b6ef3f3952d0', 1520);
                        foreach ( $allICs['choices'] as $key => $ic ) {
                        ?>
                        <div class="checkbox">
                          <label>
                            <input name="ic_do_voluntario" value="<?php echo $key; ?>" type="checkbox" <?php echo (in_array($key, $userICArr)) ? 'checked' : '' ?>><?php echo $ic; ?>
                          </label>
                        </div>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 text-center">
                    <hr>
                    <button type="reset" class="btn btn-danger btn-sm">Excluir</button>
                    <button type="submit" class="btn btn-success btn-lg">Salvar</button>
                  </div>
                </form>
              <?php
              else:
              $volunteers = get_users(array(
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
                  <?php foreach ( $volunteers as $user ) { ?>
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
                      <a href="<?php echo site_url('painel/gerenciar-voluntarios').'/?id='.$user->ID; ?>"><i class="fa fa-pencil"></i></a>
                      <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          	<?php endif;endwhile;endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>