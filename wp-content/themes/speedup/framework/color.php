<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $redux_demo; 
$b=$redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>

.sup_fixed_box , .sup_mainslider .uranus .tp-bullet.selected .tp-bullet-inner, .sup_mainslider .uranus .tp-bullet:hover .tp-bullet-inner, .sup_get_started_section, .sup_fixed_box, .sup_process_data ul li .sup_process_icon  span:before, .sup_mainslider .uranus .tp-bullet.selected .tp-bullet-inner, .sup_mainslider .uranus .tp-bullet:hover .tp-bullet-inner, .cssload-loader .cssload-side{
    background-color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}

.sup_menudiv .sup_mainmenu, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu , .sup_menudiv .sup_mainmenu, .sup_menudiv .sup_mainmenu ul.nav li ul.sub-menu, .sup_menudiv .sup_mainmenu ul.nav li:hover ul.sub-menu li ul.sub-menu, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu{
      border-top: 3px solid <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.sup_menumain_div .sup_mainmenu ul.nav li:hover a , .sup_service span i, .sup_menudiv .sup_mainmenu ul li:hover a, .sup_menudiv .sup_mainmenu ul.nav li ul.sub-menu li ul.sub-menu li a:hover, .sup_feature_data ul li i, .sup_testimonial_heading h3:before, .sup_testimonial_heading h3:after{
  color:<?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.sup_menumain_div .sup_mainmenu ul.nav li a:after, .sup_menumain_div .sup_mainmenu ul.nav li:hover a:before, .sup_menumain_div .sup_mainmenu ul.nav li.active a:before, #top-search-wrap, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li ul.sub-menu li:hover a:before, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li:hover a:before, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li.current  a:before, .sup_menumain_div .sup_mainmenu ul.nav li:hover ul.sub-menu li.current ul.sub-menu li:hover a:before, .sup_mainslider .tp-bullet.selected, .sup_mainslider .tp-bullet:hover, .sup_service:hover span, .sup_whoweare_section, .sup_blue_btn, .sup_title_border, .sup_title_border:before, .sup_testimonial_slider   .owl-dots .owl-dot.active, .sup_sorting ul li a:after, .sup_sorting ul li a.active:before,
.sup_sorting ul li:hover a:before, .sup_sorting ul li:hover a:before, .sup_sorting ul li:hover a:after, .sup_portfolio:hover .sup_links .sup_link:hover, .portfolio-item:hover .sup_links .sup_link:hover, .sup_counter:hover span, .sup_team_detail, .sup_followon, .sup_footer_widget span a:after, .sup_footer_widget span a:before,  .sup_menudiv .sup_mainmenu ul li a:after, .sup_menudiv .sup_mainmenu ul li:hover a:before, .sup_menudiv .sup_mainmenu ul li:hover ul.sub-menu li a:after, .sup_menudiv .sup_mainmenu ul li:hover ul.sub-menu li:hover a:before, .sup_service.sup_service_type2:hover, .sup_feature_type2 .nav-tabs > li.active > a, .sup_feature_type2 .nav-tabs > li:hover > a , .sup_feature_detail a:before, .sup_feature_detail a:after, .sup_blue_overlay, .sup_core_feature_section, .pricing-price , .widget h4:before, .widget h4:after, .widget-tag-cloud a:hover, .widget-tabs ul.nav-tabs li.active a, .widget-tabs ul.nav-tabs li:hover a, blockquote, .entry-content blockquote, h4#comments-title:before, h4#comments-title2:before, h4#comments-title:after, h4#comments-title2:after, .comment-content a.comment-reply-link:before , .comment-content a.comment-reply-link:after, .sup_menumain_div .sup_mainmenu ul.nav li a:after, .sup_menumain_div .sup_mainmenu ul.nav li:hover a:before, .sup_menumain_div .sup_mainmenu ul.nav li.active a:before, #top-search-wrap , .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li ul.sub-menu li:hover a:before, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li:hover a:before, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li.current  a:before, .sup_menumain_div .sup_mainmenu ul.nav li:hover ul.sub-menu li.current ul.sub-menu li:hover a:before , .sup_mainslider .tp-bullet.selected, .sup_mainslider .tp-bullet:hover, .sup_service:hover span, .sup_whoweare_section, .sup_blue_btn, .sup_title_border, .sup_title_border:before, .sup_testimonial_slider  .owl-dots .owl-dot.active, .sup_sorting ul li a:after, #wp-calendar tbody td#today{
  background: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.sup_menumain_div .sup_mainmenu ul.nav li.active a, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li:hover a, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li ul.sub-menu li:hover a, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li.current a, .sup_feature_data ul li i, .sup_testimonial_heading h3:before, .sup_testimonial_heading h3:after, .sup_sorting ul li:hover a, .sup_sorting ul li a.active, .sup_links .sup_link, .sup_counter span i, .sup_mobile_img a, .sup_feature_type2 ul li a i, .sup_service3_div .sup_service_icon i, .sup_process_data ul li .sup_process_icon  span i, .entry-title h2:hover, .entry-title h2:hover a, ul.entry-comment li a:hover i, .widget-categories ul li:hover a, .widget-categories ul li:hover a:before, .widget-archive ul li:hover a, .widget-archive ul li:hover a:before, .widget ul li:hover a:before, .widget ul li:hover a, .widget-tabs .tab-content .spost .entry-title a:hover, .widget-tabs .tab-content .spost ul.entry-meta , .portfolio-desc h3:hover a , .header-title h5, ul.portfolio-meta li a , .sup_error_div h1, .sup_menumain_div .sup_mainmenu ul.nav li:hover a, .sup_menumain_div .sup_mainmenu ul.nav li.active a, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li:hover a, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li ul.sub-menu li:hover a, .sup_menumain_div .sup_mainmenu ul.nav li ul.sub-menu li.current a, .sup_service span i{
    color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}

.sup_mainslider .tp-bullet, .sup_testimonial_slider   .owl-dots .owl-dot, .sup_mainslider .tp-bullet, .sup_testimonial_slider   .owl-dots .owl-dot{
  border: 1px solid <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.sup_team_overlay .sup_team_plus{
  border-top: 50px solid <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.fancybox-skin{
  background: <?php echo esc_attr($redux_demo['main-color-1']); ?> !important;
}
.fancybox-title-float-wrap .child{
  text-shadow: 0 1px 2px <?php echo esc_attr($redux_demo['main-color-1']); ?> !important;
}
.sup_followon:after{
  border-top: 15px solid <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}

.sup_feature_type2 ul li.active a:before, .sup_feature_type2 .nav-tabs > li:hover > a:before {
  border-top-color:<?php echo esc_attr($redux_demo['main-color-1']); ?>;
  }

.sup_slider_second .tp-caption.RotatingWords-Button, .sup_slider_second .RotatingWords-Button {
  background-color:<?php echo esc_attr($redux_demo['main-color-1']); ?> !important;
}
.sup_slider_second .tp-caption.RotatingWords-Button:hover, .sup_slider_second .RotatingWords-Button:hover{
  color: <?php echo esc_attr($redux_demo['main-color-1']); ?> !important;  }

.sup_process_data ul li .sup_process_icon  span:before {
  border: 2px solid <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.pricing-box:hover:before {
  border-top-color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
    border-right-color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.pricing-box:hover:after {
    border-bottom-color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
    border-left-color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.pricing-price:after{
  border-top: 20px solid <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}
.sup_feature_type2 ul li a svg path , .sup_service_type2 span svg path, .sup_service3_div .sup_service_icon svg path,.sup_counter span svg path, .sup_service span svg path , .sup_feature_data ul li svg path, .sup_counter span svg path{
  fill: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}

.filter__item--selected {
    color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($redux_demo['main-color-1']); ?>;
}

.widget_calendar {
    float: left;
}