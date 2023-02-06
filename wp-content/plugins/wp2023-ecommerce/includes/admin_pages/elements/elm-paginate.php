
<?php
    $paged = isset($_GET['paged']) ? $_GET['paged'] : 1;
?>
<div class="tablenav-pages">
    <span class="displaying-num"><?= $total_items;?> mục</span>
    <span class="pagination-links">
        <a class="prev-page button" href="admin.php?page=wp2023-orders&paged=<?= $paged - 1;?>">
            <span aria-hidden="true">‹</span>
        </a>
        <span class="screen-reader-text">Trang hiện tại</span>
        <span id="table-paging" class="paging-input">
            <span class="tablenav-paging-text"><?= $paged;?> trên 
                <span class="total-pages"><?= $total_pages;?></span>
            </span>
        </span>
        <a class="next-page button" href="admin.php?page=wp2023-orders&paged=<?= $paged + 1;?>">
            <span aria-hidden="true">›</span>
        </a>
    </span>
    
</div>