<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php

    if (get_the_permalink() !== esc_url(home_url('/'))) : ?>
        <title> <?php wp_title('|', true, 'right'); ?>安心のベビーシッター派遣のHURU-HURU</title>
    <?php else : ?>
        <title>東京のベビーシッター派遣ならHURU-HURU</title>
    <?php endif;

    if (get_the_permalink() == esc_url(home_url('/news/'))) {
        echo '<meta name="description" content="ベビーシッター派遣のHURU-HURUのNEWSです。最新のお知らせをお届けします。">';
    } elseif (get_the_permalink() == esc_url(home_url('/about/'))) {
        echo '<meta name="description" content="育児疲れがイライラの原因になって、子どもとの関係が悪くなってしまうことも。ママがリフレッシュすれば、余裕も生まれ元気になって子どもと向き合うことができます。HURU-HURUはそんなママ、パパが安心して預けられる愛情のこもったサービスを目指しています。">';
    } elseif (get_the_permalink() == esc_url(home_url('/price/'))) {
        echo '<meta name="description" content="ベビーシッター派遣のHURU-HURUのご利用料金です。年会費は無料。利用料金は1600円/1時間〜。お客様に合わせて様々なご利用方法をご用意しております。">';
    } elseif (get_the_permalink() == esc_url(home_url('/service/'))) {
        echo '<meta name="description" content="ベビーシッター派遣のHURU-HURUのサービスの紹介です。24時間対応、託児所併設、シッターの自社育成。ご自宅でのシッティング、外遊び、食事介助、買い物、送迎、沐浴・シャワー、早朝、夜間利用、病児保育、投薬。様々な対応が可能">';
    } elseif (get_the_permalink() == esc_url(home_url('/sitter-recruit/'))) {
        echo '<meta name="description" content="ベビーシッター派遣のHURU-HURUのシッター募集です。働きたい時に働ける。充実した相談体制。託児所での実践研修の実施あり。ご応募はこちら。">';
    } elseif (get_the_permalink() == esc_url(home_url('/faq/'))) {
        echo '<meta name="description" content="ベビーシッター派遣のHURU-HURUのよくある質問です。料金について、スタッフについて、サービス内容について。">';
    } else {
        echo '<meta name="description" content="ベビーシッター派遣のHURU-HURU。東京・神奈川・千葉・埼玉の関東近辺で24時間対応。シッターは全員弊社で審査・育成しており、安心してお預けいただけます。託児所も併設しているので、ご要望に合わせて利用可能です。">';
    }

    ?>

    <?php wp_head(); ?>

    <script src="https://kit.fontawesome.com/02149b4527.js" crossorigin="anonymous"></script>

    <!-- google web font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">


</head>

<body <?php body_class(); ?>>
    <style>
        .dot_back {
            background-size: 300px 300px;
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/content_back.png");
        }

        .back_cloud_top {
            width: 100%;
            height: 12vw;
            margin: 0 auto;
            text-align: center;
            background-size: 300px 300px;
            background-color: #fff;
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/content_back.png");
        }

        footer .back_cloud_top {
            background-image: none;
        }

        .footer_guide+footer .back_cloud_top {
            width: 100%;
            height: 12vw;
            margin: 0 auto;
            text-align: center;
            background-size: 300px 300px;
            background-color: #fff;
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/content_back.png");

        }

        .back_cloud_bottom {
            width: 100%;
            height: 15vw;
            margin: 0 auto;
            text-align: center;
            background-size: 300px 300px;
            background-color: #fff;
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/content_back.png");
        }

        .back_cloud_bottom_white {
            width: 100%;
            height: 15vw;
            margin: 0 auto;
            text-align: center;
            background-size: 300px 300px;
            background-color: #fff;
        }
    </style>
    <?php //wp_body_open(); 
    ?>
    <div id="page" class="site">
        <div class="back_circle"></div>
        <div class="menu">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url('/service')); ?>">サービス内容</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">HURU-HURUとは</a></li>
                <li><a href="<?php echo esc_url(home_url('/price')); ?>">ご利用料金</a></li>
                <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>">法人向けシッター派遣</a></li> -->
                <li><a href="<?php echo esc_url(home_url('/news')); ?>">NEWS</a></li>
                <li><a href="<?php echo esc_url(home_url('/sitter-recruit')); ?>">シッター募集</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">よくあるご質問とお問い合わせ</a></li>
                <li>
                    <div class="btn-r reservation_k">
                        ご予約(会員様)
                        <a href="<?php echo esc_url(home_url('/reserve-member-edit')); ?>" class="a"></a>
                    </div>
                </li>
                <li>
                    <div class="btn-r reservation_b">
                        ご予約(ビジター)
                        <a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>" class="a"></a>
                    </div>
                </li>
                <li>
                    <div class="sns">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/twitter.png" alt="">
                        <a href="https://twitter.com/Huru2626Huru" class="a" target="_blank"></a>
                    </div>
                    <div class="sns">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/insta.png" alt="">
                        <a href="https://www.instagram.com/huruhuru_j/?hl=ja" class="a" target="_blank"></a>
                    </div>
                </li>
            </ul>
        </div>
        <header id="masthead" class="site-header">
            <div class="header_inner">
                <div class="burger">
                    <div class="x"></div>
                    <div class="y"></div>
                    <div class="z"></div>
                </div>
                <div class="flex">
                    <div class="nv_item">
                        サービス内容
                        <a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        HURU-HURUとは
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        ご利用料金
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a>
                    </div>


                    <div class="header_logo">
                        <div class="header_logo_sub pc">託児所併設で安心のシッターサービス</div>
                        <div class="header_logo_main logofont">
                            HURU-HURU
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                        </div>
                    </div>

                    <div class="nv_item">
                        NEWS
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a>
                    </div>

                    <!-- <div class="nv_item">
                        法人向けシッター派遣
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div> -->
                    <div class="nv_item">
                        シッター募集
                        <a href="<?php echo esc_url(home_url('/sitter-recruit')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        ご質問・お問い合わせ
                        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="a"></a>
                    </div>
                </div>
            </div>



        </header><!-- #masthead -->

        <div class="header_padding">

        </div>