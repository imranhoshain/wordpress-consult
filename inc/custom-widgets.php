<?php
function blog_sidebar(){

	register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'theme-slug' ),
        'id' => 'right_sidebar',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<div class="blog_right_widget blog_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="blog_widget_title">',
		'after_title'   => '</h3>',
	    ) );
}

add_action( 'widgets_init', 'blog_sidebar' );

/**
 * Adds Foo_Widget widget.
 */
class Consult_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'New Widget', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'My Create New Widget', 'text_domain' ), ) // Args
		);
	}


	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		$description = ! empty( $instance['description'] ) ? $instance['description'] : esc_html__( 'New description', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>"></textarea>
		</p>
		<?php 
	}


/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';

		return $instance;
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}		

		if ( ! empty( $instance['description'] ) ) {
			echo $args['description'] . apply_filters( 'widget_title', $instance['description'] ) . $args['after_title'];
		}	
		echo $args['after_widget'];
	}

} // class Foo_Widget

//Widget Register

add_action( 'widgets_init', function(){
     register_widget( 'Consult_Widget' );
});

