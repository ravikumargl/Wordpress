<?php $speedup_redux_demo = get_option('redux_demo');?>
    <div class="sup_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-push-6 col-md-push-6 col-sm-push-0 col-xs-push-0 sup_leftpadder0">
                    <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-area-3' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-pull-6 col-md-pull-6 col-sm-pull-0 col-xs-pull-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sup_toppadder80 sup_bottompadder40">
                            <div class="sup_footer_widget">
                                <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer-area-1' ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sup_toppadder80 sup_bottompadder40">
                            <div class="sup_footer_widget">
                                <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer-area-2' ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sup_bottom_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_copyright">
                        <p><?php if(isset($speedup_redux_demo['footer_text'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['footer_text']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Copyright &copy; 2017. Speed Up - ThemeForest Author. ', 'speedup' );
                                    }
                                    ?></p>
                        <a href="#" class="sup_gototop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sup_footer_sociallink">
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
        <div class="sup_blackbg2"></div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>