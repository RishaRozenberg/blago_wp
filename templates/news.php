<?php 
/*
Template Name: Новости
*/
get_header(); 
?>
    <main class="news centering-center">
        <div class="main-block container centering-center" style="background-image: url(<?= CFS()->get('main_bg'); ?>)">
            <h1 class="main-block__title second-title"><?php the_title(); ?></h1>
        </div>
        <div class="for-slider"></div>
        <div class="news__content container">
            <?php
                $loop = CFS()->get('news');
                foreach ($loop as $row) {
                    ?>
                    <div class="new">
                        <p class="new__date"><?= $row['news_date']; ?></p>
                        <h2 class="new__title third-title"><?= $row['news_title']; ?></h2>
                        <img src="<?= $row['news_img']; ?>" alt="new illustration" class="new__img">
                        <p class="new__text"><?= $row['news_text_1']; ?></p>
                        <p class="new__text"><?= $row['news_text_2']; ?></p>
                        <p class="new__text"><?= $row['news_text_3']; ?></p>
                        <p class="new__text"><?= $row['news_text_4']; ?></p>
                        <p class="new__text"><?= $row['news_text_5']; ?></p>
                        <p class="new__text"><?= $row['news_text_6']; ?></p>
                        <p class="new__text"><?= $row['news_text_7']; ?></p>
                        <p class="new__text"><?= $row['news_text_8']; ?></p>
                        <p class="new__text"><?= $row['news_text_9']; ?></p>
                        <p class="new__text"><?= $row['news_text_10']; ?></p>
                    </div>
                    <hr class="news__line">
                    <?php
                }
            ?>
            <div class="pagination">
                <button class="page-number" data-page="1">1</button>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>