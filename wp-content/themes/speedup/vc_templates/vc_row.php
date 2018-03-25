<?php

$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(

    'el_class'        => '',

    'bg_image'        => '',

    //'bg_color'        => '',

    'bg_image_repeat' => '',

    //'font_color'      => '',

    'padding'         => '',

    'margin_bottom'   => '',

    'css' => '',

    'wrap_class'=>'',

    'ses_title'=>'',

    'ses_sub_title'=>'',
    'ses_content'=>'',

    'type_row' => '',

    'number_tes' => '',

    'ses_image' => '',

    'ses_text' => '',

    'ses_link' => '',

    'ses_numbertes' => '',

    'ses_tab1' => '',

    'ses_tab2' => '',

    'ses_tab3' => '',

), $atts));



// wp_enqueue_style( 'js_composer_front' );

wp_enqueue_script( 'wpb_composer_front_js' );

// wp_enqueue_style('js_composer_custom_css');



$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

if($type_row == 'type2'){

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');


}elseif($type_row == 'top-slider'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<div class="sup_slider_second">
        <div id="owl-demo" class="owl-carousel owl-theme">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

        $output .='</div>
    </div>';

}elseif($type_row == 'sup_service'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent">
        <div class="container-fluid">
            <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
        </div>
    </div>';
}elseif($type_row == 'sup_service2'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_services_section3 sup_toppadder100">
        <div class="container">
            <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
        </div>
    </div>';
}elseif($type_row == 'sup_service3'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 sup_bottompadder70">
        <div class="container">
            <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
        </div>
    </div>';

}elseif($type_row == 'tablist'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4>'.$ses_title.'</h4>
                        <div class="sup_title_border"></div>
                        <p>'.$ses_content.'</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_feature_type2">
                    <ul class="nav nav-tabs" role="tablist">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</ul>
                </div>
                </div>
            </div>
        </div>
    </div>';



}elseif($type_row == 'tab-content'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_bottompadder30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_feature_type2">
                    <div class="tab-content">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
     </div>
                </div>
            </div>
        </div>
    </div>';
}elseif($type_row == 'features'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4>'.$ses_title.'</h4>
                        <div class="sup_title_border"></div>
                        <p>'.$ses_content.'</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_mockup_img fromleft wow">
                        <img src="'.$images[0].'" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_feature_data">
                        <ul>';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>';


}elseif($type_row == 'counter'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_counter_section2">
        <div class="container">
            <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                        </div>
                    </div>';

}elseif($type_row == 'counter2'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_counter_section sup_toppadder80 sup_bottompadder40" style="background-image: url('.$images[0].');">
        <div class="container">
            <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                        </div>
                    </div>';

}elseif($type_row == 'sup_client'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4>'.$ses_title.'</h4>
                        <div class="sup_title_border"></div>
                        <p>'.$ses_content.'</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_client_slider">
                        <div id="sup_client" class="owl-carousel owl-theme">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                    </div>
                </div>
            </div>
        </div>
    </div>';

}elseif($type_row == 'sup_client2'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_testimonial_section sup_toppadder100 sup_bottompadder100" style="background-image: url('.$images[0].');">
        <div class="sup_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_testimonial_heading">
                        <h3>'.$ses_title.'</h3>
                    </div>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-xs-offset-0 col-sm-offset-0">
                    <div class="sup_testimonial_slider">
                        <div id="owl-demo" class="owl-carousel owl-theme">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                    </div>
                </div>
            </div>
        </div>
    </div>';


}elseif($type_row == 'team'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4>'.$ses_title.'</h4>
                        <div class="sup_title_border"></div>
                        <p>'.$ses_content.'</p>
                    </div>
                </div>';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                    </div>
                </div>  ';

}elseif($type_row == 'about_us'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4>'.$ses_title.'</h4>
                        <div class="sup_title_border"></div>
                        <p>'.$ses_content.'</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="sup_aboutus_slider" class="carousel slide sup_aboutus_slider" data-ride="carousel">
                        <!-- Indicators -->


                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div></div>
                </div>
            </div>
        </div>
    </div>';

}elseif($type_row == 'sup_process'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4>'.$ses_title.'</h4>
                        <div class="sup_title_border"></div>
                        <p>'.$ses_content.'</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_process_img">
                        <img src="'.$images[0].'" class="img-responsive wow fromleft" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_process_data">
                        <ul>';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}elseif($type_row == 'contact'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_map_section">
    <div class="sup_blue_overlay"></div>
        <div class="container-fluid">
            <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
        </div>
    </div>';
}elseif($type_row == 'revolution'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="sup_mainslider">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>';

}else{

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}

echo $output;



