<?php
class WP2023_About extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'wp2023_about', // Base ID
			'WP2023_About', // Name
			[
                'description' => 'Widget hiển thị thông tin website'
            ]
		);
	}

	public function widget( $args, $instance ) {
        global $theme_uri;
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
        $address 	= $instance['address'];
        $phone 		= $instance['phone'];
        $email 		= $instance['email'];
		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		}
        ob_start();
		?>
        <div class="footer__about">
            <div class="footer__about__logo">
                <a href="./index.html"><img src="<?= $theme_uri; ?>/assets/img/logo.png" alt=""></a>
            </div>
            <ul>
                <li>Address: <?= $address; ?></li>
                <li>Phone: <?= $phone; ?></li>
                <li>Email: <?= $email; ?></li>
            </ul>
        </div>
        <?php
        echo ob_get_clean();
		echo $after_widget;
	}

	public function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'New title', 'text_domain' );
		}

        $title 	= isset( $instance['title'] ) ? $instance['title'] : '';
        $address = isset( $instance['address'] ) ? $instance['address'] : '';
        $phone = isset( $instance['phone'] ) ? $instance['phone'] : '';
        $email = isset( $instance['email'] ) ? $instance['email'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
			<label for="<?php echo $this->get_field_name( 'address' ); ?>"><?php _e( 'address:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
        </p>
		<p>
			<label for="<?php echo $this->get_field_name( 'phone' ); ?>"><?php _e( 'phone:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
        </p>
		<p>
			<label for="<?php echo $this->get_field_name( 'email' ); ?>"><?php _e( 'email:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
		return $instance;
	}
}

new WP2023_About();