<?php
get_header();

get_template_part("template/right_menu");
get_template_part("template/bottom_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_price = get_stylesheet_directory_uri() . "/img/price/";
?>

<div class="price">
    <div class="mv_page">
        <img class="pc" src="<?php echo $img_fol_price; ?>mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_price; ?>mv_sp.png" alt="">
    </div>
    <div class="content1">
        <div class="tltle">ご利用料金</div>
        <div class="price_h">1時間<span> 1,600円～</span></div>
        <div class="des">※会員料金</div>

        <div class="calc">
            <span class="calc1">基本料金</span>
            <span class="calcp">+</span>
            <span class="calc2">交通費</span>
            <span class="calcp">+</span>
            <span class="calc3">オプション料金</span>
        </div>
    </div>

    <div class="price2">
        <!-- 会員種別と基本料金 -->
        <table class="t1">
            <tr>
                <td class="td_title" colspan="3">
                    <img class="t_img1" src="<?php echo $img_fol; ?>orange.png" alt="">
                    <span>会員種別と基本料金</span>
                    <img class="t_img2" src="<?php echo $img_fol; ?>smile.png" alt="">
                </td>
            </tr>
            <tr>
                <th>会員種別</th>
                <th class="t_col2">会員</th>
                <th>ビジター</th>
            </tr>
            <tr>
                <td>入会金</td>
                <td class="t_col2 td_nyukai">
                    50,000円
                    <img src="<?php echo $img_fol_price; ?>num2.png" alt="">
                </td>
                <td>0円</td>
            </tr>
            <tr>
                <td>年会費</td>
                <td class="t_col2">0円</td>
                <td>0円</td>
            </tr>
        </table>


        <!-- 基本料金(利用料金) -->
        <table class="t2">
            <tr>
                <td class="td_title" colspan="3">
                    <img class="t_img1" src="<?php echo $img_fol; ?>grape.png" alt="">
                    <span>基本料金(利用料金)</span>
                    <img class="t_img2" src="<?php echo $img_fol; ?>half_orange_green.png" alt="">
                </td>
            </tr>
            <tr>
                <th>会員種別</th>
                <th class="t_col2">会員</th>
                <th>ビジター</th>
            </tr>
            <tr>
                <td>通常料金</td>
                <td class="t_col2">1,600円/時</td>
                <td>2,000円/時</td>
            </tr>
            <tr>
                <td>延長料金</td>
                <td class="t_col2">400円/15分</td>
                <td>500円/15分</td>
            </tr>
        </table>

        <!-- オプション料金 -->
        <table class="t3">
            <tr>
                <td class="td_title" colspan="2">
                    <img class="t_img1" src="<?php echo $img_fol; ?>strawberry.png" alt="">
                    <span>オプション料金</span>
                    <img class="t_img2" src="<?php echo $img_fol; ?>green_fruit.png" alt="">
                </td>
            </tr>
            <tr>
                <th colspan="2">会員・ビジター共通</th>
            </tr>
            <tr>
                <td>土・日・祝日</td>
                <td class="t_col2">利用料金の25%</td>
            </tr>
            <tr>
                <td>深夜料金<span class="kaigyo">(22時～翌朝7時)</span></td>
                <td class="t_col2">利用料金の25%</td>
            </tr>
            <tr>
                <td>送迎</td>
                <td class="t_col2">2,000円/時<span class="kaigyo">(延長500円/15分)/+交通費</span></td>
            </tr>
            <tr>
                <td>沐浴・シャワー</td>
                <td class="t_col2">500円(シッターにより可)</td>
            </tr>
            <tr>
                <td>買い物</td>
                <td class="t_col2">1,500円/回<span class="kaigyo">(1時間以内の範囲)</span></td>
            </tr>
            <tr>
                <td>兄弟割引</td>
                <td class="t_col2">2人目基本料金半額</td>
            </tr>
            <tr>
                <td>シッター<span class="kaigyo">交通費</span></td>
                <td class="t_col2">1,000円</td>
            </tr>
        </table>

        <div>
            <div class="li_title">● 最短ご利用時間</div>
            3時間となります。<br>
            送迎のみご利用の場合はご相談ください。<br><br>

            <div class="li_title">● 延長の時間単位</div>
            15分単位とし、5分以上の延長より15分と計算させていただきます。<br><br>

            <div class="li_title">● 交通費について</div>
            シッターの自宅からの往復交通費を1,000円で請求させていただきます。<br>
            なお、送迎などの外出の指示をいただいた場合の交通費は別途必要となります。<br><br>

            <div class="li_title">● 家事（買い物）について</div>
            保育時間内は致しません。保育時間前後にご利用ください。<br><br>

            <div class="li_title">● キャンセル料</div>
            依頼日前日0時～17時の予約のキャンセルは利用料金の50%、前日17時以降のご予約は100%いただきます。
            <br><br>
            ご予約の変更は依頼日2日前まで対応いたします。スタッフの調整ができない場合もございますので、お早目のご連絡をおすすめしております。
            <br>
            前営業日・営業時間を超えた場合の変更はできません。（当初いただいたご依頼時間にて対応・キャンセル料を請求させていただきます。）
            <br><br>
        </div>

        <div class="bottom_img">
            <img src="<?php echo $img_fol_price; ?>price2_bottom.svg" alt="">
        </div>

    </div>







    <div class="price3" id="tokyoriyo">
        <div class="inner">
            <div class="title">東京都ベビーシッター<span class="kaigyo">利用支援</span></div>

            <div class="top_img">
                <img class="pc" src="<?php echo $img_fol_price; ?>riyo.png" alt="">
                <img class="sp" src="<?php echo $img_fol_price; ?>riyo_sp.png" alt="">
            </div>

            <div class="heading">
                <span class="heading_img1">
                    <img src="<?php echo $img_fol; ?>half_orange.png" alt="">
                </span>
                利用可能時間
            </div>

            <div class="text">
                <div class="text_b">
                    月曜日から土曜日までの<span class="kaigyo">午前7時～午後10時まで</span>
                </div>

                <br>

                <div class="text_b">
                    〈 保育短時間認定 〉
                </div>

                <div class="text_n">
                    1日8時間まで かつ 月160時間まで
                </div>

                <br>

                <div class="text_b">
                    〈 保育標準時間認定〉
                </div>

                <div class="text_n">
                    1日11時間まで かつ 月220時間まで
                </div>

                <br>

                <div class="text_s">
                    ※きょうだいの保育や保育所への送迎、家事等のサービスは含みません。<br>
                    ※保護者が休暇の日（体調不良を含む）は助成対象外となります。<br>
                    ※お子さまが病気になった場合は、助成対象外となります。
                </div>
            </div>

            <div class="heading">
                <span class="heading_img2">
                    <img src="<?php echo $img_fol; ?>smile.png" alt="">
                </span>
                対象自治体
            </div>

            <div class="text">
                新宿区、台東区、目黒区、大田区、渋谷区、中野区、北区、板橋区、
                葛飾区、品川区、三鷹市、府中市、国立市、福生市、東大和市、武蔵村山市、
                狛江市　(2020/3/31現在、東京都福祉保健局HPより）荒川区(2020/07～)<br><br>

                対象自治体は随時追加・変更されます。ご自身が対象者かどうかの確認は、
                お住まいの区市にお問い合わせください。
            </div>

            <div class="heading">
                <span class="heading_img3">
                    <img src="<?php echo $img_fol; ?>half_green_fruit.png" alt="">
                </span>
                ご利用の流れ
            </div>

            <div class="priceflow">
                <div class="priceflow_num">
                    <img src="<?php echo $img_fol_price; ?>price3_num1.svg" alt="">
                </div>
                <div>
                    お住まいの区市町村から、交付された“対象者確認書”をメール添付にて送付ください。<br><br>
                    <div class="text_b">
                        宛先：@@@@mail.jp　<span class="kaigyo">件名：対象者確認書（氏名）</span>
                    </div>
                </div>
            </div>

            <div class="priceflow">
                <div class="priceflow_num">
                    <img src="<?php echo $img_fol_price; ?>price3_num2.svg" alt="">
                </div>
                <div>
                    HURU-HURUに未登録の方は、<a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>">こちら</a>から登録をお願いします。
                </div>
            </div>

            <div class="priceflow">
                <div class="priceflow_num">
                    <img src="<?php echo $img_fol_price; ?>price3_num3.svg" alt="">
                </div>
                <div>
                    東京都ベビーシッター利用支援事業フォームへ、ご回答をお願いいたします。
                </div>
            </div>



            <div class="under_banner">
                <div class="under_banner1">
                    <span class="kaigyo">本事業については</span>
                    下記東京都ホームページに掲載の<br>
                    <span class="kaigyo">利用約款および利用パンフレットも</span>
                    <span class="kaigyo">必ずご確認ください。</span>
                </div>
                <div class="under_banner2">
                    東京都専用ホームページへ
                    <a href="https://www.fukushihoken.metro.tokyo.lg.jp/kodomo/hoiku/bs/bs3nendo.html" class="a" target="_blank"></a>
                </div>
            </div>
        </div>

    </div>







</div>

<?php
get_footer();
?>