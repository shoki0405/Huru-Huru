<?php

/**
 * Template Name: reservation-member-done
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

// ファイル読み込み
require_once('contact/common/init.php');
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
        <?php endwhile; ?>

        <div class="page-content">
            <p class="mb30">
                お問い合わせを送信しました。<br>
                改めて担当者からご連絡を差し上げます。今しばらくお待ちくださいませ。
            </p>
        </div>

    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>