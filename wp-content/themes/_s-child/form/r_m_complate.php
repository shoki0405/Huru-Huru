<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

// 送信処理
$to = "wa.nozomu@gmail.com";
$subject = "たいとる";
$body = "内容";
$header = "From: $to\nReply-To: $to\n";
mb_send_mail($to, $subject, $body, $header);
// 送信失敗時、header関数で入力画面へ



?>

<div class="reservation">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_m_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_m_mv_sp.png" alt="">
    </div>

    <div class="title">
        送信完了
    </div>

    <div class="des">
        ご予約のお申し込みありがとうございました。<br><br>
        お申し込みいただいた方には自動返信メールを送信させていただいております。
    </div>

    <div class="btn-swipe">
        HOME<i class="fas fa-arrow-right"></i>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
    </div>
</div>