<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_news = get_stylesheet_directory_uri() . "/img/news/";
?>

<div class="post_frame">

    <div class="post_title">
        <?php the_title(); ?>
    </div>

    <div class="post_date">
        <?php echo get_the_date("Y/m/d"); ?>
    </div>

    <img class="pc" src="<?php echo $img_fol_news; ?>single_border.png" alt="">
    <img class="sp" src="<?php echo $img_fol_news; ?>single_border_sp.png" alt="">

    <div class="post_content">
        <?php the_content(); ?>
    </div>

    <div class="back_news">
        NEWS一覧に戻る
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="a"></a>
    </div>
</div>

<?php
get_footer();
?>