<?php

get_header();

// var_dump($_POST);

if (!empty($_POST["confirm"])) {
    get_template_part("form/r_b_confirm");
} elseif (!empty($_POST["submit"])) {
    get_template_part("form/r_b_complate");
} elseif (!empty($_POST["child"])) {
    get_template_part("form/r_b_child");
} else {
    get_template_part("form/r_b_input");
}

?>


<?php
get_footer();
?>