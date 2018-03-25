<?php

/**

 * The Template for displaying all single posts

 */

$speedup_redux_demo = get_option('redux_demo');

get_header(''); ?>

<?php while(have_posts()) :the_post(); ?>

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

                        <h2><?php the_title(); ?></h2>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_breadcrumb_div sup_toppadder90 sup_bottompadder90">

                        <ol class="breadcrumb">

                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'speedup' ); ?></a>

                            </li>

                            <li class="active"><?php the_title(); ?></li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="sup_transparent sup_toppadder100 sup_bottompadder100">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="sup_portfolio_single sup_bottompadder100">

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="portfolio-single-image">

                                <?php if ( has_post_thumbnail() ) { ?>

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">

                                    <?php }?>

                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="portfolio-single-content">

                                    <div class="header-title">

                                        <h5><?php if(isset($speedup_redux_demo['portfolio_info'])){?>

                                                                    <?php echo esc_attr($speedup_redux_demo['portfolio_info']); ?>

                                                                    <?php }else{?>

                                                                    <?php echo esc_html__( 'Project Info:', 'speedup' );

                                                                    }

                                                                    ?></h5>

                                    </div>

                                    <ul class="portfolio-meta">

                                        <li><span><?php if(isset($speedup_redux_demo['portfolio_client'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['portfolio_client']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Client:', 'speedup' );

                                    }

                                    ?></span><?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_portfolio_client', true));?></li>

                                        <li><span><?php if(isset($speedup_redux_demo['portfolio_date'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['portfolio_date']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Date:', 'speedup' );

                                    }

                                    ?></span><?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_portfolio_date', true));?></li>

                                        <li><span><?php if(isset($speedup_redux_demo['portfolio_codded'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['portfolio_codded']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Codded:', 'speedup' );

                                    }

                                    ?></span><?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_portfolio_codded', true));?></li>

                                        <li><span><?php if(isset($speedup_redux_demo['portfolio_web'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['portfolio_web']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Web:', 'speedup' );

                                    }

                                    ?></span> <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_cmb_portfolio_web', true));?>"><?php echo esc_attr(get_post_meta(get_the_ID(),'_cmb_portfolio_web', true));?></a>

                                        </li>

                                    </ul>

                                    <?php the_content();?> 

                                    <?php wp_link_pages(); ?>

                                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(),'_cmb_portfolio_link', true));?>" class="sup_btn sup_black_btn"><?php if(isset($speedup_redux_demo['launch_project'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['launch_project']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Launch Project ', 'speedup' );

                                    }

                                    ?> <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endwhile;?>

                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">

                    <div class="sup_heading text-center sup_bottompadder70">

                        <h4><?php if(isset($speedup_redux_demo['latest_project'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['latest_project']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Latest Projects', 'speedup' );

                                    }

                                    ?></h4>

                        <div class="sup_title_border"></div>

                        <p><?php if(isset($speedup_redux_demo['desc_latest_project'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['desc_latest_project']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Latest Projects', 'speedup' );

                                    }

                                    ?></p>

                    </div>

                </div>

                <?php if(isset($speedup_redux_demo['portfolio_number'])){?>

                                    <?php $number = $speedup_redux_demo['portfolio_number']?>

                                    <?php }else{?>

                                    <?php $number ='3';

                                    }

                                    ?>

                <?php 

                            $args = array(   

                                        'post_type' => 'portfolio',   

                                        'paged' => $paged,

                                        'posts_per_page' => $number,

                                    );  

                                    $wp_query = new WP_Query($args);

                                    $i = 1;

                                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                                    $cates = get_the_terms(get_the_ID(),'type');

                                    $cate_name ='';

                                    $cate_slug = '';

                                          foreach((array)$cates as $cate){

                                if(count($cates)>0){

                                    $cate_name .= $cate->name.' ,' ;

                                    $cate_slug .= $cate->slug .' ';     

                                    } 

                                    } 

                    ?> 

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

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

                        <div class="portfolio-desc">

                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                            <span><a href="javascript:;"><?php echo esc_attr($cate_name);?></a></span>

                        </div>

                    </div>

                </div>

                <?php 

                    endwhile;?>

            </div>

        </div>

    </div>



   <?php

get_footer();

?>