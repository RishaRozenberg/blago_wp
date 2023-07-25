<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if(is_404()) {
            echo 'Ошибка 404';
        } else {
        the_title ();
        }
        ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- header -->
    <header class="header">
        <!-- размеры контейнера -->
        <div class="header__container container">
            <!-- лого -->
                <?php the_custom_logo(); ?>
            <!-- <img src="./assets/images/icons/header__logo.png" alt="center logo" class="header__logo"> -->
            <div class="header__content">
                <?php 
                wp_nav_menu([
                    'theme_location' => 'top',
                    'container'       => 'nav',
                    'container_class' => 'header__nav',
                    'items_wrap'      => '<ul class="header__navig">%3$s</ul>',
                ]);
                ?>
                <!-- кнопки -->
                <img src="./assets/images/icons/header__search.png" alt="site search" class="header__search">
                <img src="./assets/images/icons/header__account.png" alt="personal area" class="header__account">
                <div class="header__btns">
                    <button class="header__registration">Регистрация</button>
                    <button class="header__area">Вход</button>
                </div>
            </div>
        </div>
    </header>