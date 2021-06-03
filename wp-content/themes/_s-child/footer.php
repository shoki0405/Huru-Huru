<?php
$img_folder_footer = get_stylesheet_directory_uri() . "/img/footer/";
?>
<div class="dot_back">
    <div class="front_guide front_content">
        <div class="front_guide_content">
            <div class="front_guide_content_title">初めての方も安心してご予約ください</div>
            <div class="front_guide_content_des">Huru Huruは細かなヒアリングをして最適なシッターを派遣します。お気軽にご予約ください。</div>
            <div class="front_guide_list">
                <div class="front_guide_item front_btn_orange">
                    初めて予約する
                    <a href="" class="a"></a>
                </div>
                <div class="front_guide_item">
                    <div class="front_guide_tel_des">当日分(前日17時以降)の予約</div>
                    <div class="front_guide_tel"><span><img src="<?php echo $img_folder_footer; ?>footer_guide_phone.png" alt=""></span>03-4400-2292</div>
                </div>
            </div>
        </div>
        <div class="front_guide_entry">
            <img src="<?php echo $img_folder_footer; ?>footer_banner.png" alt="">
            <a href="" class="a"></a>
        </div>
    </div>
</div>
<footer id="colophon" class="site-footer dot_back">
    <div class="footer_back">
        <img src="<?php echo $img_folder_footer; ?>footer_back.png" alt="">
    </div>
    <div class="footer_content">
        <div class="footer_logo">HURU-HURU</div>
        <div class="footer_nav1">
            <div class="footer_item">HOME<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="footer_item">サービス内容<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="footer_item">HURU-HURUとは<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="footer_item">ご利用料金<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="footer_item">法人向けシッター派遣<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="footer_item">NEWS<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
        </div>
        <div class="footer_btns">
            <div class="footer_btn_orange">
                ご予約(初めての方)
                <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
            </div>
            <div class="footer_btn_green">
                ご予約(会員様)
                <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
            </div>
        </div>
        <div class="footer_nav2">
            <div class="footer_item">シッター募集<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="footer_item">よくあるご質問とお問い合わせ<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
        </div>
        <div class="copyright">©sitters Co.Ltd All Rights Reserved.</div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<!-- 独自JS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
</body>

</html>