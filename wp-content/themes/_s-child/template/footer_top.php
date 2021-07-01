<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_footer = get_stylesheet_directory_uri() . "/img/footer/";
?>

<div class="dot_back footer_guide">
    <div class="content">
        <div class="title">初めての方も安心して<span class="kaigyo">ご予約ください</span></div>
        <div class="des">HURU-HURUは細かなヒアリングをして最適なシッターを派遣します。お気軽にご予約ください。</div>
        <div class="list">
            <div class="item front_btn_orange">
                初めて予約する
                <a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>" class="a"></a>
            </div>
            <div class="item" id="footer_top_tel">
                <div class="tel_des">当日分(前日17時以降)の予約</div>
                <div class="tel">
                    <img src="<?php echo $img_fol; ?>phone.png" alt="">
                    03-4400-2292
                </div>
            </div>
        </div>
    </div>
    <div class="entry_banner">
        <img class="pc" src="<?php echo $img_fol_footer; ?>entry_banner.png" alt="">
        <img class="sp" src="<?php echo $img_fol_footer; ?>entry_banner_sp.png" alt="">
        <a href="<?php echo esc_url(home_url('/sitter-recruit')); ?>" class="a"></a>
    </div>
</div>