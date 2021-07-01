<?php
get_header();
get_template_part("template/right_top");
?>

<div class="page_frame">

    <div class="page_title">
        <?php the_title(); ?>
    </div>

    <div class="page_content">
        <?php the_content(); ?>
    </div>

</div>

<?php
get_footer();
?>