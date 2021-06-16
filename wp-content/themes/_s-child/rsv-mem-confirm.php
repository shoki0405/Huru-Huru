<?php

/**
 * Template Name: reservation-member-confirm
 */

// ファイル読み込み
require_once('contact/common/init.php');

// セッションデータ取得
$contact_data = isset($_SESSION["contact_data"]) ? $_SESSION["contact_data"] : array();
// セッションデータの有無をチェック
if (count($contact_data) == 0) {
    header("Location: " . esc_url(home_url('/')) . "/reservation-member-error/"); // データ取得できない場合はエラー画面へ遷移
    exit;
}

$name = isset($contact_data["name"]) ? $contact_data["name"] : "";
$email = isset($contact_data["email"]) ? $contact_data["email"] : "";
$message = isset($contact_data["message"]) ? $contact_data["message"] : "";

//操作アクションを取得
$act = isset($_POST["act"]) ? intval($_POST["act"]) : 1;

// 送信ボタンを押下された場合
if ($act == 3) {
    // メール送信
    $result_to_admin = sendMailtoAdmin($contact_data);
    $result_to_customer = sendMailtoCustomer($contact_data);
    // $result_to_admin = 1;
    // $result_to_customer = 1;


    if ($result_to_admin && $result_to_customer) { // 送信成功
        $_SESSION = array();  // セッションに格納された情報をカラにします。
        header("Location: " . esc_url(home_url('/')) . "/reservation-member-done/");
        exit;
    } else { // 送信失敗
        $_SESSION = array();  // セッションに格納された情報をカラにします。
        header("Location: " . esc_url(home_url('/')) . "/reservation-member-error/");
        exit;
    }
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
        <?php endwhile; ?>

        <div class="page-content">
            <p class="mb30">
                この内容でよろしければ送信するボタンを押してください。<br>
                メールアドレスに間違いがあると回答の返信ができませんので十分にご確認ください。
            </p>

            <form class="form-horizontal" name="contactform" role="form" method="post" action="">
                <table class="table table-bordered confirm">
                    <tr>
                        <th>お名前</th>
                        <td><?php echo htmlspchar($name); ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo htmlspchar($email); ?></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><?php echo nl2br(htmlspchar($message)); ?></td>
                    </tr>
                </table>

                <div class="btn-area">
                    <button type="button" class="btn btn-default" onclick="contactform.action='/testsite/contact/';contactform.submit();">戻る<i class="fa fa-reply"></i></button>
                    <button type="submit" class="btn btn-success">送信する<i class="fa fa-envelope-o"></i></button>
                    <input type="hidden" name="act" value="3">
                </div>
            </form>

        </div>

    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>