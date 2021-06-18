<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <script src="https://kit.fontawesome.com/02149b4527.js" crossorigin="anonymous"></script>

    <!-- google web font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
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
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="header_inner">
                <div class="flex">



                    <div class="nv_item">
                        サービス内容
                        <a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        HURU-HURUとは
                        <a href="<?php echo esc_url(home_url('/overview')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        ご利用料金
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        NEWS
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a>
                    </div>

                    <div class="header_logo">
                        <div class="header_logo_sub pc">託児所併設で安心のシッターサービス</div>
                        <div class="header_logo_main">
                            HURU-HURU
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                        </div>
                    </div>

                    <div class="nv_item">
                        法人向けシッター派遣
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        シッター募集
                        <a href="<?php echo esc_url(home_url('/entry')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        ご質問・お問い合わせ
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="a"></a>
                    </div>



                </div>
            </div>

            <div class="btn-ham" id="btn-ham">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div id="ham">
                <div class="title">HURU-HURU</div>
                <div class="list">
                    <div class="item">
                        HOME
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        サービス内容
                        <a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        HURU-HURUとは
                        <a href="<?php echo esc_url(home_url('/overview')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        ご利用料金
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        法事向けシッター派遣
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        NEWS
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        <div class="reservation_b">
                            ご予約(初めての方)
                            <a href="<?php echo esc_url(home_url('/reservation_biggner')); ?>" class="a"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reservation_k">
                            ご予約(会員様)
                            <a href="<?php echo esc_url(home_url('/reservation_member')); ?>" class="a"></a>
                        </div>
                    </div>
                    <div class="item">
                        シッター募集
                        <a href="<?php echo esc_url(home_url('/entry')); ?>" class="a"></a>
                    </div>
                    <div class="item">
                        よくあるご質問とお問い合わせ
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="a"></a>
                    </div>
                </div>
                <div class="privacy">
                    プライバシーポリシー
                    <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>" class="a"></a>
                </div>
            </div>


        </header><!-- #masthead -->



        <div class="sp_bottom_menu">
            <div class="flex">
                <div class="flex_item"></div>
                <div class="flex_item"></div>
                <div class="flex_item"></div>
                <div class="flex_item"></div>
            </div>
        </div>