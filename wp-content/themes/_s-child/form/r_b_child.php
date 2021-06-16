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

        <div>
            <!-- ステップナビゲーション -->
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
                            <input type="text" name="c1_name" placeholder="例)鈴木　花子">
                        </div>
                        <div class="row">
                            <div class="heading">フリガナ*</div>
                            <input type="text" name="c1_hurigana" placeholder="例)スズキ　ハナコ">
                        </div>
                        <div class="row">
                            <div class="heading">生年月日*</div>
                            <input type="text" name="c1_birth" placeholder="例)1980/4/2">
                        </div>
                        <div class="row">
                            <div class="heading">健康状態*</div>
                            <select name="" id="" name="c1_status">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="heading">アレルギー*</div>
                            <div class="col radio">
                                <input type="radio" name="c1_allergy" id="c1_al_ari" value="有り">
                                <label for="c1_al_ari" class="radio-label">有り</label>
                                <input type="radio" name="c1_allergy" id="c1_al_nasi" value="無し">
                                <label for="c1_al_nasi" class="radio-label">無し</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="heading">アレルギーの種類</div>
                            <input type="text" name="c1_allergy_name" placeholder="例)1980/4/2">
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
                                <input type="text" name="c2_name" placeholder="例)鈴木　花子">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="c2_hurigana" placeholder="例)スズキ　ハナコ">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="c2_birth" placeholder="例)1980/4/2">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select name="" id="" name="c2_status">
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギー*</div>
                                <div class="col radio">
                                    <input type="radio" name="c2_allergy" id="c2_al_ari" value="有り">
                                    <label for="c2_al_ari" class="radio-label">有り</label>
                                    <input type="radio" name="c2_allergy" id="c2_al_nasi" value="無し">
                                    <label for="c2_al_nasi" class="radio-label">無し</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギーの種類</div>
                                <input type="text" name="c2_allergy_name" placeholder="例)1980/4/2">
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
                                <input type="text" name="c3_name" placeholder="例)鈴木　花子">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="c3_hurigana" placeholder="例)スズキ　ハナコ">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="c3_birth" placeholder="例)1980/4/2">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select name="" id="" name="c3_status">
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギー*</div>
                                <div class="col radio">
                                    <input type="radio" name="c3_allergy" id="c3_al_ari" value="有り">
                                    <label for="c3_al_ari" class="radio-label">有り</label>
                                    <input type="radio" name="c3_allergy" id="c3_al_nasi" value="無し">
                                    <label for="c3_al_nasi" class="radio-label">無し</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギーの種類</div>
                                <input type="text" name="c3_allergy_name" placeholder="例)1980/4/2">
                            </div>
                        </div>
                    </div>




                </div>








                <div>
                    <div class="heading">
                        備考
                    </div>
                    <textarea name="" id="" cols="30" rows="10" class="bikou"></textarea>
                </div>

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