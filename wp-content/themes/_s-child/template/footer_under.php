<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_footer = get_stylesheet_directory_uri() . "/img/footer/";
?>

<footer id="colophon" class="site-footer">
    <div class="back_cloud_top">
        <img class="pc_765" src="<?php echo $img_fol; ?>back_cloud_top.png" alt="">
        <img class="tb_765" src="<?php echo $img_fol; ?>back_cloud_top_sp.png" alt="">
    </div>
    <div class="content">
        <div class="img">
            <img src="<?php echo $img_fol; ?>orange.png" alt="">
        </div>
        <div class="logo logofont">HURU-HURU</div>
        <div class="btns">
            <div class="btn_green">
                ご予約(会員様)
                <a href="<?php echo esc_url(home_url('/reserve-member-edit')); ?>" class="a"></a>
            </div>
            <div class="btn_orange">
                ご予約(ビジター)
                <a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>" class="a"></a>
            </div>
        </div>
        <div class="nav">
            <div class="item">HOME<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div>
            <div class="item">サービス内容<a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a></div>
            <div class="item">HURU-HURUとは<a href="<?php echo esc_url(home_url('/about')); ?>" class="a"></a></div>
            <div class="item">ご利用料金<a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a></div>
            <!-- <div class="item">法人向けシッター派遣<a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a></div> -->
            <div class="item">NEWS<a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a></div>
        </div>
        <div class="nav">
            <div class="item">シッター募集<a href="<?php echo esc_url(home_url('/sitter-recruit')); ?>" class="a"></a></div>
            <div class="item">よくあるご質問とお問い合わせ<a href="<?php echo esc_url(home_url('/faq')); ?>" class="a"></a></div>
            <div class="item">PRIVACY POLICY<a href="<?php echo esc_url(home_url('/privacy')); ?>" class="a"></a></div>
        </div>

        <div class="nav_sns">
            <div class="item">
                <img src="<?php echo $img_fol_footer; ?>twitter.png" alt="">
                <a href="https://twitter.com/Huru2626Huru" class="a" target="_blank"></a>
            </div>
            <div class="item">
                <img src="<?php echo $img_fol_footer; ?>insta.png" alt="">
                <a href="https://www.instagram.com/huruhuru_j/?hl=ja" class="a" target="_blank"></a>
            </div>
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