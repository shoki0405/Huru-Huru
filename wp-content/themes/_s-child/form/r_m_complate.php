<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";
?>

<div class="reservation">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_m_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_m_mv_sp.png" alt="">
    </div>





    <div class="text">
        <div class="title">
            送信完了
        </div>
        <div class="des">
            ご予約のお申し込みありがとうございました。<br><br>
            お申し込みいただいた方には自動返信メールを送信させていただいております。
        </div>
    </div>





    <div class="btn-swipe">
        HOME
        <i class="fas fa-arrow-right"></i>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
    </div>
</div>