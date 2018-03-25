<?php 
$textdoimain = 'speedup';
global $pre_text;

$pre_text = 'VG ';




//add






//Top Slider
add_shortcode('top_slider', 'top_slider_func');
function top_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'image' => '',
        'desc' => '',
        'textbutton' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item">
        <div class="sup_bannerdata">
            <img src="<?php echo esc_url($images[0]);?>" class="img-responsive" alt="">
            <div class="sup_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sup_banner_content">
                                <h1><?php echo esc_attr($title);?></h1>
                                <p><?php echo esc_attr($desc);?></p>
                                <a href="<?php echo esc_url($link);?>" class="sup_btn sup_blue_btn"><?php echo esc_attr($textbutton);?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php  return ob_get_clean();
} 


//Sup Services
add_shortcode('sup_service', 'sup_service_func');
function sup_service_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => 'icon1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="row">
            <div class="sup_service sup_service_type2">
            <?php if($icon == 'icon1'){?>
                <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16,16V0h1c7.71,0,15,7.29,15,15v1H16z M18,1.551V14h11.953
                C29.397,8.033,23.967,2.107,18,1.551z M14.004,30c6.617,0,12-5.384,12-12h2c0,7.72-6.28,14-14,14S0,26.216,0,18.495
                C0,10.776,6.28,4.497,14,4.497v1.999c-6.617,0-12,5.383-12,12C2,25.112,7.387,30,14.004,30z"/>
            </svg></span>
            <?php }elseif($icon == 'icon2'){?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30.219px" height="26.251px" viewBox="0 0 30.219 26.251" enable-background="new 0 0 30.219 26.251" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M15.109,16.271L0,8.136L15.109,0l15.109,8.136L15.109,16.271z
                             M4.219,8.136L15.109,14L26,8.136L15.109,2.271L4.219,8.136z M15.109,18.894l13.56-6.655l0.881,1.795l-14.44,7.087l-14.44-7.087
                            l0.881-1.795L15.109,18.894z M15.109,24.022l13.56-6.654l0.881,1.795l-14.44,7.088l-14.44-7.088l0.881-1.795L15.109,24.022z"/>
                        </svg></span>
            <?php }elseif($icon == 'icon3'){?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="23.735px" viewBox="0 0 32 23.735" enable-background="new 0 0 32 23.735" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16.077,1.718c-0.053,0-0.105,0.016-0.159,0.016
                            C8.679,1.794,2.563,5.796,1.994,10.846H0.005C0.699,4.708,7.533,0.027,15.902-0.042c0.057,0,0.115,0.015,0.173,0.015
                            c8.15,0,15.123,4.751,15.917,10.872h-1.984C29.342,5.706,23.238,1.718,16.077,1.718z M16.067,19.845h-0.068
                            c-4.374,0-7.962-3.558-7.998-7.932c-0.037-4.411,3.522-8.03,7.934-8.067c4.441,0,8.031,3.559,8.066,7.934
                            c0.018,2.137-0.799,4.153-2.297,5.676S18.203,19.829,16.067,19.845z M22,11.796c-0.027-3.281-2.719-5.95-6-5.95
                            c-3.358,0.028-6.026,2.741-5.999,6.049c0.027,3.281,2.718,5.95,5.998,5.95v1.001v-1.001c1.602-0.013,3.104-0.65,4.229-1.793
                            C21.352,14.912,22.014,13.4,22,11.796z M14.016,11.846h-1.984c-0.019-2.206,1.762-3.981,3.968-4v1.983
                            C14.897,9.839,14.007,10.743,14.016,11.846z M15.924,21.975c0.053,0,0.105-0.017,0.159-0.017c7.237-0.061,13.354-4.063,13.922-9.112
                            h1.988c-0.693,6.138-7.525,10.819-15.895,10.889c-0.057,0-0.115-0.017-0.173-0.017c-8.151,0-15.126-4.75-15.919-10.872h1.984
                            C2.657,17.986,8.761,21.975,15.924,21.975z"/>
                        </svg></span>
            <?php }else{ ?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <g>
                            <g>
                                <path fill="#31AAE1" d="M0,18.951c0,3.421,2.579,6,6,6h1v-12H6C2.579,12.951,0,15.53,0,18.951z M4.999,22.842
                                    C3.213,22.43,2,20.92,2,18.951c0-1.968,1.214-3.479,2.999-3.889V22.842z M25.998,12.951H25v12h0.998c3.422,0,6.002-2.579,6.002-6
                                    C32,15.53,29.42,12.951,25.998,12.951z M27,22.842v-7.78c1.785,0.41,3,1.921,3,3.889C30,20.92,28.785,22.43,27,22.842z M27,27.951
                                    h-4v2h4c1.709,0,3-1.29,3-3h-2.002C27.998,27.641,27.496,27.951,27,27.951z M19.938,25.96c-1.654,0-3,1.346-3,2.999
                                    c0,1.656,1.345,3,3,3s3-1.344,3-3C22.938,27.306,21.592,25.96,19.938,25.96z M19.938,29.961c-0.553,0-1-0.449-1-1.002
                                    c0-0.551,0.447-0.998,1-0.998c0.551,0,1,0.447,1,0.998C20.938,29.512,20.488,29.961,19.938,29.961z M25,10.957h2
                                    C27,4.89,22.064-0.049,16-0.049c-6.065,0-11.001,4.938-11.001,11.006H7c0-4.967,4.037-9.005,9-9.005
                                    C20.961,1.952,25,5.99,25,10.957z"/>
                            </g>
                        </g>
                        </svg></span>
                        <?php } ?>
                <h5><?php echo esc_attr($title);?></h5>
                <div class="sup_title_border"></div>
                <p><?php echo esc_attr($subtitle);?></p>
            </div>
        </div>
    </div>

</section>
<?php  return ob_get_clean();
} 

//Sup Services 2
add_shortcode('sup_service2', 'sup_service2_func');
function sup_service2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => 'icon1',
        'duration' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sup_bottompadder100">
        <div class="sup_service3_div zoom_middle wow" data-wow-duration="<?php echo esc_attr($duration);?>">
            <div class="sup_service_icon">
                <?php if($icon == 'icon1'){?>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="26px" viewBox="0 0 32 26" enable-background="new 0 0 32 26" xml:space="preserve">
                                <g>
                                    <path fill="none" d="M-569.5,280v22h13.075v-2H-567.5v-18.001h27.999V300h-11.016v2h13.016v-22H-569.5z M-541.5,284h-24v14h24V284z
                                 M-543.5,295.999h-20v-10h20V295.999z M-552.5,299.926h-2V302h2V299.926z M-559.537,306h12.074v-2h-12.074V306z" />
                                </g>
                                <g>
                                    <g>
                                        <path fill="#31AAE1" d="M0,0v22h13.075v-2H2V1.999h28V20H18.984v2H32V0H0z M28,4H4v14h24V4z M26,15.999H6v-10h20V15.999z
                                     M17,19.926h-2V22h2V19.926z M9.963,26h12.074v-2H9.963V26z" />
                                    </g>
                                </g>
                            </svg>
            <?php }elseif($icon == 'icon2'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.991px" height="26px" viewBox="0 0 17.991 26" enable-background="new 0 0 17.991 26" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M0,25.996v-4.875h17.991v4.875H0z M16.355,22.746H1.636v1.625
                            h14.72V22.746z M6.542,6.496c0,1.345,1.101,2.438,2.453,2.438v1.624c-2.254,0-4.089-1.822-4.089-4.063H6.542z M8.996,17.06
                            c-1.353,0-2.453,1.092-2.453,2.437H4.907c0-2.239,1.834-4.063,4.089-4.063V17.06z M1.636,6.496h1.635
                            c0,3.137,2.568,5.689,5.725,5.689c3.157,0,5.725-2.553,5.725-5.689h1.635c0,2.832-1.629,5.287-4.004,6.5
                            c2.375,1.216,4.004,3.671,4.004,6.5h-1.635c0-3.135-2.568-5.687-5.725-5.687c-3.156,0-5.725,2.552-5.725,5.687H1.636
                            c0-2.829,1.63-5.284,4.003-6.5C3.266,11.783,1.636,9.328,1.636,6.496z M0-0.003h17.991v4.874H0V-0.003z M1.636,3.246h14.72V1.622
                            H1.636V3.246z" />
                            </svg>
            <?php }elseif($icon == 'icon3'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24.988px" height="28px" viewBox="0 0 24.988 28" enable-background="new 0 0 24.988 28" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M0,16.621v-0.875C0,8.991,5.605,3.497,12.495,3.497
                                c6.889,0,12.493,5.494,12.493,12.249v0.875H0z M12.495,5.247c-5.604,0-10.218,4.243-10.673,9.626h21.345
                                C22.712,9.49,18.1,5.247,12.495,5.247z M12.495,6.996v1.751c-3.021,0-5.727,1.878-6.734,4.672l-1.684-0.583
                                C5.338,9.344,8.721,6.996,12.495,6.996z M11.603-0.003h1.784v1.749h-1.784V-0.003z M10.71,26.248c0.492,0,0.893-0.393,0.893-0.876
                                v-7h1.784v7c0,1.448-1.2,2.625-2.677,2.625c-1.476,0-2.677-1.177-2.677-2.625h1.784C9.817,25.855,10.218,26.248,10.71,26.248z" />
                            </svg>
            <?php }elseif($icon == 'icon4'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16,15.999V0h1c7.709,0,15,7.29,15,15.001v0.998H16z M18,1.55
                            v12.449h11.953C29.397,8.033,23.967,2.106,18,1.55z M14.004,29.999c6.617,0,12-5.381,12-11.998h2c0,7.719-6.28,13.999-14,13.999
                            S0,26.216,0,18.497C0,10.776,6.28,4.496,14,4.496v2c-6.617,0-12,5.384-12,12.001C2,25.113,7.387,29.999,14.004,29.999z" />
                            </svg>
            <?php }elseif($icon == 'icon5'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="32px" viewBox="0 0 28 32" enable-background="new 0 0 28 32" xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="#31AAE1" d="M5,0H3v7.999h2V0z M3,32h2V20H3V32z M4,10c-2.206,0-4,1.793-4,4c0,2.206,1.794,3.999,4,3.999
                                    S8,16.206,8,14C8,11.793,6.206,10,4,10z M4,16c-1.103,0-2-0.897-2-2c0-1.104,0.897-2,2-2s2,0.896,2,2C6,15.103,5.103,16,4,16z
                                     M15,0h-2v16h2V0z M13,32h2v-4.001h-2V32z M14,17.999c-2.206,0-4,1.794-4,4.001c0,2.205,1.794,4,4,4s4-1.795,4-4
                                    C18,19.793,16.206,17.999,14,17.999z M14,24c-1.103,0-2-0.898-2-2c0-1.104,0.897-2,2-2s2,0.896,2,2C16,23.102,15.103,24,14,24z
                                     M25,0h-2v4h2V0z M23,32h2V16h-2V32z M24,5.999c-2.206,0-4,1.794-4,4.001c0,2.206,1.794,4,4,4s4-1.794,4-4
                                    C28,7.793,26.206,5.999,24,5.999z M24,12c-1.103,0-2-0.898-2-2c0-1.104,0.897-2.001,2-2.001S26,8.896,26,10
                                    C26,11.102,25.103,12,24,12z" />
                                    </g>
                                </g>
                            </svg>
            <?php }else{ ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="22.268px" viewBox="0 0 32 22.268" enable-background="new 0 0 32 22.268" xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="#31AAE1" d="M6.853,1.974L18,3.833v16.153H2V7.987h11.966V5.986H0v16h20V2.14L7.182,0L6.853,1.974z M13.966,11.986v-2
                                    H4v2H13.966z M22.758,8.017l0.484,1.939L30,8.268v11.438l-6.758-1.689l-0.484,1.939L32,22.268V5.706L22.758,8.017z" />
                                    </g>
                                </g>
                            </svg>
                        <?php } ?>
            </div>
            <div class="sup_service_content">
                <h4><?php echo esc_attr($title);?></h4>
                <p><?php echo esc_attr($subtitle);?> </p>
            </div>
        </div>
    </div>
</section>
<?php  return ob_get_clean();
} 

//Sup Services 3
add_shortcode('sup_service3', 'sup_service3_func');
function sup_service3_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => 'icon1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sup_service sup_service1 zoom_middle wow" data-wow-duration="0.5s">
                        <?php if($icon == 'icon1'){?>
                <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16,16V0h1c7.71,0,15,7.29,15,15v1H16z M18,1.551V14h11.953
                C29.397,8.033,23.967,2.107,18,1.551z M14.004,30c6.617,0,12-5.384,12-12h2c0,7.72-6.28,14-14,14S0,26.216,0,18.495
                C0,10.776,6.28,4.497,14,4.497v1.999c-6.617,0-12,5.383-12,12C2,25.112,7.387,30,14.004,30z"/>
            </svg></span>
            <?php }elseif($icon == 'icon2'){?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30.219px" height="26.251px" viewBox="0 0 30.219 26.251" enable-background="new 0 0 30.219 26.251" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M15.109,16.271L0,8.136L15.109,0l15.109,8.136L15.109,16.271z
                             M4.219,8.136L15.109,14L26,8.136L15.109,2.271L4.219,8.136z M15.109,18.894l13.56-6.655l0.881,1.795l-14.44,7.087l-14.44-7.087
                            l0.881-1.795L15.109,18.894z M15.109,24.022l13.56-6.654l0.881,1.795l-14.44,7.088l-14.44-7.088l0.881-1.795L15.109,24.022z"/>
                        </svg></span>
            <?php }elseif($icon == 'icon3'){?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="23.735px" viewBox="0 0 32 23.735" enable-background="new 0 0 32 23.735" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16.077,1.718c-0.053,0-0.105,0.016-0.159,0.016
                            C8.679,1.794,2.563,5.796,1.994,10.846H0.005C0.699,4.708,7.533,0.027,15.902-0.042c0.057,0,0.115,0.015,0.173,0.015
                            c8.15,0,15.123,4.751,15.917,10.872h-1.984C29.342,5.706,23.238,1.718,16.077,1.718z M16.067,19.845h-0.068
                            c-4.374,0-7.962-3.558-7.998-7.932c-0.037-4.411,3.522-8.03,7.934-8.067c4.441,0,8.031,3.559,8.066,7.934
                            c0.018,2.137-0.799,4.153-2.297,5.676S18.203,19.829,16.067,19.845z M22,11.796c-0.027-3.281-2.719-5.95-6-5.95
                            c-3.358,0.028-6.026,2.741-5.999,6.049c0.027,3.281,2.718,5.95,5.998,5.95v1.001v-1.001c1.602-0.013,3.104-0.65,4.229-1.793
                            C21.352,14.912,22.014,13.4,22,11.796z M14.016,11.846h-1.984c-0.019-2.206,1.762-3.981,3.968-4v1.983
                            C14.897,9.839,14.007,10.743,14.016,11.846z M15.924,21.975c0.053,0,0.105-0.017,0.159-0.017c7.237-0.061,13.354-4.063,13.922-9.112
                            h1.988c-0.693,6.138-7.525,10.819-15.895,10.889c-0.057,0-0.115-0.017-0.173-0.017c-8.151,0-15.126-4.75-15.919-10.872h1.984
                            C2.657,17.986,8.761,21.975,15.924,21.975z"/>
                        </svg></span>
            <?php }else{ ?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <g>
                            <g>
                                <path fill="#31AAE1" d="M0,18.951c0,3.421,2.579,6,6,6h1v-12H6C2.579,12.951,0,15.53,0,18.951z M4.999,22.842
                                    C3.213,22.43,2,20.92,2,18.951c0-1.968,1.214-3.479,2.999-3.889V22.842z M25.998,12.951H25v12h0.998c3.422,0,6.002-2.579,6.002-6
                                    C32,15.53,29.42,12.951,25.998,12.951z M27,22.842v-7.78c1.785,0.41,3,1.921,3,3.889C30,20.92,28.785,22.43,27,22.842z M27,27.951
                                    h-4v2h4c1.709,0,3-1.29,3-3h-2.002C27.998,27.641,27.496,27.951,27,27.951z M19.938,25.96c-1.654,0-3,1.346-3,2.999
                                    c0,1.656,1.345,3,3,3s3-1.344,3-3C22.938,27.306,21.592,25.96,19.938,25.96z M19.938,29.961c-0.553,0-1-0.449-1-1.002
                                    c0-0.551,0.447-0.998,1-0.998c0.551,0,1,0.447,1,0.998C20.938,29.512,20.488,29.961,19.938,29.961z M25,10.957h2
                                    C27,4.89,22.064-0.049,16-0.049c-6.065,0-11.001,4.938-11.001,11.006H7c0-4.967,4.037-9.005,9-9.005
                                    C20.961,1.952,25,5.99,25,10.957z"/>
                            </g>
                        </g>
                        </svg></span>
                        <?php } ?>
                        <h5><?php echo esc_attr($title);?></h5>
                        <div class="sup_title_border"></div>
                        <p><?php echo esc_attr($subtitle);?></p>
                    </div>
                </div>

</section>
<?php  return ob_get_clean();
} 

//Sup Welcome
add_shortcode('sup_welcome', 'sup_welcome_func');
function sup_welcome_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'textbutton' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="sup_welcome_section_wrapper">
        <div class="sup_blue_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sup_whoweare_section sup_toppadder100 sup_bottompadder100 sup_fullwidth_inner">
                        <h4><?php echo esc_attr($title);?></h4>
                        <div class="sup_title_border"></div>
                        <div class="clearfix"></div>
                        <span><?php echo esc_attr($subtitle);?></span>
                        <p><?php echo esc_attr($desc);?> </p>
                        <a href="<?php echo esc_url($link);?>" class="sup_btn sup_black_btn"><?php echo esc_attr($textbutton);?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 visible-xs">
                    <div class="row">
                        <div class="sup_welcome_section_img">
                            <img src="<?php echo esc_url($images[0]);?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

//Sup Welcome 2
add_shortcode('sup_welcome2', 'sup_welcome2_func');
function sup_welcome2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title1' => '',
        'subtitle1' => '',
        'desc1' => '',
        'textbutton1' => '',
        'link1' => '#',
        'title2' => '',
        'subtitle2' => '',
        'desc2' => '',   
        'textbutton2' => '',
        'link2' => '#',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="sup_fullwidth_section sup_welcome_section" style="background-image: url(<?php echo esc_url($images[0]);?>);">
        <div class="sup_blue_overlay pull-right"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_toppadder100 sup_bottompadder100 sup_fullwidth_inner">
                        <div class="text-right">
                            <h4 class="fromleft wow"><?php echo esc_attr($title1);?></h4>
                            <div class="sup_title_border fromleft wow"></div>
                            <div class="clearfix"></div>
                            <span class="fromleft wow"><?php echo esc_attr($subtitle1);?></span>
                            <p class="fromleft wow"><?php echo esc_attr($desc1);?></p>
                            <a href="<?php echo esc_url($link1);?>" class="sup_btn sup_black_btn fromleft wow"><?php echo esc_attr($textbutton1);?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_whoweare_section sup_toppadder100 sup_bottompadder100 sup_fullwidth_inner">
                        <h4 class="fromright wow"><?php echo esc_attr($title1);?></h4>
                        <div class="sup_title_border fromright wow"></div>
                        <div class="clearfix"></div>
                        <span class="fromright wow"><?php echo esc_attr($subtitle2);?></span>
                        <p class="fromright wow"><?php echo esc_attr($desc2);?></p>
                        <a href="<?php echo esc_url($link2);?>" class="sup_btn sup_black_btn fromright wow"><?php echo esc_attr($textbutton2);?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

//tablist
add_shortcode('tablist', 'tablist_func');
function tablist_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'icon' => 'icon1',
        'active' => 'no',
        'link' => '#',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <li role="presentation" class="<?php if($active == 'yes'){echo 'active';}?>">
        <a href="<?php echo esc_attr($link);?>" aria-controls="wg" role="tab" data-toggle="tab" aria-expanded="true">
        <?php if($icon == 'icon1'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px" height="50.994px" viewBox="0 0 44 50.994" enable-background="new 0 0 44 50.994" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M36.648,36.839c-4.902,4.926-11.342,7.39-17.781,7.39
    c-6.438,0-12.877-2.464-17.777-7.39l2.222-2.232c8.579,8.621,22.536,8.618,31.114,0c8.577-8.626,8.577-22.657,0-31.278l2.223-2.233
    C46.45,10.947,46.45,26.981,36.648,36.839z M18.857,37.912C8.459,37.912,0,29.409,0,18.957C0,8.502,8.459,0,18.857,0
    c10.397,0,18.857,8.502,18.857,18.957C37.715,29.409,29.255,37.912,18.857,37.912z M18.857,3.159
    c-8.666,0-15.715,7.088-15.715,15.798c0,8.709,7.049,15.796,15.715,15.796c8.665,0,15.715-7.087,15.715-15.796
    C34.572,10.247,27.522,3.159,18.857,3.159z M29.139,23.54l-9.582,9.186l1.595-11.206l-6.765-3.736l3.899-5.285l-0.624-0.243
    l-5.479,1.381L8.675,10.69l2.017-2.425l2.278,1.916l4.897-1.235l5.397,2.108l-4.208,5.707l5.514,3.045l-0.617,4.339l2.354-2.254
    l2.024-8.279l3.052,0.752L29.139,23.54z M13.716,26.997h-3.094l0.593-3H8v-2.999h6.874L13.716,26.997z M27,50.994H11v-2.999h16
    V50.994z" />
            </svg>
            <?php }elseif($icon == 'icon2'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px" height="38px" viewBox="0 0 44 38" enable-background="new 0 0 44 38" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path fill="#31AAE1" d="M0,38.008h44v-2.702H0V38.008z M11.036,23.498L22.011,5.267l11.187,18.268l2.355-1.394L21.989-0.008
                                        L8.67,22.121L11.036,23.498z M32.31,12.342l1.611,2.19l7.329-5.206v20.575H2.75V9.326l7.329,5.206l1.611-2.19L0,4.038v29.117h44
                                        V4.038L32.31,12.342z" />
                                            </g>
                                        </g>
                                    </svg>
            <?php }elseif($icon == 'icon3'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46.495px" viewBox="0 0 46 46.495" enable-background="new 0 0 46 46.495" xml:space="preserve">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M33.789,24.717l-2.156-2.052L43,11.197V3h-8.142L23.616,14.47
                                l-2.034-2.149L33.789,0H46v12.398L33.789,24.717z M16.409,28.088l6.967-7.267l2.068,2.019l-7,7.3l6.429,6.486l3.728-10.578
                                l2.712,0.973L26.059,41.93L4.523,20.201L19.3,14.899l0.964,2.736L9.779,21.397L16.409,28.088z M9.924,31.127l-4.253,9.646
                                l9.562-4.291l1.169,2.654L0,46.496l7.293-16.549L9.924,31.127z" />
                                    </svg>
            <?php }else{ ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45px" height="44.917px" viewBox="0 0 45 44.917" enable-background="new 0 0 45 44.917" xml:space="preserve">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M38,12.849v-2.75c2.294,0,4-0.849,4-3.125V7h-4v-3h7v3.224
                            C45,11.014,41.823,12.849,38,12.849z M11,41.996h11v-7.694c-2.387-0.614-4.161-2.749-4.161-5.304h2.387
                            c0,1.516,1.244,3.773,2.774,3.773c1.529,0,2.773-2.258,2.773-3.773h2.388c0,2.555-1.775,4.689-4.161,5.304v7.694h11v3H11V41.996z
                             M22,25.222c-6.884,0-12-5.551-12-12.374V0h25v12.849C35,19.671,28.883,25.222,22,25.222z M32,2.999H13v9.85
                            c0,5.307,3.646,9.625,9,9.625c5.354,0,10-4.318,10-9.625V2.999z M16,12.973V7h3v5.974c0,2.274,1.705,4,4,4v2.75
                            C19.176,19.723,16,16.764,16,12.973z M0.736,6.474L0,3.999h8v3H4v0.476c0,2.273,1.705,2.624,4,2.624v2.75
                            C4.176,12.849,0.736,10.265,0.736,6.474z" />
                                    </svg>
            <?php } ?>
             <span><?php echo esc_attr($title);?></span>
        </a>
    </li>


<?php  return ob_get_clean();
} 

//tab content
add_shortcode('tab_content', 'tab_content_func');
function tab_content_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'title_content' => '',
        'desc' => '',
        'image' => '',
        'active' => 'no',
        'id' => '',
        'textbutton' => '',
        'link' => '#',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1'){?>
    <div role="tabpanel" class="tab-pane <?php if($active == 'yes'){echo 'active';}?>" id="<?php echo esc_attr($id);?>">
        <div class="sup_tabdata">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_feature_img fromleft wow">
                        <img src="<?php echo esc_url($images[0]);?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_feature_detail">
                        <h3><?php echo esc_attr($title);?></h3>
                        <span><?php echo esc_attr($subtitle);?></span>
                        <div class="sup_title_border"></div>
                        <h5><?php echo esc_attr($title_content);?></h5>
                        <p><?php echo esc_attr($desc);?></p>
                        <a href="<?php echo esc_url($link);?>"><?php echo esc_attr($textbutton);?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }else{ ?>
    <div role="tabpanel" class="tab-pane <?php if($active == 'yes'){echo 'active';}?>" id="<?php echo esc_attr($id);?>">
        <div class="sup_tabdata">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-6 col-md-push-6 col-sm-push-0 col-xs-push-0">
                    <div class="sup_feature_img fromright ">
                        <img src="<?php echo esc_url($images[0]);?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-pull-6 col-md-pull-6 col-sm-pull-0 col-xs-pull-0">
                    <div class="sup_feature_detail">
                        <h3><?php echo esc_attr($title);?></h3>
                        <span><?php echo esc_attr($subtitle);?></span>
                        <div class="sup_title_border"></div>
                        <h5><?php echo esc_attr($title_content);?></h5>
                        <p><?php echo esc_attr($desc);?></p>
                        <a href="<?php echo esc_url($link);?>"><?php echo esc_attr($textbutton);?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


<?php  return ob_get_clean();
} 

//tab content
add_shortcode('features', 'features_func');
function features_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'icon' => 'icon1',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <li>
        <?php if($icon == 'icon1'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px" height="50.994px" viewBox="0 0 44 50.994" enable-background="new 0 0 44 50.994" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M36.648,36.839c-4.902,4.926-11.342,7.39-17.781,7.39
    c-6.438,0-12.877-2.464-17.777-7.39l2.222-2.232c8.579,8.621,22.536,8.618,31.114,0c8.577-8.626,8.577-22.657,0-31.278l2.223-2.233
    C46.45,10.947,46.45,26.981,36.648,36.839z M18.857,37.912C8.459,37.912,0,29.409,0,18.957C0,8.502,8.459,0,18.857,0
    c10.397,0,18.857,8.502,18.857,18.957C37.715,29.409,29.255,37.912,18.857,37.912z M18.857,3.159
    c-8.666,0-15.715,7.088-15.715,15.798c0,8.709,7.049,15.796,15.715,15.796c8.665,0,15.715-7.087,15.715-15.796
    C34.572,10.247,27.522,3.159,18.857,3.159z M29.139,23.54l-9.582,9.186l1.595-11.206l-6.765-3.736l3.899-5.285l-0.624-0.243
    l-5.479,1.381L8.675,10.69l2.017-2.425l2.278,1.916l4.897-1.235l5.397,2.108l-4.208,5.707l5.514,3.045l-0.617,4.339l2.354-2.254
    l2.024-8.279l3.052,0.752L29.139,23.54z M13.716,26.997h-3.094l0.593-3H8v-2.999h6.874L13.716,26.997z M27,50.994H11v-2.999h16
    V50.994z" />
            </svg>
            <?php }elseif($icon == 'icon2'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px" height="38px" viewBox="0 0 44 38" enable-background="new 0 0 44 38" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path fill="#31AAE1" d="M0,38.008h44v-2.702H0V38.008z M11.036,23.498L22.011,5.267l11.187,18.268l2.355-1.394L21.989-0.008
                                        L8.67,22.121L11.036,23.498z M32.31,12.342l1.611,2.19l7.329-5.206v20.575H2.75V9.326l7.329,5.206l1.611-2.19L0,4.038v29.117h44
                                        V4.038L32.31,12.342z" />
                                            </g>
                                        </g>
                                    </svg>
            <?php }elseif($icon == 'icon3'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46.495px" viewBox="0 0 46 46.495" enable-background="new 0 0 46 46.495" xml:space="preserve">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M33.789,24.717l-2.156-2.052L43,11.197V3h-8.142L23.616,14.47
                                l-2.034-2.149L33.789,0H46v12.398L33.789,24.717z M16.409,28.088l6.967-7.267l2.068,2.019l-7,7.3l6.429,6.486l3.728-10.578
                                l2.712,0.973L26.059,41.93L4.523,20.201L19.3,14.899l0.964,2.736L9.779,21.397L16.409,28.088z M9.924,31.127l-4.253,9.646
                                l9.562-4.291l1.169,2.654L0,46.496l7.293-16.549L9.924,31.127z" />
                                    </svg>
            <?php }else{ ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45px" height="44.917px" viewBox="0 0 45 44.917" enable-background="new 0 0 45 44.917" xml:space="preserve">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M38,12.849v-2.75c2.294,0,4-0.849,4-3.125V7h-4v-3h7v3.224
                            C45,11.014,41.823,12.849,38,12.849z M11,41.996h11v-7.694c-2.387-0.614-4.161-2.749-4.161-5.304h2.387
                            c0,1.516,1.244,3.773,2.774,3.773c1.529,0,2.773-2.258,2.773-3.773h2.388c0,2.555-1.775,4.689-4.161,5.304v7.694h11v3H11V41.996z
                             M22,25.222c-6.884,0-12-5.551-12-12.374V0h25v12.849C35,19.671,28.883,25.222,22,25.222z M32,2.999H13v9.85
                            c0,5.307,3.646,9.625,9,9.625c5.354,0,10-4.318,10-9.625V2.999z M16,12.973V7h3v5.974c0,2.274,1.705,4,4,4v2.75
                            C19.176,19.723,16,16.764,16,12.973z M0.736,6.474L0,3.999h8v3H4v0.476c0,2.273,1.705,2.624,4,2.624v2.75
                            C4.176,12.849,0.736,10.265,0.736,6.474z" />
                                    </svg>
            <?php } ?>
        <h5><?php echo esc_attr($title);?></h5>
    </li>


<?php  return ob_get_clean();
} 

//Client Say
add_shortcode('client_say', 'client_say_func');
function client_say_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'name' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="sup_testimonial_section sup_testimonial_section2 sup_toppadder100 sup_bottompadder100" style="background-image: url(<?php echo esc_url($images[0]);?>);">
        <div class="sup_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_testimonial_heading">
                        <h3><?php echo esc_attr($title);?></h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_testimonial_detail">
                        <p><?php echo esc_attr($subtitle);?></p>
                        <span><?php echo esc_attr($name);?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

//Client Say 2
add_shortcode('client_say2', 'client_say2_func');
function client_say2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item">
        <div class="sup_testimonial_inner">
            <div class="sup_testimonial_img">
                <img src="<?php echo esc_url($images[0]);?>" class="img-responsive" alt="">
                <span><?php echo esc_attr($title);?></span>
            </div>
            <div class="sup_testimonial_data">
                <p><?php echo esc_attr($subtitle);?></p>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

add_shortcode('portfolio', 'portfolio_func');
function portfolio_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'number'        =>      '',
        'orderpost' => '',
        'orderby' => '', 
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <div class="sup_transparent sup_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4><?php echo esc_attr($title);?></h4>
                        <div class="sup_title_border"></div>
                        <p><?php echo esc_attr($subtitle);?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_sorting sup_bottompadder30">
                        <ul id="portfolio-filter">
                            <li class="filters-line"></li>
                            <li><a href="#" class="filter active" data-filter="all">all</a>
                            </li>
                            <?php 
                                    $categories = get_terms('type');   
                                     foreach( (array)$categories as $categorie){
                                        $cat_name = $categorie->name;
                                        $cat_slug = $categorie->slug;
                                ?>
                            <li><a href="#" class="filter" data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div id="portfolio">
                <?php 
                        $args = array(   
                                    'post_type' => 'portfolio',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.' ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                ?> 
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix mix-all <?php echo esc_attr($cate_slug);?>" data-value="1">
                        <div class="row">
                            <div class="portfolio-item frombottom wow" data-wow-duration="0.5s">
                                <div class="portfolio-image">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">
                                <?php }?>
                                    <div class="portfolio-overlay"></div>
                                    <div class="sup_links">
                                        <a class="fancybox sup_link" data-fancybox-group="gallery1" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" title="<?php the_title();?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href="<?php the_permalink();?>" class="sup_link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endwhile;?>
                </div>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

add_shortcode('portfolio2', 'portfolio2_func');
function portfolio2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'number'        =>      '',
        'orderpost' => '',
        'orderby' => '', 
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4><?php echo esc_attr($title);?></h4>
                        <div class="sup_title_border"></div>
                        <p><?php echo esc_attr($subtitle);?></p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_sorting">
                        <ul id="portfolio-filter">
                            <li class="filters-line"></li>
                            <li><a href="#" class="filter active" data-filter="all">all</a>
                            </li>
                            <?php 
                                    $categories = get_terms('type');   
                                     foreach( (array)$categories as $categorie){
                                        $cat_name = $categorie->name;
                                        $cat_slug = $categorie->slug;
                                ?>
                            <li><a href="#" class="filter" data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div id="portfolio">
                <?php 
                        $args = array(   
                                    'post_type' => 'portfolio',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.' ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                ?> 
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sup_toppadder30 mix mix-all <?php echo esc_attr($cate_slug);?>" data-value="1">
                            <div class="portfolio-item frombottom wow" data-wow-duration="0.5s">
                                <div class="portfolio-image">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">
                                <?php }?>
                                    <div class="portfolio-overlay"></div>
                                    <div class="sup_links">
                                        <a class="fancybox sup_link" data-fancybox-group="gallery1" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" title="<?php the_title();?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href="<?php the_permalink();?>" class="sup_link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <?php 
                    endwhile;?>
                </div>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

add_shortcode('counter', 'counter_func');
function counter_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => 'icon1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sup_counter sup_toppadder70">
                        <span>
                        <?php if($icon == 'icon1'){?>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="18px" viewBox="0 0 19 18" enable-background="new 0 0 19 18" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M0,17.999v-16.2h9.5v1.199H1.188v13.8h16.625V8.398H19v9.601H0z
                             M17.885,4.52l-3.359-3.394l0.42-0.425c0.448-0.453,1.045-0.703,1.679-0.703c0.636,0,1.231,0.25,1.681,0.703
                            C18.752,1.152,18.999,1.755,19,2.396c0,0.642-0.246,1.245-0.695,1.698L17.885,4.52z M17.465,1.551c-0.3-0.303-0.75-0.42-1.148-0.313
                            l1.456,1.471c0.026-0.101,0.04-0.205,0.04-0.313C17.813,2.076,17.689,1.776,17.465,1.551z M14.525,2.823L8.811,8.598l1.12,0.565
                            l0.56,1.131l5.715-5.774l0.84,0.849l-6.88,6.952l-1.119-2.263L6.805,8.927l6.881-6.953L14.525,2.823z M9.175,13.231l-4.905,1.651
                            l1.635-4.957l1.125,0.38l-0.883,2.68l2.651-0.893L9.175,13.231z"/>
                        </svg>
            <?php }elseif($icon == 'icon2'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16.265,18.748v-1.25h2.3l-0.463-3.248l-1.992-0.537l0.311-1.211
                            l2.797,0.745L20,18.748H16.265z M14.396,11.248v-1.25c1.717,0,3.113-1.401,3.113-3.125c0-1.723-1.396-3.125-3.113-3.125v-1.25
                            c2.403,0,4.358,1.963,4.358,4.375S16.8,11.248,14.396,11.248z M0,19.998l0.769-6.514l2.936-0.955l0.384,1.188l-2.177,0.709
                            l-0.51,4.321h12.295l-0.51-4.321l-2.178-0.709l0.384-1.188l2.936,0.955l0.77,6.514H0z M7.549,11.248
                            c-3.09,0-5.604-2.523-5.604-5.625s2.514-5.625,5.604-5.625c3.089,0,5.603,2.523,5.603,5.625S10.639,11.248,7.549,11.248z
                             M7.549,1.248c-2.403,0-4.359,1.963-4.359,4.375c0,2.413,1.956,4.376,4.359,4.376c2.403,0,4.357-1.963,4.357-4.376
                            C11.906,3.211,9.952,1.248,7.549,1.248z"/>
                        </svg>
            <?php }elseif($icon == 'icon3'){?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M14.691,10.632l-0.939-0.883l4.943-4.933V1.291h-3.539
                            l-4.889,4.933L9.383,5.3L14.691,0H20v5.333L14.691,10.632z M7.134,12.082l3.029-3.126l0.899,0.869l-3.043,3.14l2.795,2.79l1.62-4.55
                            l1.18,0.418l-2.283,6.413L1.966,8.689l6.425-2.28L8.81,7.586L4.251,9.204L7.134,12.082z M4.314,13.389l-1.849,4.149l4.157-1.845
                            l0.508,1.142L0,20l3.171-7.118L4.314,13.389z"/>
                        </svg>
            <?php }else{ ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="15px" viewBox="0 0 20 15" enable-background="new 0 0 20 15" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M18.129,6.261h-0.649V5.008h0.649c0.344,0,0.625-0.281,0.625-0.627
                            V3.129c0-0.347-0.281-0.628-0.625-0.628h-0.649V1.248h0.649c1.033,0,1.875,0.843,1.875,1.881v1.268
                            C19.995,5.426,19.157,6.261,18.129,6.261z M8.121,12.527c-4.48,0-8.125-3.759-8.125-8.381v-4.151h16.25v4.151
                            C16.246,8.769,12.602,12.527,8.121,12.527z M14.996,1.248H1.246v2.898c0,3.93,3.084,7.128,6.875,7.128s6.875-3.198,6.875-7.128
                            V1.248z M2.504,4.146V3.129h1.25v1.018c0,2.548,1.962,4.621,4.375,4.621v1.252C5.027,10.02,2.504,7.386,2.504,4.146z M13.121,15.002
                            h-10v-1.253h10V15.002z"/>
                        </svg>
                        <?php } ?></span>
                        <h1 class="timer" data-from="0" data-to="<?php echo esc_attr($title);?>" data-speed="2000" data-refresh-interval="10"><?php echo esc_attr($title);?></h1>
                        <div class="sup_title_border"></div>
                        <p><?php echo esc_attr($subtitle);?></p>
                    </div>
                </div>
<?php  return ob_get_clean();
} 


add_shortcode('get_started', 'get_started_func');
function get_started_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'textbutton' => '',
        'link' => '#',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="sup_get_started_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="sup_get_started_data">
                        <h2><?php echo esc_attr($title);?></h2>
                        <p><?php echo esc_attr($subtitle);?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 pull-right">
                    <div class="sup_mobile_img <?php if($type == 'type1'){echo 'sup_mobile_img_small';}?>">
                        <img src="<?php echo esc_url($images[0]);?>" class="img-responsive wow fromleft" alt="">
                        <a href="<?php echo esc_url($link);?>"><i class="icon-speech icons"></i><span><?php echo esc_attr($textbutton);?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '', 
    ), $atts));
    ob_start(); 
    global $redux_demo;
    ?> 
    <div class="sup_transparent sup_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="sup_heading text-center sup_bottompadder70">
                        <h4><?php echo esc_attr($title);?></h4>
                        <div class="sup_title_border"></div>
                        <p><?php echo esc_attr($subtitle);?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="post-timeline blog-full-width">
                            <ul>
                                <?php 
                
                                        $args = array(    
                                            'paged' => $paged,
                                            'post_type' => 'post',
                                            'posts_per_page' => $number,
                                            'order' => $orderpost,
                                            'orderby' => $orderby, 
                                            );
                                        $wp_query = new WP_Query($args);
                                        $j = 0;
                                        while ($wp_query -> have_posts()): $wp_query -> the_post(); 
                                        $j++;
                                        ?>
                                <?php if($j%2 == '1'){?> 
                                <li>
                                    <div class="entry">
                                        <div class="sup_whitebg"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <?php if ( has_post_thumbnail() ) { ?>
                            <div class="entry-image">
                                <a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">
                                </a>
                            </div>
                            <?php }?>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
                                                    <div class="row">
                                                        <div class="entery-c">
                                                            <div class="entry-title">
                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </div>
                            <ul class="entry-meta">
                                <li><?php if(isset($redux_demo['blog_by'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['blog_by']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By', 'speedup' );
                                    }
                                    ?> <?php the_author_posts_link(); ?>
                                </li>
                                <li><?php 
                                            // Show all category for post
                                            $i = 1; foreach((get_the_category()) as $category) { 
                                            if ($i == 1){echo ''; }else {echo ' , ';}
                                                echo '<a href="'.get_category_link($category->cat_ID).'">'.$category->category_nicename . ' '.'</a>'; 
                                                
                                                $i++;
                                            } ?>
                                </li>
                                <li><a href="javascript:;"><?php if(isset($redux_demo['blog_on'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['blog_on']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Posted at', 'speedup' );
                                    }
                                    ?> <?php the_time('j F,Y');?></a>
                                </li>
                            </ul>
                                                            <div class="sup_title_border"></div>
                                                            <div class="entry-content">
                                <p><?php if(isset($redux_demo['blog_excerpt'])){?>
                                                        <?php echo esc_attr(speedup_excerpt($redux_demo['blog_excerpt'])); ?>
                                                        <?php }else{?>
                                                        <?php echo esc_attr(speedup_excerpt(50)); 
                                                        }
                                                        ?></p>
                                <a href="<?php the_permalink();?>" class="more-link sup_btn sup_black_btn"><?php if(isset($redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['read_more']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read More ', 'speedup' );
                                    }
                                    ?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                <ul class="entry-comment">
                                    <li><a href="javascript:;"><i class="icon-speech icons"></i> <?php comments_popup_link( '0 Comment', '1 Comment', ' % Comments', '', esc_html__( 'Comment Off', 'speedup' )); ?></a>
                                    </li>
                                </ul>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php }else{?>
                                <li>
                                    <div class="entry">
                                        <div class="sup_blackbg"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-6 col-md-push-6">
                                            <div class="row">
                                                <?php if ( has_post_thumbnail() ) { ?>
                            <div class="entry-image">
                                <a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">
                                </a>
                            </div>
                            <?php }?>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-pull-6 col-md-pull-6">
                                                    <div class="row">
                                                        <div class="entery-c">
                                                            <div class="entry-title">
                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </div>
                            <ul class="entry-meta">
                                <li><?php if(isset($redux_demo['blog_by'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['blog_by']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By', 'speedup' );
                                    }
                                    ?> <?php the_author_posts_link(); ?>
                                </li>
                                <li><?php 
                                            // Show all category for post
                                            $i = 1; foreach((get_the_category()) as $category) { 
                                            if ($i == 1){echo ''; }else {echo ' , ';}
                                                echo '<a href="'.get_category_link($category->cat_ID).'">'.$category->category_nicename . ' '.'</a>'; 
                                                
                                                $i++;
                                            } ?>
                                </li>
                                <li><a href="javascript:;"><?php if(isset($redux_demo['blog_on'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['blog_on']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Posted at', 'speedup' );
                                    }
                                    ?> <?php the_time('j F,Y');?></a>
                                </li>
                            </ul>
                                                            <div class="sup_title_border"></div>
                                                            <div class="entry-content">
                                <p><?php if(isset($redux_demo['blog_excerpt'])){?>
                                                        <?php echo esc_attr(speedup_excerpt($redux_demo['blog_excerpt'])); ?>
                                                        <?php }else{?>
                                                        <?php echo esc_attr(speedup_excerpt(50)); 
                                                        }
                                                        ?></p>
                                <a href="<?php the_permalink();?>" class="more-link sup_btn sup_black_btn"><?php if(isset($redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['read_more']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read More ', 'speedup' );
                                    }
                                    ?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                <ul class="entry-comment">
                                    <li><a href="javascript:;"><i class="icon-speech icons"></i> <?php comments_popup_link( '0 Comment', '1 Comment', ' % Comments', '', esc_html__( 'Comment Off', 'speedup' )); ?></a>
                                    </li>
                                </ul>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php endwhile;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php  return ob_get_clean();
} 

add_shortcode('sup_client', 'sup_client_func');
function sup_client_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="item">
        <div class="sup_client">
            <img src="<?php echo esc_url($images[0]);?>" class="img-responsive" alt="">
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sup_bottompadder60">
        <div class="sup_teammember frombottom wow" data-wow-duration="0.8s">
            <img src="<?php echo esc_url($images[0]);?>" class="img-responsive" alt="">
            <div class="sup_team_overlay">
                <div class="sup_team_plus"><a class="fancybox" data-fancybox-group="team" href="<?php echo esc_url($images[0]);?>" title="<?php echo esc_attr($title);?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
                <div class="sup_team_detail">
                    <h5><?php echo esc_attr($title);?></h5>
                    <p><?php echo esc_attr($subtitle);?></p>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('sup_core', 'sup_core_func');
function sup_core_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'content_list' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="sup_core_feature_section sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_core_feature_img">
                        <img src="<?php echo esc_url($images[0]);?>" class="img-responsive fromleft wow" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_core_feature_data">
                        <h4><?php echo esc_attr($title);?></h4>
                        <div class="sup_title_border"></div>
                        <p><?php echo htmlspecialchars_decode($subtitle);?></p>
                        <?php echo htmlspecialchars_decode($content_list);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('pricing', 'pricing_func');
function pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'price' => '',
        'price_unit' => '',
        'price_tenure' => '',
        'content_list' => '',
        'textbutton' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-box frombottom wow" data-wow-duration="0.5s">
                <div class="pricing-price">
                    <span class="price-unit"><?php echo esc_attr($price_unit);?></span> <?php echo esc_attr($price);?> <span class="price-tenure"><?php echo esc_attr($price_tenure);?></span>
                </div>
                <div class="pricing-title">
                    <h3><?php echo esc_attr($title);?></h3>
                </div>
                <div class="pricing-features">
                    <?php echo htmlspecialchars_decode($content_list);?>
                </div>
                <div class="pricing-action">
                    <a href="<?php echo esc_url($link);?>" class="button button-large button-border"><?php echo esc_attr($textbutton);?> <span class="sup_title_border"></span></a>
                </div>
            </div>
        </div>
<?php  return ob_get_clean();
} 

add_shortcode('about_slider', 'about_slider_func');
function about_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'active' => 'no',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="item <?php if($active == 'yes'){echo 'active';}?>">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="sup_about_slider-img">
                <img src="<?php echo esc_url($images[0]);?>" alt="..." class="img-responsive">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="sup_about_data">
                <h4 class="javascript:;"><?php echo esc_attr($title);?></h4>
                <div class="sup_title_border"></div>
                <p class=""><?php echo esc_attr($subtitle);?></p>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('about_carousel', 'about_carousel_func');
function about_carousel_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'image2' => '',
        'image3' => '',
        'image4' => '',
        'image5' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,'');
    $images2 = wp_get_attachment_image_src($image2,'');
    $images3 = wp_get_attachment_image_src($image3,'');
    $images4 = wp_get_attachment_image_src($image4,'');
    $images5 = wp_get_attachment_image_src($image5,'');
    ?> 
      <ol class="carousel-indicators">
        <li data-target="#sup_aboutus_slider" data-slide-to="0" class="active"><img src="<?php echo esc_url($images1[0]);?>" alt="">
            <div class="sup_overlay"></div>
        </li>
        <li data-target="#sup_aboutus_slider" data-slide-to="1"><img src="<?php echo esc_url($images2[0]);?>" alt="">
            <div class="sup_overlay"></div>
        </li>
        <li data-target="#sup_aboutus_slider" data-slide-to="2"><img src="<?php echo esc_url($images3[0]);?>" alt="">
            <div class="sup_overlay"></div>
        </li>
        <li data-target="#sup_aboutus_slider" data-slide-to="3"><img src="<?php echo esc_url($images4[0]);?>" alt="">
            <div class="sup_overlay"></div>
        </li>
        <li data-target="#sup_aboutus_slider" data-slide-to="4"><img src="<?php echo esc_url($images5[0]);?>" alt="">
            <div class="sup_overlay"></div>
        </li>
    </ol>
<?php  return ob_get_clean();
} 

add_shortcode('process', 'process_func');
function process_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <li class="wow fromtop">
        <div class="sup_process_icon">
            <span><i class="<?php echo esc_attr($icon);?>"></i></span>
        </div>
        <div class="sup_process_detail">
            <h5><?php echo esc_attr($title);?> </h5>
            <div class="sup_title_border"></div>
            <p><?php echo esc_attr($subtitle);?></p>
        </div>
    </li>
<?php  return ob_get_clean();
} 

add_shortcode('sup_contact', 'sup_contact_func');
function sup_contact_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => 'icon1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="sup_service sup_contact zoom_middle wow" data-wow-duration="0.5s">
            <?php if($icon == 'icon1'){?>
                <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16,16V0h1c7.71,0,15,7.29,15,15v1H16z M18,1.551V14h11.953
                C29.397,8.033,23.967,2.107,18,1.551z M14.004,30c6.617,0,12-5.384,12-12h2c0,7.72-6.28,14-14,14S0,26.216,0,18.495
                C0,10.776,6.28,4.497,14,4.497v1.999c-6.617,0-12,5.383-12,12C2,25.112,7.387,30,14.004,30z"/>
            </svg></span>
            <?php }elseif($icon == 'icon2'){?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30.219px" height="26.251px" viewBox="0 0 30.219 26.251" enable-background="new 0 0 30.219 26.251" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M15.109,16.271L0,8.136L15.109,0l15.109,8.136L15.109,16.271z
                             M4.219,8.136L15.109,14L26,8.136L15.109,2.271L4.219,8.136z M15.109,18.894l13.56-6.655l0.881,1.795l-14.44,7.087l-14.44-7.087
                            l0.881-1.795L15.109,18.894z M15.109,24.022l13.56-6.654l0.881,1.795l-14.44,7.088l-14.44-7.088l0.881-1.795L15.109,24.022z"/>
                        </svg></span>
            <?php }elseif($icon == 'icon3'){?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="23.735px" viewBox="0 0 32 23.735" enable-background="new 0 0 32 23.735" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#31AAE1" d="M16.077,1.718c-0.053,0-0.105,0.016-0.159,0.016
                            C8.679,1.794,2.563,5.796,1.994,10.846H0.005C0.699,4.708,7.533,0.027,15.902-0.042c0.057,0,0.115,0.015,0.173,0.015
                            c8.15,0,15.123,4.751,15.917,10.872h-1.984C29.342,5.706,23.238,1.718,16.077,1.718z M16.067,19.845h-0.068
                            c-4.374,0-7.962-3.558-7.998-7.932c-0.037-4.411,3.522-8.03,7.934-8.067c4.441,0,8.031,3.559,8.066,7.934
                            c0.018,2.137-0.799,4.153-2.297,5.676S18.203,19.829,16.067,19.845z M22,11.796c-0.027-3.281-2.719-5.95-6-5.95
                            c-3.358,0.028-6.026,2.741-5.999,6.049c0.027,3.281,2.718,5.95,5.998,5.95v1.001v-1.001c1.602-0.013,3.104-0.65,4.229-1.793
                            C21.352,14.912,22.014,13.4,22,11.796z M14.016,11.846h-1.984c-0.019-2.206,1.762-3.981,3.968-4v1.983
                            C14.897,9.839,14.007,10.743,14.016,11.846z M15.924,21.975c0.053,0,0.105-0.017,0.159-0.017c7.237-0.061,13.354-4.063,13.922-9.112
                            h1.988c-0.693,6.138-7.525,10.819-15.895,10.889c-0.057,0-0.115-0.017-0.173-0.017c-8.151,0-15.126-4.75-15.919-10.872h1.984
                            C2.657,17.986,8.761,21.975,15.924,21.975z"/>
                        </svg></span>
            <?php }else{ ?>
            <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <g>
                            <g>
                                <path fill="#31AAE1" d="M0,18.951c0,3.421,2.579,6,6,6h1v-12H6C2.579,12.951,0,15.53,0,18.951z M4.999,22.842
                                    C3.213,22.43,2,20.92,2,18.951c0-1.968,1.214-3.479,2.999-3.889V22.842z M25.998,12.951H25v12h0.998c3.422,0,6.002-2.579,6.002-6
                                    C32,15.53,29.42,12.951,25.998,12.951z M27,22.842v-7.78c1.785,0.41,3,1.921,3,3.889C30,20.92,28.785,22.43,27,22.842z M27,27.951
                                    h-4v2h4c1.709,0,3-1.29,3-3h-2.002C27.998,27.641,27.496,27.951,27,27.951z M19.938,25.96c-1.654,0-3,1.346-3,2.999
                                    c0,1.656,1.345,3,3,3s3-1.344,3-3C22.938,27.306,21.592,25.96,19.938,25.96z M19.938,29.961c-0.553,0-1-0.449-1-1.002
                                    c0-0.551,0.447-0.998,1-0.998c0.551,0,1,0.447,1,0.998C20.938,29.512,20.488,29.961,19.938,29.961z M25,10.957h2
                                    C27,4.89,22.064-0.049,16-0.049c-6.065,0-11.001,4.938-11.001,11.006H7c0-4.967,4.037-9.005,9-9.005
                                    C20.961,1.952,25,5.99,25,10.957z"/>
                            </g>
                        </g>
                        </svg></span>
                        <?php } ?>
            <h5><?php echo esc_attr($title);?></h5>
            <div class="sup_title_border"></div>
            <?php echo htmlspecialchars_decode($subtitle);?>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('maps', 'maps_func');
function maps_func($atts, $content = null){
    extract(shortcode_atts(array(
        'data_lat' => '',
        'data_long' => '',
        'image' => '',
        'text_content' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="row">
        <div id="map"></div>
    </div>
    <script type="text/javascript">
     (function($) {
    "use strict"
    $(document).ready(function(){

        var map = new GMaps({
                el: '#map',
                lat: <?php echo esc_attr($data_lat);?>,
                lng: <?php echo esc_attr($data_long);?>,
                panControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                scrollwheel: false,
                draggable: true,
                navigationControl: false,
                scaleControl: false,
                zoomControl: false,
                disableDoubleClickZoom: false,
            });
            map.addMarker({
                lat: <?php echo esc_attr($data_lat);?>,
                lng: <?php echo esc_attr($data_long);?>,
                title: 'Web Designer',
                icon: '<?php echo esc_url($images[0]);?>',
                infoWindow: {
                    content: '<h6><?php echo esc_attr($text_content);?></p>',
                }
            });


            });
    })(jQuery);
        </script>
<?php  return ob_get_clean();
} 

add_shortcode('sup_byenow', 'sup_byenow_func');
function sup_byenow_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'textbutton' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
     <div class="sup_transparent sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_byenow text-center frombottom wow" data-wow-duration="0.6s">
                        <h2><?php echo esc_attr($title);?></h2>
                        <a href="<?php echo esc_url($link);?>" class="sup_btn sup_black_btn"><?php echo esc_attr($textbutton);?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 