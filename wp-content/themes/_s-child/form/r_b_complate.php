<?php

require_once("form.php");

// メール送信
if (send(1, YOYAKU_B)) {
    echo "送信完了";
} else {
    echo "送信失敗";
}

// メール送信失敗でフォームトップへリダイレクト
// header("Location: done.php");

// メール送信完了でメッセージ表示

?>


<div>
    送信完了しました
</div>