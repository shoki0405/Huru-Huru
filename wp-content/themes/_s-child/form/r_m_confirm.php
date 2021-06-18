<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";
?>

<div class="reservation confirm">

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
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["start_date"]) ? $_SESSION["data"]["start_date"] : ""; ?>
                        <?= !empty($_SESSION["data"]["start_hour"]) ? $_SESSION["data"]["start_hour"] : ""; ?>時
                        <?= !empty($_SESSION["data"]["start_minuts"]) ? $_SESSION["data"]["start_minuts"] : ""; ?>分から
                    </div>
                </div>
                <div class="row">
                    <div class="heading"></div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["end_date"]) ? $_SESSION["data"]["end_date"] : ""; ?>
                        <?= !empty($_SESSION["data"]["end_hour"]) ? $_SESSION["data"]["end_hour"] : ""; ?>時
                        <?= !empty($_SESSION["data"]["end_minuts"]) ? $_SESSION["data"]["end_minuts"] : ""; ?>分まで
                    </div>
                </div>



                <div class="row">
                    <div class="heading">延長の可能性*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["extension"]) ? $_SESSION["data"]["extension"] : ""; ?>
                    </div>
                </div>



                <div class="row">
                    <div class="heading">保護者氏名*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["fullname"]) ? $_SESSION["data"]["fullname"] : ""; ?>
                    </div>
                </div>



                <div class="row">
                    <div class="heading">フリガナ*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["kana"]) ? $_SESSION["data"]["kana"] : ""; ?>
                    </div>
                </div>



                <div class="row">
                    <div class="heading">生年月日*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["birth"]) ? $_SESSION["data"]["birth"] : ""; ?>
                    </div>
                </div>


                <div class="row">
                    <div class="heading">メールアドレス*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["email"]) ? $_SESSION["data"]["email"] : ""; ?>
                    </div>
                </div>






                <div class="child dot_back">
                    <img src="<?php echo $img_fol; ?>orange.png" alt="">
                    1人目お子様
                </div>


                <div class="row">
                    <div class="heading">氏名*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["name_c1"]) ? $_SESSION["data"]["name_c1"] : ""; ?>
                    </div>
                </div>



                <div class="row">
                    <div class="heading">フリガナ*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["kana_c1"]) ? $_SESSION["data"]["kana_c1"] : ""; ?>
                    </div>
                </div>



                <div class="row">
                    <div class="heading">生年月日*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["birth_c1"]) ? $_SESSION["data"]["birth_c1"] : ""; ?>
                    </div>
                </div>



                <div class="row">
                    <div class="heading">健康状態*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["status_c1"]) ? $_SESSION["data"]["status_c1"] : ""; ?>
                    </div>
                </div>




                <?php if (!empty($_SESSION["data"]["name_c2"])) : ?>

                    <div class="child dot_back">
                        <img src="<?php echo $img_fol; ?>orange.png" alt="">
                        2人目お子様
                    </div>



                    <div class="row">
                        <div class="heading">氏名*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["name_c2"]) ? $_SESSION["data"]["name_c2"] : ""; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="heading">フリガナ*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["kana_c2"]) ? $_SESSION["data"]["kana_c2"] : ""; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="heading">生年月日*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["birth_c2"]) ? $_SESSION["data"]["birth_c2"] : ""; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="heading">健康状態*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["status_c2"]) ? $_SESSION["data"]["status_c2"] : ""; ?>
                        </div>
                    </div>

                <?php endif; ?>







                <?php if (!empty($_SESSION["data"]["name_c3"])) : ?>

                    <div class="child dot_back">
                        <img src="<?php echo $img_fol; ?>orange.png" alt="">
                        3人目お子様
                    </div>



                    <div class="row">
                        <div class="heading">氏名*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["name_c3"]) ? $_SESSION["data"]["name_c3"] : ""; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="heading">フリガナ*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["kana_c3"]) ? $_SESSION["data"]["kana_c3"] : ""; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="heading">生年月日*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["birth_c3"]) ? $_SESSION["data"]["birth_c3"] : ""; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="heading">健康状態*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["status_c3"]) ? $_SESSION["data"]["status_c3"] : ""; ?>
                        </div>
                    </div>


                <?php endif; ?>








                <div class="row">
                    <div class="heading">備考*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["bikou"]) ? $_SESSION["data"]["bikou"] : ""; ?>
                    </div>
                </div>





                <div class="submit_frame">
                    <button type="submit" class="submit" name="submit" value="submit">
                        送信する
                        <i class="fas fa-arrow-right"></i>
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