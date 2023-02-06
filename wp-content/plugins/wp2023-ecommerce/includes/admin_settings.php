<?php
//Đăng ký cấu hình
/*
    ID trang setting: wp2023_settings_page
    Khóa lưu vào CSDL: wp2023_settings_options

    Section: wp2023_settings_section_shop_info: Thông tin cửa hàng
        Field: wp2023_settings_field_name: Tên cửa hàng
        Field: wp2023_settings_field_phone: Số điện thoại
        Field: wp2023_settings_field_email: Địa chỉ email
    Section: wp2023_settings_section_payment: Thông tin thanh toán
        Field: wp2023_settings_field_bank_name: Tên ngân hàng
        Field: wp2023_settings_field_bank_number: Số tài khoản
        Field: wp2023_settings_field_bank_user: Chủ tài khoản

*/
add_action( 'admin_init', 'wp2023_settings_init' );

function wp2023_settings_init() {
    /*
    register_setting( string $page, string $option_name, array $args = array() )
    add_settings_section( string $id, string $title, callable $callback, string $page, array $args = array() )
    add_settings_field( string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = array() )
    */
	//Đăng ký setting có ID là wp2023_settings_page
	register_setting( 'wp2023_settings_page', 'wp2023_settings_options' );

    //Section: wp2023_settings_section_shop_info: Thông tin cửa hàng
	add_settings_section(
		'wp2023_settings_section_shop_info',
		'Thông tin cửa hàng', 
        'wp2023_settings_section_shop_info_callback',
		'wp2023_settings_page'
	);
        // Field: wp2023_settings_field_name: Tên cửa hàng
        add_settings_field(
            'wp2023_settings_field_name',
            'Tên cửa hàng',
            'wp2023_settings_field_render',
            'wp2023_settings_page',
            'wp2023_settings_section_shop_info',
            [
                'type'      => 'text',
                'label_for' => 'wp2023_settings_field_name'
            ]
        );
        // Field: wp2023_settings_field_phone: Số điện thoại
        add_settings_field(
            'wp2023_settings_field_phone',
            'Số điện thoại',
            'wp2023_settings_field_render',
            'wp2023_settings_page',
            'wp2023_settings_section_shop_info',
            [
                'type'      => 'text',
                'label_for' => 'wp2023_settings_field_phone'
            ]
        );
        // Field: wp2023_settings_field_email: Địa chỉ email
        add_settings_field(
            'wp2023_settings_field_email',
            'Email',
            'wp2023_settings_field_render',
            'wp2023_settings_page',
            'wp2023_settings_section_shop_info',
            [
                'type'      => 'email',
                'label_for' => 'wp2023_settings_field_email'
            ]
        );    

    //Section: Thông tin thanh toán
    add_settings_section(
		'wp2023_settings_section_payment',
		'Thông tin thanh toán', 
        'wp2023_settings_section_payment_callback',
		'wp2023_settings_page'
	);
        // Field: wp2023_settings_field_bank_name: Tên ngân hàng
        add_settings_field(
            'wp2023_settings_field_bank_name',
            'Tên cửa hàng',
            'wp2023_settings_field_render',
            'wp2023_settings_page',
            'wp2023_settings_section_payment',
            [
                'type'      => 'text',
                'label_for' => 'wp2023_settings_field_bank_name'
            ]
        );
        // Field: wp2023_settings_field_bank_number: Số tài khoản
        add_settings_field(
            'wp2023_settings_field_bank_number',
            'Số tài khoản',
            'wp2023_settings_field_render',
            'wp2023_settings_page',
            'wp2023_settings_section_payment',
            [
                'type'      => 'text',
                'label_for' => 'wp2023_settings_field_bank_number'
            ]
        );
        // Field: wp2023_settings_field_bank_user: Chủ tài khoản
        add_settings_field(
            'wp2023_settings_field_bank_user',
            'Chủ tài khoản',
            'wp2023_settings_field_render',
            'wp2023_settings_page',
            'wp2023_settings_section_payment',
            [
                'type'      => 'text',
                'label_for' => 'wp2023_settings_field_bank_user'
            ]
        );
}

//callbacks
function wp2023_settings_section_shop_info_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>">Những thông tin giới thiệu về cửa hàng</p>
	<?php
}
function wp2023_settings_section_payment_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>">Thông tin thanh toán của cửa hàng</p>
	<?php
}
//hàm hiển thị các field html
function wp2023_settings_field_render($args){
    $options = get_option( 'wp2023_settings_options' );
    $type = ( isset( $args['type'] ) ) ? $args['type'] : 'text';
    switch ($type) {
        case 'text':
            ?>
            <input type="text" value="<?= $options[ $args['label_for'] ]; ?>" name="wp2023_settings_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
            <?php
            break;
        case 'number':
            ?>
            <input type="number" value="<?= $options[ $args['label_for'] ]; ?>" name="wp2023_settings_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
            <?php
            break;
        case 'email':
            ?>
            <input type="email" value="<?= $options[ $args['label_for'] ]; ?>" name="wp2023_settings_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
            <?php
            break;
        default:
            # code...
            break;
    }
    ?>
    <?php
}
