<?php
require_once("form/form.php");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_contact = get_stylesheet_directory_uri() . "/img/contact/";

$error_message = [];
$data = [];

if (!empty($_POST["submit"])) {

    // SESSIONに格納
    $data = [
        "kubun"   => $_POST["kubun"],
        "fullname"   => $_POST["fullname"],
        "email"     => $_POST["email"],
        "tel"     => $_POST["tel"],
        "contact_content"    => $_POST["contact_content"],
    ];

    $data["company"] = !empty($_POST["company"]) ? $_POST["company"] : "";

    if (send(CONTACT, $data)) {
        $success_message = "お問い合わせを受け付けました。<br>2,3営業日以内に入力いただいたメールアドレスにご連絡させていただきますので、少々お待ちください。";
        $_POST = [];
    } else {
        $error_message = array_merge($error_message, "送信できませんでした。<br>入力内容をご確認いただくか、しばらくお待ちいただいた後再度お問い合わせください。");
    }
}

get_header();
get_template_part("template/right_top");
get_template_part("template/bottom_menu");
?>

<div class="contact">
    <div class="mv_page">
        <img class="pc" src="<?php echo $img_fol_contact; ?>mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_contact; ?>mv_sp.png" alt="">
    </div>


    <div class="title">
        よくあるご質問
    </div>


    <div class="dot_back">
        <div class="qas">

            <img class="fruit1" src="<?php echo $img_fol; ?>half_orange_green.png" alt="">
            <img class="fruit2" src="<?php echo $img_fol; ?>grape.png" alt="">

            <div class="accordion">
                <div class="arrow">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <div class="cat">
                    料金・契約について
                </div>
            </div>
            <div class="accordion_section">
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    入会するとどんな特典がありますか？
                </div>
                <div class="qa_a">
                    会員様になると基本料金をお安くご案内できます。また併設の託児所（キッズ花花銀座店）も会員様としてご利用いただけます。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    退会の手続きはありますか？
                </div>
                <div class="qa_a">
                    会員様になっていただいた時点で永久会員様となりますので退会手続き等はございません。再度利用する機会がございましたらご予約をお願いいたします。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt=""> 支払はどうしたらいいですか？
                </div>
                <div class="qa_a">
                    お客様と担当スタッフ間での料金の精算はありません。（交通費を含む）会員様は利用した料金を月末に精算し、請求書を発行いたします。お支払いは翌月15日までにお振込みいただきます。ビジター様は利用日から3営業日以内に利用料金をお振込みください。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt=""> 特別料金の日はありますか？
                </div>
                <div class="qa_a">
                    年末年始等の長期休暇の際、平日を休日扱いにさせていただく場合がございます。
                </div>
            </div>

            <div class="accordion">
                <div class="arrow">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <div class="cat">
                    スタッフについて
                </div>
            </div>
            <div class="accordion_section">
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    シッターの採用はどのようにしていますか？
                </div>
                <div class="qa_a">
                    保育士、ベビーシッター認定資格等を持っている方や、現場での保育経験者の中から、人柄を重視した採用を行っております。
                    併設託児所での実技研修や、外部研修を行い保育者としての質の向上に努めています。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    予約はどのようにしたらよいですか？
                </div>
                <div class="qa_a">
                    ご予約はWEBもしくは電話にて承ります。(平日9時～18時)スタッフを手配し、予約可否のご連絡を致します。
                    お急ぎのご予約や変更のお問合せは直接お電話にてご連絡ください。手配が難しい場合がございますが可能な限り努力いたします。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    担当スタッフを指名することはできますか？
                </div>
                <div class="qa_a">
                    2回目以降はご希望のシッターを指名いただければ優先的に調整いたします。
                    日程によってはご希望に添えない場合もございますのでご了承ください。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    担当スタッフとの連絡方法はありますか？
                </div>
                <div class="qa_a">
                    お客様とシッター個人でのやり取りはできませんが、事務局サポートの元、LINEにて事前打ち合わせから当日まで
                    サービス内容を決めていきます。
                </div>
            </div>

            <div class="accordion">
                <div class="arrow">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <div class="cat">
                    サービス内容について
                </div>
            </div>
            <div class="accordion_section">
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    何歳まで利用できますか？
                </div>
                <div class="qa_a">
                    小学校6年生までご利用いただけます。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    送迎時や業務中の移動手段は何が使えますか？
                </div>
                <div class="qa_a">
                    お子様の安全を考え徒歩または公共交通機関に限ります。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    時間延長できますか？
                </div>
                <div class="qa_a">
                    延長の可能性がある場合はご予約時にお申し出下さい。
                    延長の可能性を事前にお申し出いただいた場合でも、
                    延長対応は最大1時間までしか確約できませんのでご注意下さい。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    その日の様子を教えて頂けますか？
                </div>
                <div class="qa_a">
                    お子様のシッティング中の様子を記録した保育連絡帳を用意しております。
                    サービス終了時に目を通していただきサインをお願いいたします。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    自宅以外の場所でもお願いできますか？
                </div>
                <div class="qa_a">
                    安全が確保された場所であれば、予め保護者さまよりご指定ただいた場所で対応させていただきます。
                    お子様の体調に影響がでる雨天時、猛暑日や寒い日の屋外、密な場所でのお預かりはお断りしております。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    食事は提供していただくことはできますか？
                </div>
                <div class="qa_a">
                    お客様がご用意してくださった食事のあたためや食事介助をさせていただきます。
                    シッターが調理し、お子様に提供することはございません。
                    シッターの食事は各自用意いたします。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    家庭のルールに従ってシッティングしてもらえますか？
                </div>
                <div class="qa_a">
                    お申し付け頂ければ可能な限り対応させていただきます。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    子供の宿題を見てもらえますか？
                </div>
                <div class="qa_a">
                    宿題の内容にもよりますが、サポートできる範囲で出来る限り対応させていただきます。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    シッティング中に子供が病気や怪我をした場合は？
                </div>
                <div class="qa_a">
                    応急手当を行った後、状況により病院へお連れするかどうかをお客様とご相談の上判断いたします。
                </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    病児保育はお願いできますか？
                </div>
                <div class="qa_a">
                    医師の診断、お子様の様子を伺ったうえでお預かり可能か判断させていただきます。
                    投薬はこちらがお渡しする投薬依頼書に記載いただければ可能です。 </div>
                <div class="qa_q">
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt="">
                    シッティング中の災害時はどの様な対応をされますか？
                </div>
                <div class="qa_a">
                    事前にお伺いした避難場所へ、お子様と避難いたします。
                </div>
            </div>
        </div>
    </div>

    <div class="contactform" id="contactform">
        <div class="title">
            お問い合わせ
        </div>

        <div class="dot_back contact_mail">
            <img src="<?php echo $img_fol_contact; ?>mail.png" alt="">
            <span>メールから</span>
        </div>

        <form action="#contactform" method="post" class="form">

            <?php if (!empty($success_message)) {
                echo "<div class='success_message'>";
                echo $success_message;
                echo "</div>";
            } elseif (!empty($error_message)) {
                foreach ($error_message as $error_item) {
                    echo "<div class='error_message'>";
                    echo $error_message;
                    echo "</div>";
                }
            } ?>


            <div class="row radio keitai">
                <input type="radio" name="kubun" id="kozin" value="個人" checked required>
                <label for="kozin" class="radio-label">個人</label>
                <input type="radio" name="kubun" id="hozin" value="法人" required>
                <label for="hozin" class="radio-label">法人</label>
            </div>





            <div>
                ※=必須項目
            </div>
            <div class="row">
                <div class="heading">
                    氏名*
                </div>

                <input type="text" name="fullname" value="<?= !empty($_POST["fullname"]) ? $_POST["fullname"] : "" ?>" placeholder="" required>
            </div>
            <div class="row">
                <div class="heading">
                    会社名*
                </div>
                <input type="text" name="company" value="<?= !empty($_POST["company"]) ? $_POST["company"] : "" ?>" placeholder="" required>
            </div>
            <div class="row">
                <div class="heading">
                    メールアドレス*
                </div>
                <input type="email" name="email" value="<?= !empty($_POST["email"]) ? $_POST["email"] : "" ?>" placeholder="" required>
            </div>
            <div class="row">
                <div class="heading">
                    電話番号*
                </div>
                <input type="tel" name="tel" value="<?= !empty($_POST["tel"]) ? $_POST["tel"] : "" ?>" placeholder="" required>
            </div>
            <div class="row">
                <div class="heading">
                    お問い合わせ内容*
                </div>
                <textarea name="contact_content" id="" cols="30" rows="10" required><?= !empty($_POST["contact_content"]) ? $_POST["contact_content"] : "" ?></textarea>
            </div>





            <?php get_template_part("form/kiyaku_s"); ?>





            <div class="submit_frame">
                <button type="submit" class="submit" name="submit" value="submit">
                    送信
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </form>

        <div class="dot_back contect_tel">
            <div class="contect_tel_title">
                <img src="<?php echo $img_fol_contact; ?>tel.png" alt="">
                お電話から
            </div>
            <div class="contect_tel_area">
                <div class="contect_tel_num">03-4400-2292</div>
                <div>受付時間：9時～18時</div>
            </div>
        </div>
    </div>

</div>

<?php
get_footer();
?>