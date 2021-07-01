<?php
$img_forder_menu = get_stylesheet_directory_uri() . "/img/menu/";
?>

<div class="bottom_menu">
    <div class="menu_top" id="page_top_sp">
        <i class="fas fa-arrow-up"></i><br>TOP
    </div>
    <div class="flex">
        <div class="bottom_item menu_visitor">
            <img src="<?php echo $img_forder_menu; ?>visitor.png" alt="">
            メール予約<br>(ビジター)
            <a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>" class="a"></a>
        </div>
        <div class="bottom_item menu_member">
            <img src="<?php echo $img_forder_menu; ?>member.png" alt="">
            メール予約<br>(会員)
            <a href="<?php echo esc_url(home_url('/reserve-member-edit')); ?>" class="a"></a>
        </div>
        <div class="bottom_item menu_price">
            <img src="<?php echo $img_forder_menu; ?>price.png" alt="">
            料金
            <a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a>
        </div>
        <div class="bottom_item menu_entry">
            <img src="<?php echo $img_forder_menu; ?>entry.png" alt="">
            シッター<br>募集
            <a href="<?php echo esc_url(home_url('/sitter-recruit')); ?>" class="a"></a>
        </div>
    </div>
</div>