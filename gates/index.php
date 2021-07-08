<!--<pre>-->
<?php
    // var_dump($_POST);
    require(__DIR__ . '/controller.php');
?>
<!--</pre>-->


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
    <title>Автоматические откатные ворота</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="popup-container">
        <div class="popup">
            <form method="POST" class="form-header" action="/mail.php">
                <input type="hidden" name="project_name" value="Тест">
                <input type="hidden" name="admin_email" value="kampusano.igor@mail.ru">
                <input type="hidden" name="form_subject" value="Обратный звонок">

                <input class="input-name-popup" type="text" placeholder="Ваше имя" name="Имя">
                <input class="input-tel-popup" type="tel" placeholder="Ваш телефон" name="Телефон">
                	<!--<button class="form-button-popup">
                    <a href="#" class="form-button-link">Заказать звонок</a>
                </button>-->
              	<input class="form-button-popup" type="submit" value="Заказать звонок" name="send">
            </form>
        </div>
    </div>
    <div class="white-bar">
        <div class="fixed-container clearfix">
            <p class="paragraph-left">Производство и монтаж автоматических <br> ворот в Москве и Московской области</p>
            <div class="white-bar-phone-link">
                <a href="#"><span class="phone-link-blue">+7 495</span> 999-38-34</a>
            </div>
            <p class="paragraph-right">Есть вопросы? Позвоните нам <br> или закажите обратный звонок!</p>
        </div>
    </div>
    <header id="section1" class="clearfix">
    <div class="nav-bar">
            <div class="fixed-container-nav clearfix">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#section1">Главная</a></li>
                        <li><a href="#section2">Ворота</a></li>
                        <li><a href="#section3">Калькулятор</a></li>
                        <li><a href="#section4">Отзывы</a></li>
                        <li><a href="#section5">География работ</a></li>
                    </ul>
                </nav>
                <button class="header-button">
                    <a href="#" class="header-button-link">Обратный звонок</a>
                </button>
                
                
                
            </div>
        </div>
        <!-- <div class="nav-bar-left"></div>
        <div class="nav-bar-right"></div> -->
        <div class="header-right">
                    <a href="#" class="header-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
        <nav class="nav-menu-mobile">
        <a href="#" class="header-close">
            <span></span>
            <span></span>
        </a>
                <ul>
                    <li><a href="section1">Главная</a></li>
                    <li><a href="section2">Ворота</a></li>
                    <li><a href="section3">Калькулятор</a></li>
                    <li><a href="section4">Отзывы</a></li>
                    <li><a href="section5">География работ</a></li>
                </ul>
                <button class="header-login">
                    <a href="#" class="header-button-link">Обратный звонок</a>
                </button>
                
                    <!-- <a href="#" class="header-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a> -->
                    
                
        </nav>
        <!-- <div class="nav-bar"></div> -->
        <div class="fixed-container clearfix">
        <!-- <div class="nav-bar">
            <div class="fixed-container-nav clearfix">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#section1">Главная</a></li>
                        <li><a href="#section2">Ворота</a></li>
                        <li><a href="#section3">Калькулятор</a></li>
                        <li><a href="#section4">Отзывы</a></li>
                        <li><a href="#section5">География работ</a></li>
                    </ul>
                </nav>
                <button class="header-button">
                    <a href="#" class="header-button-link">Обратный звонок</a>
                </button>
                
                
                
            </div>
        </div> -->
            <div class="logo">
                <h1 class="logo-heading">Автоматические откатные ворота</h1>
                <p class="logo-paragraph">монтаж "под ключ" за 1 день</p>


            </div>
            <div class="form-block">
                <p class="form-paragraph">ЗАПОЛНИТЕ ЗАЯВКУ<br> и ПОЛУЧИТЕ<br> три варианта расчета ваших ворот и выезд специалиста БЕСПЛАТНО!</p>
              <form action="/index.php" method="post" class="form-header">
            <!--<label>Введите текст:</label>
            <input type="text" name="field">
            <input type="submit" value="Отправить" name="send">-->
                <input type="hidden" name="project_name" value="Тест">
                    <input type="hidden" name="admin_email" value="kampusano.igor@mail.ru">
                    <input type="hidden" name="form_subject" value="Заявка по воротам">

                    <input class="input-name" type="text" placeholder="Ваше имя" name="Имя">
                    <input class="input-tel" type="tel" placeholder="Ваш телефон" name="Телефон">
                    <!--<button class="form-button">
                        <a href="#" class="form-button-link">Оставить заявку</a>
                    </button>-->
                  <input type="submit" class="form-button" value="Оставить заявку" name="send">
                </form>
                <!--<form class="form" action="/index.php" method="post">
                    <input type="hidden" name="project_name" value="Тест">
                    <input type="hidden" name="admin_email" value="kampusano.igor@mail.ru">
                    <input type="hidden" name="form_subject" value="Заявка по воротам">

                    <input class="input-name" type="text" placeholder="Ваше имя" name="Имя">
                    <input class="input-tel" type="tel" placeholder="Ваш телефон" name="Телефон">
                    <button class="form-button">
                        <a href="#" class="form-button-link">Оставить заявку</a>
                    </button>
                  <input type="submit" class="form-button" value="Отправить" name="send">
                </form>-->
            </div>


            <!-- <div class="black-bar">
                <h2 class="list-heading">Изготовление ворот по индивидуальным размерам</h2>
            </div> -->
        </div>





        <div class="black-bar">
            <h2 class="list-heading">Изготовление ворот по индивидуальным размерам</h2>
        </div>
        

    </header>
    <section class="list">

        <div class="container">

            <div class="list-blocks">
                <div class="list-block">
                    <img src="img/icon-1.png" alt="">
                    <div class="list-text">Высокое<br> качество услуг</div>
                </div>
                <div class="list-block">
                    <img src="img/icon-2.png" alt="">
                    <div class="list-text">Собственное<br> производство</div>
                </div>
                <div class="list-block">
                    <img src="img/icon-3.png" alt="">
                    <div class="list-text">Гарантийное<br> и постгарантийное<br> обслуживание
                    </div>
                </div>
                <div class="list-block">
                    <img src="img/icon-4.png" alt="">
                    <div class="list-text">Монтажники<br> с опытом работы<br> более 10 лет
                    </div>
                </div>
                <div class="list-block">
                    <img src="img/icon-5.png" alt="">
                    <div class="list-text">Мобильный<br> офис
                    </div>
                </div>
                <div class="list-block">
                    <img src="img/icon-6.png" alt="">
                    <div class="list-text">Доставка по Москве<br> и Московской области
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="design-project">
        <div class="black-bar">
            <h2 class="list-heading line">Индивидуальный <span class="design-project-text">дизайн-проект</span> ворот</h2>
        </div>
        <div class="fixed-container">
            <div class="design-project-image">
                <div class="gate-image">
                    <button class="design-button">
                        <a href="#" class="design-button-link">Заказать</a>
                </button>
                </div>
                <div class="design-pars">
                    <div class="pars-image">
                        <p class="first-design-par">Наша компания рада предложить<br> широкий выбор эскизов и фотографий для<br> выбора ворот.
                        </p>
                        <p class="second-design-par">Если Вас не заинтересовали имеющиеся предложения, мы рады предложить вам<br> создание индивидуального дизайн-проекта<br> с последующей визуализацией.</p>
                        <p class="third-design-par">Вы сможете оценить насколько оно «впишется» в Ваш интерьер и по необходимости внести изменения.</p>
                    </div>

                </div>

            </div>
        </div>
        <div class="black-bar-none">

        </div>
    </section>
    <section class="gate-types" id="section2">
        <div class="fixed-container">
            <h2 class="type-heading">Виды ворот</h2>
            <p class="types-par">Откатные ворота очень удобны и практичны в эксплуатации, что делает их все больше популярными для установки на въезды частных домов, гаражей, складов, промышленных территорий. Они безотказно работают как при высоких, так и при низких
                температурах, способны выдерживать сильные ветровые нагрузки.</p>
            <div class="types">
                Откатные ворота делятся на виды по материалу обшивки, используемой при производстве:
            </div>
            <div class="types-block">
                <div class="types-block-small">
                    <img src="img/кованые.png" alt="" class="types-image-block">
                    <button class="types-image">Кованые</button>
                </div>
                <div class="types-block-small">
                    <img src="img/MG_2716.png" alt="" class="types-image-block">
                    <button class="types-image">С обшивкой из профнастила</button>
                </div>
                <div class="types-block-small">
                    <img src="img/дерево.png" alt="" class="types-image-block">
                    <button class="types-image">С обшивкой из дерева</button>
                </div>
                <div class="types-block-small">
                    <img src="img/обрешетка.png" alt="" class="types-image-block">
                    <button class="types-image">С обшивкой из обрешетки</button>
                </div>
                <div class="types-block-small">
                    <img src="img/13.png" alt="" class="types-image-block">
                    <button class="types-image">С обшивкой из сэндвич-панелей</button>
                </div>
                <div class="types-block-small">
                    <img src="img/PICT0003.png" alt="" class="types-image-block">
                    <button class="types-image">С обшивкой из поликарбоната <br>с коваными элементами</button>
                </div>
            </div>
        </div>



    </section>
    <section class="calculator" id="section3">
        <div class="black-bar">
            Калькулятор для расчета стоимости откатных ворот
        </div>
        <div class="fixed-container con">
            <div class="calculator-image">
                <div class="choose-config-block">
                    <div class="big-block">
                        <div class="choose-config-title">
                            Выбранная конфигурация
                        </div>

                        <div class="choose-config-list">
                            <form method="post" action="/index.php" class="config-form">
                                <ul class="choose-list">
                                        <li>
                                            <b>Размеры ворот:</b>
                                            <span class="input-width-height-span">
                                                <input type="text" class="input-text-width" style="background-color: transparent; border: 0px solid white; font-size: 18px; width: 41px;" name="ширина">
                                                <span class="multy-width-height">x</span>
                                                <input type="text" class="input-text-height" style="background-color: transparent; border: 0px solid white; font-size: 18px; width: 41px;" name="высота">
                                            </span>
                                            
                                        </li>
                                        <li>
                                            <b>Полотно ворот:</b>
                                            <span class="input-width-height-span">
                                                <input type="text" class="input-text-type" style="background-color: transparent; border: 0px solid white; font-size: 18px;width: 182px;" name="полотно">
                                            </span>
                                        </li>
                                        <li>
                                            <b>Встроенная калитка:</b>
                                            <span class="input-width-height-span">
                                                <input type="text" class="input-text-gate-small" style="background-color: transparent; border: 0px solid white; font-size: 18px;width: 29px;" name="калитка">
                                            </span>
                                        </li>
                                        <li>
                                            <b>Автоматизация ворот:</b>
                                            <span class="input-width-height-span">
                                                <input type="text" class="input-text-automatic" style="background-color: transparent; border: 0px solid white; font-size: 18px; width: 59px;" name="автоматизация">
                                            </span>
                                        </li>
                                        <li>
                                            <b>Необходимые работы:</b>
                                        </li>
                                </ul>
                                <ul class="calc-pars">
                                    <input type="text" class="input-text-check" style="background-color: transparent; border: 0px solid white; font-size: 15px; margin-left: 80px" name="работы-1"><br>
                                    <input type="text" class="input-text-check-2" style="background-color: transparent; border: 0px solid white; font-size: 15px; margin-left: 80px" name="работы-2"><br>
                                    <input type="text" class="input-text-check" style="background-color: transparent; border: 0px solid white; font-size: 15px; margin-left: 80px" name="работы-3">
                                </ul>
                                
                                <!-- <button id="config-form-btn">Отправить</button> -->
                            </form>

<!--                            <form method="post" class="choose-list-form" action="/controller.php">-->
<!--                                <label><b>Размеры ворот:</b></label><input class="input-first" type="text"><input class="input-second" type="text">-->
<!--                                <label><b>Полотно ворот:</b></label><input type="text">-->
<!--                                <label><b>Встроенная калитка</b></label><input type="text">-->
<!--                                <label><b>Автоматизация ворот:</b></label><input type="text">-->
<!--                                <label><b>Необходимые работы:</b></label><input type="text">-->
<!--                            </form>-->
                            

<!--                            <p class="calc-par">Монтаж ворот</p>-->
<!--                            <p class="calc-par">Выемка ворот - бетонирование основания</p>-->
<!--                            <p class="calc-par">Бетонирование отдельно стоящих столбов</p>-->
                            <!-- <form class="choose-config-form" action="POST">
                                <input class="choose-config-input" type="text" placeholder="00 000">
                                <label class="choose-config-ruble">руб.</label>
                            </form> -->
                        </div>
                        <form class="choose-config-form">
                            <input class="choose-config-input" type="text" placeholder="00 000" value="<?= $sum; ?>">
                            <label class="choose-config-ruble">руб.</label>
                        </form>
                    </div>

                    <div class="choose-config-text">
                        Заполни и узнай стоимость ворот
                    </div>

                </div>


            </div>



        </div>
        <div class="blue-bar">
            <div class="fixed-container" style="padding: 0;">
                <div class="tabs-links">
                    <ul>
                        <li href="#one" class="active">
                            <span>Размер ворот</span>
                        </li>
                        <li href="#two">
                            <span>Полотно ворот</span>
                        </li>
                        <li href="#three">
                            <span>Встроенная калитка</span>
                        </li>
                        <li href="#four">
                            <span>Автоматизация ворот</span>
                        </li>
                        <li href="#five">
                            <span>Необходимые работы</span>
                        </li>
                    </ul>
                </div>
                
            </div>

        </div>
        <div class="grey-bar">
            <div class="fixed-container">
                <div class="tabs-content">
                    <div class="tabs-pane active" id="one">
                        <div class="left-block">
                            <p class="left-par">Ширина проема, мм.:</p>
                            <form method="POST" action="/controller.php" class="form-width">
                                <input class="left-input" type="text" placeholder="3875" name="ширина">
                            </form>
                        </div>
                        <div class="right-block">
                            <p class="right-par">Высота проема, мм.:</p>
                            <form method="POST" action="/index.php" class="form-height">
                                <input class="right-input" type="text" placeholder="2335" name="высота">
                            </form>
                        </div>
                    </div>
                    <div class="tabs-pane" id="two">
                        <form method="POST" action="/controller.php" class="form-type">
                            <ul class="types-gate">
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Кованые">
                                        <span class="fake"></span>
                                        <span class="text">Кованые</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Обшивка из профнастила">
                                        <span class="fake"></span>
                                        <span class="text">Обшивка из профнастила</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Обшивка из дерева">
                                        <span class="fake"></span>
                                        <span class="text">Обшивка из дерева</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Наполнение из сэндвич-панели">
                                        <span class="fake"></span>
                                        <span class="text">Наполнение из сэндвич-панели</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Обшивка из обрешетки">
                                        <span class="fake"></span>
                                        <span class="text">Обшивка из обрешетки</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Обшивка из стального листа с коваными элементами">
                                        <span class="fake"></span>
                                        <span class="text">Обшивка из стального листа с коваными элементами</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-2" value="Обшивка из поликарбоната с коваными элементами">
                                        <span class="fake"></span>
                                        <span class="text">Обшивка из поликарбоната с коваными элементами</span>
                                    </label>
                                </li>
                            </ul> 
                        </form>
                    </div>
                    <div class="tabs-pane" id="three">
                        <form method="POST" class="tabs-pane-three" action="/controller.php" class="form-small-gate">
                            <label class="label">
                                <input type="radio" class="radio" name="pane-radio-3" value="Да">
                                <span class="fake"></span>
                                <span class="text">Да</span>
                            </label>
                            <label class="label">
                                <input type="radio" class="radio" name="pane-radio-3" value="Нет">
                                <span class="fake"></span>
                                <span class="text">Нет</span>
                            </label>   
                        </form>
                    </div>
                    <div class="tabs-pane" id="four">
                        <form method="POST" class="tabs-pane-four" action="/controller.php" class="form-automatic">
                            <div class="automatic-block-main">
                                <div class="automatic-block">
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-4" value="Автоматическое">
                                        <span class="fake"></span>
                                        <span class="text">Автоматическое</span>
                                    </label>
                                </div>
                                
                            </div>
                            <div class="gates-border">
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-4.1" value="Alutech">
                                        <span class="fake"></span>
                                        <span class="text">Alutech</span>
                                    </label>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-4.1" value="Nice">
                                        <span class="fake"></span>
                                        <span class="text">Nice</span>
                                    </label>
                                    <label class="label">
                                        <input type="radio" class="radio" name="pane-radio-4.1" value="CAME">
                                        <span class="fake"></span>
                                        <span class="text">CAME</span>
                                    </label>
                                </div>

                            <div class="tabs-pane-four-self">
                                <label class="label">
                                    <input type="radio" class="radio" name="pane-radio-4" value="Ручное">
                                    <span class="fake"></span>
                                    <span class="text">Ручное</span>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="tabs-pane" id="five">
                        <form method="POST" action="/controller.php" class="form-work">
                            <div>
                                <label class="form-check">
                                    <input type="checkbox" value="Монтаж ворот" name="work_name" class="input-check">
                                    <span class="text">Монтаж ворот</span>
                                </label>
                            </div>
                            <div>
                                <label class="form-check">
                                    <input type="checkbox" value="Выемка грунта + бетонирование основания" name="work_name" class="input-check">
                                    <span class="text">Выемка грунта + бетонирование основания</span>
                                </label>
                            </div>
                            <div>
                                <label class="form-check">
                                    <input type="checkbox" value="Бетонирование отдельно стоящих столбов" name="work_name" class="input-check">
                                    <span class="text">Бетонирование отдельно стоящих столбов</span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>


        </div>
    </section>
    <section class="phone clearfix">
        <div class="fixed-container">
            <div class="left-phone-block">
                <p class="left-phone-par">Появились вопросы?<br> Позвоните нам или закажите<br> обратный звонок!</p>
            </div>
            <div class="right-phone-block">
                <div class="white-bar-phone-link-second">
                    <div class="phone-icon"></div>
                    <a href="#"><span class="phone-link-blue">+7 495</span> 999-38-34</a>
                </div>
                <button class="design-button-phone">
                    <a href="#" class="design-button-link">Обратный звонок</a>
            </button>
            </div>
        </div>
    </section>
    <section class="model">
        <div class="fixed-container con">
            <h2 class="model-heading">Схема работы с нами</h2>
            <div class="model-blocks">
                <div class="model-block">
                    <img src="img/icon-7.png" alt="">
                    <div class="model-text">Вы оставляете заявку</div>
                </div>
                <img class="model-arrow" src="img/Фигура 5 копия 4.png" alt="">
                <div class="model-block">
                    <img src="img/icon-8.png" class="model-block-second-img" alt="">
                    <div class="model-text model-text-second">Мы делаем полный расчет</div>
                </div>
                <img class="model-arrow" src="img/Фигура 5 копия 4.png" alt="">
                <div class="model-block">
                    <img src="img/icon-9.png" alt="">
                    <div class="model-text">Подписываем все документы</div>
                </div>
                <img class="model-arrow" src="img/Фигура 5 копия 4.png" alt="">
                <div class="model-block">
                    <img src="img/icon-10.png" alt="">
                    <div class="model-text">Вы производите оплату</div>
                </div>
                <img class="model-arrow" src="img/Фигура 5 копия 4.png" alt="">
                <div class="model-block">
                    <img src="img/icon-11.png" class="model-block-fifth-img" alt="">
                    <div class="model-text">Мы доставляем Ваш заказ</div>
                </div>
                <img class="model-arrow" src="img/Фигура 5 копия 4.png" alt="">
                <div class="model-block">
                    <img class="model-arrow" src="img/icon-12.png" alt="">
                    <div class="model-text">Выполнения работ в срок</div>
                </div>

            </div>
        </div>
    </section>
    <section class="measure">
        <div class="measure-black-bar">Вызов замерщика</div>
        <div class="fixed-container clearfix meas-con">
            <div class="measure-image">
            </div>
            <div class="measure-list-block">
                <ul class="measure-list">
                    <li>Выезд специалиста на объект<br> в любое удобное время для заказчика<br> время</li>
                    <li>Грамотная консультация<br> относительно монтажа</li>
                    <li>Составление подробной сметы на<br> монтаж</li>
                    <li>Оформление договора и план<br> схемы</li>
                </ul>
                <button class="measure-button">Оставить заявку</button>
            </div>
        </div>
    </section>
    <section class="feedback" id="section4">
        <div class="fixed-container con">
            <h2 class="feedback-heading">Отзывы наших клиентов</h2>
            <div class="feedback-block-left he">
                <div class="feedback-headings">
                    <h3 class="feed-head-main">Дубровский Алексей</h3>
                    <h4 class="feed-head-add">Директор пилорамы</h4>
                </div>
                <p class="feed-par">Работа фирмы понравилась, менеджер по телефону рассчитал ворота быстро, уточнил наличие дополнительного оборудования, оперативно озвучил сумму. На следующий день приехал замерщик, обсудил нюансы с моими рабочими, за время изготовления
                    ворот мы сделали все необходимое по техническим требованиям. Через две недели в моем новом доме были установлены въездные и гаражные ворота с автоматикой. Правда попался один пульт неисправный, следующим утром мне привезли новый пульт
                    домой. Сервисом доволен.</p>
            </div>
            <div class="feedback-block-center wi">
                <div class="feedback-headings">
                    <h3 class="feed-head-main">Власова Анастасия</h3>
                    <h4 class="feed-head-add">PR-менеджер</h4>
                </div>

                <p class="feed-par">Давно хотела себе собственный домик за городом, совсем недавно приобрела в ближайшем подмосковье. Поселок таунхаусов и совсем все одинаковое - заборчики и ворота. Ворота простые, приходилось открывать руками. Приезжало несколько человек
                    из наугад выбранных фирм в сети, сказали, что моторы на такие ворота поставить невозможно. Поговорила с управляющим поселка, сказал, что можно заменить, но рисунок должен быть как был и не отличаться от забора. Долго искала тех, кто
                    бы мог что-то предложить, случайна наткнулась на страничку этой фирмы. Позвонила, приехал менеджер и предложил переделать на ворота, которые откатываются в сторону, с мотором и пультиком. Два дня назад ворота уже установили, когда
                    закрыты все выглядит как раньше, но сейчас они отъезжают в сторону и из машины выходить не надо. Я очень довольна. Спасибо.</p>
            </div>
            <div class="feedback-block-right he">
                <div class="feedback-headings">
                    <h3 class="feed-head-main">Андреева Галина</h3>
                    <h4 class="feed-head-add">Заведующая</h4>
                </div>

                <p class="feed-par">Нам в детский лагерь понадобились новые ворота на въезд, так как старые, еще с советских времен, уже покосились, несколько раз их задевали мусоровозы. Мы своими силами пытались реставрировать, ремонтировать, после этого выглядеть они стали
                    совсем плохо. Покопались в интернете, сравнили цены и руководство приняло решение поработать с этой компанией. Бюджет был весьма ограничен, но за сравнительно небольшие деньги мы получили сдвижные ворота (вместо распашных, сдвижные
                    мы изначально их даже не рассматривали) с недорогой автоматикой. Охрана очень довольна, теперь не надо выходить из помещения чтобы открыть ворота. В следующий сезон планируем автоматизировать второй въезд, замерщик сказал, что ворота
                    в порядке. Будем снова к Вам обращаться. Всем рекомендую - недорого, качественно и в установленные сроки.</p>
            </div>
        </div>
    </section>
    <section class="geography" id="section5">
        <div class="geo-blue-bar">
            География наших работ
        </div>
            <div id="map" style="width: 100%; height: 658px">
                <div class="geo-measure-block">
                    <div class="fixed-container">
                        <div class="geo-block-text">
                            <h2 class="geo-heading">ЗАПОЛНИТЕ ЗАЯВКУ и ПОЛУЧИТЕ</h2>
                            <p class="geo-par">три варианта расчета ваших ворот и выезд специалиста БЕСПЛАТНО!</p>
                        </div>
                        
                        
                        <!-- <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?ll=37.197544%2C55.646794&mode=routes&rtext=55.674082%2C37.286031~55.663227%2C37.091178&rtn=1&rtt=auto&ruri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.286%252C55.674%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%2591%25D0%25B5%25D0%25BB%25D0%25BE%25D1%2580%25D1%2583%25D1%2581%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B5%2520%25D0%25BD%25D0%25B0%25D0%25BF%25D1%2580%25D0%25B0%25D0%25B2%25D0%25BB%25D0%25B5%25D0%25BD%25D0%25B8%25D0%25B5%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B9%2520%25D0%25B6%25D0%25B5%25D0%25BB%25D0%25B5%25D0%25B7%25D0%25BD%25D0%25BE%25D0%25B9%2520%25D0%25B4%25D0%25BE%25D1%2580%25D0%25BE%25D0%25B3%25D0%25B8%252C%2520%25D1%2581%25D1%2582%25D0%25B0%25D0%25BD%25D1%2586%25D0%25B8%25D1%258F%2520%25D0%259E%25D0%25B4%25D0%25B8%25D0%25BD%25D1%2586%25D0%25BE%25D0%25B2%25D0%25BE~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.091%252C55.663%26spn%3D0.018%252C0.009%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D0%25BE%25D0%25B1%25D0%25BB%25D0%25B0%25D1%2581%25D1%2582%25D1%258C%252C%2520%25D0%259E%25D0%25B4%25D0%25B8%25D0%25BD%25D1%2586%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25B3%25D0%25BE%25D1%2580%25D0%25BE%25D0%25B4%25D1%2581%25D0%25BA%25D0%25BE%25D0%25B9%2520%25D0%25BE%25D0%25BA%25D1%2580%25D1%2583%25D0%25B3%252C%2520%25D0%25B4%25D0%25B5%25D1%2580%25D0%25B5%25D0%25B2%25D0%25BD%25D1%258F%2520%25D0%259C%25D0%25B0%25D1%2582%25D0%25B2%25D0%25B5%25D0%25B9%25D0%25BA%25D0%25BE%25D0%25B2%25D0%25BE&utm_medium=mapframe&utm_source=maps&z=12.65"
                                style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCQpQBD-sB" width="1000" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div> -->
                        <form action="POST" class="form-footer">
                            <input class="input-name-footer" type="text" placeholder="Ваше имя">
                            <input class="input-tel-footer" type="tel" placeholder="Ваш телефон">
                            <button class="form-button-footer">
                                <a href="#" class="form-button-link">Оставить заявку</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            

        
    </section>
    <footer class="footer">
        <div class="white-bar">
            <div class="fixed-container">
                <p class="paragraph-left">Производство и монтаж автоматических <br> ворот в Москве и Московской области</p>
                <div class="white-bar-phone-link">
                    <a href="#"><span class="phone-link-blue">+7 495</span> 999-38-34</a>
                </div>
                <p class="paragraph-right-bottom">Московская обл., Одинцовский район,<br> Можайское шоссе, 79</p>
            </div>
        </div>
    </footer>
    <script src="jquery.validate.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(init);
        function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.663912390208736,37.174834584834805],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 13,
            controls: ['zoomControl']
        });
        var myPlacemark = new ymaps.Placemark([55.67302650533609,37.21241707718312] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });

        var myPlacemark1 = new ymaps.Placemark([55.659539799547815,37.224605034946805] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });

        var myPlacemark2 = new ymaps.Placemark([55.659479249390394,37.228732446407975] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });

        var myPlacemark3 = new ymaps.Placemark([55.668563795719976,37.20065827286183] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark4 = new ymaps.Placemark([55.665235486236895,37.19052588699026] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark5 = new ymaps.Placemark([55.66678792363546,37.18726432082817] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark6 = new ymaps.Placemark([55.66972283159321,37.17481887099907] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark7 = new ymaps.Placemark([55.67679973123391,37.16413958029188] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark8 = new ymaps.Placemark([55.66193482836224,37.16783171449329] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark9 = new ymaps.Placemark([55.66035793727595,37.14336996827745] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark10 = new ymaps.Placemark([55.67112804591416,37.13513022218371] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark11 = new ymaps.Placemark([55.664142368700546,37.12242728028919] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });
        
        var myPlacemark12 = new ymaps.Placemark([55.6741353823652,37.12139731202746] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });

        var myPlacemark13 = new ymaps.Placemark([55.66460931913054,37.10758881141874] , {}, {
            iconLayout: 'default#image',
		    iconImageHref: 'img/gate_geography.png',
		    iconImageSize: [19, 30]
        });

        

        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark1);
        myMap.geoObjects.add(myPlacemark2);
        myMap.geoObjects.add(myPlacemark3);
        myMap.geoObjects.add(myPlacemark4);
        myMap.geoObjects.add(myPlacemark5);
        myMap.geoObjects.add(myPlacemark6);
        myMap.geoObjects.add(myPlacemark7);
        myMap.geoObjects.add(myPlacemark8);
        myMap.geoObjects.add(myPlacemark9);
        myMap.geoObjects.add(myPlacemark10);
        myMap.geoObjects.add(myPlacemark11);
        myMap.geoObjects.add(myPlacemark12);
        myMap.geoObjects.add(myPlacemark13);

        // Построение маршрута.
        // По умолчанию строится автомобильный маршрут.
        // var multiRoute = new ymaps.multiRouter.MultiRoute({   
        //     // Точки маршрута. Точки могут быть заданы как координатами, так и адресом. 
        //     referencePoints: [
        //         [55.674245529872344,37.27798968309649],
        //         [55.66587138203007,37.083876556924025],
        //     ]
        // }, {
        //     // Автоматически устанавливать границы карты так,
        //     // чтобы маршрут был виден целиком.
        //     boundsAutoApply: true
        // });

        // // Добавление маршрута на карту.
        // myMap.geoObjects.add(multiRoute);
        // ymaps.route(['Москва', 'Санкт-Петербург']).then(
        //     function (route) {
        //         myMap.geoObjects.add(route);
        //     },
        //     function (error) {
        //         alert('Возникла ошибка: ' + error.message);
        //     }
        // );
    }
    </script>
     
</body>

</html>