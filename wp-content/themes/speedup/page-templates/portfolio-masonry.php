<?php

/**

 * Template Name: Portfolio Masonry

 */

 $speedup_redux_demo = get_option('redux_demo');;

 $textdoimain = 'speedup';

get_header(); ?>

<?php  $icon = get_post_meta(get_the_ID(),'_cmb_icon_page', true); ?>

<?php  $content = get_post_meta(get_the_ID(),'_cmb_content_page', true); ?>

<?php  $gutter = get_post_meta(get_the_ID(),'_cmb_gutter_page', true); ?>

<?php if(isset($speedup_redux_demo['portfolio_image']['url']) && $speedup_redux_demo['portfolio_image']['url'] != ''){?>

<div class="sup_breadcrumb_section" style="background-image: url(<?php echo esc_url($speedup_redux_demo['portfolio_image']['url']);?>);">

<?php }else{?>

<div class="sup_breadcrumb_section" style="background-image: url(<?php echo get_template_directory_uri();?>/images/page_heading_bg.jpg);">

<?php }?> 

        <div class="sup_overlay"></div>

        <div class="sup_blue_overlay"></div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_pagetitle sup_toppadder90 sup_bottompadder90">

                        <h2><?php if(isset($speedup_redux_demo['portfolio_title'])){?>

                            <?php echo esc_attr($speedup_redux_demo['portfolio_title']); ?>

                            <?php }else{?>

                            <?php echo esc_html__( 'Portfolio', 'speedup' );

                            }

                            ?></h2>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_breadcrumb_div sup_toppadder90 sup_bottompadder90">

                        <ol class="breadcrumb">

                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'speedup' ); ?></a>

                            </li>

                            <li class="active"><?php if(isset($speedup_redux_demo['portfolio_title'])){?>

                            <?php echo esc_attr($speedup_redux_demo['portfolio_title']); ?>

                            <?php }else{?>

                            <?php echo esc_html__( 'Portfolio', 'speedup' );

                            }

                            ?></li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="sup_transparent sup_toppadder100">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="bar">

                    <div class="filter1">

                        <button class="action filter__item filter__item--selected" data-filter="*">All</button>

                        <?php 

                                    $categories = get_terms('type');   

                                     foreach( (array)$categories as $categorie){

                                        $cat_name = $categorie->name;

                                        $cat_slug = $categorie->slug;

                                ?>

                        <button class="action filter__item" data-filter=".<?php echo esc_attr($cat_slug);?>"><i class="icon icon--jacket"></i><span class="action__text"><?php echo esc_attr($cat_name);?></span></button>

                        <?php } ?>

                    </div>

                </div>

            </div>

            <?php if($gutter == 'no'){?>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

        <?php } ?>

            <div id="portfolio" class="grid grid--loading portfolio_mesonry <?php if($gutter == 'no'){echo 'portfolio_mesonry_nogutter';}?>">

                <!-- Loader -->

                <!--     -->

                <!-- Grid sizer for a fluid Isotope (Masonry) layout -->

                <div class="grid__sizer"></div>

                <!-- Grid items -->

                <?php 

                        $args = array(   

                                    'post_type' => 'portfolio',   

                                    'paged' => $paged,

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

                <?php  $size = get_post_meta(get_the_ID(),'_cmb_size_item', true); ?>

                <div class="grid__item <?php if($size == 'large'){echo 'grid__item--size-a';}?> <?php echo esc_attr($cate_slug);?>">

                    <div class="portfolio-item">

                        <div class="portfolio-image">

                        <?php $gallery = get_post_gallery( get_the_ID(), false );

                         if(isset($gallery['ids'])){    

                          $gallery_ids = $gallery['ids'];

                          $img_ids = explode(",",$gallery_ids);

                          $i=0; $j=0;?>

                        <div class="slider ">

                        <?php   

                            foreach( $img_ids AS $img_id ){ 

                            $image_src = wp_get_attachment_image_src($img_id,''); 

                                ?>

                            <div class="slider__item"><img src="<?php echo esc_url($image_src[0]); ?>" alt="Dummy" />

                            </div>

                            <?php 

                                $j++;   

                                }

                                  ?>

                        </div>

                        <?php }?>

                        <?php if ($gallery == '' && has_post_thumbnail() ) { ?>

                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php the_title();?>" />

                        <?php }?>

                        <?php if($icon == 'yes'){?>

                        <div class="portfolio-overlay"></div>

                        <div class="sup_links">

                            <a class="fancybox sup_link" data-fancybox-group="gallery1" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" title="<?php the_title();?>"><i class="fa fa-search" aria-hidden="true"></i></a>

                                    <a href="<?php the_permalink();?>" class="sup_link"><i class="fa fa-link" aria-hidden="true"></i></a>

                        </div>

                        <?php } ?>

                        </div>

                        <?php if($content == 'yes'){?>

                        <div class="portfolio-desc">

                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                            <span><?php echo esc_attr($cate_name);?></span>

                        </div>

                        <?php } ?>

                    </div>

                </div>

                <?php 

                    endwhile;?>

            </div>

        </div>

    </div>

</div>         

<?php

get_footer();

?>