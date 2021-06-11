<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_front = get_stylesheet_directory_uri() . "/img/front/";
$img_fol_front_sp = get_stylesheet_directory_uri() . "/img/front_sp/";
$img_fol_flow = get_stylesheet_directory_uri() . "/img/flow/";
?>



<div class="front">

    <div class="mv">
        <div class="mv_text">
            <div class="mv_text_orange">
                ハートフルな
            </div>
            <div class="mv_text_orange">シッターサービスを</div>
            <div>大切なお子様に愛情をもって<br>寄り添います</div>
        </div>

        <div class="mv_backimg">
            <img class="pc_765" src="<?php echo $img_fol_front; ?>mv.png" alt="">
            <img class="tb_765" src="<?php echo $img_fol_front_sp; ?>mv.png" alt="">
        </div>

    </div>


    <div class="mv_under front_content">
        <div class="mv_under_img">
            <img class="pc" src="<?php echo $img_fol_front; ?>tokyobaby_banner.png" alt="">
            <img class="sp" src="<?php echo $img_fol_front_sp; ?>tokyobaby_banner.png" alt="">
            <a href="" class="a"></a>
        </div>
        <div class="heading">
            ハートフルな<span class="kaigyo_765">シッターサービスを</span>
            <div class="front_mvunder_itemimg1">
                <img src="<?php echo $img_fol; ?>grape.png" alt="">
            </div>
            <div class="front_mvunder_itemimg2">
                <img src="<?php echo $img_fol; ?>green_fruit.png" alt="">
            </div>
        </div>
        <div class="mv_under_text">
            いつもお子様のことを大切に考えているパパ、ママが<br>
            安心して預けられるサービスをお届けします。<br>
            多忙な毎日の中でほっとリフレッシュできる環境があれば、<br>
            育児をまた頑張ろうという気持ちになれ、<br>
            子供ともさらに良好な関係が気付けるはずです。<br>
            Huru-Huruはそんなパパ、ママの少しでもお力になりたいと考えております。
        </div>
        <div class="mv_under_img">
            <img class="pc" src="<?php echo $img_fol_front; ?>kizz.svg" alt="">
            <img class="sp" src="<?php echo $img_fol_front_sp; ?>kizz.png" alt="">
            <a href="https://www.kizz-hana-hana.jp/" class="a" target="_blank"></a>
        </div>
    </div>

    <div class="dot_back">
        <div class="front_news front_content">
            <div class="heading">
                NEWS
                <div class="pc front_news_itemimg1">
                    <img src="<?php echo $img_fol; ?>half_orange.png" alt="">
                </div>
                <div class="pc front_news_itemimg2">
                    <img src="<?php echo $img_fol; ?>orange.png" alt="">
                </div>
            </div>
            <div class="front_news_posts">
                <?php
                // 指定した記事のみ取得
                query_posts([
                    'posts_per_page' => 3,
                ]);

                //News記事取得ループ
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="front_news_post">
                            <div class="front_news_date"><?php echo get_the_date('Y/m/d'); ?></div>
                            <div class="front_news_title"><?php the_title(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="a"></a>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
            <div class="front_news_btn btn-swipe">
                詳しく見る<i class="fas fa-arrow-right"></i>
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a>
            </div>
        </div>
    </div>

    <div class="front_features">
        <div class="back_cloud_top">
            <img class="pc_765" src="<?php echo $img_fol; ?>back_cloud_top.png" alt="">
            <img class="tb_765" src="<?php echo $img_fol; ?>back_cloud_top_sp.png" alt="">
        </div>
        <div class="itemimg1">
            <img src="<?php echo $img_fol; ?>cloud_green.png" alt="">
        </div>
        <div class="itemimg2">
            <img src="<?php echo $img_fol; ?>orange.png" alt="">
        </div>
        <div class="content">
            <div class="heading">Huru-Huruの特徴</div>
            <div class="list">
                <div class="item">
                    <div class="img">
                        <div class="catch">
                            <img src="<?php echo $img_fol_front; ?>features1.png" alt="">
                        </div>
                        <div class="imgl">
                            <img src="<?php echo $img_fol; ?>grape.png" alt="">
                        </div>
                    </div>
                    <div class="title">サービスについて</div>
                    <div class="text1"><span>24時間対応</span></div>
                    <div class="text2">早朝や夜間、お客様のニーズに合わせお応えいたします。</div>
                    <div class="btn_frame">
                        <div class="btn-push">
                            詳しく見る<i class="fas fa-arrow-right"></i>
                            <a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                        <div class="catch">
                            <img src="<?php echo $img_fol_front; ?>features2.png" alt="">
                        </div>
                        <div class="imgc">
                            <img src="<?php echo $img_fol; ?>strawberry.png" alt="">
                        </div>
                    </div>
                    <div class="title">料金について</div>
                    <div class="text2">
                        会員様1,600円/時<br>
                        ビジター2,000円/時(保育3時間から)<br><br>
                        各種オプションも併せてご利用いただけます。<br>
                        オプションの組み合わせ等、ご相談承ります。
                    </div>
                    <div class="btn_frame">
                        <div class="btn-push">
                            詳しく見る<i class="fas fa-arrow-right"></i>
                            <a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a>
                        </div>
                    </div>
                </div>
                <div class="item">

                    <div class="img">
                        <div class="catch">
                            <img src="<?php echo $img_fol_front; ?>features3.png" alt="">
                        </div>
                        <div class="imgr1">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                        </div>
                        <div class="imgr2">
                            <img src="<?php echo $img_fol; ?>half_green_fruit.png" alt="">
                        </div>
                    </div>
                    <div class="title">便利な使い方</div>
                    <div class="text2">
                        子育てをしながらもパパ、ママが充実した時間を過ごすことも大切です。<br>
                        「仕事で時間が作れない」「子供を思い切り遊ばせたい」「家庭以外の社会性を学んでほしい」「リフレッシュしたい」等、いろんな場面でご利用ください。
                    </div>
                    <div class="btn_frame">
                        <div class="btn-push">
                            詳しく見る<i class="fas fa-arrow-right"></i>
                            <a href="<?php echo esc_url(home_url('/service#service_benri')); ?>" class="a"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back_cloud_bottom">
            <img class="pc_765" src="<?php echo $img_fol; ?>back_cloud_bottom.png" alt="">
            <img class="tb_765" src="<?php echo $img_fol; ?>back_cloud_bottom_sp.png" alt="">
        </div>
    </div>


    <div class="dot_back">
        <div class="front_member front_content">
            <div class="itemimg1">
                <img src="<?php echo $img_fol; ?>green_fruit.png" alt="">
            </div>
            <div class="itemimg2">
                <img src="<?php echo $img_fol; ?>grape.png" alt="">
            </div>
            <div class="heading">
                在籍シッター<div class="heading_sub">（一例）</div>
            </div>
            <div class="list_frame">
                <div class="des">
                    人柄を重視し、資格保有者または保育経験者(3年以上)のみ採用し、併設託児所内で研修を通過したシッターのみ派遣しております。<br>
                    その中からお客様のニーズに合ったシッターを責任をもって選定致します。
                </div>
                <div class="list">
                    <div class="item">
                        <div class="front_member_img"><img src="" alt=""></div>
                        <div class="front_member_text">
                            40代/保育士/幼稚園教諭<br>
                            できるオプション<br>
                            (買い物)
                        </div>
                    </div>
                    <div class="item">
                        <div class="front_member_img"><img src="" alt=""></div>
                        <div class="front_member_text">
                            40代/保育士/幼稚園教諭<br>
                            できるオプション<br>
                            (買い物)
                        </div>
                    </div>
                    <div class="item">
                        <div class="front_member_img"><img src="" alt=""></div>
                        <div class="front_member_text">
                            40代/保育士/幼稚園教諭<br>
                            できるオプション<br>
                            (買い物)
                        </div>
                    </div>
                    <div class="item">
                        <div class="front_member_img"><img src="" alt=""></div>
                        <div class="front_member_text">
                            40代/保育士/幼稚園教諭<br>
                            できるオプション<br>
                            (買い物)
                        </div>
                    </div>
                    <div class="item">
                        <div class="front_member_img"><img src="" alt=""></div>
                        <div class="front_member_text">
                            40代/保育士/幼稚園教諭<br>
                            できるオプション<br>
                            (買い物)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="front_flow front_content">
        <div class="heading">
            <img class="title" src="<?php echo $img_fol_flow; ?>front_flow_title.svg" alt="">
        </div>
        <div class="list">
            <div class="item">
                <div class="front_flow_number"><img src="<?php echo $img_fol_flow; ?>front_flow_number1.svg" alt=""></div>
                <div class="front_flow_img"><img src="<?php echo $img_fol_flow; ?>front_flow1.svg" alt=""></div>
                <div class="dot_back front_flow_h">ご予約</div>
                <div class="front_flow_des">
                    WEBにて申し込みをお願いします。<br>
                    <a href="">ご予約はこちら</a><br><br>
                    お申し込み後、手配の状況を含めてこちらからメールにてご連絡いたします。
                </div>
            </div>
            <div class="item_arrow">
                <img class="pc_765" src="<?php echo $img_fol_flow; ?>front_flow_arrow.png" alt="">
                <img class="tb_765" src="<?php echo $img_fol_flow; ?>front_flow_arrow_sp.png" alt="">
            </div>
            <div class="item">
                <div class="front_flow_number"><img src="<?php echo $img_fol_flow; ?>front_flow_number2.svg" alt=""></div>
                <div class="front_flow_img"><img src="<?php echo $img_fol_flow; ?>front_flow2.svg" alt=""></div>
                <div class="dot_back front_flow_h">手配</div>
                <div class="front_flow_des">
                    手配完了後、メールにて担当シッターをお伝えし、サービス内容の詳細をお伺いしていきます。<br><br>
                    依頼日前日にもご予約内容の確認をさせていただきます。
                </div>
            </div>
            <div class="item_arrow">
                <img class="pc_765" src="<?php echo $img_fol_flow; ?>front_flow_arrow.png" alt="">
                <img class="tb_765" src="<?php echo $img_fol_flow; ?>front_flow_arrow_sp.png" alt="">
            </div>
            <div class="item">
                <div class="front_flow_number"><img src="<?php echo $img_fol_flow; ?>front_flow_number3.svg" alt=""></div>
                <div class="front_flow_img"><img src="<?php echo $img_fol_flow; ?>front_flow3.svg" alt=""></div>
                <div class="dot_back front_flow_h">シッティング</div>
                <div class="front_flow_des">
                    当日10分前にご自宅に伺い引継ぎ後サービスを開始いたします。<br>
                    お支払いは後日請求書を発行いたします。
                </div>
            </div>
        </div>
    </div>


    <div class="front_area front_content">
        <div class="heading">
            <div class="itemimg1">
                <img src="<?php echo $img_fol; ?>half_green_fruit.png" alt="">
            </div>
            <div class="itemimg2">
                <img src="<?php echo $img_fol; ?>grape.png" alt="">
            </div>
            対応エリア
        </div>
        <div class="content">
            <div class="img">
                <img class="pc" src="<?php echo $img_fol_front; ?>area.png" alt="">
                <img class="sp" src="<?php echo $img_fol_front_sp; ?>area.png" alt="">
            </div>
        </div>
    </div>


</div>
<?php
get_footer();
?>