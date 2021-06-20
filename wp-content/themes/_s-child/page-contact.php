<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_contact = get_stylesheet_directory_uri() . "/img/contact/";



if (!empty($_POST["submit"])) {

    // SESSIONに格納
    $data = [
        "kubun"   => $_POST["start_date"],
        "fullname"   => $_POST["start_hour"],
        "conpany" => $_POST["start_minuts"],
        "emai;"     => $_POST["end_date"],
        "tel"     => $_POST["end_hour"],
        "contact_category"   => $_POST["end_minuts"],
        "contact_content"    => $_POST["extension"],
    ];

    if (send(3, $data)) {
        $message = "お問い合わせを受け付けました。";
    } else {
        $message = "送信できませんでした。";
    }
}


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
                    <img src="<?php echo $img_fol_contact; ?>orange_q.png" alt=""> 大会の手続きはありますか？
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

            </div>
        </div>
    </div>

    <div class="contactform">
        <div class="title">
            お問い合わせ
        </div>

        <div class="dot_back contact_mail">
            <img src="<?php echo $img_fol_contact; ?>mail.png" alt="">
            <span>メールから</span>
        </div>

        <form action="" method="post" class="form">





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

                <input type="text" name="fullname" placeholder="">
            </div>
            <div class="row">
                <div class="heading">
                    会社名*
                </div>
                <input type="text" name="company" placeholder="">
            </div>
            <div class="row">
                <div class="heading">
                    メールアドレス*
                </div>
                <input type="email" name="email" placeholder="">
            </div>
            <div class="row">
                <div class="heading">
                    電話番号*
                </div>
                <input type="tel" name="tel" placeholder="">
            </div>
            <div class="row">
                <div class="heading">
                    お問い合わせの種類*
                </div>
                <select name="contact_category" id="">
                    <option value="問い合わせの種類1">問い合わせの種類1</option>
                    <option value="問い合わせの種類2">問い合わせの種類2</option>
                    <option value="問い合わせの種類3">問い合わせの種類3</option>
                </select>
                <input type="text" name="contact_category" placeholder="">
            </div>
            <div class="row">
                <div class="heading">
                    お問い合わせ内容*
                </div>
                <textarea name="contact_content" id="" cols="30" rows="10"></textarea>
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