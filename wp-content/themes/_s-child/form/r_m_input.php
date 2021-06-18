<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";
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

                <?php get_template_part("form/r_common"); ?>

                <div class="row">
                    <div class="heading">メールアドレス*</div>
                    <input type="email" name="email" placeholder="例)example@example.com" value="<?= !empty($_SESSION["data"]["email"]) ? $_SESSION["data"]["email"] : "" ?>" id="email" required>
                </div>



                <div class="children">
                    <div class="section">
                        <div class="child dot_back">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                            1人目お子様
                        </div>
                        <div class="hissu">
                            ※=必須項目
                        </div>
                        <div class="row">
                            <div class="heading">氏名*</div>
                            <input type="text" name="name_c1" placeholder="例)鈴木　花子" value="<?= !empty($_SESSION["data"]["name_c1"]) ? $_SESSION["data"]["name_c1"] : "" ?>">
                        </div>
                        <div class="row">
                            <div class="heading">フリガナ*</div>
                            <input type="text" name="kana_c1" placeholder="例)スズキ　ハナコ" value="<?= !empty($_SESSION["data"]["kana_c1"]) ? $_SESSION["data"]["kana_c1"] : "" ?>">
                        </div>
                        <div class="row">
                            <div class="heading">生年月日*</div>
                            <input type="text" name="birth_c1" placeholder="例)1980/4/2" value="<?= !empty($_SESSION["data"]["birth_c1"]) ? $_SESSION["data"]["birth_c1"] : "" ?>">
                        </div>
                        <div class="row">
                            <div class="heading">健康状態*</div>
                            <select id="" name="status_c1">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>


                    <div class="section">
                        <div class="child accordion dot_back">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                            2人目お子様
                            <img class="puls" src="<?php echo $img_fol_form; ?>puls.png" alt="">
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="heading">氏名</div>
                                <input type="text" name="name_c2" placeholder="例)鈴木　花子" value="<?= !empty($_SESSION["data"]["name_c2"]) ? $_SESSION["data"]["name_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="kana_c2" placeholder="例)スズキ　ハナコ" value="<?= !empty($_SESSION["data"]["kana_c2"]) ? $_SESSION["data"]["kana_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="birth_c2" placeholder="例)1980/4/2" value="<?= !empty($_SESSION["data"]["birth_c2"]) ? $_SESSION["data"]["birth_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select id="" name="status_c2">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="section">
                        <div class="child accordion dot_back">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                            3人目お子様
                            <img class="puls" src="<?php echo $img_fol_form; ?>puls.png" alt="">
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="heading">氏名</div>
                                <input type="text" name="name_c3" placeholder="例)鈴木　花子" value="<?= !empty($_SESSION["data"]["name_c3"]) ? $_SESSION["data"]["name_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="kana_c3" placeholder="例)スズキ　ハナコ" value="<?= !empty($_SESSION["data"]["kana_c3"]) ? $_SESSION["data"]["kana_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="birth_c3" placeholder="例)1980/4/2" value="<?= !empty($_SESSION["data"]["birth_c3"]) ? $_SESSION["data"]["birth_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select id="" name="status_c3">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>




                <?php get_template_part("form/bikou"); ?>





            </div>


            <?php get_template_part("form/kiyaku"); ?>


            <div class="submit_frame">
                <button type="submit" class="submit" name="confirm" value="confirm">
                    送信確認
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </form>
    </div>

</div>