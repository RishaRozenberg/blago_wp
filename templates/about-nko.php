<?php 
/*
Template Name: О НКО
*/
get_header(); 
?>

    <main class="main">
        <!-- Название НКО -->
        <section class="about-nko">
            <div class="about-nko__container container" style="background-image: url(<?= CFS()->get('main_bg'); ?>)">
                <div class="about-nko__content">
                    <h2 class="about-nko__title"><?php the_title(); ?></h2>
                    <about-nko__btn class="about-nko__btn btn">
                        <button class="btn__help help">Подать заявку на помощь</button>
                    </about-nko__btn>
                </div>
            </div>
        </section>
        <!-- Название НКО -->
        <!-- Описание НКО -->
        <section class="nko-page">
            <div class="nko-page__container container">
                <h3 class="nko-page__title title">Название
                    некоммерческой благотворительной организации
                </h3>
                <p class="nko-page__ogrn">ОГРН 0000000000000</p>
                <p class="nko-page__text">Наша компания была основана в 2000 году с целью оказания помощи и поддержки
                    нуждающемуся населению. Мы работаем на благо общества, насчитываем более 00 сотрудников и выполняем
                    ряд
                    проектов и программ. Сотрудничаем с рядом волонтерских организаций.</p>
                <p class="nko-page__text">Наши основные направления работы включают (указать направления деятельности
                    НКО).
                    Мы проводим мероприятия, направленные на (указать цели мероприятий), оказываем помощь нуждающимся в
                    (указать вид помощи).</p>
                <p class="nko-page__text">Благодарим вас за интерес к нашей НКО.</p>
            </div>
        </section>
        <!-- Описание НКО -->
        <!-- Отчеты о проделанной работе -->
        <section class="reports-nko">
            <div class="reports-nko__container container">
                <h4 class="reports-nko__title title">
                    Отчеты о проделанной работе
                </h4>
                <div class="reports-nko__button">
                    <form action="#" target="_blank" class="reports-nko__link"><button
                            class="reports-nko__item">Посмотреть</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Отчеты о проделанной работе -->
        <!-- Документы НКО-->
        <section class="documents">
            <div class="documents__container container">
                <h4 class="documents__title title">
                    Документы
                </h4>
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
        </section>
        <!-- Документы НКО-->
        <!-- Отзывы -->
        <section class="reviews">
            <div class="container reviews__container">
                <h4 class="reviews__tittle title">Отзывы</h4>
                <div class="reviews__content">

                    <!-- слайдер -->

                    <div class="reviews__slider">
                        <input checked type="radio" name="respond" id="desktop">
                        <article id="slider">
                            <input checked type="radio" name="slider" id="switch1">
                            <input type="radio" name="slider" id="switch2">
                            <input type="radio" name="slider" id="switch3">
                            <div id="slides">
                                <div id="overflow">
                                    <div class="reviews__box">
                                        <article class="reviews__screen">
                                            <div class="reviews__block">
                                                <p class="reviews__text">Я хочу выразить вам огромную благодарность за
                                                    помощь, которую вы
                                                    мне предоставили. Оказавшись в тяжелой финансовой ситуации, я не
                                                    знала, как
                                                    справиться.
                                                    Благодаря вашей поддержке и помощи, я смогла оплатить счета и купить
                                                    продукты питания для
                                                    своей семьи. Я всегда буду признательна вам за это.”
                                                    Ольга И.
                                                </p>
                                            </div>
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Благодарность не может передать всей моей
                                                    признательности. Мы с
                                                    моими детьми оказались в сложной жизненной ситуации. Но благодаря
                                                    вам, они
                                                    получили подарки
                                                    на Новый год, одежду и книги, а также возможность посещать различные
                                                    мероприятия и
                                                    заниматься спортом. Мы снова улыбаемся и радуемся жизни, благодаря
                                                    вам”.
                                                    семья Ивановых
                                                </p>
                                            </div>
                                        </article>
                                        <article class="reviews__screen">
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Благодарность не может передать всей моей
                                                    признательности. Мы с
                                                    моими детьми оказались в сложной жизненной ситуации. Но благодаря
                                                    вам, они
                                                    получили подарки
                                                    на Новый год, одежду и книги, а также возможность посещать различные
                                                    мероприятия и
                                                    заниматься спортом. Мы снова улыбаемся и радуемся жизни, благодаря
                                                    вам”.
                                                    семья Ивановых
                                                </p>
                                            </div>
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Огромное вам спасибо за то, что помогли мне
                                                    выбраться из
                                                    бездомности и нашли мне временное жилье. Я потерял работу и мои
                                                    финансовые
                                                    возможности были
                                                    исчерпаны. Мне не только предоставили кров и пищу, но и помогли
                                                    получить мед
                                                    помощь и найти
                                                    новую работы. Сейчас я восстанавливаюсь и благодаря вам чувствую,
                                                    что есть
                                                    надежда и новые
                                                    перспективы..”
                                                    Игорь Ф.
                                                </p>
                                            </div>
                                        </article>
                                        <article class="reviews__screen">
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Огромное вам спасибо за то, что помогли мне
                                                    выбраться из
                                                    бездомности и нашли мне временное жилье. Я потерял работу и мои
                                                    финансовые
                                                    возможности были
                                                    исчерпаны. Мне не только предоставили кров и пищу, но и помогли
                                                    получить мед
                                                    помощь и найти
                                                    новую работы. Сейчас я восстанавливаюсь и благодаря вам чувствую,
                                                    что есть
                                                    надежда и новые
                                                    перспективы..”
                                                    Игорь Ф.
                                                </p>
                                            </div>
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Хочу выразить вам мою искреннюю благодарность!
                                                    Я
                                                    всегда
                                                    чувствовал, что никто не может помочь мне с моими проблемами. Но
                                                    когда я
                                                    обратился к вам,
                                                    меня не только выслушали, но и предложили психологическую помощь и
                                                    направили
                                                    к специалисту.
                                                    Мне помогли ощутить поддержку и понимание, и теперь я знаю, что не
                                                    одинок в
                                                    своих
                                                    страданиях. Большое спасибо за вашу работу и внимание к людям в
                                                    нужде.”
                                                    Николай С.</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div id="controls">
                                <label for="switch1"></label>
                                <label for="switch2"></label>
                                <label for="switch3"></label>
                            </div>
                            <div id="active">
                                <label for="switch1"></label>
                                <label for="switch2"></label>
                                <label for="switch3"></label>
                            </div>
                        </article>
                    </div>

                    <!-- слайдер на m -->

                    <div class="reviews__medium">
                        <input checked type="radio" name="respond-medium" id="medium">
                        <article id="slider-medium">
                            <input checked type="radio" name="slider-medium" id="switch1-medium">
                            <input type="radio" name="slider-medium" id="switch2-medium">
                            <input type="radio" name="slider-medium" id="switch3-medium">
                            <input type="radio" name="slider-medium" id="switch4-medium">
                            <div id="slides-medium">
                                <div id="overflow-medium">
                                    <div class="reviews__box-medium">
                                        <article class="reviews__screen-medium">
                                            <div class="reviews__block">
                                                <p class="reviews__text">Я хочу выразить вам огромную благодарность
                                                    за
                                                    помощь, которую вы
                                                    мне предоставили. Оказавшись в тяжелой финансовой ситуации, я не
                                                    знала, как
                                                    справиться.
                                                    Благодаря вашей поддержке и помощи, я смогла оплатить счета и купить
                                                    продукты питания для
                                                    своей семьи. Я всегда буду признательна вам за это.”
                                                    Ольга И.
                                                </p>
                                            </div>
                                        </article>
                                        <article class="reviews__screen-medium">
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Благодарность не может передать всей моей
                                                    признательности. Мы с
                                                    моими детьми оказались в сложной жизненной ситуации. Но благодаря
                                                    вам, они
                                                    получили подарки
                                                    на Новый год, одежду и книги, а также возможность посещать различные
                                                    мероприятия и
                                                    заниматься спортом. Мы снова улыбаемся и радуемся жизни, благодаря
                                                    вам”.
                                                    семья Ивановых
                                                </p>
                                            </div>
                                        </article>
                                        <article class="reviews__screen-medium">
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Огромное вам спасибо за то, что помогли мне
                                                    выбраться из
                                                    бездомности и нашли мне временное жилье. Я потерял работу и мои
                                                    финансовые
                                                    возможности были
                                                    исчерпаны. Мне не только предоставили кров и пищу, но и помогли
                                                    получить мед
                                                    помощь и найти
                                                    новую работы. Сейчас я восстанавливаюсь и благодаря вам чувствую,
                                                    что есть
                                                    надежда и новые
                                                    перспективы..”
                                                    Игорь Ф
                                                </p>
                                            </div>
                                        </article>
                                        <article class="reviews__screen-medium">
                                            <div class="reviews__block">
                                                <p class="reviews__text">“Хочу выразить вам мою искреннюю благодарность!
                                                    Я
                                                    всегда
                                                    чувствовал, что никто не может помочь мне с моими проблемами. Но
                                                    когда я
                                                    обратился к вам,
                                                    меня не только выслушали, но и предложили психологическую помощь и
                                                    направили
                                                    к специалисту.
                                                    Мне помогли ощутить поддержку и понимание, и теперь я знаю, что не
                                                    одинок в
                                                    своих
                                                    страданиях. Большое спасибо за вашу работу и внимание к людям в
                                                    нужде.”
                                                    Николай С.</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div id="controls-medium">
                                <label for="switch1-medium"></label>
                                <label for="switch2-medium"></label>
                                <label for="switch3-medium"></label>
                                <label for="switch4-medium"></label>
                            </div>
                            <div id="active-medium">
                                <label for="switch1-medium"></label>
                                <label for="switch2-medium"></label>
                                <label for="switch3-medium"></label>
                                <label for="switch4-medium"></label>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Отзывы -->
        <!-- Блок соцсети -->
        <section class="social">
            <div class="social__container container">
                <h5 class="social__title">
                    Мы есть в социальных сетях
                </h5>
                <ul class="social__icons">
                    <li class="social__link"><a class="social__icon-link" href="https://web.whatsapp.com/"
                            title="watsap" target="_blank" rel="noopener"><img
                                src="./assets/images/icons/watsapp-icon_about-nko.png" alt="watsapp"
                                class="social__img"></a></li>
                    <li class="social__link"><a class="social__icon-link" href="https://vk.com/" title="vk"
                            target="_blank" rel="noopener"><img src="./assets/images/icons/vk-icon_about-nko.png"
                                alt="vk" class="social__img"></a></li>
                    <li class="social__link"><a class="social__icon-link" href="https://telegram.org/" title="telegram"
                            target="_blank" rel="noopener"><img src="./assets/images/icons/telegr-icon_about-nko.png"
                                alt="tg" class="social__img"></a></li>
                </ul>
            </div>
        </section>
        <!-- Блок соцсети -->
    </main>
<?php get_footer(); ?>