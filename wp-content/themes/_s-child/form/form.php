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

function view_require($url)
{
    $file = "form/" . $url;
    get_header();
    get_template_part($file);
    get_footer("s");
}

function send($type, $data)
{
    $header = "From: " . $data["email"] . "Reply-To: " . $data["email"];
    $subject = subject($type);
    $body = body($type, $data);
    return mb_send_mail($data["email"], $subject, $body, $header);
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



        $body = <<<EOD
        {$data['fullname']}様

        この度はHURU-HURUのシッターサービスの予約を申込いただきありがとうございます。
        下記の内容で予約申込を承りました。

        ※本メールはお客様に送られる自動返信メールです。

        ---
        ご希望日時：
        {$data['start_date']} {$data['start_hour']}時{$data['start_minuts']}分
        {$data['end_date']} {$data['end_hour']}時{$data['end_minuts']}分

        延長の可能性：{$data['extension']}
        保護者氏名：{$data['fullname']}
        フリガナ：{$data['kana']}
        生年月日：{$data['birth']}
        携帯電話番号：{$data['tel']}
        メールアドレス：{$data['email']}
        郵便番号：{$data['zip']}
        都道府県：{$data['pref']}
        住所：{$data['address']}
        建物名：{$data['building']}
        最寄り駅：{$data['station']}

        1人目お子様情報
        氏名：{$data['name_c1']}
        フリガナ：{$data['kana_c1']}
        生年月日：{$data['birth_c1']}
        健康状態：{$data['status_c1']}
        アレルギー：{$data['allergy_c1']}
        アレルギーの種類：{$data['allergy_name_c1']}\n\n
        EOD;




        if (!empty($data['name_c2'])) {
            $body .= <<<EOD
            2人目お子様情報
            氏名：{$data['name_c2']}
            フリガナ：{$data['kana_c2']}
            生年月日：{$data['birth_c2']}
            健康状態：{$data['status_c2']}
            アレルギー：{$data['allergy_c2']}
            アレルギーの種類：{$data['allergy_name_c2']}\n\n
            EOD;
        }

        if (!empty($data['name_c3'])) {
            $body .= <<<EOD
            3人目お子様情報
            氏名：{$data['name_c3']}
            フリガナ：{$data['kana_c3']}
            生年月日：{$data['birth_c3']}
            健康状態：{$data['status_c3']}
            アレルギー：{$data['allergy_c3']}
            アレルギーの種類：{$data['allergy_name_c3']}\n\n
            EOD;
        }



        $body .= <<<EOD
        備考：
        {$data['bikou']}

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp

        EOD;






        return $body;
    } elseif ($type === 2) {

        $body = <<<EOD
        {$data['fullname']}様

        この度はHURU-HURUのシッターサービスの予約を申込いただきありがとうございます。
        下記の内容で予約申込を承りました。

        ※本メールはお客様に送られる自動返信メールです。

        ---
        ご希望日時：
        {$data['start_date']} {$data['start_hour']}時{$data['start_minuts']}分
        {$data['end_date']} {$data['end_hour']}時{$data['end_minuts']}分

        延長の可能性：{$data['extension']}
        保護者氏名：{$data['fullname']}
        フリガナ：{$data['kana']}
        生年月日：{$data['birth']}
        メールアドレス：{$data['email']}

        1人目お子様情報
        氏名：{$data['name_c1']}
        フリガナ：{$data['kana_c1']}
        生年月日：{$data['birth_c1']}
        健康状態：{$data['status_c1']}\n\n
        EOD;

        if (!empty($data['name_c2'])) {
            $body .= <<<EOD
            2人目お子様情報
            氏名：{$data['name_c2']}
            フリガナ：{$data['kana_c2']}
            生年月日：{$data['birth_c2']}
            健康状態：{$data['status_c2']}\n\n
            EOD;
        }

        if (!empty($data['name_c3'])) {
            $body .= <<<EOD
            3人目お子様情報
            氏名：{$data['name_c3']}
            フリガナ：{$data['kana_c3']}
            生年月日：{$data['birth_c3']}
            健康状態：{$data['status_c3']}\n\n
            EOD;
        }

        $body .= <<<EOD
        備考：
        {$data['bikou']}

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp

        EOD;

        return $body;
    } elseif ($type === 3) {



        $body = <<<EOD
        {$data["fullname"]}様

        この度はHURU-HURUにお問い合わせいただきありがとうございます。
        下記の内容で承りました。

        ※本メールはお客様に送られる自動返信メールです。

        ---
        問い合わせ者区分：{$data["kubun"]}
        会社名：{$data["company"]}
        お名前：{$data["fullname"]}
        メールアドレス：{$data["email"]}
        電話番号：{$data["tel"]}
        お問い合わせの種類：{$data["contact_category"]}
        お問い合わせ内容：{$data["contact_content"]}

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp
        EOD;



        return $body;
    } elseif ($type === 4) {
        $body = <<<EOD
        {$data["fullname"]}様
        この度はHURU-HURUのシッター登録にご応募いただきありがとうございます。
        下記の内容で承りました。

        ※本メールはお客様に送られる自動返信メールです。

        ---
        氏名：{$data["fullname"]}
        メールアドレス：{$data["email"]}
        電話番号：{$data["tel"]}
        郵便番号：{$data["zip"]}
        都道府県：{$data["pref"]}
        住所：{$data["address"]}
        建物名：{$data["building"]}
        職務経歴：{$data["history"]}
        保有資格： {$data["career"]}
        備考：{$data["bikou"]}

        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp
        EOD;
        return $body;
    }
}

function rule($type)
{
    if ($type === 1) {
        return "ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー";
    } elseif ($type === 2) {
        return "ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー";
    }
}
