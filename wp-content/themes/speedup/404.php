<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
$speedup_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if(isset($speedup_redux_demo['404_image']['url']) && $speedup_redux_demo['404_image']['url'] != ''){?>
<div class="sup_breadcrumb_section" style="background-image: url(<?php echo esc_url($speedup_redux_demo['404_image']['url']);?>);">
<?php }else{?>
<div class="sup_breadcrumb_section" style="background-image: url(<?php echo get_template_directory_uri();?>/images/page_heading_bg.jpg);">
<?php }?> 
        <div class="sup_overlay"></div>
        <div class="sup_blue_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sup_pagetitle sup_toppadder90 sup_bottompadder90">
                        <h2><?php if(isset($speedup_redux_demo['404_title'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['404_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404 error', 'speedup' );
                                    }
                                    ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sup_breadcrumb_div sup_toppadder90 sup_bottompadder90">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'speedup' ); ?></a>
                            </li>
                            <li class="active"><?php if(isset($speedup_redux_demo['404_title'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['404_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404 error', 'speedup' );
                                    }
                                    ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sup_error_wrapper sup_toppadder100 sup_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sup_error_div text-center">
                        <h1 class="frombottom wow" data-wow-duration="0.5s"><?php if(isset($speedup_redux_demo['404_heading'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['404_heading']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404', 'speedup' );
                                    }
                                    ?></h1>
                        <h4 class="fromleft wow" data-wow-duration="0.6s"><?php if(isset($speedup_redux_demo['404_desc'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['404_desc']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'opps...', 'speedup' );
                                    }
                                    ?></h4>
                        <h5 class="fromright wow" data-wow-duration="0.7s"><?php if(isset($speedup_redux_demo['404_subtitle'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['404_subtitle']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'WE Are Sorry, But something went wrong', 'speedup' );
                                    }
                                    ?></h5>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="sup_btn sup_black_btn fromleft wow" data-wow-duration="0.8s"><?php if(isset($speedup_redux_demo['404_text'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['404_text']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'go Home ', 'speedup' );
                                    }
                                    ?><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        <form class="form-inline fromright wow" data-wow-duration="0.9s" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?php echo esc_html__( 'Search', 'speedup' );?>">
                            </div>
                            <button class="sup_search_btn" name='s'><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
get_footer();

?>

