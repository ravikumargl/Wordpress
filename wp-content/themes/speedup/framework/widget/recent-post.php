<?php

/**

 * Recent_Posts widget class

 *

 * @since 2.8.0

 */

class speedup_widget_newss extends WP_Widget {



    function __construct() {

        $widget_ops = array('classname' => 'widget_news', 'description' => esc_html__( "The most recent posts on your site", 'speedup') );

        parent::__construct('recent-posts', esc_html__('speedup Recent Posts', 'speedup'), $widget_ops);

        $this->alt_option_name = 'widget_news';



    }



    function widget($args, $instance) {

        $cache = wp_cache_get('speedup_widget_newss', 'widget');



        if ( !is_array($cache) )

            $cache = array();



        if ( ! isset( $args['widget_id'] ) )

            $args['widget_id'] = $this->id;



        if ( isset( $cache[ $args['widget_id'] ] ) ) {

            echo $cache[ $args['widget_id'] ];

            return;

        }



        ob_start();

        extract($args);



        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts', 'speedup' );

        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;

        if ( ! $number )

            $number = 10;

        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;



        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

        if ($r->have_posts()) :

?>

        <?php echo htmlspecialchars_decode(esc_attr($before_widget)); ?>

        <?php if ( $title ) echo htmlspecialchars_decode(esc_attr($before_title)) . esc_attr($title) . htmlspecialchars_decode(esc_attr($after_title)); ?>

        <ul >

        <?php while ( $r->have_posts() ) : $r->the_post(); ?>

            <li>

                

                <div class="entery-c">

                    <div class="entry-date">

                        <h3><?php the_time('F j,Y');?></h3>

                    </div>

                    <div class="entry-comment-no">

                        <i class="fa fa-comments" aria-hidden="true"></i> <?php comments_number('0', '1', '% '); ?>

                    </div>

                    <p><a href="<?php the_permalink() ?>"><?php echo get_the_title() ? get_the_title() : get_the_ID(); ?></a></p>

                </div>

            </li>

        <?php endwhile; ?>

        </ul>

        

        <?php echo htmlspecialchars_decode(esc_attr($after_widget)); ?>

<?php

        // Reset the global $the_post as this query will have stomped on it

        wp_reset_postdata();



        endif;



        $cache[$args['widget_id']] = ob_get_flush();

        wp_cache_set('speedup_widget_newss', $cache, 'widget');

    }



    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);

        $instance['number'] = (int) $new_instance['number'];

        $instance['show_date'] = (bool) $new_instance['show_date'];

        



        $alloptions = wp_cache_get( 'alloptions', 'options' );

        if ( isset($alloptions['widget_news']) )

            delete_option('widget_news');



        return $instance;

    }



    



    function form( $instance ) {

        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;

        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;

?>

        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'speedup' ); ?></label>

        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>



        <p><label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php esc_html_e( 'Number of posts to show:', 'speedup' ); ?></label>

        <input id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" /></p>



        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_date' )); ?>" />

        <label for="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>"><?php esc_html_e( 'Display post date?', 'speedup' ); ?></label></p>

<?php

    }

}


class speedup_widget_search extends WP_Widget {



    function __construct() {

        $widget_ops = array('classname' => 'widget_search', 'description' => esc_html__( "Search on your site", 'speedup') );

        parent::__construct('search', esc_html__('speedup Search', 'speedup'), $widget_ops);

        $this->alt_option_name = 'widget_search';



        

    }



    function widget($args, $instance) {

        $cache = wp_cache_get('speedup_widget_search', 'widget');



        if ( !is_array($cache) )

            $cache = array();



        if ( ! isset( $args['widget_id'] ) )

            $args['widget_id'] = $this->id;



        if ( isset( $cache[ $args['widget_id'] ] ) ) {

            echo $cache[ $args['widget_id'] ];

            return;

        }



        ob_start();

        extract($args);



        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Search', 'speedup' );

        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );



        ?>

        <?php echo htmlspecialchars_decode(esc_attr($before_widget)); ?>

        <form class="form-inline" action="<?php echo esc_url(home_url('/')); ?>">

            <div class="form-group">

                <input type="text" class="form-control" placeholder="<?php echo esc_html__( 'Search', 'speedup' );?>" name="s" id="s">

            </div>

            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i>

            </button>

        </form>

        

        <?php echo htmlspecialchars_decode(esc_attr($after_widget)); ?>

<?php

        // Reset the global $the_post as this query will have stomped on it

   



        $cache[$args['widget_id']] = ob_get_flush();

        wp_cache_set('speedup_widget_search', $cache, 'widget');

    }



    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);

        



        $alloptions = wp_cache_get( 'alloptions', 'options' );

        if ( isset($alloptions['widget_search']) )

            delete_option('widget_search');



        return $instance;

    }



    



    function form( $instance ) {

        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

?>

        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'speedup' ); ?></label>

        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>



      

<?php

    }

}



class speedup_widget_news_projects extends WP_Widget {



    function __construct() {

        $widget_ops = array('classname' => 'widget_news_projects', 'description' => esc_html__( "The most recent projects on your site", 'speedup') );

        parent::__construct('recent-projects', esc_html__('speedup Recent projects', 'speedup'), $widget_ops);

        $this->alt_option_name = 'widget_news_projects';



        add_action( 'save_projects', array($this, 'flush_widget_cache') );

        add_action( 'deleted_projects', array($this, 'flush_widget_cache') );

        add_action( 'switch_theme', array($this, 'flush_widget_cache') );

    }



    function widget($args, $instance) {

        $cache = wp_cache_get('speedup_widget_news_projects', 'widget');



        if ( !is_array($cache) )

            $cache = array();



        if ( ! isset( $args['widget_id'] ) )

            $args['widget_id'] = $this->id;



        if ( isset( $cache[ $args['widget_id'] ] ) ) {

            echo $cache[ $args['widget_id'] ];

            return;

        }



        ob_start();

        extract($args);



        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent projects', 'speedup' );

        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;

        if ( ! $number )

            $number = 10;

        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;



        $r = new WP_Query( apply_filters( 'widget_projects_args', array( 'post_type' => 'portfolio','posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

        if ($r->have_posts()) :

?>

        <?php echo htmlspecialchars_decode(esc_attr($before_widget)); ?>

        <?php if ( $title ) echo htmlspecialchars_decode(esc_attr($before_title)) . esc_attr($title) . htmlspecialchars_decode(esc_attr($after_title)); ?>

        <div class=" widget-latest-project">

                        <ul>

        <?php while ( $r->have_posts() ) : $r->the_post(); ?>

            <li>

                <a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { ?>

            <?php $params = array( 'width' => 80, 'height' => 80 );

                              $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); ?>

                <img src="<?php echo esc_url($image);?>" class="img-responsive">

                <?php }?>

                </a>

            </li>



        <?php endwhile; ?>

        </ul>

        </div>

        <?php echo htmlspecialchars_decode(esc_attr($after_widget)); ?>

<?php

        // Reset the global $the_post as this query will have stomped on it

        wp_reset_postdata();



        endif;



        $cache[$args['widget_id']] = ob_get_flush();

        wp_cache_set('speedup_widget_news_projects', $cache, 'widget');

    }



    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);

        $instance['number'] = (int) $new_instance['number'];

        $instance['show_date'] = (bool) $new_instance['show_date'];

        $this->flush_widget_cache();



        $alloptions = wp_cache_get( 'alloptions', 'options' );

        if ( isset($alloptions['widget_news']) )

            delete_option('widget_news');



        return $instance;

    }



    function flush_widget_cache() {

        wp_cache_delete('speedup_widget_news_projects', 'widget');

    }



    function form( $instance ) {

        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;

        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;

?>

        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'speedup' ); ?></label>

        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>



        <p><label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php esc_html_e( 'Number of posts to show:', 'speedup' ); ?></label>

        <input id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" /></p>



        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_date' )); ?>" />

        <label for="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>"><?php esc_html_e( 'Display post date?', 'speedup' ); ?></label></p>

<?php

    }

}



function speedup_register_custom_widgets() {

    register_widget( 'speedup_widget_search' );

    register_widget( 'speedup_widget_newss' );

    register_widget( 'speedup_widget_news_projects' );

}

add_action( 'widgets_init', 'speedup_register_custom_widgets' );    





