<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_footer = get_stylesheet_directory_uri() . "/img/footer/";
?>


<div class="dot_back">
    <div class="footer_guide">
        <div class="content">
            <div class="title">初めての方も安心して<span class="kaigyo">ご予約ください</span></div>
            <div class="des">Huru Huruは細かなヒアリングをして最適なシッターを派遣します。お気軽にご予約ください。</div>
            <div class="list">
                <div class="item front_btn_orange">
                    初めて予約する
                    <a href="" class="a"></a>
                </div>
                <div class="item">
                    <div class="tel_des">当日分(前日17時以降)の予約</div>
                    <div class="tel">
                        <img src="<?php echo $img_fol; ?>phone.png" alt="">
                        03-4400-2292
                    </div>
                </div>
            </div>
        </div>
        <div class="entry">
            <img class="pc" src="<?php echo $img_fol_footer; ?>entry_banner.png" alt="">
            <img class="sp" src="<?php echo $img_fol_footer; ?>entry_banner_sp.png" alt="">
            <a href="" class="a"></a>
        </div>
    </div>
</div>



<footer id="colophon" class="site-footer">
    <div class="back_cloud_top">
        <img class="pc_765" src="<?php echo $img_fol; ?>back_cloud_top.png" alt="">
        <img class="tb_765" src="<?php echo $img_fol; ?>back_cloud_top_sp.png" alt="">
    </div>
    <div class="img">
        <img src="<?php echo $img_fol; ?>orange.png" alt="">
    </div>
    <div class="content">
        <div class="logo">Huru-Huru</div>
        <div class="nav1">
            <div class="item">HOME<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="item">サービス内容<a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a></div>
            <div class="item">HURU-HURUとは<a href="<?php echo esc_url(home_url('/overview')); ?>" class="a"></a></div>
            <div class="item">ご利用料金<a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a></div>
            <div class="item">法人向けシッター派遣<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="item">NEWS<a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a></div>
        </div>
        <div class="btns">
            <div class="btn_orange">
                ご予約(初めての方)
                <a href="<?php echo esc_url(home_url('/reservation_biggner')); ?>" class="a"></a>
            </div>
            <div class="btn_green">
                ご予約(会員様)
                <a href="<?php echo esc_url(home_url('/reservation_member')); ?>" class="a"></a>
            </div>
        </div>
        <div class="nav2">
            <div class="item">シッター募集<a href="<?php echo esc_url(home_url('/entry')); ?>" class="a"></a></div>
            <div class="item">よくあるご質問とお問い合わせ<a href="<?php echo esc_url(home_url('/contact')); ?>" class="a"></a></div>
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