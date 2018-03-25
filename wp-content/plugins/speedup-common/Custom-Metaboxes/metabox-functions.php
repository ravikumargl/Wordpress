<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "speedup";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'page_setting',
        'title'      => 'Page Setting',
        'pages'      => array('page'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                    'name' => 'Selected Sidebar or Full Width',
                    'desc' => 'Sidebar or Full Width with Blog ,',
                    'id'   => $prefix . 'sidebar_page',
                    'type'    => 'select',
                    'options' => array(
                        array( 'name' => 'Right Sidebar', 'value' => 'right', ),
                        array( 'name' => 'Left Sidebar', 'value' => 'left', ),
                        array( 'name' => 'Full Width', 'value' => 'full', ),
                        array( 'name' => 'Sidebar Both', 'value' => 'both', ),
                        ),
                    'default' => 'right',
                ),   
            array(
                'name' => 'Selected Columns',
                'desc' => 'Selected Columns With Blog, Portfolio',
                'id'   => $prefix . 'columns_page',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => '2 Columns', 'value' => '2columns', ),
                    array( 'name' => '3 Columns', 'value' => '3columns', ),
                    array( 'name' => '4 Columns', 'value' => '4columns', ),
                    ),
                'default' => '2columns',
            ),    
            array(
                'name' => 'Selected Content Portfolio',
                'desc' => 'Selected Content or No with Portfolio',
                'id'   => $prefix . 'content_page',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Yes', 'value' => 'yes', ),
                    array( 'name' => 'No', 'value' => 'no', ),
                    ),
                'default' => 'yes',
            ),   
            array(
                'name' => 'Selected Icon Portfolio',
                'desc' => 'Selected Icon or No with Portfolio',
                'id'   => $prefix . 'icon_page',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Yes', 'value' => 'yes', ),
                    array( 'name' => 'No', 'value' => 'no', ),
                    ),
                'default' => 'yes',
            ),     
            array(
                'name' => 'Selected Gutter Portfolio',
                'desc' => 'Selected Gutter or No with Portfolio',
                'id'   => $prefix . 'gutter_page',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Yes', 'value' => 'yes', ),
                    array( 'name' => 'No', 'value' => 'no', ),
                    ),
                'default' => 'yes',
            ),   
            array(
                    'name' => 'Selected Image Left or Right',
                    'desc' => 'Selected Image Left or Right with Blog Image Template',
                    'id'   => $prefix . 'image_left',
                    'type'    => 'select',
                    'options' => array(
                        array( 'name' => 'Left Image', 'value' => 'left', ),
                        array( 'name' => 'Right Image', 'value' => 'right', ),
                        
                        ),
                    'default' => 'left',
                ),    
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(  

            array(
                    'name' => 'Selected Sidebar or Full Width with Single Blog',
                    'desc' => 'Sidebar or Full Width with Single Blog',
                    'id'   => $prefix . 'sidebar_single',
                    'type'    => 'select',
                    'options' => array(
                        array( 'name' => 'Right Sidebar', 'value' => 'right', ),
                        array( 'name' => 'Left Sidebar', 'value' => 'left', ),
                        array( 'name' => 'Full Width', 'value' => 'full', ),
                        array( 'name' => 'Sidebar Both', 'value' => 'both', ),
                        ),
                    'default' => 'right',
                ),   

        )
    );
    // Add other metaboxes as needed


    $meta_boxes[] = array(
        'id'         => 'portfolio_setting',
        'title'      => 'Portfolio Setting',
        'pages'      => array('portfolio'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Portfolio Client',
                'desc' => 'Set Portfolio Client',
                'id'   => $prefix . 'portfolio_client',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Portfolio Date',
                'desc' => 'Set Portfolio Date',
                'id'   => $prefix . 'portfolio_date',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Portfolio Codded',
                'desc' => 'Set Portfolio Codded',
                'id'   => $prefix . 'portfolio_codded',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Portfolio Web',
                'desc' => 'Set Portfolio Web',
                'id'   => $prefix . 'portfolio_web',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Portfolio Link',
                'desc' => 'Set Portfolio Link',
                'id'   => $prefix . 'portfolio_link',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Selected Size Item Portfolio',
                'desc' => 'Selected Size Item with Portfolio Masonry',
                'id'   => $prefix . 'size_item',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Small', 'value' => 'small', ),
                    array( 'name' => 'Large', 'value' => 'large', ),
                    ),
                'default' => 'small',
            ),     
        )
    );
$meta_boxes[] = array(
        'id'         => 'service_setting',
        'title'      => 'Service Setting',
        'pages'      => array('service'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Service Description',
                'desc' => 'Set Service Description',
                'id'   => $prefix . 'service_desc',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Service Icon',
                'desc' => 'Set Service Class ICon',
                'id'   => $prefix . 'service_icon',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Service Type',
                'desc' => 'Service Type',
                'id'   => $prefix . 'service_type',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Type 1', 'value' => 'type1', ),
                    array( 'name' => 'Type 2', 'value' => 'type2', ),
                    ),
                'default' => 'type1',
            ),   
                   
        )
    );
	// Add other metaboxes as needed

	// Add other metaboxes as needed
	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
