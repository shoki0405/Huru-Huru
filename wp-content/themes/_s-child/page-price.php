<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_front = get_stylesheet_directory_uri() . "/img/front/";
$img_fol_other = get_stylesheet_directory_uri() . "/img/other/";
$img_fol_price = get_stylesheet_directory_uri() . "/img/price/";
?>

<div class="price">
    <div class="mv_page">
        <img src="<?php echo $img_fol_price; ?>mv.png" alt="">
    </div>
    <div class="price1">
        <div class="price1_tltle">ご利用料金</div>
        <div class="price1_price">1時間<span> 1,600円～</span></div>
        <div class="price1_price_des">※会員料金</div>

        <div class="price1_calc">
            <span class="calc1">基本料金</span>
            <span class="calcp">+</span>
            <span class="calc2">交通費</span>
            <span class="calcp">+</span>
            <span class="calc3">オプション料金</span>
        </div>
    </div>

    <div class="price2">

        <!-- 会員種別と基本料金 -->
        <div>
            <table class="t1">
                <tr>
                    <td class="td_title" colspan="3">
                        会員種別と基本料金
                    </td>
                </tr>
                <tr>
                    <th>会員種別</th>
                    <th class="t_col2">会員</th>
                    <th>ビジター</th>
                </tr>
                <tr>
                    <td>入会金</td>
                    <td class="t_col2">50,000円</td>
                    <td>0円</td>
                </tr>
                <tr>
                    <td>年会費</td>
                    <td class="t_col2">0円</td>
                    <td>0円</td>
                </tr>
            </table>
        </div>


        <!-- 基本料金(利用料金) -->
        <div>
            <table class="t2">
                <tr>
                    <td class="td_title" colspan="3">
                        基本料金(利用料金)
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
        </div>

        <!-- オプション料金 -->
        <div>
            <table class="t3">
                <tr>
                    <td class="td_title" colspan="2">
                        オプション料金
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
                    <td>深夜料金(22時～翌朝7時)</td>
                    <td class="t_col2">利用料金の25%</td>
                </tr>
                <tr>
                    <td>送迎</td>
                    <td class="t_col2">2,000円/時(延長500円/15分)/+交通費</td>
                </tr>
                <tr>
                    <td>買い物</td>
                    <td class="t_col2">1,500円/回(1時間以内の範囲)</td>
                </tr>
                <tr>
                    <td>兄弟割引</td>
                    <td class="t_col2">2人目基本料金半額</td>
                </tr>
                <tr>
                    <td>シッター交通費</td>
                    <td class="t_col2">1,000円</td>
                </tr>
            </table>
        </div>

        <div>
            <div>● 最短ご利用時間</div>
            3時間となります。<br>
            送迎のみご利用の場合はご相談ください。<br><br>

            <div>● 延長の時間単位</div>
            15分単位とし、5分以上の延長より15分と計算させていただきます。<br><br>

            <div>● 交通費について</div>
            シッターの自宅からの往復交通費を1,000円で請求させていただきます。<br>
            なお、送迎などの外出の指示をいただいた場合の交通費は別途必要となります。<br><br>

            <div>● 家事（買い物）について</div>
            保育時間内は致しません。保育時間前後にご利用ください。<br><br>

            <div>● キャンセル料</div>
            依頼日前日0時～17時の予約のキャンセルは利用料金の50%、前日17時以降のご予約は100%いただきます。<br><br>
            ご予約の変更は依頼日2日前まで対応いたします。スタッフの調整ができない場合もございますので、お早目のご連絡をおすすめしております。<br>
            前営業日・営業時間を超えた場合の変更はできません。（当初いただいたご依頼時間にて対応・キャンセル料を請求させていただきます。）<br><br>
        </div>

        <div class="price2_bottom">
            <img src="<?php echo $img_fol_price; ?>price2_bottom.svg" alt="">
        </div>

    </div>







    <div class="price3">
        <div class="price3_inner">
            <div class="price3_title">東京都ベビーシッター利用支援</div>

            <div class="price3_top">
                <img src="<?php echo $img_fol_price; ?>price3_top.png" alt="">
            </div>

            <div class="price3_h">
                <span class="price3_h_img1">
                    <img src="<?php echo $img_fol; ?>half_orange.png" alt="">
                </span>
                利用可能時間
            </div>

            <div class="price3_text">
                <div class="price3_text_b">
                    月曜日から土曜日までの午前7時～午後10時まで
                </div>

                <br>

                <div class="price3_text_b">
                    〈 保育短時間認定 〉
                </div>

                <div class="price3_text_n">
                    1日8時間まで かつ 月160時間まで
                </div>

                <br>

                <div class="price3_text_b">
                    〈 保育標準時間認定〉
                </div>

                <div class="price3_text_n">
                    1日11時間まで かつ 月220時間まで
                </div>

                <br>

                <div class="price3_text_s">
                    ※きょうだいの保育や保育所への送迎、家事等のサービスは含みません。<br>
                    ※保護者が休暇の日（体調不良を含む）は助成対象外となります。<br>
                    ※お子さまが病気になった場合は、助成対象外となります。
                </div>
            </div>

            <div class="price3_h">
                <span class="price3_h_img2">
                    <img src="<?php echo $img_fol; ?>smile.png" alt="">
                </span>
                対象自治体
            </div>

            <div class="price3_text">
                新宿区、台東区、目黒区、大田区、渋谷区、中野区、北区、板橋区、
                葛飾区、品川区、三鷹市、府中市、国立市、福生市、東大和市、武蔵村山市、
                狛江市　(2020/3/31現在、東京都福祉保健局HPより）荒川区(2020/07～)<br><br>

                対象自治体は随時追加・変更されます。ご自身が対象者かどうかの確認は、
                お住まいの区市にお問い合わせください。
            </div>

            <div class="price3_h">
                <span class="price3_h_img3">
                    <img src="<?php echo $img_fol; ?>half_green_fruit.png" alt="">
                </span>
                ご利用の流れ
            </div>

            <div class="price3_flow">
                <div class="price3_flow_num">
                    <img src="<?php echo $img_fol_price; ?>price3_num1.svg" alt="">
                </div>
                <div>
                    お住まいの区市町村から、交付された“対象者確認書”をメール添付にて送付ください。<br><br>
                    <div class="price3_text_b">
                        宛先：@@@@mail.jp　件名：対象者確認書（氏名）
                    </div>
                </div>
            </div>

            <div class="price3_flow">
                <div class="price3_flow_num">
                    <img src="<?php echo $img_fol_price; ?>price3_num2.svg" alt="">
                </div>
                <div>
                    HURU-HURUに未登録の方は、<a href="">こちら</a>から登録をお願いします。
                </div>
            </div>

            <div class="price3_flow">
                <div class="price3_flow_num">
                    <img src="<?php echo $img_fol_price; ?>price3_num3.svg" alt="">
                </div>
                <div>
                    東京都ベビーシッター利用支援事業フォームへ、ご回答をお願いいたします。
                </div>
            </div>



            <div class="price3_under_banner">
                <div class="price3_under_banner1">
                    本事業については下記東京都ホームページに掲載の<br>
                    利用約款および利用パンフレットも必ずご確認ください。
                </div>
                <div class="price3_under_banner2">
                    東京都専用ホームページへ
                    <a href=""></a>
                </div>
            </div>
        </div>

    </div>







</div>

<?php
get_footer();
?>