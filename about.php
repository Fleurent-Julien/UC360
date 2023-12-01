<?php /* Template Name: A propos */ ?>
<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php get_footer(); ?>

<style>
    .container-about div > img {
        padding-right: 50px;
        padding-left: 50px;
    }

    .container-about p {
        color: white;
    }

    .container-about {
        display: flex;
        margin: 50px;
        justify-content: space-between;
        align-items: center;
    }
</style>
