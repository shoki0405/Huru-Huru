<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";

var_dump("<pre>");
var_dump($_POST);
var_dump("</pre>");

?>

<div class="reservation">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_m_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_m_mv_sp.png" alt="">
    </div>

    <div class="text">
        <div class="title">
            ご予約お申込み<span class="kaigyo">(会員様)</span>
        </div>

        <div class="des">
            お申し込みいただいた方には自動返信メールを送信させていただいております。<br>
            当日分(前日17時以降)の予約に関しましては電話にてお問い合わせをいただけますよう宜しくお願い致します。
        </div>

        <div class="tel">
            <img src="<?php echo $img_fol; ?>phone.png" alt="">
            03-4400-2292
        </div>

        <div class="line">
            <img src="<?php echo $img_fol_form; ?>line.png" alt="">
            ご予約後、詳細のやり取りはLINEにて行います。その他をご希望の場合はお申し出ください。
        </div>

        <div class="caution">
            住所・ご連絡先に変更がございましたら備考欄に記載をお願い致します。
        </div>
    </div>






    <div class="">
        <form action="" class="form" method="post">
            <div class="inner">


                <div class="hissu">
                    ※=必須項目
                </div>
                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div>
                        <!-- <?php echo $_POST["date_start"]; ?> -->
                    </div>
                </div>
                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div>
                        <!-- <?php echo $_POST["date_start"]; ?> -->
                    </div>
                </div>
                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div>
                        <!-- <?php echo $_POST["p_name"]; ?> -->
                    </div>
                </div>
                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div>
                        <!-- <?php echo $_POST["p_hurigana"]; ?> -->
                    </div>
                </div>
                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div>
                        <!-- <?php echo $_POST["p_birth"]; ?> -->
                    </div>
                </div>
                <div class="row">
                    <div class="heading">メールアドレス*</div>
                    <div>
                        <!-- <?php echo $_POST["p_email"]; ?> -->
                    </div>
                </div>





                <div class="submit_frame">
                    <button type="submit" class="submit" name="submit" value="submit">
                        送信する
                    </button>
                </div>
                <div class="submit_frame">
                    <button onclick="history.back()">
                        戻る
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>