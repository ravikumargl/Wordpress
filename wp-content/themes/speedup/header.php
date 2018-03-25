<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<!--<![endif]-->
<!-- BEGIN HEAD -->
<?php 
$speedup_redux_demo = get_option('redux_demo');?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon links -->
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
        <link rel="shortcut icon" href="<?php if(isset($speedup_redux_demo['favicon']['url'])){?><?php echo esc_url($speedup_redux_demo['favicon']['url']); ?><?php }?>">
        <?php }?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--Preloader Start-->
    <div id="sup_preloader_wrapper">
        <div id="sup_preloader_box">
            <div class="cssload-loader">
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
                <div class="cssload-side"></div>
            </div>
        </div>
    </div>
    <!--Preloader End-->
       <div class="sup_topheader sup_toppadder30 sup_bottompadder30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sup_logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php $speedup_redux_demo = get_option('redux_demo');if(isset($speedup_redux_demo['logo']['url'])){?>
                                    <?php  if($speedup_redux_demo['logo']['url'] != ''){ ?>
                                    <img src="<?php echo esc_url($speedup_redux_demo['logo']['url']); ?>" class="img-responsive" alt="<?php bloginfo('title'); ?>">
                        <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-responsive" alt="<?php bloginfo('title'); ?>">
                        <?php }}else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-responsive" alt="<?php bloginfo('title'); ?>">
                        <?php }?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class="sup_social_link">
                        <ul>
                        <?php if(isset($speedup_redux_demo['social_link_facebook']) && $speedup_redux_demo['social_link_facebook']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_facebook']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_facebook'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_facebook']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-facebook', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_twitter']) && $speedup_redux_demo['social_link_twitter']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_twitter']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_twitter'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_twitter']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-twitter', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_pinterest']) && $speedup_redux_demo['social_link_pinterest']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_pinterest']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_pinterest'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_pinterest']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-pinterest-p', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_linkedin']) && $speedup_redux_demo['social_link_linkedin']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_linkedin']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_linkedin'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_linkedin']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-linkedin', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_google']) && $speedup_redux_demo['social_link_google']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_google']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_google'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_google']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-google-plus', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_behance']) && $speedup_redux_demo['social_link_behance']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_behance']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_behance'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_behance']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-behance', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_vimeo']) && $speedup_redux_demo['social_link_vimeo']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_vimeo']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_vimeo'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_vimeo']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-vimeo', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                            <?php if(isset($speedup_redux_demo['social_link_youtube']) && $speedup_redux_demo['social_link_youtube']!= ''){?>
                            <li><a href="<?php echo esc_url($speedup_redux_demo['social_link_youtube']);?>"><i class="<?php if(isset($speedup_redux_demo['social_icon_youtube'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['social_icon_youtube']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'fa fa-youtube-play', 'speedup' );
                                    }
                                    ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sup_mainheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="navbar navbar-default sup_header">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="sup_menumain_div">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sup_menu" aria-expanded="false">
                                            <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'speedup' ); ?></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <div class="collapse navbar-collapse sup_mainmenu" id="sup_menu">
                                            <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'primary',
                            'container' => '',
                            'menu_class' => '', 
                            'menu_id' => '',
                            'menu'            => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'echo'            => true,
                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                             'walker'            => new speedup_wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="nav" class="nav navbar-nav  %2$s">%3$s</ul>',
                            'depth'           => 0,        
                        )
                     ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="sup_right_link">
                                    <ul>
                                        <li id="top-search"><a href="javascript:;"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="top-search-wrap">
                            <?php get_search_form();?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>