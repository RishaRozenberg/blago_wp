<?php 
/*
Template Name: Главная
*/
get_header(); 
?>
<main>
    <!--Главная секция с заголовком-->
    <section class="main-about">
        <div class="main-about__container container">
            <div class="main-about__content">
                <h1 class="main-about__title main-title"><?php the_title(); ?></h1>
                <p class="main-about__text text">На нашем портале вы можете разместить свою
                        заявку на
                        помощь, а
                        зарегистрированные НКО имеют возможность откликнуться и предложить свою
                        поддержку.</p>R
                <p class="main-about__text text">Центр помощи "Хаер" создает дружественное
                        сообщество, где
                        любой
                        пользователь может получить необходимую помощь от надежных
                        некоммерческих организаций.
                </p>
                <!--Кнопки заявки на помощь и вход для НКО-->
                <main-about__btns class="main-about__btns btns">
                    <button class="btns__help help">Подать заявку на помощь</button>
                    <button class="btns__nko nko-account">Вход для НКО</button>
                </main-about__btns>
            </div>
        </div>
    </section>
    <!-- Форма пожертвования -->
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
                    <input type="email" placeholder="Введите вашу почту" class="payment__input payment__input_text">
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
        <!--Подробно о компании-->
        <section class="detail-about">
            <div class="detail-about__container container">
                <img src="./assets/images/design/template__hands-heart.png" alt="we bring real help, support and love"
                    class="detail-about__img">
                <div class="detail-about__content">
                    <h2 class="detail-about__title second-title">О компании</h2>
                    <div class="detail-about__scroll scroll">
                        <p class="detail-about__text">Центр помощи "Хаер" - это единое место, где
                            некоммерческие
                            организации
                            (НКО) и
                            жители Набережных Челнов могут объединиться для оказания помощи и поддержки.
                            Наш центр
                            предоставляет
                            простой и удобный способ подать заявку на помощь, а также возможность для
                            НКО
                            зарегистрироваться
                            и
                            откликнуться на эти заявки.</p>
                        <p class="detail-about__text">Мы верим в силу солидарности и взаимопомощи,
                            поэтому целью центра
                            "Хаер"
                            является создание дружественного сообщества, где каждый человек может найти
                            помощь в трудные
                            моменты
                            жизни.</p>
                        <p class="detail-about__text">Мы верим в силу солидарности и взаимопомощи,
                            поэтому целью центра
                            "Хаер" является создание дружественного сообщества, где каждый человек может
                            найти помощь в
                            трудные моменты жизни. Присоединяйтесь к нам, чтобы сделать
                            благотворительность доступной и
                            эффективной для всех жителей Набережных Челнов. Вместе мы можем изменить
                            жизни к лучшему!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Новости-->
        <section class="short-news centering-center">
            <div class="short-news__container container centering-center">
                <!--Заголовок-->
                <h2 class="short-news__title second-title">Новости</h2>
                <!--Ограничивающий контейнер для основного контента-->
                <div class="short-news__block">
                    <!--Первая новость-->
                    <div class="short-novelty">
                        <img src="./assets/images/photos/short-news__img1.png" alt="Photo from the event"
                            class="short-novelty__img">
                        <div class="short-novelty__title-block">
                            <p class="short-novelty__title">Бьём рекорды</p>
                        </div>
                        <div class="short-novelty__main">
                            <p class="short-novelty__text">Мы достигли рекордного количества помощи для
                                людей,
                                нуждающихся в
                                нашем сообществе. Мы смогли предоставить пищу, одежду, жилье и другие
                                важные ресурсы для
                                сотен семей, которые оказались в трудной жизненной ситуации</p>
                            <button class="short-novelty__btn">Узнать больше</button>
                        </div>
                    </div>
                    <!--Вторая новость-->
                    <div class="short-novelty short-novelty__second">
                        <img src="./assets/images/photos/short-news__img2.png" alt="Photo from the event"
                            class="short-novelty__img">
                        <div class="short-novelty__title-block">
                            <p class="short-novelty__title">Центр карьеры</p>
                        </div>
                        <div class="short-novelty__main">
                            <p class="short-novelty__text">Мы радостно объявляем о запуске новой
                                программы обучения и
                                трудоустройства, разработанной проектом "Хаер" для молодежи в Набережных
                                Челнах. Мы
                                предоставляем обучение по различным профессиональным областям, а также
                                помогаем в поиске
                                работы и стажировках.</p>
                            <button class="short-novelty__btn">Узнать больше</button>
                        </div>
                    </div>
                    <!--Третья новость-->
                    <div class="short-novelty">
                        <img src="./assets/images/photos/short-news__img3.png" alt="Photo from the event"
                            class="short-novelty__img">
                        <div class="short-novelty__title-block">
                            <p class="short-novelty__title">Жилищный вопрос</p>
                        </div>
                        <div class="short-novelty__main">
                            <p class="short-novelty__text">Мы начинаем сотрудничествоьс местными
                                партнерами в решении
                                жилищных проблем. Совместно с нашими партнерами мы смогли предоставить
                                жилье и помощь в
                                обустройстве для многих семей, которые оказались без крова.</p>
                            <button class="short-novelty__btn">Узнать больше</button>
                        </div>
                    </div>
                </div>
                <!--переход на страницу новостей-->
                <button class="short-news__btn centering-center">
                    Ещё новости
                    <img src="./assets/images/icons/short-news__arrow-btn.png" alt="go to news page"
                        class="short-news__arrow-btn">
                </button>
            </div>
        </section>
    </main>
<?php 
get_footer(); 
?>