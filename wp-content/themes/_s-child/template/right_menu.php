<?php
$img_forder_menu = get_stylesheet_directory_uri() . "/img/menu/";
?>

<div class="right_list">
    <div class="right_item menu_visitor">
        <img src="<?php echo $img_forder_menu; ?>visitor.png" alt="">
        メール予約<br>(ビジター)
        <a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>" class="a"></a>
    </div>
    <div class="right_item menu_member">
        <img src="<?php echo $img_forder_menu; ?>member.png" alt="">
        メール予約<br>(会員)
        <a href="<?php echo esc_url(home_url('/reserve-member-edit')); ?>" class="a"></a>
    </div>
    <div class="right_item menu_top" id="page_top">
        <i class="fas fa-arrow-up"></i><br>TOP
    </div>
</div>