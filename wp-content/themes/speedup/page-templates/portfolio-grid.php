<?php

/**

 * Template Name: Portfolio Grid

 */

 $speedup_redux_demo = get_option('redux_demo');;

 $textdoimain = 'speedup';

get_header(); ?>

<?php  $columns = get_post_meta(get_the_ID(),'_cmb_columns_page', true); ?>

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

    <div class="sup_transparent sup_toppadder100 sup_bottompadder100">

    <?php if($gutter == 'no'){?>

        <div class="container-fluid">

        <?php }else{?>

        <div class="container">

        <?php } ?>

            <div class="row">

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

                    <?php if($columns == '2columns'){?>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 <?php if($gutter == 'yes'){echo 'sup_bottompadder30';}?> mix mix-all <?php echo esc_attr($cate_slug);?>" data-value="1">

                            <?php }elseif ($columns == '3columns'){?>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 <?php if($gutter == 'yes'){echo 'sup_bottompadder30';}?> mix mix-all <?php echo esc_attr($cate_slug);?>" data-value="1">

                            <?php }else{?>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 <?php if($gutter == 'yes'){echo 'sup_bottompadder30';}?> mix mix-all <?php echo esc_attr($cate_slug);?>" data-value="1">

                            <?php } ?>

                        <?php if($gutter == 'no'){?>

                        <div class="row">

                        <?php } ?>

                        <div class="portfolio-item">

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

                            <?php if($content == 'yes'){?>

                            <div class="portfolio-desc">

                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                            <span><?php echo esc_attr($cate_name);?></span>

                        </div>

                            <?php } ?>

                        </div>

                        <?php if($gutter == 'no'){?>

                        </div>

                        <?php } ?>

                    </div>

                    <?php 

                    endwhile;?>

                </div>

                <nav>

                    <ul class="pager">

                        <?php speedup_pagination();?>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

<?php

get_footer();

?>