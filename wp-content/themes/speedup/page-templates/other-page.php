<?php

/**

 * Template Name: Other Page

 */

 $speedup_redux_demo = get_option('redux_demo');;

 $textdoimain = 'speedup';
get_header(''); ?>
<?php if (have_posts()){ ?>
<?php while (have_posts()) : the_post()?>
<?php if(isset($speedup_redux_demo['page_image']['url']) && $speedup_redux_demo['page_image']['url'] != ''){?>
<div class="sup_breadcrumb_section" style="background-image: url(<?php echo esc_url($speedup_redux_demo['page_image']['url']);?>);">
<?php }else{?>
<div class="sup_breadcrumb_section" style="background-image: url(<?php echo get_template_directory_uri();?>/images/page_heading_bg.jpg);">
<?php }?> 
        <div class="sup_overlay"></div>

        <div class="sup_blue_overlay"></div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_pagetitle sup_toppadder90 sup_bottompadder90">

                        <h2><?php the_title();?></h2>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="sup_breadcrumb_div sup_toppadder90 sup_bottompadder90">

                        <ol class="breadcrumb">

                            <li><a href="<?php echo esc_url(home_url('/')); ?>">

                                                <?php echo esc_html__( 'Home', 'speedup' ); ?>

                                            </a>

                            </li>

                            <li class="active"><?php the_title();?></li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>

    </div>        

                            <?php the_content(); ?>
                        <?php endwhile; ?>
                                      <?php }else {

                        echo 'Page Canvas For Page Builder'; 

                    }?>
                    </div>



 





           



<?php

get_footer();

?>