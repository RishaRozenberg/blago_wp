</body>
<!-- футер -->
<footer class="footer centering-center">
        <!-- размер контейнера -->
        <div class="footer__container">
            <!-- лого -->
            <img src="./assets/images/icons/footer__logo.png" alt="center logo" class="footer__logo">
            <!-- основные колонки  -->
            <div class="footer__column">
                <p class="footer__title link">Контактная информация:</p>
                <a href="tel:+79274340567" class="footer__text link">+7 (927) 434-05-67</a>
                <a href="malito:добавить-почту@blago.ru" class="footer__text link">добавить-почту@blago.ru</a>
                <a href="#" class="footer__text link">г. Набережные Челны, <br>
                    пр. имени Мусы Джалия, д.47а</a>
            </div>
            <div class="footer__column">
                <p class="footer__title">Оферта:</p>
                <a href="#" class="footer__text link">Публичная оферта
                    о добровольном пожертвовани</a>
                <a href="#" class="footer__text link">Договор пожертвования
                    (публичная оферта)</a>
            </div>
            <?php 
                wp_nav_menu([
                    'theme_location' => 'bottom',
                    'container'       => false,
                    'items_wrap'      => '<ul class="footer__column nav-footer">%3$s</ul>',
                ]);
                ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>