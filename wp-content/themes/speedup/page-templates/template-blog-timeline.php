<?php

/**

 * Template Name: Blog TimeLine

 */

 $speedup_redux_demo = get_option('redux_demo');

get_header(); ?>

<?php  $columns = get_post_meta(get_the_ID(),'_cmb_columns_page', true); ?>

<?php  $sidebar = get_post_meta(get_the_ID(),'_cmb_sidebar_page', true); ?>

<?php if(isset($speedup_redux_demo['blog_image']['url']) && $speedup_redux_demo['blog_image']['url'] != ''){?>

<div class="sup_breadcrumb_section" style="background-image: url(<?php echo esc_url($speedup_redux_demo['blog_image']['url']);?>);">

<?php }else{?>

<div class="sup_breadcrumb_section" style="background-image: url(<?php echo get_template_directory_uri();?>/images/page_heading_bg.jpg);">

<?php }?> 

        <div class="sup_overlay"></div>

        <div class="sup_blue_overlay"></div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_pagetitle sup_toppadder90 sup_bottompadder90">

                        <h2><?php if(isset($speedup_redux_demo['blog_title'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_title']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Blog', 'speedup' );

                                    }

                                    ?></h2>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_breadcrumb_div sup_toppadder90 sup_bottompadder90">

                        <ol class="breadcrumb">

                            <li><a href="<?php echo esc_url(home_url('/')); ?>">

                                                <?php echo esc_html__( 'Home', 'speedup' ); ?>

                                            </a>

                            </li>

                            <li class="active"><?php if(isset($speedup_redux_demo['blog_title'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_title']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Blog', 'speedup' );

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

                    <div class="post-timeline">

                        <ul class="timeline">

                        <?php 



                        $args = array(    

                            'paged' => $paged,

                            'post_type' => 'post',

                            );

                        $wp_query = new WP_Query($args);

                        $j = 0;

                        while ($wp_query -> have_posts()): $wp_query -> the_post(); 

                        $j++;

                        ?> 

                        <?php if($j%2 == '1'){?>

                            <li>

                        <?php }else{?>

                            <li class="timeline-inverted">

                            <?php } ?>

                            <?php if($j%4 == '1'){?>

                                <div class="timeline-badge fromtop wow" data-wow-duration="0.5s"><i class="glyphicon glyphicon-check"></i>

                                </div>

                                <div class="timeline-panel fromleft wow" data-wow-duration="0.5s">

                            <?php }elseif($j%4 == '2'){?>

                                <div class="timeline-badge warning fromtop wow" data-wow-duration="0.6s"><i class="glyphicon glyphicon-credit-card"></i>

                                    </div>

                                    <div class="timeline-panel fromright wow" data-wow-duration="0.6s">

                            <?php }elseif($j%4 == '3'){?>

                            <div class="timeline-badge danger fromtop wow" data-wow-duration="0.7s"><i class="glyphicon glyphicon-edit"></i>

                                </div>

                                <div class="timeline-panel fromleft wow" data-wow-duration="0.7s">

                                <?php }else{?>

                                <div class="timeline-badge info fromtop wow" data-wow-duration="0.8s"><i class="glyphicon glyphicon-floppy-disk"></i>

                                </div>

                                <div class="timeline-panel fromright wow" data-wow-duration="0.8s">

                                <?php } ?>

                                    <div class="entry">

                                        <?php if ( has_post_thumbnail() ) { ?>

                            <div class="entry-image">

                                <a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">

                                </a>

                            </div>

                            <?php }?>

                                        <div class="entry-title">

                                           <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                                        </div>

                                        <ul class="entry-meta">

                                <li><?php if(isset($speedup_redux_demo['blog_by'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_by']);?>

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

                                <li><a href="javascript:;"><?php if(isset($speedup_redux_demo['blog_on'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_on']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Posted at', 'speedup' );

                                    }

                                    ?> <?php the_time(get_option( 'date_format' ));?></a>

                                </li>

                            </ul>

                                        <div class="sup_title_border"></div>

                                        <div class="entry-content">

                                            <p><?php if(isset($speedup_redux_demo['blog_excerpt'])){?>

                                                        <?php echo esc_attr(speedup_excerpt($speedup_redux_demo['blog_excerpt'])); ?>

                                                        <?php }else{?>

                                                        <?php echo esc_attr(speedup_excerpt(50)); 

                                                        }

                                                        ?></p>

                                <a href="<?php the_permalink();?>" class="more-link sup_btn sup_black_btn"><?php if(isset($speedup_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['read_more']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Read More ', 'speedup' );

                                    }

                                    ?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>

                                            <ul class="entry-comment">

                                    <li><a href="javascript:;"><i class="icon-speech icons"></i> <?php comments_number('0', '1', '% '); ?></a>

                                    </li>

                                    <?php if(isset($speedup_redux_demo['blog_link_shre']) && $speedup_redux_demo['blog_link_shre']!= ''){?>

                                    <li><a href="<?php echo esc_url($speedup_redux_demo['blog_link_shre']);?>"><i class="icon-share icons"></i> <?php if(isset($speedup_redux_demo['blog_shre'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_shre']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Share This ', 'speedup' );

                                    }

                                    ?></a>

                                    </li>

                                    <?php }?>

                                    <?php if(isset($speedup_redux_demo['blog_link_like']) && $speedup_redux_demo['blog_link_like']!= ''){?>

                                    <li><a href="<?php echo esc_url($speedup_redux_demo['blog_link_like']);?>"><i class="icon-like icons"></i> <?php if(isset($speedup_redux_demo['blog_like'])){?>

                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_like']);?>

                                    <?php }else{?>

                                    <?php echo esc_html__( '97 Likes ', 'speedup' );

                                    }

                                    ?></a>

                                    </li>

                                    <?php }?>

                                </ul>

                                        </div>

                                    </div>

                                </div>

                            </li>

                            <?php endwhile;?>

                        </ul>

                    </div>

                </div>



            </div>

        </div>

    </div>

<?php

get_footer();

?>

