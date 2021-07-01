<?php
get_header();

get_template_part("template/right_menu");
get_template_part("template/bottom_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_service = get_stylesheet_directory_uri() . "/img/service/";
$img_fol_flow = get_stylesheet_directory_uri() . "/img/flow/";
?>
<div class="service">
    <div class="mv_page">
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
                <div class="des">
                    夜間に預けたい時、出産や入院時、会合や会食、他にも急遽預けなければいけなくなってしまった時…<br>
                    出来る限り対応させていただきます。早朝、夜間のお預かりなどお客様のニーズにお応えいたします。
                </div>
            </div>
            <div class="item">
                <div class="catch">
                    <img src="<?php echo $img_fol_service; ?>content1_2.png" alt="">
                </div>
                <div class="des">
                    ベビーシッターサービスのほかに託児所も併設しています。お友達と一緒に過ごすことで、家庭ではできない経験を得ることができます。<br>
                    お客様のご要望に応じ、シッターサービスと併せてご利用いただけます。<br><br>

                    <span>＊HURU-HURU会員は託児所も会員としてご利用いただけます。</span>
                </div>
            </div>
            <div class="item">
                <div class="catch">
                    <img src="<?php echo $img_fol_service; ?>content1_3.png" alt="">
                </div>
                <div class="des">
                    HURU-HURUは、資格の有無だけでなく誠実な人柄、お子様の変化に気づき、状況に合わせて対応ができるシッターの育成を目指しています。<br>
                    そのため、併設の託児所内にて多くのお子様と触れ合い、おむつ交換、遊び等、学ぶ場を提供しております。<br>
                    また、シッターとしての礼儀やマナーについても研修を行いお客様が安心してご利用頂けるよう努めています。


                </div>
            </div>
        </div>
    </div>


    <div class="content2 dot_back">
        <div class="title">シッティング内容</div>

        <div class="flex">
            <div class="item1">
                <div class="img">
                    <img src="<?php echo $img_fol_service; ?>service_content2_1.png" alt="">
                </div>
                <div class="item_title">できること</div>
                <div class="list">
                    <div class="list_item"><span>●</span>ご自宅でのシッティング</div>
                    <div class="list_item"><span>●</span>外遊び</div>
                    <div class="list_item"><span>●</span>食事介助</div>
                    <div class="list_item"><span>●</span>買い物</div>
                    <div class="list_item"><span>●</span>送迎</div>
                </div>
                <div class="list">
                    <div class="list_item"><span>●</span>沐浴・シャワー(シッターにより可)</div>
                    <div class="list_item"><span>●</span>早朝、夜間利用</div>
                    <div class="list_item"><span>●</span>託児所利用</div>
                    <div class="list_item"><span>●</span>病児保育</div>
                    <div class="list_item"><span>●</span>投薬(投薬依頼書に基づき)</div>
                </div>
                <div class="des">
                    ※買い物に関しましては保育時間内は致しません。
                    保育時間前後にご利用ください。シッティングに支障が出る範囲のものや、
                    お子様の状況によっては難しい場合もございます。ご了承ください。
                </div>
            </div>
            <div class="item2">
                <div class="img">
                    <img src="<?php echo $img_fol_service; ?>service_content2_2.png" alt="">
                </div>
                <div class="item_title">できないこと</div>
                <div class="list_item"><span>●</span>調理</div>
                <div class="list_item"><span>●</span>掃除・洗濯</div>
                <div class="list_item"><span>●</span>車・自動車の運転</div>
                <div class="list_item"><span>●</span>37.5度以上の病児保育</div>
            </div>
        </div>
    </div>






    <div class="content3">

        <div class="back_cloud_top">
            <img class="pc_765" src="<?php echo $img_fol; ?>back_cloud_top.png" alt="">
            <img class="tb_765" src="<?php echo $img_fol; ?>back_cloud_top_sp.png" alt="">
        </div>

        <div class="fruit">
            <img src="<?php echo $img_fol; ?>orange.png" alt="">
        </div>


        <div class="content" id="service_benri">
            <div class="title">便利な使い方</div>
            <div class="slideshow">
                <input type="radio" name="slideshow" id="switch1" checked>
                <input type="radio" name="slideshow" id="switch2">
                <input type="radio" name="slideshow" id="switch3">
                <input type="radio" name="slideshow" id="switch4">
                <!-- <input type="radio" name="slideshow" id="switch5"> -->
                <div class="slideContents">
                    <section id="slide1">
                        <div class="flex">
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (1).png" alt="">
                                </div>
                                <div class="item_des">
                                    急がせてしまっていた保育園の送りも子供のペースで！ママやパパもお仕事の準備や心に余裕が生まれます。
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <!-- <img src="<?php echo $img_fol_service; ?>service_content3_list2.png" alt=""> -->
                                    <img src="<?php echo $img_fol_service; ?>benri (2).png" alt="">
                                </div>
                                <div class="item_des">
                                    平日は仕事が忙しく、習い事は土日だけ．．．でも土日の習い事は定員がいっぱいで入れない！<br>
                                    そんな時もシッターが送迎をしご自宅まで安全に送り届けます。<br>
                                    （例）保育園→習い事→ご自宅へ
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (3).png" alt="">
                                </div>
                                <div class="item_des">
                                    この日は仕事をやっつけたい！帰りが遅くなる…。そんな日は保育園のお迎えからご自宅でママが帰ってくるまでお子様をお預かりします！
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="slide2">
                        <div class="flex">
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (4).png" alt="">
                                </div>
                                <div class="item_des">
                                    子供の体力は無限大！大きくなるにつれて私の体力じゃ限界が．．．
                                    お子様が楽しめるよういっぱい遊びます！
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <!-- <img src="<?php echo $img_fol_service; ?>service_content3_list2.png" alt=""> -->
                                    <img src="<?php echo $img_fol_service; ?>benri (5).png" alt="">
                                </div>
                                <div class="item_des">
                                    なかなか休む暇がない毎日．．．リフレッシュする時間も大切です。美容院や友達とランチをしたりゆっくり過ごしてみませんか？
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (6).png" alt="">
                                </div>
                                <div class="item_des">
                                    夫婦２人で過ごす時間はありますか？
                                    １日子どもを預け、特別な記念日やディナーや旅行など一緒に過ごしてみてはいかがですか？
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="slide3">
                        <div class="flex">
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (7).png" alt="">
                                </div>
                                <div class="item_des">
                                    病院に受診後、37.5度以上、感染症の疑いがなければお預かりいたします。お薬は投薬依頼書にご記入いただければ対応可能です。
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <!-- <img src="<?php echo $img_fol_service; ?>service_content3_list2.png" alt=""> -->
                                    <img src="<?php echo $img_fol_service; ?>benri (8).png" alt="">
                                </div>
                                <div class="item_des">
                                    誰にも預けたことがないし、いきなり保育園に預けるのは心配…。ベビーシッターなら1対1で安心してご利用いただけますよ。
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (9).png" alt="">
                                </div>
                                <div class="item_des">
                                    保育園にお迎えをお願いしたいけど、ベビーシッターをお家に入れるのは抵抗がある…。そんな時はお迎えから併設の託児所でお預かりもできます。ご自宅までの送迎も可能です。
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="slide4">
                        <div class="flex">
                            <div class="item">
                                <div>
                                    <img src="<?php echo $img_fol_service; ?>benri (10).png" alt="">
                                </div>
                                <div class="item_des">
                                    大事な会議の間や仕事に集中したい時、お客様のご要望の時間にお子様と過ごします。
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <!-- <img src="<?php echo $img_fol_service; ?>service_content3_list2.png" alt=""> -->
                                    <img src="<?php echo $img_fol_service; ?>benri (11).png" alt="">
                                </div>
                                <div class="item_des">
                                    子どもにいろんなところへ連れてってあげたい…。公園、博物館、動物園等、忙しくお子様を連れて行けない時にお連れします。
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- <section id="slide5">
                            5
                        </section> -->
                </div>
                <p class="arrow prev">
                    <!-- <i class="ico"></i> -->
                    <img class="ico" src="<?php echo $img_fol_service; ?>service_prev.svg" alt="">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <!-- <label for="switch5"></label> -->
                </p>
                <p class="arrow next">
                    <!-- <i class="ico"></i> -->
                    <img class="ico" src="<?php echo $img_fol_service; ?>service_next.svg" alt="">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <!-- <label for="switch5"></label> -->
                </p>
            </div>
        </div>
        <div class="back_cloud_bottom_white">
            <img class="pc_765" src="<?php echo $img_fol; ?>back_cloud_bottom.png" alt="">
            <img class="tb_765" src="<?php echo $img_fol; ?>back_cloud_bottom_sp.png" alt="">
        </div>
    </div>



    <?php get_template_part("template/flows"); ?>

    <div class="dot_back">
        <div class="content5">
            <div class="title">ご利用いただく皆様へ</div>
            <div class="sub_title">HURU-HURUをより良くご利用いただくため、ルールをご確認ください。</div>


            <div class="inline_block">
                <div class="item">
                    <div class="img">
                        <img src="<?php echo $img_fol_service; ?>service_content5_1.svg" alt="">
                    </div>
                    <div class="heading">
                        お客様情報は正確に
                    </div>
                    <div class="des">
                        お客様のご希望に沿ったシッターを手配するため、お申し込みの際はお客様情報は正確に入力お願いいたします。
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php echo $img_fol_service; ?>service_content5_2.svg" alt="">
                    </div>
                    <div class="heading">
                        ご依頼内容は明確に
                    </div>
                    <div class="des">
                        ご家庭のルールやご要望またはやってほしくない事など事前にお伝えください。当日お時間が無い場合にはメモに起こしていただけると幸いです。
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php echo $img_fol_service; ?>service_content5_3.svg" alt="">
                    </div>
                    <div class="heading">
                        貴重品管理
                    </div>
                    <div class="des">
                        留守中の貴重品は施錠できる部屋や金庫に収納管理してください。また、入室して欲しくない部屋を明示する等、ご利用者様の責任のもと厳重に管理をお願いします。
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="<?php echo $img_fol_service; ?>service_content5_4.svg" alt="">
                    </div>
                    <div class="heading">
                        シッターに対するフィードバック
                    </div>
                    <div class="des">
                        ご利用の皆様から頂いたれレビューはシッターの励みとスキルの向上、今後シッターを派遣する上での評価基準にもなります。良かった点も悪かった点も素直にお伝えください。
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<?php
get_footer();
?>