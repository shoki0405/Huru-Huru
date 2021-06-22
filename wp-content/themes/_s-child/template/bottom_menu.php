<?php
$img_forder_right_menu = get_stylesheet_directory_uri() . "/img/right_menu/";
?>

<div class="bottom_menu">
    <div class="flex">
        <div class="item">
            <img src="<?php echo $img_forder_right_menu; ?>spmenu1.png" alt="">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
        </div>
        <div class="item">
            <img src="<?php echo $img_forder_right_menu; ?>spmenu2.png" alt="">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
        </div>
        <div class="item">
            <img src="<?php echo $img_forder_right_menu; ?>spmenu3.png" alt="">
            <a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a>
        </div>
        <div class="item">
            <img src="<?php echo $img_forder_right_menu; ?>spmenu4.png" alt="">
            <a href="<?php echo esc_url(home_url('/entry')); ?>" class="a"></a>
        </div>
    </div>
</div>