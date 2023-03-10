<?php
    global $post;
    $product_price = get_post_meta($post->ID,'product_price',true) ?? '';
    $product_price_sale = get_post_meta($post->ID,'product_price_sale',true);
    $product_stock = get_post_meta($post->ID,'product_stock',true);
?>
<table class="form-table" role="presentation">
    <tbody>
        <tr>
            <th scope="row">
                <label for="blogname">Giá Sản Phẩm</label>
            </th>
            <td>
                <input name="product_price" type="text" class="regular-text" value="<?= $product_price; ?>">
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="blogname">Giá Khuyến Mãi</label>
            </th>
            <td>
                <input name="product_price_sale" type="text" class="regular-text" value="<?= $product_price_sale; ?>">
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="blogname">Số Lượng</label>
            </th>
            <td>
                <input name="product_stock" type="number" class="regular-text" value="<?= $product_stock; ?>">
            </td>
        </tr>
    </tbody>
</table>