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
define("TMP", "./wp-content/themes/_s-child/form/tmp/");
define("FROMMAIL", "info@sitters.co.jp");
// define("FROMMAIL", "wa.nozomu@gmail.com");

function view_require($url)
{
    $file = "form/" . $url;
    get_header();
    get_template_part("template/right_top");
    get_template_part("template/bottom_menu_top");
    get_template_part($file);
    get_footer("s");
}

function send($type, $data, $file = null)
{

    //日本語の使用宣言
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    // ヘッダー
    $header = "MIME-Version: 1.0\n";
    $header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
    $header .= "From: " . FROMMAIL . "\n";
    $header .= "Reply-To: " . FROMMAIL . "\n";

    $subject1 = subject1($type);
    $subject2 = subject2($type);
    $body = body($type, $data, $file);

    // 運営へメール
    mb_send_mail(FROMMAIL, $subject1, $body, $header);

    // 訪問者へメール
    return mb_send_mail($data["email"], $subject2, $body, $header);
}

function subject1($type)
{
    if ($type === YOYAKU_B) {
        return "[HURU-HURU]非会員よりシッターサービスの予約申し込みがありました";
    } elseif ($type === YOYAKU_M) {
        return "[HURU-HURU]会員よりシッターサービスの予約申し込みがありました";
    } elseif ($type === CONTACT) {
        return "[HURU-HURU]お問い合わせがありました";
    } elseif ($type === ENTRY) {
        return "[HURU-HURU]シッターに応募がありました";
    }
}

function subject2($type)
{
    if ($type === 1 || $type === 2) {
        return "[HURU-HURU]シッターサービスの予約申込ありがとうございます";
    } elseif ($type === 3) {
        return "[HURU-HURU]お問い合わせありがとうございます";
    } elseif ($type === 4) {
        return "[HURU-HURU]シッターにご応募いただきありがとうございます";
    }
}

function body($type, $data, $file = null)
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
        ペット：{$data['pet']}
        ペットの種類：{$data['pet_syu']}

        1人目お子様情報
        氏名：{$data['name_c1']}
        フリガナ：{$data['kana_c1']}
        生年月日：{$data['birth_c1']}
        健康状態：{$data['status_c1']}
        アレルギー：{$data['allergy_c1']}
        アレルギーの種類：{$data['allergy_name_c1']}
        沐浴・シャワー：{$data['bath_c1']}\n\n
        EOD;




        if (!empty($data['name_c2'])) {
            $body .= <<<EOD
            2人目お子様情報
            氏名：{$data['name_c2']}
            フリガナ：{$data['kana_c2']}
            生年月日：{$data['birth_c2']}
            健康状態：{$data['status_c2']}
            アレルギー：{$data['allergy_c2']}
            アレルギーの種類：{$data['allergy_name_c2']}
            沐浴・シャワー：{$data['bath_c2']}\n\n
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
            アレルギーの種類：{$data['allergy_name_c3']}
            沐浴・シャワー：{$data['bath_c3']}\n\n
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
        健康状態：{$data['status_c1']}
        沐浴・シャワー：{$data['bath_c1']}\n\n
        EOD;

        if (!empty($data['name_c2'])) {
            $body .= <<<EOD
            2人目お子様情報
            氏名：{$data['name_c2']}
            フリガナ：{$data['kana_c2']}
            生年月日：{$data['birth_c2']}
            健康状態：{$data['status_c2']}
            沐浴・シャワー：{$data['bath_c2']}\n\n
            EOD;
        }

        if (!empty($data['name_c3'])) {
            $body .= <<<EOD
            3人目お子様情報
            氏名：{$data['name_c3']}
            フリガナ：{$data['kana_c3']}
            生年月日：{$data['birth_c3']}
            健康状態：{$data['status_c3']}
            沐浴・シャワー：{$data['bath_c3']}\n\n
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


        $body = "--__BOUNDARY__\n";
        $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";

        $body .= <<<EOD
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

        画像：{$file['name']}(添付の画像ファイル)
        ---

        内容を確認し、担当者よりご連絡致しますので、
        今しばらくお待ちくださいませ。

        --
        HURU-HURU
        HP：https://www.huruhuru.jp\n
        EOD;

        $body .= "--__BOUNDARY__\n";
        $body .= "Content-Type: application/octet-stream; name=\"{$file['name']}\"\n";
        $body .= "Content-Disposition: attachment; filename=\"{$file['name']}\"\n";
        $body .= "Content-Transfer-Encoding: base64\n";
        $body .= "\n";
        $body .= chunk_split(base64_encode(file_get_contents(TMP . $file['name'])));
        $body .= "--__BOUNDARY__\n";

        return $body;
    }
}

/**
 * 利用規約と個人情報のテキスト
 */
function rule($type)
{
    if ($type === 1) {
        return "ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー";
    } elseif ($type === 2) {
        return "
【個人情報の取り扱いについて】
株式会社mommy daddy（以下、弊社と総称します）では、お客様、お取引先様を始めとする、弊社に個人情報を提供されるすべての方（以下、ご本人と総称します）の個人情報注1（以下、個人情報といいます）を適切に保護することが個人情報取扱事業者としての重要な責務であると認識し、その取扱い方針を以下のとおり定め、個人情報の保護に努めます。

１、個人情報の取得について
弊社では、お客様、お取引先様を始めとする、弊社に個人情報を提供されるすべての方（以下、ご本人と総称します）の個人情報注1（以下、個人情報といいます）を適切に保護することが個人情報取扱事業者としての重要な責務であると認識し、その取扱い方針を以下のとおり定め、個人情報の保護に努めます。

◆弊社営業担当者等との面談、名刺交換等により個人情報をご提供いただく場合
◆各種イベント、交流会、セミナー等において名刺等を頂戴する場合
これらの場合には、ご本人が拒否されたときを除いて、電子メールによる弊社商品・サービスのご紹介や各種情報提供、ならびに対面営業を含むマーケティング活動のために利用させていただくことがございます。

２、個人情報の管理について
弊社は、個人情報の漏洩、改ざん、紛失、および目的外の利用を防止するために、関係する法令、指針・ガイドラインおよび弊社内部規則に従い、適切なセキュリティを施した環境で個人情報を厳重に管理いたします。 また、個人情報の適切な取扱いについて、従業員に対し必要な教育・啓発活動を行ないます。

３、個人情報の利用について
弊社は、次の場合を除き、利用目的以外には個人情報を利用いたしません。

①ご本人の同意がある場合
②ご本人を識別できない状態（統計資料等）で利用する場合
③利用目的以外のために利用することが、関係する法令または指針・ガイドラインにより認められている場合
４、個人情報の第三者への開示について
弊社は、次の場合を除き、個人情報をいかなる第三者にも開示いたしません。

①ご本人の同意がある場合
②ご本人を識別できない状態（統計資料等）で開示する場合
③弊社に対して機密保持義務を負っている代理店、業務委託先等（以下、ビジネスパートナーと総称します）に対し、利用目的を遂行するために必要な範囲において開示する場合
④ご本人からのお問い合わせ、資料請求等の内容から、弊社のビジネスパートナーから回答することが適切であると合理的に判断される場合で、当該ビジネスパートナーに開示する場合
⑤商品のご購入や有料サービスのご利用等に係るお支払いに際し、クレジット決済のため金融機関等に個人情報を開示する必要がある場合
⑥弊社の一部の事業体が他社に承継される場合（承継先においても個人情報の漏洩、目的外の利用等がないよう、可能な範囲で努めるものとします）
⑦関係する法令または指針・ガイドラインにより、第三者への開示が認められている場合
⑧司法または行政機関等から、法令にもとづき開示または提出を命じられた場合
５、個人情報に関するお問い合わせについて
弊社は、ご本人がご自身の個人情報の照会、変更、修正等を希望される場合には、個人情報をご提供された弊社部署または担当者（Webサイトを通じてご提供された場合には、当該Webサイトに表示されている問い合わせ先）にご連絡いただければ、弊社所定の手続にもとづきすみやかに対応いたします。
その際、第三者による個人情報の不正な取得、改ざん等を防止するため、ご本人からの要請であることを確認させていただく場合がありますので、ご協力いただけますようお願いいたします。

６、ご意見、ご要望等の取り扱いについて
弊社に寄せられたご意見、ご要望、ご提案等につきましては、利用目的に別段の制約がない限り、弊社が自由に利用できるものとさせていただきます。
ただし、お寄せいただいたご本人を識別できる状態で公表または第三者に開示する場合には、あらかじめご本人の同意を得るものとします。

７、Webサイトにおける個人情報の取り扱いについて
【クッキー（Cookie）注2およびIPアドレス注3の利用について 】
弊社は、弊社が運営するWebサイトにおいて、クッキー（Cookie）、およびIPアドレスを次の目的で使用することがあります。

①サーバーで発生した障害や問題の原因を突き止め解決するため
②Webサイトや電子メール等の内容を改良するため
③Webサイトや電子メール等の内容を個々の利用者向けにカスタマイズするため
④あらかじめ個人情報を登録していただく会員制サービスにおいて、ご本人の閲覧履歴やアンケート結果などをマーケティング活動に利用させていただくため
⑤個人を特定できない状態で統計資料として利用するため
【弊社サイトからのリンク先について】
弊社のWebサイトには、弊社以外のWebサイトへのリンクが含まれている場合があります。リンク先の選定に際しては充分注意を払っておりますが、弊社は、弊社以外のWebサイトにおける個人情報の保護およびコンテンツに関して責任を負うことはできません。

８、関係法令等の遵守について
弊社は、個人情報に関して適用される法令および弊社が定めた内部規則を遵守いたします。

2020年11月
株式会社mommy daddy
代表取締役 長坂 有浩
関係する法令、指針・ガイドライン、または弊社内部規則等の変更に伴い、本プライバシーポリシーを改訂する場合がございますので、定期的にご確認することをお薦めいたします。

注1：「個人情報」とは、弊社が事業のために収集する、氏名、年齢、生年月日、性別、住所、電話番号、メールアドレス、勤務先、クレジットカード番号等の個人に関する情報であって、この内の一つまたは複数の組合せにより特定の個人を識別することができるものをいいます。
注2：「クッキー（Cookie）」とは、Webサイトの効率的な運用のために、サーバーがご本人のブラウザーに送信し、ブラウザー側に保持される識別情報です。
注3：「IPアドレス」とは、サーバーにアクセスしているコンピューターを特定できる番号です（コンピューターの使用者を特定することはできません）。
";
    }
}
