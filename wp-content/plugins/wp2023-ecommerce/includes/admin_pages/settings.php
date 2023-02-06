<?php
// check user capabilities
if ( ! current_user_can( 'manage_options' ) ) {
    return;
}

// add error/update messages

// check if the user have submitted the settings
// WordPress will add the "settings-updated" $_GET parameter to the url
if ( isset( $_GET['settings-updated'] ) ) {
    // add settings saved message with the class of "updated"
    add_settings_error( 'wp2023_settings_messages', 'wp2023_settings_message', 'Cập nhật thành công', 'updated' );
}

// show error/update messages
settings_errors( 'wp2023_settings_messages' );
?>
<div class="wrap">
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wp2023_settings"
        settings_fields( 'wp2023_settings_page' );
        // output setting sections and their fields
        // (sections are registered for "wp2023_settings_page", each field is registered to a specific section)
        do_settings_sections( 'wp2023_settings_page' );
        // output save settings button
        submit_button( 'Lưu cấu hình' );
        ?>
    </form>
</div>
<?php