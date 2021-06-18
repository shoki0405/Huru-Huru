<?php
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";
?>

<div class="reservation">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_b_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_b_mv_sp.png" alt="">
    </div>


    <div class="text">
        <div class="title">
            ビジターご予約お申込み<span class="kaigyo">(新規会員登録)</span>
        </div>

        <div class="stepnav">
            <!-- ステップナビゲーション -->
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">お客様情報入力</div>
            </div>
            <div class="item">
                <div class="circle">

                </div>
                <div class="step">お子様情報入力</div>
            </div>
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">送信確認</div>
            </div>
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">完了</div>
            </div>
        </div>

        <div class="des">
            <div>
                ご利用には会員登録が必要です。
            </div>
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

    </div>







    <div class="">
        <form action="" class="form" method="post">
            <div class="inner">


                <div class="hissu">
                    ※=必須項目
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
                            <input type="text" name="name_c1" placeholder="例)鈴木　花子" value="<?= !empty($_SESSION["data"]["name_c1"]) ? $_SESSION["data"]["name_c1"] : "" ?>" required>
                        </div>
                        <div class="row">
                            <div class="heading">フリガナ*</div>
                            <input type="text" name="kana_c1" placeholder="例)スズキ　ハナコ" value="<?= !empty($_SESSION["data"]["kana_c1"]) ? $_SESSION["data"]["kana_c1"] : "" ?>" required>
                        </div>
                        <div class="row">
                            <div class="heading">生年月日*</div>
                            <input type="text" name="birth_c1" placeholder="例)1980/4/2" value="<?= !empty($_SESSION["data"]["birth_c1"]) ? $_SESSION["data"]["birth_c1"] : "" ?>" required>
                        </div>
                        <div class="row">
                            <div class="heading">健康状態*</div>
                            <select id="" name="status_c1" required>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="heading">アレルギー*</div>
                            <div class="col radio">
                                <input type="radio" name="allergy_c1" id="c1_al_ari" value="有り" required>
                                <label for="c1_al_ari" class="radio-label">有り</label>
                                <input type="radio" name="allergy_c1" id="c1_al_nasi" value="無し" checked required>
                                <label for="c1_al_nasi" class="radio-label">無し</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="heading">アレルギーの種類</div>
                            <input type="text" name="allergy_name_c1" value="<?= !empty($_SESSION["data"]["allergy_name_c1"]) ? $_SESSION["data"]["allergy_name_c1"] : "" ?>">
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
                                <input type="text" name="name_c2" placeholder="例)鈴木　花子" id="name_c2" oninput="Checkchild2()" value="<?= !empty($_SESSION["data"]["name_c2"]) ? $_SESSION["data"]["name_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="kana_c2" placeholder="例)スズキ　ハナコ" id="kana_c2" oninput="Checkchild2()" value="<?= !empty($_SESSION["data"]["kana_c2"]) ? $_SESSION["data"]["kana_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="birth_c2" placeholder="例)1980/4/2" id="birth_c2" oninput="Checkchild2()" value="<?= !empty($_SESSION["data"]["birth_c2"]) ? $_SESSION["data"]["birth_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select id="" name="status_c2">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギー*</div>
                                <div class="col radio">
                                    <input type="radio" name="allergy_c2" id="c2_al_ari" value="有り">
                                    <label for="c2_al_ari" class="radio-label">有り</label>
                                    <input type="radio" name="allergy_c2" id="c2_al_nasi" value="無し" checked>
                                    <label for="c2_al_nasi" class="radio-label">無し</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギーの種類</div>
                                <input type="text" name="allergy_name_c2" placeholder="" value="<?= !empty($_SESSION["data"]["allergy_name_c2"]) ? $_SESSION["data"]["allergy_name_c2"] : "" ?>">
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
                                <input type="text" name="name_c3" placeholder="例)鈴木　花子" oninput="Checkchild3()" value="<?= !empty($_SESSION["data"]["name_c3"]) ? $_SESSION["data"]["name_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="kana_c3" placeholder="例)スズキ　ハナコ" oninput="Checkchild3()" value="<?= !empty($_SESSION["data"]["kana_c3"]) ? $_SESSION["data"]["kana_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="birth_c3" placeholder="例)1980/4/2" oninput="Checkchild3()" value="<?= !empty($_SESSION["data"]["birth_c3"]) ? $_SESSION["data"]["birth_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select id="" name="status_c3">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギー*</div>
                                <div class="col radio">
                                    <input type="radio" name="allergy_c3" id="c3_al_ari" value="有り">
                                    <label for="c3_al_ari" class="radio-label">有り</label>
                                    <input type="radio" name="allergy_c3" id="c3_al_nasi" value="無し" checked>
                                    <label for="c3_al_nasi" class="radio-label">無し</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギーの種類</div>
                                <input type="text" name="allergy_name_c3" placeholder="" value="<?= !empty($_SESSION["data"]["allergy_name_c3"]) ? $_SESSION["data"]["allergy_name_c3"] : "" ?>">
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

            <div class="submit_frame">
                <button onclick="history.back()">
                    戻る
                </button>
            </div>


        </form>
    </div>
</div>