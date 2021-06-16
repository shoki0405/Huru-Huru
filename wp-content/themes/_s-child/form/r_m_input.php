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
                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div class="col">
                        <div class="hyoki">※24時間表記で記載をお願い致します。</div>
                        <input type="date" class="rsv_date" name="date_start">
                    </div>
                    <div class="col">
                        <input type="text" class="rsv_time" name="hour_start" placeholder="9">
                        <span>時</span>
                        <input type="text" class="rsv_time" name="minutes_start" placeholder="00">
                        <span>分から</span>
                    </div>
                </div>


                <div class="row">
                    <div class="heading"></div>
                    <input type="date" class="rsv_date" name="date_end">
                    <div class="col">
                        <input type="text" class="rsv_time" name="hour_end" placeholder="21">
                        <span>時</span>
                        <input type="text" class="rsv_time" name="minutes_end" placeholder="00">
                        <span>分まで</span>
                    </div>

                </div>


                <div class="row">
                    <div class="heading">延長の可能性*</div>
                    <div class="col radio">
                        <input type="radio" name="extension" id="entyo_ari" value="有り">
                        <label for="entyo_ari" class="radio-label">有り</label>
                        <input type="radio" name="extension" id="entyo_nasi" value="無し">
                        <label for="entyo_nasi" class="radio-label">無し</label>
                    </div>
                </div>
                <div class="row">
                    <div class="heading">保護者氏名*</div>
                    <input type="text" name="p_name" placeholder="例)鈴木　花子">
                </div>
                <div class="row">
                    <div class="heading">フリガナ*</div>
                    <input type="text" name="p_hurigana" placeholder="例)スズキ　ハナコ">
                </div>
                <div class="row">
                    <div class="heading">生年月日*</div>
                    <input type="text" name="p_birth" placeholder="例)1980/4/2">
                </div>
                <div class="row">
                    <div class="heading">メールアドレス*</div>
                    <input type="email" name="p_email" placeholder="例)example@example.com">
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