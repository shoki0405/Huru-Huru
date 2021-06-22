<?php
$img_forder_right_menu = get_stylesheet_directory_uri() . "/img/right_menu/";
?>

<div class="right_list">
    <div class="right_item">
        <img src="<?php echo $img_forder_right_menu; ?>right_menu1.svg" alt="">
        <a href="<?php echo esc_url(home_url('/reservation_biggner')); ?>" class="a"></a>
    </div>
    <div class="right_item">
        <img src="<?php echo $img_forder_right_menu; ?>right_menu2.svg" alt="">
        <a href="<?php echo esc_url(home_url('/reservation_member')); ?>" class="a"></a>
    </div>
    <div class="right_item" id="page_top">
        <img src="<?php echo $img_forder_right_menu; ?>right_menu3.svg" alt="">

    </div>
</div>