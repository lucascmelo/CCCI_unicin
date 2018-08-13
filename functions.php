<?php
if (!isset($content_width))
{
  $content_width = 900;
}

if (function_exists('add_theme_support'))
{
  
  // Add Menu Support
  add_theme_support('menus');

  // Add Thumbnail Theme Support
  add_theme_support('post-thumbnails');
  add_image_size('large', 700, '', true); // Large Thumbnail
  add_image_size('medium', 250, '', true); // Medium Thumbnail
  add_image_size('small', 120, '', true); // Small Thumbnail
  add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
  add_image_size('bg-projetos', 400, 320, true);

  // Enables post and comment RSS feed links to head
  add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// add_filter( 'gettext', 'my_changerr', 20, 3 );
function my_changerr( $translated_text, $text, $domain ) {
    if ( is_singular() ) {
        switch ( $translated_text ) {
            case 'Página não encontrada.' :
              $translated_text = __( get_field('pagina_nao_encontrada', 'option'), 'ccci' );
              break;
            case 'Voltar para a página inicial.' :
              $translated_text = __( 'Back to home.', 'ccci' );
              break;
            case 'Informações de Contato' :
              $translated_text = __( 'Informações de Contato', 'ccci' );
              break;
            case 'Todos os direitos reservados' :
              $translated_text = __( 'Todos os direitos reservados', 'ccci' );
              break;
            case 'Acesso Restrito' :
              $translated_text = __( 'Acesso Restrito', 'ccci' );
              break;
            case 'Buscar' :
              $translated_text = __( 'Buscar', 'ccci' );
              break;
            case 'FICOU CURIOSO?' :
              $translated_text = __( 'FICOU CURIOSO?', 'ccci' );
              break;
            case 'SAIBA MAIS' :
              $translated_text = __( 'SAIBA MAIS', 'ccci' );
              break;
            case 'ASSISTA O NOSSO VIDEO' :
              $translated_text = __( 'ASSISTA O NOSSO VIDEO', 'ccci' );
              break;
            case 'NOSSOS PROJETOS' :
              $translated_text = __( 'NOSSOS PROJETOS', 'ccci' );
              break;
            case 'Saiba mais' :
              $translated_text = __( 'Saiba mais', 'ccci' );
              break;
            case 'mais detalhes' :
              $translated_text = __( 'mais detalhes', 'ccci' );
              break;
            case 'Pense nisso' :
              $translated_text = __( 'Pense nisso', 'ccci' );
              break;
            case 'Instituições Conscienciocêntricas' :
              $translated_text = __( 'Instituições Conscienciocêntricas', 'ccci' );
              break;
            case 'Onde Estamos' :
              $translated_text = __( 'Onde Estamos', 'ccci' );
              break;
            case 'Envie uma mensagem' :
              $translated_text = __( 'Envie uma mensagem', 'ccci' );
              break;
            case 'Sua mensagem foi enviada com sucesso. Em breve retornaremos o contato.' :
              $translated_text = __( 'Sua mensagem foi enviada com sucesso. Em breve retornaremos o contato.', 'ccci' );
              break;
            case 'Aconteceu algum problema, por favor tente mais tarde.' :
              $translated_text = __( 'Aconteceu algum problema, por favor tente mais tarde.', 'ccci' );
              break;
            case 'ENVIAR' :
              $translated_text = __( 'ENVIAR', 'ccci' );
              break;
            case 'Sede:' :
              $translated_text = __( 'Sede:', 'ccci' );
              break;
            case 'Telefone:' :
              $translated_text = __( 'Telefone:', 'ccci' );
              break;
            case 'Contato:' :
              $translated_text = __( 'Contato:', 'ccci' );
              break;
            case 'Site:' :
              $translated_text = __( 'Site:', 'ccci' );
              break;
            case 'BAIXAR VERBETES' :
              $translated_text = __( 'BAIXAR VERBETES', 'ccci' );
              break;
            case 'BAIXAR ORGANOGRAMA' :
              $translated_text = __( 'BAIXAR ORGANOGRAMA', 'ccci' );
              break;
            case 'VERBETES ESCRITOS' :
              $translated_text = __( 'VERBETES ESCRITOS', 'ccci' );
              break;
            case 'LIVROS <br> PUBLICADOS' :
              $translated_text = __( 'LIVROS <br> PUBLICADOS', 'ccci' );
              break;
            case 'VOLUNTÁRIOS ATIVOS' :
              $translated_text = __( 'VOLUNTÁRIOS ATIVOS', 'ccci' );
              break;
            case 'CURSOS MINISTRADOS' :
              $translated_text = __( 'CURSOS MINISTRADOS', 'ccci' );
              break;
            case 'Voluntários' :
              $translated_text = __( 'Voluntários', 'ccci' );
              break;
            case 'Minipeças do Maximecanismo' :
              $translated_text = __( 'Mini-Peças do Maxi-Mecanismo', 'ccci' );
              break;
            case 'Tel.:' :
              $translated_text = __( 'Phone:', 'ccci' );
              break;
        }
    }
    return $translated_text;
}

if( function_exists('acf_add_options_page') ) {
  $option_page = acf_add_options_page(
    array(
      'page_title'    => 'Configuração da Página Inicial',
      'menu_title'    => 'Página Inicial',
      'menu_slug'     => 'pagina-inicial',
      'capability'    => 'edit_posts',
      'redirect'  => false
    )
  );

  $option_pageContato = acf_add_options_page(
    array(
      'page_title'    => 'Configuração de Contato',
      'menu_title'    => 'Contato',
      'menu_slug'     => 'contato',
      'capability'    => 'edit_posts',
      'redirect'  => false
    )
  );

  $option_pageContato = acf_add_options_page(
    array(
      'page_title'    => 'Informações Gerais',
      'menu_title'    => 'Informações Gerais',
      'menu_slug'     => 'informacoes-gerais',
      'capability'    => 'edit_posts',
      'redirect'  => false
    )
  );

  $option_pageTraducoes = acf_add_options_page(
    array(
      'page_title'    => 'Traduções',
      'menu_title'    => 'Traduções',
      'menu_slug'     => 'traducoes',
      'capability'    => 'edit_posts',
      'redirect'  => false
    )
  );
}


function navMain()
{
  wp_nav_menu(
    array(
      'menu'            => '',
      'container'       => '',
      'container_id'    => '',
      'menu_class'      => '',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
      'depth'           => 0,
      'walker' => new My_Walker_Nav_Menu()
      )
    );
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}

function logo() {
?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logotipo-login.png);
      height:110px;
      width:320px;
      background-size: 320px 110px;
      background-repeat: no-repeat;
      padding-bottom: 30px;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'logo' );


// Register HTML5 Blank Navigation
function register_html5_menu()
{
  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
    'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
    'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
  ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
  $args['container'] = false;
  return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
  return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = 100, $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    // return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
    return '...';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

/*------------------------------------*\
    Form Contato Ajax
\*------------------------------------*/
add_action('wp_ajax_contato', array('Contato', 'send_message') );
add_action('wp_ajax_nopriv_contato', array('Contato', 'send_message') );
add_filter('wp_mail_content_type', array('Contato', 'mail_content_type') );

class Contato {

    public static function send_message() {
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $fone = $_POST['phone'];
        $msg = $_POST['message'];
        if (isset($nome) && isset($email) && isset($msg)) {
            // $to = get_option('admin_email');
            $to = 'contato@lucascavalcanti.com.br';
            $headers = 'From: ' . $nome . ' <"' . $email . '">';
            $subject = "UNICIN.org | Nova mensagem";

            ob_start();
            echo '
            <html>
              <head>
                <title>Contato</title>
              </head>
              <body>
                <h1>Formulário de Contato</h1>
                <table cellspacing="0" cellpadding="0" style="width:100%;border-bottom:1px solid #eee;font-size:12px;line-height:135%;font-family:Helvetica,Arial, sans-serif">
                  <tr style="background-color:#F5F5F5">
                    <th style="vertical-align:top;color:#222;text-align:left;padding:7px 9px 7px 9px;border-top:1px solid #eee;">
                      <span>Nome: </span>
                    </th>
                    <td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee;">
                      <div>' . $nome . '</div>
                    </td>
                  </tr>
                  <tr style="background-color:#FFFFFF">
                    <th style="vertical-align:top;color:#222;text-align:left;padding:7px 9px 7px 9px;border-top:1px solid #eee;">
                      <span>E-mail: </span>
                    </th>
                    <td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee;">
                      <div>'. $email . '</div>
                    </td>
                  </tr>

                  <tr style="background-color:#F5F5F5">
                    <th style="vertical-align:top;color:#222;text-align:left;padding:7px 9px 7px 9px;border-top:1px solid #eee;">
                      <span>Telefone: </span>
                    </th>
                    <td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee;">
                      <div>'. $fone . '</div>
                    </td>
                  </tr>

                  <tr style="background-color:#FFFFFF">
                    <th style="vertical-align:top;color:#222;text-align:left;padding:7px 9px 7px 9px;border-top:1px solid #eee;">
                      <span>Mensagem: </span>
                    </th>
                    <td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee;">
                      <div>'. nl2br($msg) . '</div>
                    </td>
                  </tr>
                </table>
              </body>
            </html>
            ';

            $message = ob_get_contents();

            ob_end_clean();

            // var_dump(wp_mail($to, $subject, $message, $headers));
            $mail = wp_mail($to, $subject, $message, $headers);

            if($mail){
              echo 'success';
            }else{
              echo 'fail';
            }
        }

        exit();

    }

    public static function mail_content_type() {
        return "text/html";
    }
}

// define the wp_mail_failed callback
function action_wp_mail_failed($wp_error)
{
    return error_log(print_r($wp_error, true));
}

// add the action
add_action('wp_mail_failed', 'action_wp_mail_failed', 10, 1);



/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'create_post_type_custom'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


if (!is_user_logged_in()) {
    add_action('wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
    add_action('wp_ajax_ajaxlogin', 'ajax_login' );
}

function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['username'];
    // $info['user_email'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

function create_post_type_custom()
{
    register_post_type('instituicoes',
        array(
        'labels' => array(
            'name' => __('Instituições', 'instituicoes'),
            'singular_name' => __('Instituição', 'instituicoes'),
            'add_new' => __('Adicionar novo', 'instituicoes'),
            'add_new_item' => __('Adicionar nova instituição', 'instituicoes'),
            'edit' => __('Editar', 'instituicoes'),
            'edit_item' => __('Editar instituição', 'instituicoes'),
            'new_item' => __('Nova instituição', 'instituicoes'),
            'view' => __('Ver', 'instituicoes'),
            'view_item' => __('Ver instituição', 'instituicoes'),
            'search_items' => __('Procurar por instituições', 'instituicoes'),
            'not_found' => __('Nenhuma instituição encontrada', 'instituicoes'),
            'not_found_in_trash' => __('Nenhuma instituição encontrada na lixeira', 'instituicoes')
        ),
        'public' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'supports' => array(
            'title'
        ),
        'can_export' => true,
        'taxonomies' => array()
    ));

    register_post_type('projetos',
        array(
        'labels' => array(
            'name' => __('Ferramentas de Autopesquisa', 'projetos'),
            'singular_name' => __('Ferramentas de Autopesquisa', 'projetos'),
            'add_new' => __('Adicionar novo', 'projetos'),
            'add_new_item' => __('Adicionar novo', 'projetos'),
            'edit' => __('Editar', 'projetos'),
            'edit_item' => __('Editar', 'projetos'),
            'new_item' => __('Novo', 'projetos'),
            'view' => __('Ver', 'projetos'),
            'view_item' => __('Ver', 'projetos'),
            'search_items' => __('Procurar por ...', 'projetos'),
            'not_found' => __('Nenhum item encontrada', 'projetos'),
            'not_found_in_trash' => __('Nenhum item encontrada na lixeira', 'projetos')
        ),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'can_export' => true,
        'taxonomies' => array()
    ));

    register_post_type('pensamentos',
        array(
        'labels' => array(
            'name' => __('Ortopensatas', 'pensamentos'),
            'singular_name' => __('Ortopensatas', 'pensamentos'),
            'add_new' => __('Adicionar novo', 'pensamentos'),
            'add_new_item' => __('Adicionar novo', 'pensamentos'),
            'edit' => __('Editar', 'pensamentos'),
            'edit_item' => __('Editar', 'pensamentos'),
            'new_item' => __('Novo', 'pensamentos'),
            'view' => __('Ver', 'pensamentos'),
            'view_item' => __('Ver', 'pensamentos'),
            'search_items' => __('Procurar por pensamentos', 'pensamentos'),
            'not_found' => __('Nenhum item encontrada', 'pensamentos'),
            'not_found_in_trash' => __('Nenhum item encontrada na lixeira', 'pensamentos')
        ),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'supports' => array(
            'title'
        ),
        'can_export' => true,
        'taxonomies' => array()
    ));

    register_post_type('painel',
        array(
        'labels' => array(
          'name' => __('Páginas Restritas', 'painel')
        ),
        'public' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'show_ui' => true,
        'supports' => array(
            'title'
        )
    ));

    register_post_type('documentos',
        array(
        'labels' => array(
          'name' => __('Documentos', 'documentos'),
          'singular_name' => __('Documentos', 'documentos'),
          'add_new' => __('Adicionar novo', 'documentos'),
          'add_new_item' => __('Adicionar novo', 'documentos'),
          'edit' => __('Editar', 'documentos'),
          'edit_item' => __('Editar', 'documentos'),
          'new_item' => __('Novo', 'documentos'),
          'view' => __('Ver', 'documentos'),
          'view_item' => __('Ver', 'documentos'),
          'search_items' => __('Procurar por ...', 'documentos'),
          'not_found' => __('Nenhum item encontrado', 'documentos'),
          'not_found_in_trash' => __('Nenhum item encontrado na lixeira', 'documentos')
        ),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'exclude_from_search' => true,
        'show_ui' => true,
        'supports' => array(
          'title',
          'editor',
          'thumbnail'
        ),
        'can_export' => true,
        'taxonomies'  => array( 'arquivos' ),
    ));

    register_taxonomy (
      'arquivos',
      'documentos',
      array(
        'label' => __( 'Categoria' ),
        'hierarchical' => true
      )
    );
}

function acessoRestrito() {
  global $post;
  if ( is_post_type_archive( 'painel' ) || is_post_type_archive( 'documentos' ) ) {
    $userID = get_current_user_id();
    $user_info = get_userdata($userID);
    if ($user_info->roles==NULL) {
?>
      <meta http-equiv="refresh" content="0;URL='<?php echo home_url(); ?>'" />
<?php
      exit;
    }
  }  
}
add_action('get_header', 'acessoRestrito');


/*------------------------------------*\
    Custom User
\*------------------------------------*/
add_role(
  'voluntario',
  __( 'Voluntário' )
);

add_role(
  'gestor',
  __( 'Gestor' )
);
?>