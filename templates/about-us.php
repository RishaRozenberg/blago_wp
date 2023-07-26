<?php 
/*
Template Name: О центре Хаер
*/
get_header(); 
?>
    <main>
        <!-- о компании -->
        <div class="about-company">
            <div class="about-company__container container" style="background-image: url(<?= CFS()->get('main_bg'); ?>)">
                <h2 class="about-company__title second-title"><?php the_title(); ?></h2>
            </div>
        </div>
        <!-- о компании -->
        <!-- центр-помощи -->
        <div class="help-center">
            <div class="help-center__container container">
                <h3 class="help-center__title third-title">Центр помощи «Хаер» - <br>
                    единый портал для НКО и приема заявок о помощи в городе
                    Набережные Челны</h3>
                <p class="help-center__text">Центр помощи "Хаер" - это единое место, где некоммерческие организации
                    (НКО) и
                    жители Набережных Челнов могут объединиться для оказания помощи и поддержки. Наш центр предоставляет
                    простой
                    и удобный способ подать заявку на помощь, а также возможность для НКО зарегистрироваться и
                    откликнуться
                    на
                    эти заявки.</p>
                <p class="help-center__text">Наша благотворительная организация была создана в 2021 году группой
                    единомышленников с целью помочь как можно большему количеству людей.</p>
                <p class="help-center__text">Мы не выстраиваем нашу деятельность на грустных историях, не стараемся
                    давить
                    на
                    жалость. Мы стремимся привлекать средства максимально позитивно и уверены, что добрые дела должны
                    совершаться с улыбкой на лице и хорошим настроением. Важно сделать так, чтобы у каждого, независимо
                    от
                    его
                    материального положения и возраста, была возможность помочь.</p>
                <p class="help-center__text">Мы верим в силу солидарности и взаимопомощи, поэтому целью центра "Хаер"
                    является
                    создание дружественного сообщества, где каждый человек может найти помощь в трудные моменты жизни.
                </p>
            </div>
        </div>
        <!-- центр-помощи -->
        <!-- документы -->
        <div class="documents">
            <div class="documents__container container">
                <h3 class="documents__title third-title">
                    Документы
                </h3>
                <div class="documents__buttons">
                    <form action="#" target="_blank" class="documents__link"><button class="doc-button-item">Устав
                            НКО</button></form>
                    <form action="#" target="_blank" class="documents__link"><button
                            class="doc-button-item">Свидетельство
                            о государственной регистрации НКО</button></form>
                    <form action="#" target="_blank" class="documents__link"><button
                            class="doc-button-item">Свидетельство
                            о постановке на учет
                            в налоговом органе</button></form>
                </div>
            </div>
            <div class="documents__container container">
                <h3 class="documents__title third-title">
                    Отчеты и благодарности
                </h3>
                <div class="documents__buttons">
                    <form action="#" target="_blank" class="documents__link"><button class="doc-button-item">Отчет
                            о деятельности НКО</button></form>
                    <form action="#" target="_blank" class="documents__link"><button class="doc-button-item">Отчет о
                            целях
                            расходования НКО денежных средств</button></form>
                    <form action="#" target="_blank" class="documents__link"><button
                            class="doc-button-item">Благодарности</button></form>
                </div>
            </div>
        </div>
        <!-- документы -->
        <!-- Ваша помощь -->
        <div class="your-help">
            <div class="your-help__container container">
                <div class="your-help__content ">
                    <h2 class="your-help__title">
                        Ваша помощь достигнет доброй цели
                    </h2>
                    <div class="your-help__image">
                        <img src="./assets/images/design/about-us__hands.png" alt="hands" class="your-help__img">
                    </div>
                </div>
                <section class="section-payment">
                    <!--Сама форма-->
                    <div class="section-payment__form donation-form centering-center">
                        <!--Контент формы-->
                        <div class="donation-form__container">
                            <h3 class="donation-form__title third-title">Поддержать центр «Хаер»</h3>
                            <div class="donation-form__regularity-btns centering-between">
                                <button class="payment__monthly">Ежемесячно</button>
                                <button class="payment__one-time btn-light">Разово</button>
                            </div>
                            <div class="payment__text centering-between">
                                <hr>
                                <p class="payment__title">Сумма пожертвования</p>
                                <hr>
                            </div>
                            <div class="sum-btns centering-between">
                                <button class="btn-light">100 руб</button>
                                <button class="btn-light">300 руб</button>
                                <button class="btn-light">Другая cумма</button>
                            </div>
                            <div class="payment__text centering-between">
                                <hr>
                                <p class="payment__title">Платёжная информация</p>
                                <hr>
                            </div>
                            <a class="types-of-payment btn-light">
                                <div class="types-of-payment__icons centering-center">
                                    <img src="./assets/images/icons/donation-form__card.png" alt="pay by card"
                                        class="types-of-payment__img">
                                    <img src="./assets/images/icons/donation-form__mobile.png" alt="pay by mobile"
                                        class="types-of-payment__img">
                                    <img src="./assets/images/icons/donation-form__online.png" alt="pay online"
                                        class="types-of-payment__img">
                                </div>
                                <p>Выбрать платёжную систему</p>
                            </a>
                            <input type="text" placeholder="Введите ваше ФИО"
                                class="payment__input payment__input_text payment__input_first">
                            <input type="email" placeholder="Введите вашу почту"
                                class="payment__input payment__input_text">
                            <div class="payment__checkbox payment__checkbox_first">
                                <input type="checkbox" id="payment-offer" class="payment__document">
                                <label for="payment-offer">Я принимаю <a href="#" class="payment__link"><span
                                            class="payment__link_border">Договор
                                            оферты</span></a></label>
                            </div>
                            <div class="payment__checkbox">
                                <input type="checkbox" id="personal-data" class="payment__document">
                                <label for="personal-data">Я принимаю <a href="#" class="payment__link"><span
                                            class="payment__link_border">Согласие об
                                            использовании <br>
                                            персональных
                                            данных</span></a></label>
                            </div>
                            <button class="payment__donation">
                                Пожертвовать
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Ваша помощь -->
    </main>
<?php get_footer(); ?>