<?php

get_header();

if (is_home()) {
    get_template_part('single', 'home');
}

if (is_page()) {
    get_template_part('single', 'page');
}

get_footer();

?>