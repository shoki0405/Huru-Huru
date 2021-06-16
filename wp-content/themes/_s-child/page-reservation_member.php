<?php

get_header();

// var_dump($_POST);

if (!empty($_POST["confirm"])) {
    get_template_part("form/r_m_confirm");
} elseif (!empty($_POST["submit"])) {
    get_template_part("form/r_m_complate");
} else {
    get_template_part("form/r_m_input");
}

?>


<?php
get_footer();
?>
