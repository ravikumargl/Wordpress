<?php 
class Home_Rollover_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'home-rollover-widget',
      'Image Title Widget',
      array(
        'description' => 'Image Title Widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
    echo'<div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="widget">
                      <div class="widget-title">
                            <h6><a href="'.esc_url(home_url()).'"><img src="'.esc_url($instance['image_uri']).'" alt=""></a></h6>
                        </div>
                        <div class="text-widget">
                            <p>                      
                               '.esc_attr($instance['text']).'
                            </p>
                        </div><!-- end text-widget -->
                        </div><!-- end widget -->
                </div><!-- end col -->';
   
  }

  public function form( $instance )
  {
    // removed the for loop, you can create new instances of the widget instead
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('image_uri')); ?>">Image</label><br />
      <input type="text" class="img" name="<?php echo esc_attr($this->get_field_name('image_uri')); ?>" id="<?php echo esc_attr($this->get_field_id('image_uri')); ?>" value="<?php echo esc_url($instance['image_uri']); ?>" />
      <input type="button" class="select-img" value="Select Image" />
    </p>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('text')); ?>">Text</label><br />
      <input type="text" name="<?php echo esc_attr($this->get_field_name('text')); ?>" id="<?php echo esc_attr($this->get_field_id('text')); ?>" value="<?php echo esc_attr($instance['text']); ?>" class="widefat" />
    </p>
    
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', create_function('', 'return register_widget("Home_Rollover_Widget");') );







class Maps_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'maps-widget',
      'Maps Widget',
      array(
        'description' => 'Google Maps Widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
 $redux_demo = get_option('redux_demo');;
              ?>
      <div id="mapdiv"></div>
      <script type="text/javascript">
     (function($) {
    "use strict"
    $(document).ready(function(){

        // google map 
    var myCenter=new google.maps.LatLng(<?php echo esc_attr($instance['latitude']); ?>, <?php echo esc_attr($instance['longitude']); ?>);
    function initialize(){
      var mapProp = {
        center:myCenter,
        zoom:<?php echo esc_attr($instance['zoom']); ?>,
        scrollwheel: false,
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        
        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
      };

      var map=new google.maps.Map(document.getElementById("mapdiv"),mapProp);
      var icon = { 
        url: '<?php echo esc_url($instance['image_uri']); ?>'
      };
      var marker=new google.maps.Marker({
        position:myCenter,
        map: map,
        title: 'Funtionthemes',
        icon: icon
      });
      marker.setMap(map);
      var infowindow = new google.maps.InfoWindow({
        content:"<?php echo esc_attr($instance['title']); ?>"
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);


            });
    })(jQuery);
        </script>
              <?php
   
  }

  public function form( $instance )
  {
    // removed the for loop, you can create new instances of the widget instead
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>">Latitude</label><br />
      <input type="text" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" value="<?php echo esc_attr($instance['latitude']); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>">Longitude</label><br />
      <input type="text" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" value="<?php echo esc_attr($instance['longitude']); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('zoom')); ?>">Zoom</label><br />
      <input type="text" name="<?php echo esc_attr($this->get_field_name('zoom')); ?>" id="<?php echo esc_attr($this->get_field_id('zoom')); ?>" value="<?php echo esc_attr($instance['zoom']); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Title</label><br />
      <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('image_uri')); ?>">Maps Icon</label><br />
      <input type="text" class="img" name="<?php echo esc_attr($this->get_field_name('image_uri')); ?>" id="<?php echo esc_attr($this->get_field_id('image_uri')); ?>" value="<?php echo esc_url($instance['image_uri']); ?>" />
      <input type="button" class="select-img" value="Select Image" />
    </p>
    
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', create_function('', 'return register_widget("Maps_Widget");') );




