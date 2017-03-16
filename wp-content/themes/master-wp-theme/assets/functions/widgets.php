<?php
// Creating the widget 
class cta_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        // Base ID of your widget
        'cta_widget',  
        // Widget name will appear in UI
        __('Call to Action', 'masterwp'),  
        // Widget description
        array( 'description' => __( 'call to action widget', 'masterwp' ), ) 
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $link = apply_filters( 'widget_link', $instance['link'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ){
            if(isset($args['before_link']))
                echo $args['before_link'] ;
            echo "<a href=\"". $link ."\">";
            echo $args['before_title'] ;
            echo $title ;
            echo $args['after_title']; 
            echo "</a>";
            if(isset($args['after_link']))
                echo $args['after_link']; 
        }
        // This is where you run the code and display the output 
        echo $args['after_widget'];
    }
            
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'masterwp' );
        }

        if ( isset( $instance[ 'link' ] ) ) {
            $link = $instance[ 'link' ];
        }
        else {
            $link = __( 'New link', 'masterwp' );
        }
        // Widget admin form
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
        </p>
    <?php 
    }
        
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ?
                             strip_tags( $new_instance['title'] ) :
                             '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ?
                             strip_tags( $new_instance['link'] ) :
                             '';

        return $instance;
    }
} // Class cta_widget ends here

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'cta_widget' );
}

add_action( 'widgets_init', 'wpb_load_widget' );

?>