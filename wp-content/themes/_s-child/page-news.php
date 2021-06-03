<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_other = get_stylesheet_directory_uri() . "/img/other/";
?>

<div class="news">

    <div class="page_img">
        <img src="<?php echo $img_fol_other; ?>news.png" alt="">
    </div>

    <div class="news_title">NEWS</div>

    <!-- 記事一覧 -->
    <div class="news_posts">
        <?php
        $args = array(
            "posts_per_page" => 5,
            "post_type" => "post",
            "paged" => get_query_var("paged")
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>
                <div class="news_post">
                    <!-- サムネイル -->
                    <!-- <div class="news_img">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div> -->

                    <!-- 投稿日 -->
                    <div class="news_post_date">
                        <?php echo get_the_date("Y/m/d"); ?>
                    </div>

                    <!-- タイトル -->
                    <div class="news_post_title">
                        <?php the_title(); ?>
                    </div>

                    <!-- 抜粋 -->
                    <div class="news_post_description">
                        <?php the_excerpt(); ?>
                    </div>
                    <!-- 記事のリンク -->
                    <a href="<?php the_permalink(); ?>" class="a"></a>

                </div>

                <img src="<?php echo $img_fol_other; ?>news_border.svg" alt="">

        <?php endwhile;
        endif; ?>
    </div>

    <!-- ページャ -->
    <div class="news_pagination">
        <?php
        $paginate_args = array(
            "total"        => $the_query->max_num_pages,
            "mid_size"     => 0,
            "end_size"     => 0,
            "prev_text"    => "<span class='news_btn_prev'>PREV</span>",
            "next_text"    => "<span class='news_btn_next'>NEXT</span>",
        );
        echo paginate_links($paginate_args);
        ?>
    </div>


</div>


<?php
get_footer();
?>