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

                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div class="col">
                        <div>※24時間表記で記載をお願い致します。</div>
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
                    <div class="heading">電話番号*</div>
                    <input type="tel" name="p_tel" size="12" maxlength="20" placeholder="例)00-0000-0000">
                </div>
                <div class="row">
                    <div class="heading">メールアドレス*</div>
                    <input type="email" name="p_email" placeholder="例)example@example.com">
                </div>

                <div class="row">
                    <div class="heading">確認用*</div>
                    <input type="email" name="p_email_cnf" placeholder="例)example@example.com">
                </div>

                <div class="row">
                    <div class="heading">郵便番号*</div>
                    <input type="text" name="p_zip" placeholder="例)101-0000">
                </div>

                <div class="row">
                    <div class="heading">都道府県*</div>
                    <select name="p_pref">
                        <option value="東京都">東京都</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                </div>

                <div class="row">
                    <div class="heading">住所*</div>
                    <input type="text" name="p_address" placeholder="例)中央区銀座7-15-18">
                </div>

                <div class="row">
                    <div class="heading">建物名</div>
                    <input type="text" name="p_building">
                </div>

                <div class="row">
                    <div class="heading">最寄駅*</div>
                    <input type="text" name="p_station" placeholder="例)東京メトロ銀座線　銀座駅">
                </div>

            </div>





            <div class="submit_frame">
                <button type="submit" class="submit" name="child" value="child">
                    お子様情報を入力
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </form>

    </div>
</div>