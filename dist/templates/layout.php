<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "КраскИнвер: ". $title ?></title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/normalize.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<!-- Yandex.Metrika counter -->
<script>
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
   ym(39903350, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
</head>

<body>
<header class="page-header">
        <div class="page-header__content-container content-container">
            <div class="page-header__logo-social-wrapper">
                <a href="/" class="page-header__logo">
                    <img src="/img/logo_kraskinver.svg" alt="логотип компании КраскИнвер" class="page-header__logo-img">
                </a>
            </div>
            <ul class="page-header__contacts-list">
                <li class="page-header__contacts-list-elmt page-header__contacts-list-elmt--phone">
                    Головной офис:
                    <a href="tel:+78123317791" class="page-header__contacts-list-link page-header__contacts-list-link--phone">
                        +7 (812) 331-77-91
                    </a>
                    <!--<a class="page-header__contacts-list-link page-header__contacts-list-link--whatsapp">
                        <img class="page-header__icon" src="img/social/whatsapp.svg" alt="наш watsapp">
                    </a>-->
                </li>
                <li class="page-header__contacts-list-elmt page-header__contacts-list-elmt--mail">
                    <a href="mailto:kraski@k-inver.ru" class="page-header__contacts-list-link page-header__contacts-list-link--mail">
                        <div class="page-header__contacts-list-icon page-header__contacts-list-icon--mail"></div>
                        <span class="page-header__contacts-list-link-span">kraski@k-inver.ru</span>
                    </a>
                </li>
                <li class="page-header__contacts-list-elmt">
                    <a class="page-header__contacts-list-link page-header__contacts-list-link--button" onclick="showForm('Заказ обратного звонка', 'Заказать звонок', 'Заказ обратного звонка с верхней кнопки «ЗАКАЗАТЬ ЗВОНОК» страницы'); return false;">
                        Заказать звонок
                    </a>
                </li>
                <li class="page-header__contacts-list-elmt">
                    <a href="#contacts" class="page-header__contacts-list-link page-header__contacts-list-link--button">
                        Контакты
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <main class="page-main"> 
    
    <?= $content ?>
    </main>
    
    <footer class="page-footer">
     <?php if($page === 'index') : ?>   
    <section class="contacts" id="contacts">
            <div class="contacts__content-container content-container">
                <h2 class="contacts__title block-title">Контактная информация</h2>
                <div class="contacts__map-container">
                    <script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4539628b9b9a01c61f61d9f49bf66fd39f085df27320079066b05436737a07a1&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <ul class="contacts__list">
                    <li class="contacts__elmt">
                        Головной офис
                        в Санкт-Петербурге:
                        <br>
                        <br>
                        194021, Санкт-Петербург,
                        Политехническая,&#160;22
                        территория НИИ Телевидения,
                        въезд и вход с&#160;ул.&#160;Шателена,&#160;3
                    </li>
                    <li class="contacts__elmt">
                        <a href="tel:+78123317791" class="contacts__link contacts__link--phone">
                            +7 (812) 331-77-91
                        </a>
                    </li>
                    <li class="contacts__elmt">
                        <a href="mailto:kraski@k-inver.ru" class="contacts__link contacts__link--mail">
                            kraski@k-inver.ru
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contacts__representatives-content-container content-container">
                <h3 class="contacts__sub-title">Наши представительства</h3>
                <ul class="contacts__representatives-list representatives-list">
                    <li class="representatives-list__elmt">
                        <span class="representatives-list__title">Москва</span>
                        <ul class="representatives-list__staff">
                            <li class="representatives-list__staff-elmt">Сысоев Алексей</li>
                            <li class="representatives-list__staff-elmt">Иван Абрамов</li>
                        </ul>
                        <span class="representatives-list__sub-list-title">Телефоны:</span>
                        <ul class="representatives-list__phones">
                            <li class="representatives-list__phones-elmt"><a href="tel:+7926026-99-16" class="representatives-list__link">+7 (926) 026-99-16</a></li>
                            <li class="representatives-list__phones-elmt"><a href="tel:+79299979381" class="representatives-list__link">+7 (929) 997-93-81</a></li>
                        </ul>
                        <span class="representatives-list__sub-list-title">E-mail:</span>
                        <ul class="representatives-list__mail">
                            <li class="representatives-list__mail-elmt"><a href="mailto:msk@k-inver.ru" class="representatives-list__link">msk@k-inver.ru</a></li>
                            <li class="representatives-list__mail-elmt"><a href="mailto:aleks.s@k-inver.ru" class="representatives-list__link">aleks.s@k-inver.ru</a></li>
                        </ul>
                    </li>
                    <li class="representatives-list__elmt">
                        <span class="representatives-list__title">Волгоград</span>
                        <ul class="representatives-list__staff">
                            <li class="representatives-list__staff-elmt">Ковлежов Владимир</li>
                            <li class="representatives-list__staff-elmt">Ковлежова Ольга</li>
                            <li class="representatives-list__staff-elmt">Соловьева Марина</li>
                        </ul>
                        <span class="representatives-list__sub-list-title">Телефоны:</span>
                        <ul class="representatives-list__phones">
                            <li class="representatives-list__phones-elmt"><a href="tel:+79696593500" class="representatives-list__link">+7 (969) 659-35-00</a></li>
                            <li class="representatives-list__phones-elmt"><a href="tel:+79023621780" class="representatives-list__link">+7 (902) 362-17-80</a></li>
                            <li class="representatives-list__phones-elmt"><a href="tel:+79023849328" class="representatives-list__link">+7 (902) 384-93-28</a></li>
                        </ul>
                        <span class="representatives-list__sub-list-title">E-mail:</span>
                        <ul class="representatives-list__mail">
                            <li class="representatives-list__mail-elmt"><a href="mailto:volga@k-inver.ru" class="representatives-list__link">volga@k-inver.ru</a></li>
                        </ul>
                    </li>
                    <li class="representatives-list__elmt">
                        <span class="representatives-list__title">Саратов</span>
                        <ul class="representatives-list__staff">
                            <li class="representatives-list__staff-elmt">Захарова Татьяна</li>
                        </ul>
                        <span class="representatives-list__sub-list-title">Телефоны:</span>
                        <ul class="representatives-list__phones">
                            <li class="representatives-list__phones-elmt"><a href="tel:+78452561382" class="representatives-list__link">+7 (8452) 56-13-82</a></li>
                            <li class="representatives-list__phones-elmt"><a href="tel:+79173225726" class="representatives-list__link">+7 (917) 322-57-26</a></li>
                        </ul>
                        <span class="representatives-list__sub-list-title">E-mail:</span>
                        <ul class="representatives-list__mail">
                            <li class="representatives-list__mail-elmt"><a href="mailto:sar@k-inver.ru" class="representatives-list__link">sar@k-inver.ru</a></li>
                        </ul>
                    </li>
                    <li class="representatives-list__elmt">
                        <span class="representatives-list__title">Н. Новгород</span>
                        <ul class="representatives-list__staff">
                            <li class="representatives-list__staff-elmt">Шестопал Юрий</li>
                        </ul>
                        <span class="representatives-list__sub-list-title">Телефоны:</span>
                        <ul class="representatives-list__phones">
                            <li class="representatives-list__phones-elmt"><a href="tel:+79107904249" class="representatives-list__link">+7 (910) 790-42-49</a></li>
                        </ul>
                        <span class="representatives-list__sub-list-title">E-mail:</span>
                        <ul class="representatives-list__mail">
                            <li class="representatives-list__mail-elmt"><a href="mailto:" class="representatives-list__link">nn@k-inver.ru</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <?php endif ?>
        <section class="faq">
            <h2 class="visually-hidden">Полезная информация</h2>
            <div class="faq__content-container content-container">
                <ul class="faq__list">
                    <li class="faq__elmt">
                        <a href="http://www.k-inver.ru/?module=articles&id=134" class="faq__link">
                            Узнайте о технологии нанесения порошковых красок
                        </a>
                    </li>
                    <li class="faq__elmt">
                        <a href="http://chem.ralpowder.ru/" class="faq__link">
                            Узнайте о подготовке поверхности перед окраской
                        </a>
                    </li>
                    <li class="faq__elmt">
                        <a href="http://www.k-inver.ru/?module=articles&id=219" class="faq__link">
                            Узнайте о добавках в порошковые краски
                        </a>
                    </li>
                    <li class="faq__elmt">
                        <a href="http://www.k-inver.ru/?module=articles&id=2020" class="faq__link">
                            Узнайте о металликах подробнее
                        </a>
                    </li>
                    <li class="faq__elmt">
                        <a href="http://www.k-inver.ru/?module=articles&id=220" class="faq__link">
                            Каталог цветов RAL
                        </a>
                    </li>
                </ul>
                <div class="faq__contacts-wrapper">
                    <h3 class="faq__contacts-title">Телефоны отдела продаж:</h3>
                    <ul class="faq__contacts">
                        <li class="faq__contactst-elmt">
                            в Санкт-Петербурге:
                            <a class="faq__contacts-link" href="tel:+78123317791">+7 (812) 331-77-91</a>
                        </li>
                        <li class="faq__contactst-elmt">
                            в Москве:
                            <a class="faq__contacts-link" href="tel:+79260269916">+7 (926) 026-99-16</a>,
                            <a class="faq__contacts-link" href="tel:+79299979381">+7 (929) 997-93-81</a>
                        </li>
                        <li class="faq__contactst-elmt">
                            <a class="faq__contacts-link faq__contacts-link--callme" href="#" onclick="showForm('Заказ обратного звонка', 'Заказать звонок', 'Заказ обратного звонка с нижней кнопки «ЗАКАЗАТЬ ЗВОНОК» страницы'); return false;">
                                заказать звонок
                            </a>
                        </li>
                        <li class="faq__contactst-elmt">
                            <article class="faq__socials social-buttons">
                                <h2 class="visually-hidden">Наши социальные сети</h2>
                                <ul class="social-buttons__list social-buttons__list--footer">
                                    <li class="social-buttons__elmt">
                                        <a href="https://www.facebook.com/kraskiinver" class="social-buttons__link social-buttons__link--facebook" target="_blank" aria-label="ссылка на нашу группу в фейсбуке">

                                        </a>
                                    </li>
                                    <li class="social-buttons__elmt">
                                        <a href="https://www.instagram.com/kraskiinver/" class="social-buttons__link social-buttons__link--instagramm" target="_blank" aria-label="ссылка на наш инстаграм">

                                        </a>
                                    </li>
                                    <li class="social-buttons__elmt">
                                        <a href="https://www.youtube.com/channel/UCMD-Lk6cByhH6ZOz6HziNkA" class="social-buttons__link social-buttons__link--youtube" target="_blank" aria-label="ссылка на наш канал на ютубе">

                                        </a>
                                    </li>
                                </ul>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
    <div class="blackout display-none" onclick="closeForm(); return false;">

    </div>
    <article class="site-form display-none">
        <h2 class="site-form__title block-title">Заказ обратного звонка</h2>
        <form action="/php/call-back.php" class="site-form__form" method="POST" id="request">
            <label class="site-form__label"><input type="text" id="name" name="name" class="site-form__input" placeholder="Ваше имя" required></label>
            <label class="site-form__label"><input type="text" id="phone" name="phone" class="site-form__input" placeholder="Номер телефона" required></label>
            <label class="site-form__label"><input type="email" id="email" name="email" class="site-form__input" placeholder="E-mail" required></label>
            <label class="site-form__label site-form__label--text site-form__label--hide" id='messageLabel'><textarea id="message" name="message" rows="5" class="site-form__input site-form__input--text site-form__input--hide" placeholder="Ваши вопросы"></textarea></label>
            <input type="hidden" id="form-title" name="form-title" class="site-form__hidden" value="spam">
            <input type="submit" class="site-form__submit" id="form-submit" value="Заказ обратного звонка">
        </form>
        <div class="site-form__success">
            Спасибо!<br>Мы свяжемся с вами в ближайшее рабочее время
        </div>
        <a class="close-button" onclick="closeForm(); return false;">

        </a>
    </article>
    <article class="cookie <?=($_COOKIE['use-cookie'] === 'got-it')? 'cookie--hide' : ''?>">
        <div class="cookie__content-container content-container">
            <h2 class="visually-hidden">Мы используем cookie</h2>
            <p class="cookie-info">
                Наш сайт использует файлы cookie. Продолжая использовать сайт, вы подтверждаете свое согласие на их использование.
            </p>
            <form class="cookie__form" id="cookie-form" method="POST" action="php/cookie.php">
                <input type="hidden" name="use-cookie" value="got-it">
                <input class="cookie__submit" type="submit" value="Понятно">
            </form>
        </div>
    </article>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/js/script.js"></script>

</body>

</html>