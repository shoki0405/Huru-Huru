<?php

/**
 * type 1 = 予約　ビジター
 *      2 = 予約　会員
 *      3 = お問い合わせ
 *      4 = シッター募集
 */

define("YOYAKU_B", 1);
define("YOYAKU_M", 2);
define("CONTACT", 3);
define("ENTRY", 4);

function send($type, $data)
{

    $data = [];

    $data["name"] = "test";
    $data["email"] = "wa.nozomu@gmail.com";

    $header = "From: wa.nozomu@gmail.comReply-To: wa.nozomu@gmail.com";
    $subject = subject($type);
    $body = body($type, $data);

    if (mb_send_mail($data["email"], $subject, $body, $header)) {
        return true;
    } else {
        return false;
    };
}

function subject($type)
{
    if ($type === 1 || $type === 2) {
        return "[HURU-HURU]シッターサービスの予約申込ありがとうございます";
    } elseif ($type === 3) {
        return "[HURU-HURU]お問い合わせありがとうございます";
    } elseif ($type === 4) {
        return "[HURU-HURU]シッターにご応募いただきありがとうございます";
    }
}

function body($type, $data)
{

    if ($type === 1) {
        $body = "
        " . $data["name"] . "様

        この度はHURU-HURUのシッター登録にご応募いただきありがとうございます。
        下記の内容で承りました。

        ※本メールはお客様に送られる自動返信メールです。
        
        ---
        ご希望日時：
        延長の可能性：
        保護者氏名：
        フリガナ：
        生年月日：
        携帯電話番号：
        メールアドレス：
        郵便番号：
        都道府県：
        住所：
        建物名：
        最寄り駅：

        1人目お子様情報
        氏名：
        フリガナ：
        生年月日：
        健康状態：
        アレルギー：
        アレルギーの種類：

        ※以下はデータがあれば表示。その分追加する
        （2人目お子様情報　
        氏名：
        フリガナ：
        生年月日：
        健康状態：
        アレルギー：
        アレルギーの種類：）

        備考：

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp
        ";
        return $body;
    } elseif ($type === 2) {
        $body = "
        " . $data["name"] . "様

        この度はHURU-HURUのシッター登録にご応募いただきありがとうございます。
        下記の内容で承りました。

        ※本メールはお客様に送られる自動返信メールです。
        
        ---
        ご希望日時：
        延長の可能性：
        保護者氏名：
        フリガナ：
        生年月日：
        メールアドレス：
        
        1人目お子様情報
        氏名：
        フリガナ：
        健康状態：
        
        （2人目お子様情報
        氏名：
        フリガナ：
        健康状態：）
        
        備考：
        
        ---
        
        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。
        
        --
        HURU-HURU
        HP：https://www.huruhuru.jp
        ";
        return $body;
    } elseif ($type === 3) {
        $body = "
        " . $data["name"] . "様

        この度はHURU-HURUのシッター登録にご応募いただきありがとうございます。
        下記の内容で承りました。

        ※本メールはお客様に送られる自動返信メールです。

        ---
        問い合わせ者区分：（個人 or 法人）
        会社名：
        お名前：
        メールアドレス：
        電話番号：
        お問い合わせの種類：
        お問い合わせ内容：

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp
        ";
        return $body;
    } elseif ($type === 4) {
        $body = "
        " . $data["name"] . "様
        この度はHURU-HURUのシッター登録にご応募いただきありがとうございます。
        下記の内容で承りました。

        ※本メールはお客様に送られる自動返信メールです。

        ---
        氏名：
        メールアドレス：
        電話番号：
        郵便番号：
        都道府県：
        住所：
        建物名：
        職務経歴：
        保有資格： 
        備考：

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp
        ";
        return $body;
    }
}
