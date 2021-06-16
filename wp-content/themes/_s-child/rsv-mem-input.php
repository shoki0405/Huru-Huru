<?php

/**
 * Template Name: reservation-member-input
 */

// ファイル読み込み
require_once("contact/common/init.php");
require_once('contact/common/validate.php');

//操作アクションを取得
$act = isset($_POST["act"]) ? intval($_POST["act"]) : 1;

if ($act == 1) {
    // セッションデータクリア
    $contact_data = array();
    // 初期値セット
    $err_msg = array();
    $name = '';
    $email = '';
    $message = '';
} elseif ($act == 2) { // 確認ボタンを押下された場合
    // POSTデータをセッションに格納
    $_SESSION["contact_data"] = isset($_POST["contact_data"]) ? $_POST["contact_data"] : array();
    // セッションデータを配列にセット
    $contact_data = $_SESSION["contact_data"];
    // 各項目データをセット
    $name = isset($contact_data["name"]) ? $contact_data["name"] : "";
    $email = isset($contact_data["email"]) ? $contact_data["email"] : "";
    $message = isset($contact_data["message"]) ? $contact_data["message"] : "";
    // 入力チェック
    $err_msg = checkInputData($contact_data);
    if (!$err_msg) {
        header("Location: " . esc_url(home_url('/')) . "/reservation-member-confirm/");
        exit();
    }
} else {
    // セッションデータ取得
    $contact_data = isset($_SESSION["contact_data"]) ? $_SESSION["contact_data"] : array();
    // 各項目データをセット
    $name = isset($contact_data["name"]) ? $contact_data["name"] : "";
    $email = isset($contact_data["email"]) ? $contact_data["email"] : "";
    $message = isset($contact_data["message"]) ? $contact_data["message"] : "";
}

get_header(); ?>


<div class="reservation">
    <div class="mv">
        <img src="" alt="">
    </div>
</div>





<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
        <?php endwhile; ?>


        <?php if (count($err_msg) > 0) { ?>
            <div>
                <ul class="error">
                    <?php foreach ($err_msg as $msg) { ?>
                        <li><?php echo $msg; ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <div class="page-content">
            <p class="mb30">以下を入力し確認するボタンを押してください。<span class="red">*</span>は入力必須です。</p>

            <form class="form-horizontal" name="contactform" role="form" method="post" action="" novalidate>
                <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">お名前<span class="red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="contact_data[name]" placeholder="お名前" value="<?php echo htmlspchar($name); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">メールアドレス<span class="red">*</span></label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="contact_data[email]" placeholder="メールアドレス" value="<?php echo htmlspchar($email); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMessage" class="col-sm-3 control-label">お問い合わせ内容<span class="red">*</span></label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="contact_data[message]" rows="5"><?php echo htmlspchar($message); ?></textarea>
                    </div>
                </div>
                <div class="btn-area">
                    <button type="submit" name="btnSubmit" class="btn btn-success">確認する<i class="fa fa-arrow-circle-right"></i></button>
                    <input type="hidden" name="act" value="2">
                </div>
            </form>

        </div>

    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>