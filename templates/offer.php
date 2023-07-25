<?php 
/*
Template Name: Оферта
*/

get_header(); 
?>

<div class="offer container">
    <h1 class="offer__title third-title"><?php the_title(); ?></h1>
    <div class="offer__text"><?php the_content(); ?></div>
</div>

<?php get_footer();?>