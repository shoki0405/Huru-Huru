<?php
get_header();

get_template_part("template/right_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_news = get_stylesheet_directory_uri() . "/img/news/";
?>

<div class="news">

    <div class="mv_page">
        <img class="pc" src="<?php echo $img_fol_news; ?>news.png" alt="">
        <img class="sp" src="<?php echo $img_fol_news; ?>news_sp.png" alt="">
    </div>

    <div class="news_title">NEWS</div>

    <!-- 記事一覧 -->
    <div class="list">
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
                <div class="content">
                    <!-- サムネイル -->
                    <!-- <div class="news_img">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div> -->

                    <!-- 投稿日 -->
                    <div class="date">
                        <?php echo get_the_date("Y/m/d"); ?>
                    </div>

                    <!-- タイトル -->
                    <div class="title">
                        <?php the_title(); ?>
                    </div>

                    <!-- 抜粋 -->
                    <div class="des">
                        <?php the_excerpt(); ?>
                    </div>
                    <!-- 記事のリンク -->
                    <a href="<?php the_permalink(); ?>" class="a"></a>

                </div>

                <img class="pc" src="<?php echo $img_fol_news; ?>border.png" alt="">
                <img class="sp" src="<?php echo $img_fol_news; ?>border_sp.png" alt="">
        <?php endwhile;
        endif; ?>
    </div>

    <!-- ページャ -->
    <div class="pagination">
        <?php
        $paginate_args = array(
            "total"        => $the_query->max_num_pages,
            "mid_size"     => 0,
            "end_size"     => 0,
            "prev_text"    => "<span class='btn-prev'>PREV</span>",
            "next_text"    => "<span class='btn-next'>NEXT</span>",
        );
        echo paginate_links($paginate_args);
        ?>
    </div>


</div>


<?php
get_footer();
?>