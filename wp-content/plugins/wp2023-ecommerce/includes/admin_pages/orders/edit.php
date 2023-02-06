<?php
    $order_id = isset($_GET['order_id']) ? $_GET['order_id'] : 1;
    $objWp2023Order = new Wp2023Order();
    $order = $objWp2023Order->find($order_id);

    $order_items = $objWp2023Order->order_items($order_id);
?>
<div class="wrap">
    <h1 class="wp-heading-inline">Chi tiết đơn hàng: #<?= $order_id; ?></h1>
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <div id="post-body-content">
                <h2>Thông tin đơn hàng</h2>
                <table class="form-table">
                    <tr>
                        <td>Mã đơn hàng</td>
                        <td> <?= $order_id; ?> </td>
                    </tr>
                    <tr>
                        <td>Ngày đặt hàng</td>
                        <td> <?= $order->created; ?> </td>
                    </tr>
                    <tr>
                        <td>Tên khách hàng</td>
                        <td> <?= $order->customer_name; ?> </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td> <?= $order->customer_phone; ?> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?= $order->customer_email; ?> </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td> <?= $order->customer_address; ?> </td>
                    </tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td> <?= $order->status; ?> </td>
                    </tr>
                </table>
            </div>

            <div id="postbox-container-1">
                <h2>Hành động</h2>
            </div>

            <div id="postbox-container-2">
                <h2>CHi tiết đơn hàng</h2>
            </div>
        </div>
    </div>
</div>