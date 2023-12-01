<?php
/*
Template Name: Custom Login Form
*/

get_header(); 


if (is_user_logged_in()) {
    echo '<p>Vous êtes déjà connecté.</p>';
} else {
    echo do_shortcode('[login_form]');
}

get_footer();?>
