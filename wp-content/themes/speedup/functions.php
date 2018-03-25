<?php
$speedup_redux_demo = get_option('redux_demo');
//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/widget/widget.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Define Text Doimain

$lang = get_template_directory_uri() . '/languages';
load_theme_textdomain('speedup', $lang);

// Add action to do after comment is submitted


//Theme Set up:
function speedup_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats

    add_post_type_support( 'post', 'post-formats', array( 'audio',  'gallery', 'image', 'video' ) );
    add_post_type_support( 'portfolio', 'post-formats', array( 'gallery', 'image' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation Menu: Chosen menu in Home page, single, blog, pages ...', 'speedup' ),
	) );
    // This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'speedup_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;



function speedup_theme_scripts_styles() {
	$speedup_redux_demo = get_option('redux_demo');;
	$protocol = is_ssl() ? 'https' : 'http';

         wp_enqueue_style( 'main.css', get_template_directory_uri().'/css/main.css');

        wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2016-02-26' );
        if(isset($speedup_redux_demo['chosen-color']) && $speedup_redux_demo['chosen-color']==1){
        wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
        }

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript 

    wp_enqueue_script("bootstrap.js", get_template_directory_uri()."/js/bootstrap.js",array(),false,true);
    wp_enqueue_script("wow.js", get_template_directory_uri()."/js/wow.js",array(),false,true);
    wp_enqueue_script("owl.carousel.js", get_template_directory_uri()."/js/plugins/owl/owl.carousel.js",array(),false,true);
    wp_enqueue_script("jquery.fancybox.pack.js", get_template_directory_uri()."/js/plugins/fancybox/jquery.fancybox.pack.js",array(),false,true);
    wp_enqueue_script("jquery.fancybox.js", get_template_directory_uri()."/js/plugins/fancybox/jquery.fancybox.js",array(),false,true);
    wp_enqueue_script("jquery.appear.js", get_template_directory_uri()."/js/plugins/countto/jquery.appear.js",array(),false,true);
    wp_enqueue_script("jquery.countTo.js", get_template_directory_uri()."/js/plugins/countto/jquery.countTo.js",array(),false,true);
    wp_enqueue_script("jquery.mixitup.js", get_template_directory_uri()."/js/jquery.mixitup.js",array(),false,true);
    wp_enqueue_script("Filter.js", get_template_directory_uri()."/js/plugins/mesonary/FilterableProductGrid/js/modernizr.custom.js",array(),false,true);
    wp_enqueue_script("isotope.pkgd.min.js", get_template_directory_uri()."/js/plugins/mesonary/FilterableProductGrid/js/isotope.pkgd.min.js",array(),false,true);
    wp_enqueue_script("flickity.pkgd.min.js", get_template_directory_uri()."/js/plugins/mesonary/FilterableProductGrid/js/flickity.pkgd.min.js",array(),false,true);
    wp_enqueue_script("FilterableProductGrid/js/main.js", get_template_directory_uri()."/js/plugins/mesonary/FilterableProductGrid/js/main.js",array(),false,true);
    wp_enqueue_script("maps.google.com","http://maps.google.com/maps/api/js?key=AIzaSyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM",array(),false,true);
    wp_enqueue_script("custom.js", get_template_directory_uri()."/js/custom.js",array(),false,true);
    wp_enqueue_script("gmaps.js", get_template_directory_uri()."/js/gmaps.js",array(),false,true);


}
add_action( 'wp_enqueue_scripts', 'speedup_theme_scripts_styles' );


//Custom Excerpt Function
function speedup_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function speedup_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'speedup' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'speedup' ),        
		'before_widget' => '<div id="%1$s" class="widget widget-recent-post search-widget  %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h4>',        
		'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Other', 'speedup' ),
        'id'            => 'sidebar-other',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'speedup' ),        
        'before_widget' => '<div id="%1$s" class="widget widget-recent-post search-widget  %2$s">',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h4>',        
        'after_title'   => '</h4>'
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer One Widget Area', 'speedup' ),
		'id'            => 'footer-area-1',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'speedup' ),
		'before_widget' => '<div id="%1$s" class="sup_footer_widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two Widget Area', 'speedup' ),
		'id'            => 'footer-area-2',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'speedup' ),
		'before_widget' => '<div id="%1$s" class="sup_footer_widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three Widget Area', 'speedup' ),
        'id'            => 'footer-area-3',
        'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'speedup' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
	
}
add_action( 'widgets_init', 'speedup_widgets_init' );
function speedup_add_class_previous($format){
  $format = str_replace('href=', 'class="icon-left-open-big" href=', $format);
  return $format;
}
function speedup_add_class_next($format){
  $format = str_replace('href=', 'class="icon-right-open-big" href=', $format);
  return $format;
}
add_filter('next_post_link', 'speedup_add_class_next');
add_filter('previous_post_link', 'speedup_add_class_previous');
//function tag widgets
function speedup_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'speedup_tag_cloud_widget' );
function speedup_excerpt() {
  $speedup_redux_demo = get_option('redux_demo');;
  if(isset($speedup_redux_demo['blog_excerpt'])){
    $limit = $speedup_redux_demo['blog_excerpt'];
  }else{
    $limit = 20;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

 
function speedup_services_excerpt() {
  $speedup_redux_demo = get_option('redux_demo');;
  if(isset($speedup_redux_demo['services_excerpt'])){
    $limit = $speedup_redux_demo['services_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
if ( !function_exists('speedup_pagination') ) {
    function speedup_pagination() {
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return '';
        } ?>
            <?php if ( get_previous_posts_link() ) : ?>
                <li ><div class="sup_btn sup_black_btn"><?php previous_posts_link( 'previous <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>'); ?></div></li>
            <?php endif; ?>
            <?php if ( get_next_posts_link() ) : ?>
                <li ><div class="sup_btn sup_black_btn"><?php next_posts_link( 'next <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>'); ?></div></li>
                
            <?php endif; ?>
            
    <?php }
}
//Get thumbnail url
function speedup_thumbnail_url($size){
    global $post;
    //$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()),$size );
    if($size==''){
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
         return $url;
    }else{
        $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size);
         return $url[0];
    }
}

function speedup_search_form( $form ) {
    $form = '<form class="form-inline" action="' . esc_url(home_url( '/' )) . '">
                  <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="icon-magnifier icons"></i>
                          </div>
                          <input type="text" name="s" placeholder="'.esc_html__( 'Search.....', 'speedup' ).'" value="' . get_search_query() . '" id="s">
                      </div>
                  </div>
                  <i id="top-search-close">' . esc_html__( '&times;', 'speedup' ) . '</i>
              </form>';
    return $form;
}
add_filter( 'get_search_form', 'speedup_search_form' );
//Custom comment List:

// Comment Form


function speedup_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
   <li>
    <div class="comment-wrap">
        <div class="comment-meta">
            <div class="comment-author">
                <span class="comment-avatar">
                <?php echo get_avatar($comment,$size='80' ); ?>
            </span>
            </div>
        </div>
        <div class="comment-content">
            <div class="comment-author">
                <a href="javascript:;" class="url"><?php printf(esc_html__('%s','speedup'), get_comment_author_link()) ?></a>
                <span><?php $d = "F j, Y "; printf(get_comment_date($d)) ?> at <?php $t = "g:i a"; printf(get_comment_date($t)) ?></span>
            </div>
            <p><?php comment_text() ?></p>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>
    </li>

<?php
}




//Code Visual Composer.

function speedup_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'speedup_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'speedup'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", 'speedup'),   
    )); 

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'speedup' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'speedup' ) => 'type2',
                               
                                esc_html__( 'Top Slider', 'speedup' ) => 'top-slider',
                                esc_html__( 'Sup Services', 'speedup' ) => 'sup_service',
                                esc_html__( 'Sup Services 2', 'speedup' ) => 'sup_service2',
                                esc_html__( 'Sup Services 3', 'speedup' ) => 'sup_service3',
                                esc_html__( 'Tablist', 'speedup' ) => 'tablist',
                                esc_html__( 'tab-content', 'speedup' ) => 'tab-content',
                                esc_html__( 'Features', 'speedup' ) => 'features',
                                esc_html__( 'Counter', 'speedup' ) => 'counter',
                                esc_html__( 'Counter 2', 'speedup' ) => 'counter2',
                                esc_html__( 'Sup Client', 'speedup' ) => 'sup_client',
                                esc_html__( 'Sup Client 2', 'speedup' ) => 'sup_client2',
                                esc_html__( 'Team Row', 'speedup' ) => 'team',
                                esc_html__( 'About Us', 'speedup' ) => 'about_us',
                                esc_html__( 'Process', 'speedup' ) => 'sup_process',
                                esc_html__( 'Contact', 'speedup' ) => 'contact',
                                esc_html__( 'Revolution', 'speedup' ) => 'revolution',
                             ),
                             'description' => esc_html__( 'Select type row', 'speedup' )
      )); 
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Sub Title', 'speedup'),
                              "param_name" => "ses_sub_title",
                              "value" => "",
                              "description" => esc_html__("Section Sub Title, Leave a blank do not show frontend.", 'speedup'),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea_html",
                              "heading" => esc_html__('Section Content', 'speedup'),
                              "param_name" => "ses_content",
                              "value" => "",
                              "description" => esc_html__("Section Content, Leave a blank do not show frontend.", 'speedup'),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Text', 'speedup'),
                              "param_name" => "ses_text",
                              "value" => "",
                              "description" => esc_html__("Text button with block: focus", 'speedup'),   
    )); 
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link', 'speedup'),
                              "param_name" => "ses_link",
                              "value" => "",
                              "description" => esc_html__("Link button with block: focus", 'speedup'),   
    )); 
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'speedup' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'speedup' )
      )); 
// Add new Param in Column  

}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.0
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'speedup_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function speedup_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
             // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'speedup' ), // The plugin name.
            'slug'               => esc_html__( 'visualcomposer', 'speedup' ), // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),      
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'               => esc_html__( 'Revolution Slider', 'speedup' ), // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/revslider.zip',
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(
            'name'      => 'One Click Demo Import',
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
        array(
            'name'      => esc_html__( 'Contact Form 7', 'speedup' ),
            'slug'      => esc_html__( 'contact-form-7', 'speedup' ),
            'required'  => true,
        ),
        array(
            'name'                     => esc_html__( 'Speedup Common', 'speedup' ),
            'slug'                     => esc_html__( 'speedup-common', 'speedup' ),
            'required'                 => true,
            'source'                   => get_template_directory_uri() . '/framework/plugins/speedup-common.zip', // The plugin source.
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'speedup' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'speedup' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'speedup' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'speedup' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'speedup' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'speedup' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'speedup' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'speedup' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'speedup' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'speedup' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'speedup' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'speedup' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'speedup' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'speedup' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'speedup' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'speedup' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'speedup' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}

function speedup_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Speedup',
            'import_file_url'            => 'http://shtheme.com/import/speedup/sample_data.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/speedup/widgets.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/speedup/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example speedup', 'speedup' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'speedup_import_files' );




function speedup_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Menu 1', 'primary' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'speedup_after_import_setup' );


?>