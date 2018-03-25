<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Speedup Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Speedup Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    

            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-cogs',
                'title' => __('General Settings', 'speedup'),
                'fields' => array(                  
                    array(
                        'id' => 'author_content',
                        'type' => 'textarea',
                        'title' => __('Author content', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Vergatheme'
                    ),
                    array(
                        'id' => 'description_content',
                        'type' => 'textarea',
                        'title' => __('Description content', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Country Holidays - Premium site template for a country accommodation.'
                    ),
                    array(
                        'id' => 'keywords_content',
                        'type' => 'textarea',
                        'title' => __('SEO Description', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'farm activities, itineraries, farm holidays, country holidays, bed and breakfast, hotel, country hotel'
                    ),
                    array(
                        'id' => 'viewport_content',
                        'type' => 'textarea',
                        'title' => __('Viewport content', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'width=device-width, initial-scale=1'
                    ),
                    array(
                        'id' => 'seo_des',
                        'type' => 'textarea',
                        'title' => __('SEO Description', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'seo_key',
                        'type' => 'textarea',
                        'title' => __('SEO Keywords', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => ''
                    ), 
                )
            ) );
            
            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-picture',
                'title' => __('Logo & Favicon Settings', 'speedup'),
                'fields' => array(      
                    array(
                        'id' => 'favicon',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Custom Favicon', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Upload your Favicon.', 'speedup'),
                        'subtitle' => __('', 'speedup'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'logo',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Logo Upload', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload your logo.', 'speedup'),
                        'default' => ''
                    ),
                    
                    array(
                        'id' => 'logo_footer',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Logo footer', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload your logo footer.', 'speedup'),
                        'default' => ''
                    ),  
                    array(
                        'id' => 'logo_preload',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Image Preload', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload your image preload.', 'speedup'),
                        'default' => ''
                    ),  
                )
            ) );
            
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-list',
                'title' => __('Blog Settings', 'speedup'),
                'fields' => array(
                    array(
                        'id' => 'blog_image',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Blog image background Upload', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload page Blog background image.', 'speedup'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'blog_title',
                        'type' => 'text',
                        'title' => __('Blog Title', 'speedup'),
                        'subtitle' => __('Input Blog Title', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Blog'
                    ),  
                    array(
                        'id' => 'blog_excerpt',
                        'type' => 'text',
                        'title' => __('Blog custom excerpt leng', 'speedup'),
                        'subtitle' => __('Input Blog custom excerpt leng', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '30'
                    ),
                    array(
                        'id' => 'read_more',
                        'type' => 'text',
                        'title' => __('Button Text For Post', 'speedup'),
                        'subtitle' => __('Input Button Text', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Read more'
                    ),
                    array(
                        'id' => 'blog_on',
                        'type' => 'text',
                        'title' => __('Text on', 'speedup'),
                        'subtitle' => __('text on', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Posted at'
                    ),
                    array(
                        'id' => 'blog_by',
                        'type' => 'text',
                        'title' => __('Text By', 'speedup'),
                        'subtitle' => __('text By', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'By'
                    ),
                    array(
                        'id' => 'blog_title_single',
                        'type' => 'text',
                        'title' => __('Blog Title single', 'speedup'),
                        'subtitle' => __('Input Blog Title single', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Blog Single'
                    ),  
                    array(
                        'id' => 'blog_comment',
                        'type' => 'text',
                        'title' => __('Blog single text comment', 'speedup'),
                        'subtitle' => __('Input Blog single text comment', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Comments'
                    ), 
                    array(
                        'id' => 'blog_link_shre',
                        'type' => 'text',
                        'title' => __('Link Share Blog', 'speedup'),
                        'subtitle' => __('Input Link Share Blog', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '#'
                    ), 
                    array(
                        'id' => 'blog_shre',
                        'type' => 'text',
                        'title' => __('Text Share Blog', 'speedup'),
                        'subtitle' => __('Input Text Share Blog', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Share This'
                    ), 
                    array(
                        'id' => 'blog_link_like',
                        'type' => 'text',
                        'title' => __('Link Like Blog', 'speedup'),
                        'subtitle' => __('Input Link Like Blog', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '#'
                    ), 
                    array(
                        'id' => 'blog_like',
                        'type' => 'text',
                        'title' => __('Number Like Blog', 'speedup'),
                        'subtitle' => __('Input Number Like Blog', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '97 Likes'
                    ), 
                 )
            ) );

            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-list',
                'title' => __('Portfolio Settings', 'speedup'),
                'fields' => array(
                    array(
                        'id' => 'portfolio_image',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Portfolio image background Upload', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload page Portfolio background image.', 'speedup'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'portfolio_title',
                        'type' => 'text',
                        'title' => __('Portfolio Title', 'speedup'),
                        'subtitle' => __('Input Portfolio Title', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Portfolio'
                    ),  
                    
                    array(
                        'id' => 'portfolio_info',
                        'type' => 'text',
                        'title' => __('Portfolio text Info', 'speedup'),
                        'subtitle' => __('Input Portfolio text Info', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Project Info:'
                    ), 
                    array(
                        'id' => 'portfolio_client',
                        'type' => 'text',
                        'title' => __('Portfolio Client', 'speedup'),
                        'subtitle' => __('Input Portfolio Client', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Client:'
                    ), 
                    array(
                        'id' => 'portfolio_date',
                        'type' => 'text',
                        'title' => __('Portfolio Date', 'speedup'),
                        'subtitle' => __('Input Portfolio Date', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Date:'
                    ), 
                    array(
                        'id' => 'portfolio_codded',
                        'type' => 'text',
                        'title' => __('Portfolio Codded', 'speedup'),
                        'subtitle' => __('Input Portfolio Codded', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Codded:'
                    ), 
                    array(
                        'id' => 'portfolio_web',
                        'type' => 'text',
                        'title' => __('Portfolio Web', 'speedup'),
                        'subtitle' => __('Input Portfolio Web', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Web:'
                    ), 
                    array(
                        'id' => 'launch_project',
                        'type' => 'text',
                        'title' => __('Portfolio Launch Project', 'speedup'),
                        'subtitle' => __('Input Portfolio Launch Project', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Launch Project'
                    ), 
                    array(
                        'id' => 'latest_project',
                        'type' => 'text',
                        'title' => __('Portfolio Latest Projects', 'speedup'),
                        'subtitle' => __('Input Portfolio Latest Projects', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Latest Projects'
                    ), 
                    array(
                        'id' => 'desc_latest_project',
                        'type' => 'textarea',
                        'title' => __('Portfolio Description Latest Projects', 'speedup'),
                        'subtitle' => __('Input Portfolio Description Latest Projects', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'Latest Projects'
                    ),
                    array(
                        'id' => 'portfolio_number',
                        'type' => 'text',
                        'title' => __('Portfolio Number Latest Projects', 'speedup'),
                        'subtitle' => __('Input Portfolio Number Latest Projects', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '3'
                    ),
                    
                    
                 )
            ) );
            
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-list',
                'title' => __('Page Settings', 'speedup'),
                'fields' => array(
                    
                    array(
                        'id' => 'page_image',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Page image background Upload', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload page background image.', 'speedup'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'page_sendmail',
                        'type' => 'text',
                        'title' => __('Page send mail', 'speedup'),
                        'subtitle' => __('Page send mail', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'http://vergatheme.com/demosd/speedup/?page_id=266'
                    ),  
                    array(
                        'id' => 'page_review',
                        'type' => 'text',
                        'title' => __('Page review mail', 'speedup'),
                        'subtitle' => __('Page review mail', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'http://vergatheme.com/demosd/speedup/?page_id=270'
                    ), 
                    array(
                        'id' => 'page_contact',
                        'type' => 'text',
                        'title' => __('Page contact send mail', 'speedup'),
                        'subtitle' => __('Page contact send mail', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => ''
                    ), 
                    
                 )
            ) );

               
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-graph',
                'title' => __('404 Settings', 'speedup'),
                'fields' => array(
                    array(
                        'id' => '404_image',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('404 image background Upload', 'speedup'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'speedup'),
                        'subtitle' => __('Upload page 404 background image.', 'speedup'),
                        'default' => ''
                    ),
                     array(
                        'id' => '404_title',
                        'type' => 'text',
                        'title' => __('404 Title', 'speedup'),
                        'subtitle' => __('Input 404 Title', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '404 error'
                    ),  
                     array(
                        'id' => '404_heading',
                        'type' => 'text',
                        'title' => __('404 text heading', 'speedup'),
                        'subtitle' => __('Input 404 text heading', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '404'
                    ),
                    
                    array(
                        'id' => '404_desc',
                        'type' => 'text',
                        'title' => __('404 Desc', 'speedup'),
                        'subtitle' => __('Input 404 Desc', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'opps...'
                    ), 
                    array(
                        'id' => '404_subtitle',
                        'type' => 'editor',
                        'title' => __('404 subtitle', 'speedup'),
                        'subtitle' => __('Input 404 subtitle', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'WE Are Sorry, But something went wrong '
                    ), 
                    array(
                        'id' => '404_text',
                        'type' => 'text',
                        'title' => __('404 text button', 'speedup'),
                        'subtitle' => __('Input 404 text button', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'go Home '
                    ),  
                               
                 )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-graph',
                'title' => __('Form Settings', 'speedup'),
                'fields' => array(
                     array(
                        'id' => 'form_email',
                        'type' => 'text',
                        'title' => __('Form email', 'speedup'),
                        'subtitle' => __('Form email', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'info@domain.com'
                    ),                 
                 )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-graph',
                'title' => __('Apply Online Settings', 'speedup'),
                'fields' => array(
                     array(
                        'id' => 'apply_email',
                        'type' => 'text',
                        'title' => __('Apply email receive', 'speedup'),
                        'subtitle' => __('Apply email receive', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => 'info@domain.com'
                    ), 
                     array(
                        'id' => 'apply_pagesend',
                        'type' => 'text',
                        'title' => __('Apply page send', 'speedup'),
                        'subtitle' => __('Apply page send', 'speedup'),
                        'desc' => __('', 'speedup'),
                        'default' => '#'
                    ), 
                    array(
                        'id' => 'apply_template',
                        'type' => 'editor',
                        'title' => __('Apply template', 'speedup'),
                        'subtitle' => __('Apply template', 'speedup'),
                        'default' => '',
                    ),                     
                 )
            ) );
            
            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-credit-card',
                'title' => __('Header Settings', 'speedup'),
                'fields' => array(                      
                    array(
                        'id' => 'header_phone',
                        'type' => 'text',
                        'title' => __('Header Phone Number', 'speedup'),
                        'subtitle' => __('Header Phone Number', 'speedup'),
                        'default' => ' +333 222 111',
                    ),
                    array(
                        'id' => 'header_icon_phone',
                        'type' => 'text',
                        'title' => __('Header icon phone', 'speedup'),
                        'subtitle' => __('Header icon phone', 'speedup'),
                        'default' => 'fa fa-phone',
                    ),
                    array(
                        'id' => 'header_link_shop',
                        'type' => 'text',
                        'title' => __('Header Link Shop', 'speedup'),
                        'subtitle' => __('Header Link Shop', 'speedup'),
                        'default' => '#',
                    ),
                )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-credit-card',
                'title' => __('Footer Settings', 'speedup'),
                'fields' => array(  
                    array(
                        'id' => 'footer_follow',
                        'type' => 'text',
                        'title' => __('Footer Text Follow', 'speedup'),
                        'subtitle' => __('Footer Text Follow', 'speedup'),
                        'default' => 'Follow on ',
                    ),  
                    array(
                        'id' => 'footer_text',
                        'type' => 'editor',
                        'title' => __('Footer Text', 'speedup'),
                        'subtitle' => __('Copyright Text', 'speedup'),
                        'default' => 'Copyright &copy; 2017. Speed Up - ThemeForest Author. ',
                    ),  

                )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-credit-card',
                'title' => __('Social Settings', 'iammat'),
                'fields' => array(                      
                    array(
                        'id' => 'social_icon_facebook',
                        'type' => 'text',
                        'title' => __('Social class icon facebook', 'iammat'),
                        'subtitle' => __('Input class icon Social facebook', 'iammat'),
                        'default' => 'fa fa-facebook',
                    ),
                    array(
                        'id' => 'social_link_facebook',
                        'type' => 'text',
                        'title' => __('link social facebook', 'iammat'),
                        'subtitle' => __('Please enter link facebook', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_twitter',
                        'type' => 'text',
                        'title' => __('Social class icon twitter', 'iammat'),
                        'subtitle' => __('Input class icon Social twitter', 'iammat'),
                        'default' => 'fa fa-twitter',
                    ),
                    array(
                        'id' => 'social_link_twitter',
                        'type' => 'text',
                        'title' => __('link social twitter', 'iammat'),
                        'subtitle' => __('Please enter link twitter', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_pinterest',
                        'type' => 'text',
                        'title' => __('Social class icon pinterest', 'iammat'),
                        'subtitle' => __('Input class icon Social pinterest', 'iammat'),
                        'default' => 'fa fa-pinterest-p',
                    ),
                    array(
                        'id' => 'social_link_pinterest',
                        'type' => 'text',
                        'title' => __('link social pinterest', 'iammat'),
                        'subtitle' => __('Please enter link pinterest', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_linkedin',
                        'type' => 'text',
                        'title' => __('Social class icon linkedin', 'iammat'),
                        'subtitle' => __('Input class icon Social linkedin', 'iammat'),
                        'default' => 'fa fa-linkedin',
                    ),
                    array(
                        'id' => 'social_link_linkedin',
                        'type' => 'text',
                        'title' => __('link social linkedin', 'iammat'),
                        'subtitle' => __('Please enter link linkedin', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_google',
                        'type' => 'text',
                        'title' => __('Social class icon google', 'iammat'),
                        'subtitle' => __('Input class icon Social google', 'iammat'),
                        'default' => 'fa fa-google-plus',
                    ),
                    array(
                        'id' => 'social_link_google',
                        'type' => 'text',
                        'title' => __('link social google', 'iammat'),
                        'subtitle' => __('Please enter link google', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_behance',
                        'type' => 'text',
                        'title' => __('Social class icon behance', 'iammat'),
                        'subtitle' => __('Input class icon Social behance', 'iammat'),
                        'default' => 'fa fa-behance',
                    ),
                    array(
                        'id' => 'social_link_behance',
                        'type' => 'text',
                        'title' => __('link social behance', 'iammat'),
                        'subtitle' => __('Please enter link behance', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_vimeo',
                        'type' => 'text',
                        'title' => __('Social class icon vimeo', 'iammat'),
                        'subtitle' => __('Input class icon Social vimeo', 'iammat'),
                        'default' => 'fa fa-vimeo',
                    ),
                    array(
                        'id' => 'social_link_vimeo',
                        'type' => 'text',
                        'title' => __('link social vimeo', 'iammat'),
                        'subtitle' => __('Please enter link vimeo', 'iammat'),
                        'default' => '#',
                    ),
                    array(
                        'id' => 'social_icon_youtube',
                        'type' => 'text',
                        'title' => __('Social class icon youtube', 'iammat'),
                        'subtitle' => __('Input class icon Social youtube', 'iammat'),
                        'default' => 'fa fa-youtube-play',
                    ),
                    array(
                        'id' => 'social_link_youtube',
                        'type' => 'text',
                        'title' => __('link social youtube', 'iammat'),
                        'subtitle' => __('Please enter link youtube', 'iammat'),
                        'default' => '#',
                    ),
                )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-website',
                'title' => __('Styling Options', 'speedup'),
                'fields' => array(
                    array(
                            'id' => 'header_bg',
                            'type' => 'media',
                            'url' => true,
                            'title' => __('Background header', 'speedup'),
                            'compiler' => 'true',
                            //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc' => __('', 'speedup'),
                            'subtitle' => __('Upload your background header.', 'speedup'),
                            'default' => ''
                        ),
                    array(
                        'id' => 'rtl',
                        'type' => 'checkbox',
                        'title' => __('Support RTL language', 'speedup'),
                        'subtitle' => '',
                        'desc' => '',
                        'default' => '0'// 1 = on | 0 = off
                    ),
                    array(
                        'id' => 'chosen-color',
                        'type' => 'checkbox',
                        'title' => __('Enable edit color', 'speedup'),
                        'subtitle' => '',
                        'desc' => '',
                        'default' => '0'// 1 = on | 0 = off
                    ),
                    array(
                        'id' => 'main-color-1',
                        'type' => 'color',
                        'title' => __('Theme Main Color 1', 'speedup'),
                        'subtitle' => __('Pick the main color for the theme (default: #ffe79b).', 'speedup'),
                        'default' => '#86b535',
                        'validate' => 'color',
                    ),  
                    
                    
                    array(
                        'id' => 'body-font2',
                        'type' => 'typography',
                        'output' => array('body'),
                        'title' => __('Body Font', 'speedup'),
                        'subtitle' => __('Specify the body font properties.', 'speedup'),
                        'google' => true,
                        'default' => array(
                            'color' => '#989898',
                            'font-size' => '14px',
                            'font-weight' => '300',
                        ),
                    ),
                     array(
                        'id' => 'custom-css',
                        'type' => 'ace_editor',
                        'title' => __('CSS Code', 'speedup'),
                        'subtitle' => __('Paste your CSS code here.', 'speedup'),
                        'mode' => 'css',
                        'theme' => 'monokai',
                        'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default' => "#header{\nmargin: 0 auto;\n}"
                    ),
                )
            ) );
            
            
            

    if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => __( 'Documentation', 'redux-framework-demo' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

