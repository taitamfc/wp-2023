<?php
$image  = get_term_meta( $term->term_id,'image',true );
?>
<tr class="form-field term-meta-text-wrap">
    <th scope="row"><label for="term-meta-text">Hình ảnh</label></th>
    <td>
        <input type="text" name="image" value="<?php echo esc_attr( $image ); ?>" class="term-meta-text-field"  />
    </td>
</tr>