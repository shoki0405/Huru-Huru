<?php
require_once("form/form.php");

get_header();
get_template_part("template/right_top");
get_template_part("template/bottom_menu_top");

// メール送信
if (send(YOYAKU_B, $_SESSION["data"])) {
    $_SESSION["data"] = [];
} else {
    // メール送信失敗でフォームトップへリダイレクト
    // header("Location: done.php");
}

$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";
?>

<div class="reservation">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_b_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_b_mv_sp.png" alt="">
    </div>

    <div class="text">
        <div class="title">
            送信完了
        </div>

        <div class="stepnav">
            <!-- ステップナビゲーション -->
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">お客様情報入力</div>
            </div>
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">お子様情報入力</div>
            </div>
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">送信確認</div>
            </div>
            <div class="item">
                <div class="circle">

                </div>
                <div class="step">完了</div>
            </div>
        </div>

        <div class="complate_text">
            ご予約のお申し込みありがとうございました。<br><br>
            お申し込みいただいた方には自動返信メールを送信させていただいております。
        </div>

        <div class="btn-swipe">
            HOME
            <i class="fas fa-arrow-right"></i>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
        </div>
    </div>
</div>

<?php get_footer("s"); ?>