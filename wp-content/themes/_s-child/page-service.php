<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_front = get_stylesheet_directory_uri() . "/img/front/";
$img_fol_service = get_stylesheet_directory_uri() . "/img/service/";
$img_fol_other = get_stylesheet_directory_uri() . "/img/other/";
?>
<div class="service">
    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_service; ?>mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_service; ?>mv_sp.png" alt="">
    </div>

    <div class="content1">
        <div class="title">サービスについて</div>

        <div class="flex">
            <div class="item">
                <div class="catch">
                    <img src="<?php echo $img_fol_service; ?>content1_1.png" alt="">
                </div>
                <!-- <div class="service_content1_heading">
                    <img src="<?php echo $img_fol_service; ?>service_content1_num1.svg" alt="">
                    24時間対応
                </div>
                <div class="service_content1_fruit1">
                    <img src="<?php echo $img_fol; ?>grape.png" alt="">
                </div> -->
                <div class="des">
                    夜間に預けたい時、出産や入院時、会合や会食、他にも急遽預けなければいけなくなってしまった時…<br>
                    出来る限り対応させていただきます。早朝、夜間のお預かりなどお客様のニーズにお応えいたします。
                </div>
            </div>
            <div class="item">
                <div class="catch">
                    <img src="<?php echo $img_fol_service; ?>content1_2.png" alt="">
                </div>
                <!-- <div class="service_content1_heading">
                    <img src="<?php echo $img_fol_service; ?>service_content1_num2.svg" alt="">
                    充実したスタッフの育成・研修
                </div>
                <div class="service_content1_fruit2">
                    <img src="<?php echo $img_fol; ?>half_orange_green.png" alt="">
                </div> -->
                <div class="des">
                    HURU-HURUは、資格の有無だけでなく誠実な人柄、お子様の変化に気づき、状況に合わせて対応ができるシッターの育成を目指しています。<br>
                    そのため、併設の託児所内にて多くのお子様と触れ合い、おむつ交換、遊び等、学ぶ場を提供しております。<br>
                    また、シッターとしての礼儀やマナーについても研修を行いお客様が安心してご利用頂けるよう努めています。
                </div>
            </div>
            <div class="item">
                <div class="catch">
                    <img src="<?php echo $img_fol_service; ?>content1_3.png" alt="">
                </div>
                <!-- <div class="service_content1_heading">
                    <img src="<?php echo $img_fol_service; ?>service_content1_num3.svg" alt="">
                    託児所併設
                </div>
                <div class="service_content1_fruit3">
                    <img src="<?php echo $img_fol; ?>strawberry.png" alt="">
                </div> -->
                <div class="des">
                    ベビーシッターサービスのほかに託児所も併設しています。お友達と一緒に過ごすことで、家庭ではできない経験を得ることができます。<br>
                    お客様のご要望に応じ、シッターサービスと併せてご利用いただけます。<br><br>

                    <span>＊HURU-HURU会員は託児所も会員としてご利用いただけます。</span>
                </div>
            </div>
        </div>
    </div>


    <div class="dot_back">
        <div class="content2">
            <div class="title">シッティング内容</div>

            <div class="flex">
                <div class="item1">
                    <div class="img">
                        <img src="<?php echo $img_fol_service; ?>service_content2_1.png" alt="">
                    </div>
                    <div class="item_title">できること</div>
                    <div class="list">
                        <div class="list_item"><span>●</span>ご自宅でのシッティング</div>
                        <div class="list_item"><span>●</span>早朝、夜間利用</div>

                        <div class="list_item"><span>●</span>外遊び</div>
                        <div class="list_item"><span>●</span>託児所利用</div>

                        <div class="list_item"><span>●</span>食事介助</div>
                        <div class="list_item"><span>●</span>病児保育</div>

                        <div class="list_item"><span>●</span>買い物</div>
                        <div class="list_item"><span>●</span>投薬(投薬依頼書に基づき)</div>

                        <div class="list_item"><span>●</span>送迎</div>
                    </div>
                    <div class="des">
                        ※買い物に関しましては保育時間内は致しません。保育時間前後にご利用ください。シッティングに支障が出る範囲のものや、お子様の状況によっては難しい場合もございます。ご了承ください。
                    </div>
                </div>
                <div class="item2">
                    <div class="img">
                        <img src="<?php echo $img_fol_service; ?>service_content2_2.png" alt="">
                    </div>
                    <div class="item_title">できないこと</div>
                    <div class="list_item"><span>●</span>沐浴・シャワー</div>
                    <div class="list_item"><span>●</span>調理</div>
                    <div class="list_item"><span>●</span>掃除・洗濯</div>
                    <div class="list_item"><span>●</span>車・自動車の運転</div>
                    <div class="list_item"><span>●</span>37.5度以上の病児保育</div>
                </div>
            </div>
        </div>






        <div class="content3">
            <div class="service_content3_back">
                <img src="<?php echo $img_fol_front; ?>front_features_back.png" alt="">
            </div>

            <div class="fruit">
                <img src="<?php echo $img_fol; ?>orange.png" alt="">
            </div>


            <div class="content" id="service_benri">
                <div class="title">便利な使い方</div>
                <div class="slideshow">
                    <input type="radio" name="slideshow" id="switch1" checked>
                    <!-- <input type="radio" name="slideshow" id="switch2">
                    <input type="radio" name="slideshow" id="switch3">
                    <input type="radio" name="slideshow" id="switch4">
                    <input type="radio" name="slideshow" id="switch5"> -->
                    <div class="slideContents">
                        <section id="slide1">
                            <div class="flex">
                                <div class="service_content3_item">
                                    <div><img src="<?php echo $img_fol_service; ?>service_content3_list1.png" alt=""></div>
                                    <div class="item_label">
                                        <div class="item_label_item">朝の準備が大変！</div>
                                        <div class="item_label_item">急いで子供を保育園に！</div>
                                    </div>
                                    <div class="item_des">
                                        急がせてしまっていた保育園の送りも子供のペースで！ママやパパもお仕事の準備や心に余裕が生まれます。
                                    </div>
                                </div>
                                <div class="service_content3_item">
                                    <div><img src="<?php echo $img_fol_service; ?>service_content3_list2.png" alt=""></div>
                                    <div class="item_label">
                                        <div class="item_label_item">仕事で習い事に連れて行けない</div>
                                    </div>
                                    <div class="item_des">
                                        平日は仕事が忙しく、習い事は土日だけ．．．でも土日の習い事は定員がいっぱいで入れない！<br>
                                        そんな時もシッターが送迎をしご自宅まで安全に送り届けます。<br>
                                        （例）保育園→習い事→ご自宅へ
                                    </div>
                                </div>
                                <div class="service_content3_item">
                                    <div><img src="<?php echo $img_fol_service; ?>service_content3_list3.png" alt=""></div>
                                    <div class="item_label">
                                        <div class="item_label_item">残業したいけど</div>
                                        <div class="item_label_item">保育園のお迎えが…</div>
                                    </div>
                                    <div class="item_des">
                                        この日は仕事をやっつけたい！帰りが遅くなる…。そんな日は保育園のお迎えからご自宅でママが帰ってくるまでお子様をお預かりします！
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- <section id="slide2">
                            2
                        </section>
                        <section id="slide3">
                            3
                        </section>
                        <section id="slide4">
                            4
                        </section>
                        <section id="slide5">
                            5
                        </section> -->
                    </div>
                    <p class="arrow prev">
                        <!-- <i class="ico"></i> -->
                        <img class="ico" src="<?php echo $img_fol_service; ?>service_prev.svg" alt="">
                        <label for="switch1"></label>
                        <!-- <label for="switch2"></label>
                        <label for="switch3"></label>
                        <label for="switch4"></label>
                        <label for="switch5"></label> -->
                    </p>
                    <p class="arrow next">
                        <!-- <i class="ico"></i> -->
                        <img class="ico" src="<?php echo $img_fol_service; ?>service_next.svg" alt="">
                        <label for="switch1"></label>
                        <!-- <label for="switch2"></label>
                        <label for="switch3"></label>
                        <label for="switch4"></label>
                        <label for="switch5"></label> -->
                    </p>
                </div>
            </div>

        </div>


    </div>

    <div class="front_flow front_content content4">
        <div class="front_heading">
            <img class="front_flow_title" src="<?php echo $img_fol_front; ?>front_flow_title.svg" alt="">
        </div>
        <div class="front_flow_list">
            <div class="front_flow_item">
                <div class="front_flow_number"><img src="<?php echo $img_fol_front; ?>front_flow_number1.svg" alt=""></div>
                <div class="front_flow_img"><img src="<?php echo $img_fol_front; ?>front_flow1.svg" alt=""></div>
                <div class="front_flow_h dot_back">ご予約</div>
                <div class="front_flow_des">
                    WEBにて申し込みをお願いします。<br>
                    <a href="">ご予約はこちら</a><br><br>
                    お申し込み後、手配の状況を含めてこちらからメールにてご連絡いたします。
                </div>
            </div>
            <div class="front_flow_item_arrow"><img src="<?php echo $img_fol_front; ?>front_flow_arrow.svg" alt=""></div>
            <div class="front_flow_item">
                <div class="front_flow_number"><img src="<?php echo $img_fol_front; ?>front_flow_number2.svg" alt=""></div>
                <div class="front_flow_img"><img src="<?php echo $img_fol_front; ?>front_flow2.svg" alt=""></div>
                <div class="front_flow_h dot_back">手配</div>
                <div class="front_flow_des">
                    手配完了後、メールにて担当シッターをお伝えし、サービス内容の詳細をお伺いしていきます。<br><br>
                    依頼日前日にもご予約内容の確認をさせていただきます。
                </div>
            </div>
            <div class="front_flow_item_arrow"><img src="<?php echo $img_fol_front; ?>front_flow_arrow.svg" alt=""></div>
            <div class="front_flow_item">
                <div class="front_flow_number"><img src="<?php echo $img_fol_front; ?>front_flow_number3.svg" alt=""></div>
                <div class="front_flow_img"><img src="<?php echo $img_fol_front; ?>front_flow3.svg" alt=""></div>
                <div class="front_flow_h dot_back">シッティング</div>
                <div class="front_flow_des">
                    当日10分前にご自宅に伺い引継ぎ後サービスを開始いたします。<br>
                    お支払いは後日請求書を発行いたします。
                </div>
            </div>
        </div>
    </div>

    <div class="dot_back">
        <div class="content5">
            <div class="title">ご利用いただく皆様へ</div>
            <div class="service_content5_sub_title">HURU-HURUをより良くご利用いただくため、ルールをご確認ください。</div>

            <table>
                <tr>
                    <td>
                        <div class="t_img">
                            <img src="<?php echo $img_fol_service; ?>service_content5_1.svg" alt="">
                        </div>
                        <div class="t_title">お客様情報は正確に</div>
                        <div>お客様のご希望に沿ったシッターを手配するため、お申し込みの際はお客様情報は正確に入力お願いいたします。</div>
                    </td>
                    <td>
                        <div class="t_img">
                            <img src="<?php echo $img_fol_service; ?>service_content5_2.svg" alt="">
                        </div>
                        <div class="t_title">ご依頼内容は明確に</div>
                        <div>
                            ご家庭のルールやご要望またはやってほしくない事など事前にお伝えください。当日お時間が無い場合にはメモに起こしていただけると幸いです。
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="t_img">
                            <img src="<?php echo $img_fol_service; ?>service_content5_3.svg" alt="">
                        </div>
                        <div class="t_title">貴重品管理</div>
                        <div>
                            留守中の貴重品は施錠できる部屋や金庫に収納管理してください。また、入室して欲しくない部屋を明示する等、ご利用者様の責任のもと厳重に管理をお願いします。

                        </div>
                    </td>
                    <td>
                        <div class="t_img">
                            <img src="<?php echo $img_fol_service; ?>service_content5_4.svg" alt="">
                        </div>
                        <div class="t_title">シッターに対するフィードバック</div>
                        <div>
                            ご利用の皆様から頂いたれレビューはシッターの励みとスキルの向上、今後シッターを派遣する上での評価基準にもなります。良かった点も悪かった点も素直にお伝えください。
                        </div>

                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<?php
get_footer();
?>