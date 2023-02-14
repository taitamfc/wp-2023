<?php
class WP2023_Social extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'wp2023_social', // Base ID
			'WP2023_Social', // Name
			[
                'description' => 'Widget hiển thị social'
            ]
		);
	}

	public function widget( $args, $instance ) {
        global $theme_uri;
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
        $facebook = isset($instance['facebook']) ? $instance['facebook'] : '';
        $instagram = isset($instance['instagram']) ? $instance['instagram'] : '';
        $twitter = isset($instance['twitter']) ? $instance['twitter'] : '';
        $pinterest = isset($instance['pinterest']) ? $instance['pinterest'] : '';
		echo $before_widget;
		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		}
        ob_start();
		?>
        <div class="footer__widget__social">
			<?php if($facebook):?>
            <a href="<?= $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <?php endif;?>

			<?php if($instagram):?>
			<a href="<?= $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php endif;?>

			<?php if($twitter):?>
            <a href="<?= $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php endif;?>

			<?php if($pinterest):?>
            <a href="<?= $pinterest; ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
            <?php endif;?>
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

        $facebook = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
        $instagram = isset( $instance['instagram'] ) ? $instance['instagram'] : '';
        $twitter = isset( $instance['twitter'] ) ? $instance['twitter'] : '';
        $pinterest = isset( $instance['pinterest'] ) ? $instance['pinterest'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
			<label for="<?php echo $this->get_field_name( 'facebook' ); ?>"><?php _e( 'facebook:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
        </p>
		<p>
			<label for="<?php echo $this->get_field_name( 'instagram' ); ?>"><?php _e( 'instagram:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'twitter' ); ?>"><?php _e( 'twitter:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'pinterest' ); ?>"><?php _e( 'pinterest:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
		return $instance;
	}
}

new WP2023_Tags();