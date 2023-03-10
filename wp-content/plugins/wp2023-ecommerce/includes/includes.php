<?php
// Khai báo các functions hỗ trợ
include_once WP2023_PATH.'includes/functions.php';

// Đăng ký post_types
include_once WP2023_PATH.'includes/post_types.php';

// Tạo metabox
include_once WP2023_PATH.'includes/metaboxes.php';

// Hiển thị thêm các cột trong màn hình quản lý danh sách sản phẩm và chuyên mục
include_once WP2023_PATH.'includes/admin_columns.php';

// Tạo menu trong admin
include_once WP2023_PATH.'includes/admin_menus.php';

// Tạo trang cấu hình
include_once WP2023_PATH.'includes/admin_settings.php';

//Tạo trang quản lý đơn hàng
include_once WP2023_PATH.'includes/classes/Wp2023Order.php';

//Sử dụng ajax trong wordpress
include_once WP2023_PATH.'includes/ajaxs.php';

//Viết api cho wordpress
include_once WP2023_PATH.'includes/apis.php';
