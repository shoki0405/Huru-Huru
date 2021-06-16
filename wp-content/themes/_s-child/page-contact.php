<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_contact = get_stylesheet_directory_uri() . "/img/contact/";
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




        <div class="accordion">
            <div class="cat">
                <span>料金・契約について</span>
            </div>
        </div>
        <div class="accordion_section">
            <div class="qa_q">
                <img src="" alt="">
                入会するとどんな特典がありますか？
            </div>
            <div class="qa_a">
                会員様になると基本料金をお安くご案内できます。また併設の託児所（キッズ花花銀座店）も会員様としてご利用いただけます。
            </div>
            <div class="qa_q">
                <img src="" alt="">
                大会の手続きはありますか？
            </div>
            <div class="qa_a">
                会員様になっていただいた時点で永久会員様となりますので退会手続き等はございません。再度利用する機会がございましたらご予約をお願いいたします。
            </div>
            <div class="qa_q">
                <img src="" alt="">
                支払はどうしたらいいですか？
            </div>
            <div class="qa_a">
                お客様と担当スタッフ間での料金の精算はありません。（交通費を含む）会員様は利用した料金を月末に精算し、請求書を発行いたします。お支払いは翌月15日までにお振込みいただきます。ビジター様は利用日から3営業日以内に利用料金をお振込みください。
            </div>
            <div class="qa_q">
                <img src="" alt="">
                特別料金の日はありますか？
            </div>
            <div class="qa_a">
                年末年始等の長期休暇の際、平日を休日扱いにさせていただく場合がございます。
            </div>
        </div>





        <div class="accordion">
            <div class="cat">
                <span>スタッフについて</span>
            </div>
        </div>
        <div class="accordion_section">

        </div>







        <div class="accordion">
            <div class="cat">
                <span>サービス内容について</span>
            </div>
        </div>
        <div class="accordion_section">

        </div>
    </div>

    <div class="title">
        お問い合わせ
    </div>

    <div class="dot_back">
        <img src="" alt="">
        <span>メールから</span>
    </div>

    <div>
        <form action="" method="post" class="form">

            <div>
                <input type="radio">個人
                <input type="radio">法人
            </div>
            <div>
                ※=必須項目
            </div>
            <div>
                氏名*
                <input type="text" placeholder="">
            </div>
            <div>
                会社名*
                <input type="text" placeholder="">
            </div>
            <div>
                メールアドレス*
                <input type="text" placeholder="">
            </div>
            <div>
                電話番号*
                <input type="text" placeholder="">
            </div>
            <div>
                お問い合わせの種類*
                <input type="text" placeholder="">
            </div>
            <div>
                お問い合わせ内容*
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <?php get_template_part("form/kiyaku_s"); ?>

            <div>
                <button>送信する</button>
            </div>
        </form>

        <div class="dot_back">
            <div>
                <img src="" alt="">
                お電話から
            </div>
            <div>
                <div>03-4400-2292</div>
                <div>受付時間：9時～18時</div>
            </div>
        </div>
    </div>


</div>
<?php
get_footer();
?>