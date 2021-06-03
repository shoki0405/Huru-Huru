<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </style>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="header_inner">
                <div class="header_nv nv_left">
                    <div class="nv_item">
                        サービス内容
                        <a href="<?php echo esc_url(home_url('/service')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        Huru-Huruとは
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
                </div>
                <div class="header_logo">
                    <div class="header_logo_sub">託児所併設で安心のシッターサービス</div>
                    <div class="header_logo_main">
                        Huru-Huru
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                </div>
                <div class="header_nv nv_right">
                    <div class="nv_item">
                        法人向けシッター派遣
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        シッター募集
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                    <div class="nv_item">
                        ご質問・お問い合わせ
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="a"></a>
                    </div>
                </div>
            </div>

        </header><!-- #masthead -->