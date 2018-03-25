<?php 
$textdoimain = 'speedup';
global $pre_text;

$pre_text = 'VG ';


// add



//Top Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Top Slider", 'speedup'),
   "base" => "top_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'js_composer' )
      ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Desc", 'speedup'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Desc", 'speedup')
   ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'speedup'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
   
    )));
}


//Sup Services
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Services", 'speedup'),
   "base" => "sup_service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
   
    )));
}

//Sup Services
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Services 2", 'speedup'),
   "base" => "sup_service2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
            __( 'Icon 5', 'js_composer' ) => 'icon5',
            __( 'Icon 6', 'js_composer' ) => 'icon6',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Wow duration", 'speedup'),
      "param_name" => "duration",
      "value" => "",
      "description" => __("Data Wow duration:0.5s....", 'speedup')
   ),
    )));
}

//Sup Services 3
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Services 3", 'speedup'),
   "base" => "sup_service3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
   
    )));
}

//Sup Welcome
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Welcome", 'speedup'),
   "base" => "sup_welcome",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'js_composer' )
      ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Desc", 'speedup'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Desc", 'speedup')
   ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'speedup'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
   
    )));
}

//Sup Welcome 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Welcome 2", 'speedup'),
   "base" => "sup_welcome2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'js_composer' )
      ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'speedup'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'speedup')
   ),
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'speedup'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Desc 1", 'speedup'),
      "param_name" => "desc1",
      "value" => "",
      "description" => __("Desc 1", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button 1", 'speedup'),
      "param_name" => "textbutton1",
      "value" => "",
      "description" => __("Text Button 1", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'speedup'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'speedup'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'speedup')
   ),
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'speedup'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Desc 2", 'speedup'),
      "param_name" => "desc2",
      "value" => "",
      "description" => __("Desc 2", 'speedup')
   ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button 2", 'speedup'),
      "param_name" => "textbutton2",
      "value" => "",
      "description" => __("Text Button 2", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'speedup'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'speedup')
   ),
   
    )));
}

//Tablist
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Tablist", 'speedup'),
   "base" => "tablist",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Active', 'js_composer' ),
         'param_name' => 'active',
         'value' => array(
            __( 'No', 'js_composer' ) => 'no',
            __( 'Yes', 'js_composer' ) => 'yes',
         ),
         'description' => __( 'Select Active', 'js_composer' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
    )));
}

//tab content
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Tab content", 'speedup'),
   "base" => "tab_content",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Content", 'speedup'),
      "param_name" => "title_content",
      "value" => "",
      "description" => __("Title Content", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'speedup'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Active', 'js_composer' ),
         'param_name' => 'active',
         'value' => array(
            __( 'No', 'js_composer' ) => 'no',
            __( 'Yes', 'js_composer' ) => 'yes',
         ),
         'description' => __( 'Select Active', 'js_composer' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'js_composer' )
      ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'speedup'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID", 'speedup'),
      "param_name" => "id",
      "value" => "",
      "description" => __("Input ID", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Type', 'js_composer' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'js_composer' ) => 'type1',
            __( 'Type 2', 'js_composer' ) => 'type2',
         ),
         'description' => __( 'Select Type', 'js_composer' )
      ),
    )));
}

//Features
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Features", 'speedup'),
   "base" => "features",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
    )));
}
// Testimonials
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Client Say", 'speedup'),
   "base" => "client_say",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'speedup'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'speedup')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'speedup'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'speedup')
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'js_composer' )
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Name Client", 'speedup'),
      "param_name" => "name",
      "value" => "",
      "description" => __("Name Client", 'speedup')
   ),
    )));
}

// Testimonials
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Client Say 2", 'speedup'),
   "base" => "client_say2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'speedup'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'speedup')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'speedup'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'speedup')
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Client from media library to do your signature.', 'js_composer' )
      ),
    )));
}
// Portfolio
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio", 'speedup'),
   "base" => "portfolio",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'speedup'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'speedup')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'speedup'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'speedup')
      ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio You want show.", 'speedup'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of portfolio You want show.", 'speedup')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'js_composer' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'ASC : lowest to highest', 'js_composer' ) => 'ASC',
            __( 'DESC : highest to lowest', 'js_composer' ) => 'DESC',
         ),
         'description' => __( 'Select field do you want Order.', 'js_composer' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'js_composer' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Title', 'speedup' ) => 'title',
            __( 'Date', 'speedup' ) => 'date',
            __( 'Random', 'speedup') => 'random',
         ),
         'description' => __( 'Select field do you want Order.', 'js_composer' )
      ),
    )));
}
 
// Portfolio 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio 2", 'speedup'),
   "base" => "portfolio2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'speedup'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'speedup')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'speedup'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'speedup')
      ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio You want show.", 'speedup'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of portfolio You want show.", 'speedup')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'js_composer' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'ASC : lowest to highest', 'js_composer' ) => 'ASC',
            __( 'DESC : highest to lowest', 'js_composer' ) => 'DESC',
         ),
         'description' => __( 'Select field do you want Order.', 'js_composer' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'js_composer' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Title', 'speedup' ) => 'title',
            __( 'Date', 'speedup' ) => 'date',
            __( 'Random', 'speedup') => 'random',
         ),
         'description' => __( 'Select field do you want Order.', 'js_composer' )
      ),
    )));
}
//Sup Counter
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Counter", 'speedup'),
   "base" => "counter",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
   
    )));
}

//Get Started
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Get Started", 'speedup'),
   "base" => "get_started",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'js_composer' )
      ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'speedup'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Type', 'js_composer' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'js_composer' ) => 'type1',
            __( 'Type 2', 'js_composer' ) => 'type2',
         ),
         'description' => __( 'Select Type', 'js_composer' )
      ),
   
    )));
}

// Blog
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'speedup'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'speedup'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'speedup')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'speedup'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'speedup')
      ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio You want show.", 'speedup'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of portfolio You want show.", 'speedup')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'js_composer' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'ASC : lowest to highest', 'js_composer' ) => 'ASC',
            __( 'DESC : highest to lowest', 'js_composer' ) => 'DESC',
         ),
         'description' => __( 'Select field do you want Order.', 'js_composer' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'js_composer' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Title', 'speedup' ) => 'title',
            __( 'Date', 'speedup' ) => 'date',
            __( 'Random', 'speedup') => 'random',
         ),
         'description' => __( 'Select field do you want Order.', 'js_composer' )
      ),
    )));
}

//Sup Client
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Client", 'speedup'),
   "base" => "sup_client",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Client from media library to do your signature.', 'js_composer' )
      ),
   
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Team", 'speedup'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Team from media library to do your signature.', 'js_composer' )
      ),
   
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Core", 'speedup'),
   "base" => "sup_core",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("List content", 'speedup'),
      "param_name" => "content_list",
      "value" => "",
      "description" => __("List content", 'speedup')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Team from media library to do your signature.', 'js_composer' )
      ),
   
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing", 'speedup'),
   "base" => "pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text price", 'speedup'),
      "param_name" => "price",
      "value" => "",
      "description" => __("Text price", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text price unit", 'speedup'),
      "param_name" => "price_unit",
      "value" => "",
      "description" => __("Text price unit", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text price tenure", 'speedup'),
      "param_name" => "price_tenure",
      "value" => "",
      "description" => __("Text price tenure", 'speedup')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("List content", 'speedup'),
      "param_name" => "content_list",
      "value" => "",
      "description" => __("List content", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'speedup'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
   
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Slider", 'speedup'),
   "base" => "about_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Active', 'js_composer' ),
         'param_name' => 'active',
         'value' => array(
            __( 'No', 'js_composer' ) => 'no',
            __( 'Yes', 'js_composer' ) => 'yes',
         ),
         'description' => __( 'Select Active', 'js_composer' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Team from media library to do your signature.', 'js_composer' )
      ),
   
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Carousel", 'speedup'),
   "base" => "about_carousel",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Carousel 1', 'js_composer' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image Carousel 1 from media library to do your signature.', 'js_composer' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Carousel 2', 'js_composer' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image Carousel 2 from media library to do your signature.', 'js_composer' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Carousel 3', 'js_composer' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image Carousel 3 from media library to do your signature.', 'js_composer' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Carousel 4', 'js_composer' ),
         'param_name' => 'image4',
         'value' => '',
         'description' => __( 'Select image Carousel 4 from media library to do your signature.', 'js_composer' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Carousel 5', 'js_composer' ),
         'param_name' => 'image5',
         'value' => '',
         'description' => __( 'Select image Carousel 5 from media library to do your signature.', 'js_composer' )
      ),
   
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Process", 'speedup'),
   "base" => "process",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'speedup'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'speedup')
   ),
   
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Sup Contact", 'speedup'),
   "base" => "sup_contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'speedup'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'speedup')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Icon', 'js_composer' ),
         'param_name' => 'icon',
         'value' => array(
            __( 'Icon 1', 'js_composer' ) => 'icon1',
            __( 'Icon 2', 'js_composer' ) => 'icon2',
            __( 'Icon 3', 'js_composer' ) => 'icon3',
            __( 'Icon 4', 'js_composer' ) => 'icon4',
         ),
         'description' => __( 'Select Icon do you want.', 'js_composer' )
      ),
   
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Maps", 'speedup'),
   "base" => "maps",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Latitude", 'speedup'),
      "param_name" => "data_lat",
      "value" => "",
      "description" => __("Latitude", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Longitude", 'speedup'),
      "param_name" => "data_long",
      "value" => "",
      "description" => __("Longitude", 'speedup')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'js_composer' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select icon from media library to do your signature.', 'js_composer' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Content", 'speedup'),
      "param_name" => "text_content",
      "value" => "",
      "description" => __("Content", 'speedup')
   ),
   
   
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Bye Now", 'speedup'),
   "base" => "sup_byenow",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'speedup'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'speedup'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'speedup')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'speedup'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'speedup')
   ),
   
    )));
}