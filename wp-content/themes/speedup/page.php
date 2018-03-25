<?php
/**
 * The Template for displaying all single posts
 */
$speedup_redux_demo = get_option('redux_demo');
get_header(); ?>
    <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); 
            ?>
    <?php  $sidebar = get_post_meta(get_the_ID(),'_cmb_sidebar_single', true); ?>

<div class="sup_transparent sup_toppadder100">
        <div class="container">
            <div class="row">
            <?php if($sidebar == 'full'){?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php }elseif ($sidebar == 'right'){?>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <?php }elseif ($sidebar == 'left'){?>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                <?php }elseif ($sidebar == 'both'){?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                <?php }else{?>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" <?php post_class(); ?>>
                <?php }?>
                    <div class="post-timeline">
                        <div class="entry">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="entry-image">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-responsive" alt="">
                            </div>
                            <?php }?>
                            <div class="entry-title">
                                <h2><?php the_title();?></h2>
                            </div>
                            <ul class="entry-meta">
                                <li><?php if(isset($speedup_redux_demo['blog_by'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_by']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By', 'speedup' );
                                    }
                                    ?> <?php the_author_posts_link(); ?>
                                </li>
                                <li><?php if(isset($speedup_redux_demo['blog_on'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_on']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Posted at', 'speedup' );
                                    }
                                    ?> <?php the_time(get_option( 'date_format' ));?>
                                </li>
                            </ul>
                            <div class="sup_title_border"></div>
                            <div class="entry-content">
                        <?php the_content();?>
                    <?php wp_link_pages(); ?>
                    </div>
                    <?php           
                    if ( comments_open() || get_comments_number() ) {
                      comments_template();
                    }
                    ?>  
                        </div>
                    </div>
                </div>
                <?php if($sidebar == 'both'){?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-6 col-md-pull-6">
                    <div class="sidebar-widgets-wrap">
                        <?php get_sidebar('other');?>
                    </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar-widgets-wrap">
                        <?php get_sidebar();?>
                    </div>
                </div>
                <?php }elseif($sidebar == 'left'){?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
                    <div class="sidebar-widgets-wrap">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }elseif($sidebar == 'full'){?>
                <?php }else{?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar-widgets-wrap">
                        <?php get_sidebar();?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php
get_footer();
?>