<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>БетонСтрой</title>
</head>

<body>
    <div class="body-content">
        <header class="header" id="header">
            <div class="container">
                <div class="header__wrapper">
                    <div class="logo">
                        <a href="#"><span class="logo-blue">Б</span>етон<span class="logo-yellow">С</span>трой</a>
                    </div>
                    <div class="sections-container">
                        <div class="header__sections">
                            <a href="#">
                                Калькулятор
                            </a>
                            <a href="#">
                                Цены
                            </a>
                            <a href="#">
                                Лаборатория
                            </a>
                            <a href="#">
                                Контакты
                            </a>
                        </div>
                    </div>
                    <div class="contacts">
                        <div class="contacts__info">
                            <a href="tel:+74954781232" class="contacts__phone">+7 (495) 478 12 32</a>
                            <a href="mailto:info_beton_stroy@domen.ru" class="contacts__mail">info_beton_stroy@domen.ru</a>
                        </div>
                        <button type="button" class="button">
                            <a href="#popup" class="popup__link">
                                <img src="images/right-arrow.svg" class="button__arrow-img">
                                <div class="button__content call-button">
                                    ЗАКАЗАТЬ ЗВОНОК
                                </div>
                            </a>
                        </button>
                        <div class="burger">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <menu class="menu" id="menu">
            <div class="menu__content">
                <div class="menu__sections">
                    <a href="#">
                        На главную
                    </a>
                    <a href="#">
                        Калькулятор
                    </a>
                    <a href="#">
                        Цены
                    </a>
                    <a href="#">
                        Лаборатория
                    </a>
                    <a href="#">
                        Контакты
                    </a>
                </div>
            </div>
        </menu>
        <div class="main-info">
            <div class="splash-stones">
                <img src="images/splash-stones.png" alt="">
            </div>
            <div class="main-info__background">
                <img src="images/background1.png" alt="">
            </div>
            <div class="main-info__content">
                <div class="about-info">
                    <div class="about-info__main">
                        <p>Привезём бетон нужной марки, точно в срок и с <span>БЕСПЛАТНОЙ ДОСТАВКОЙ до <span class="number-span">30</span> августа</span></p>
                    </div>
                    <div class="about-info__discription">
                        <p>Подробности уточняйте у менеджера!</p>
                    </div>
                    <div class="button delivery-button">
                        <a href="#">
                            <img src="images/right-arrow.svg" class="button__arrow-img">
                            <div class="button__content delivery-button__content">
                                ЗАКАЗАТЬ ДОСТАВКУ
                            </div>
                        </a>
                    </div>
                    <div class="dignity">
                        <div class="dignity__item">
                            <div class="dignity__images">
                                <img src="images/microscope.png" alt="" class="dignity__image">
                                <img src="images/star_01.png" alt="" class="star">
                            </div>
                            <div class="dignity__content">
                                <p>Собственная лаборатория <span>качества</span></p>
                            </div>
                        </div>
                        <div class="dignity__item">
                            <div class="dignity__images">
                                <img src="images/concrete-mixer.png" alt="" class="dignity__image">
                                <img src="images/star_02.png" alt="" class="star">
                            </div>
                            <div class="dignity__content">
                                <p>15 единиц <span>техники</span></p>
                            </div>
                        </div>
                        <div class="dignity__item dignity__cement">
                            <div class="dignity__images">
                                <img src="images/cement.png" alt="" class="dignity__image">
                                <img src="images/star_03.png" alt="" class="star">
                            </div>
                            <div class="dignity__content">
                                <p>Многолетний опыт <span>работы</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="builder">
                    <div class="builder-image">
                        <img src="images/builder.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="price">
            <div class="stones-back">
                <img src="images/stones.png" alt="">
            </div>
            <div class="price__wrapper">
                <div class="calculator">
                    <div class="calculator__title">
                        <p>Калькулятор цены <span>без учёта доставки</span></p>
                    </div>
                    <div class="calculator__inputs">
                        <div class="concrete-type">
                            <div class="concrete-type__title input-title">
                                <p>Выберите тип бетона<span>*</span></p>
                            </div>
                            <div class="concrete-type__input">
                                <select class="select">
                                    <option value="" class="disabled-option" disabled selected>Выберите тип бетона из
                                        списка</option>
                                    <option value="1">Первый тип</option>
                                    <option value="2">Второй тип</option>
                                    <option value="3">Третий тип</option>
                                    <option value="4">Четвертый тип</option>
                                </select>
                            </div>
                        </div>
                        <div class="volume">
                            <div class="volume__title input-title">
                                <p>Введите объём, (м3)</p>
                            </div>
                            <div class="volume__input">
                                <input type="number" placeholder="Введите кол-во объёма">
                            </div>
                        </div>
                        <div class="phone">
                            <div class="phone__title input-title">
                                <p>Номер телефона<span>*</span></p>
                            </div>
                            <div class="phone__input">
                                <input type="tel" placeholder="Введите ваш номер">
                            </div>
                        </div>
                        <div class="address">
                            <div class="address__title input-title">
                                <p>Ваш адрес<span>*</span></p>
                            </div>
                            <div class="address__input">
                                <input type="text" placeholder="Введите ваш адрес">
                            </div>
                        </div>
                    </div>
                    <div class="calculator-conventions">
                        <div class="necessarily">
                            <p><span>*</span>Обязательные поля для заполнения</p>
                        </div>
                        <div class="button cost-button">
                            <a href="#">
                                <img src="images/right-arrow.svg" class="button__arrow-img cost-arrow">
                                <div class="button__content cost-button__content">
                                    УЗНАТЬ СТОИМОСТЬ
                                </div>
                            </a>
                        </div>
                        <div class="agreement">
                            <p>Нажимая на кнопку, Вы даёте согласие на использование своих персональных данных.</p>
                        </div>
                    </div>
                    <div class="kamaz">
                        <img src="images/kamaz.png" alt="">
                    </div>
                </div>
                <div class="price-list">
                    <div class="our-prices">
                        <div class="our-prices__title">
                            <p>Наши <span>цены</span></p>
                        </div>
                        <div class="price-table">
                            <div class="material">
                                <div class="material__gravel material__item" id="material__gravel">
                                    <div class="gravel__image">
                                        <img src="images/gravel.png" alt="">
                                    </div>
                                    <div class="gravel__title">
                                        <p>Гравий</p>
                                    </div>
                                </div>
                                <div class="material__granite material__item" id="material__granite">
                                    <div class="granite__image">
                                        <img src="images/granite.png" alt="">
                                    </div>
                                    <div class="granite__title">
                                        <p>Гранит</p>
                                    </div>
                                </div>
                                <div class="material__expanded-clay material__item" id="material__expanded-clay">
                                    <div class="expanded-clay__image">
                                        <img src="images/expanded-clay.png" alt="">
                                    </div>
                                    <div class="expanded-clay__title">
                                        <p>Тощий бетон</p>
                                    </div>
                                </div>
                                <div class="material__RSG-solution material__item" id="material__RSG-solution">
                                    <div class="RSG-solution__image">
                                        <img src="images/RSG-solution.png" alt="">
                                    </div>
                                    <div class="RSG-solution__title">
                                        <p>Раствор РСГ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="material-slider">
                                <div class="swiper" id="price-list">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide table-slide">
                                            <div class="price-list__page">
                                                <div class="price-table__categories">
                                                    <div class="first-column">
                                                        Марка
                                                    </div>
                                                    <div class="second-column">
                                                        Наименование
                                                    </div>
                                                    <div class="second-column">
                                                        класс
                                                    </div>
                                                    <div class="first-column">
                                                        Цена за куб. с НДС
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М100
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В7,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 500 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М150
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В12,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 600 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М200
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В15
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 700 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М250
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В20
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 900 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М300
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В22,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 000 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М350
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В25
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 250 руб.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide table-slide">
                                            <div class="price-list__page">
                                                <div class="price-table__categories">
                                                    <div class="first-column">
                                                        Марка
                                                    </div>
                                                    <div class="second-column">
                                                        Наименование
                                                    </div>
                                                    <div class="second-column">
                                                        класс
                                                    </div>
                                                    <div class="first-column">
                                                        Цена за куб. с НДС
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М100
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В7,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 500 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М150
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В12,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 600 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М200
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В15
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 700 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М250
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В20
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 900 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М300
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В22,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 000 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М350
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В25
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 250 руб.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide table-slide">
                                            <div class="price-list__page">
                                                <div class="price-table__categories">
                                                    <div class="first-column">
                                                        Марка
                                                    </div>
                                                    <div class="second-column">
                                                        Наименование
                                                    </div>
                                                    <div class="second-column">
                                                        класс
                                                    </div>
                                                    <div class="first-column">
                                                        Цена за куб. с НДС
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М100
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В7,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 500 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М150
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В12,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 600 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М200
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В15
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 700 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М250
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В20
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 900 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М300
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В22,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 000 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М350
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В25
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 250 руб.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide table-slide">
                                            <div class="price-list__page">
                                                <div class="price-table__categories">
                                                    <div class="first-column">
                                                        Марка
                                                    </div>
                                                    <div class="second-column">
                                                        Наименование
                                                    </div>
                                                    <div class="second-column">
                                                        класс
                                                    </div>
                                                    <div class="first-column">
                                                        Цена за куб. с НДС
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М100
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В7,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 500 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М150
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F50 W2
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В12,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 600 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М200
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В15
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 700 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М250
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W4-W6
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В20
                                                    </div>
                                                    <div class="first-column">
                                                        <span>3 900 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М300
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В22,5
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 000 руб.</span>
                                                    </div>
                                                </div>
                                                <div class="price-table__item">
                                                    <div class="first-column">
                                                        М350
                                                    </div>
                                                    <div class="second-column">
                                                        Гравий П2-П4 F150-F200 W6-W8
                                                    </div>
                                                    <div class="second-column">
                                                        БСГ В25
                                                    </div>
                                                    <div class="first-column">
                                                        <span>4 250 руб.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-table__buttons">
                                <div class="button make-offer-button">
                                    <div class="button stock-button">
                                        <a href="#">
                                            <div class="button__content stock-button__text">
                                                С БЕСПЛАТНОЙ ДОСТАВКОЙ
                                            </div>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <img src="images/right-arrow.svg" class="button__arrow-img">
                                        <div class="button__content make-offer-button__text">
                                            ЗАКАЖИ БЕТОН ПРЯМО СЕЙЧАС
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-virtues">
            <div class="our-virtues__title">
                <p>Нам <span>доверяют</span></p>
            </div>
            <div class="our-virtues__item">
                <div class="dignity1 dignityes">
                    <div class="dignity-table">
                        <div class="dignity-triangle">
                            <img src="images/triangle.svg" alt="">
                        </div>
                        <p>Работаем по договору</p>
                    </div>
                    <div class="dignity-image">
                        <img src="images/dignity1.png" alt="">
                    </div>
                    <div class="dignity-number">
                        <img src="images/01.png" alt="">
                    </div>
                </div>
                <div class="dignity2 dignityes">
                    <div class="dignity-table">
                        <div class="dignity-triangle">
                            <img src="images/triangle.svg" alt="">
                        </div>
                        <p>Низкие цены</p>
                    </div>
                    <div class="dignity-image">
                        <img src="images/dignity2.png" alt="">
                    </div>
                    <div class="dignity-number">
                        <img src="images/02.png" alt="">
                    </div>
                </div>
                <div class="dignity3 dignityes">
                    <div class="dignity-table">
                        <div class="dignity-triangle">
                            <img src="images/triangle.svg" alt="">
                        </div>
                        <p>Сертификаты качества</p>
                    </div>
                    <div class="dignity-image">
                        <img src="images/dignity3.png" alt="">
                    </div>
                    <div class="dignity-number">
                        <img src="images/03.png" alt="">
                    </div>
                </div>
                <div class="dignity4 dignityes">
                    <div class="dignity-table">
                        <div class="dignity-triangle">
                            <img src="images/triangle.svg" alt="">
                        </div>
                        <p>Доставка точно в срок</p>
                    </div>
                    <div class="dignity-image">
                        <img src="images/dignity4.png" alt="">
                    </div>
                    <div class="dignity-number">
                        <img src="images/04.png" alt="">
                    </div>
                </div>
            </div>
            <div class="virtues-button button">
                <a href="#">
                    <img src="images/right-arrow.svg" class="button__arrow-img">
                    <div class="button__content virtues-button__text">
                        УЗНАТЬ СТОИМОСТЬ
                    </div>
                </a>
            </div>
        </div>
        <div class="laboratory">
            <div class="laboratory__wrapper">
                <div class="laboratory__info">
                    <div class="laboratory__info-title">
                        <p>Наша собственная <span>аккредитованная лаборатория</span> качества</p>
                    </div>
                    <div class="laboratory__info-terms">
                        <p>Подготовим результат проверки продукции на 8-ые и 28-ые сутки после заливки (по запросу).</p>
                    </div>
                    <div class="laboratory__button button">
                        <a href="#">
                            <img src="images/right-arrow.svg" class="button__arrow-img">
                            <div class="button__content laboratory__button-text">
                                ЗАКАЗАТЬ ПРЯМО СЕЙЧАС
                            </div>
                        </a>
                    </div>
                    <div class="laboratory__adds">
                        <p>*При условии заказа нашего бетона</p>
                    </div>
                </div>
                <div class="laboratory__image">
                    <img src="images/laboratory-certificate.png" alt="">
                </div>
                <div class="laboratory__stones">
                    <img src="images/laboratory__stone.png" alt="">
                </div>
            </div>
        </div>
        <div class="our-contacts">
            <div class="our-contacts__title">
                <p>Наши <span>контакты</span></p>
            </div>
            <div class="our-contacts__wrapper">
                <div class="our-contacts__map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A673e9bf8b99c1e376defe005198bdb860a8ddf068404ff4a31a0a6214c852b2f&amp;source=constructor" width="100%" height="425" frameborder="0"></iframe>
                </div>
                <div class="our-contacts__info">
                    <div class="info__wrapper">
                        <div class="info__address">
                            <div class="address__image">
                                <img src="images/map-location.png" alt="">
                            </div>
                            <div class="address__content">
                                <div class="address__content-title">
                                    <p>Адрес завода:</p>
                                </div>
                                <div class="address__content-text">
                                    <p>г. Москва, городской округ Истра, Босова 15, вл. 2 </p>
                                </div>
                            </div>
                        </div>
                        <div class="info__phone">
                            <div class="phone__image">
                                <img src="images/social-club.png" alt="">
                            </div>
                            <div class="phone__content">
                                <div class="phone__content-title">
                                    <p>Телефон многоканальный: </p>
                                </div>
                                <div class="phone__content-text">
                                    <div class="phone-text">
                                        <p>+7 495 478-12-32 (Диспетчерская)</p>
                                        <p>+7 495 478-12-32 (Отдел продаж)</p>
                                    </div>
                                    <div class="mail-text">
                                        <p>http://Zakaz@завод-бетон-строй.рф/</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info__button button">
                        <a href="#popup" class="popup__link">
                            <img src="images/right-arrow.svg" class="button__arrow-img">
                            <div class="button__content call-button">
                                ЗАКАЗАТЬ ЗВОНОК
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <div class="ellipse">
                </div>
                <div class="popup__content-item">
                    <a href="" class="popup__close close-popup">
                        <img src="images/close.svg" alt="">
                    </a>
                    <div class="popup__title">
                        <p>Заказать <span>звонок</span></p>
                    </div>
                    <form action="scripts/script.php" method="post" class="popup__form" id="message-form">
                        <div class="form__name">
                            <div class="form__name-title">
                                <p>Ваше имя<span>*</span></p>
                            </div>
                            <input type="text" id="name" name="name" placeholder="Введите ваше имя..." required>
                        </div>
                        <div class="form__phone">
                            <div class="form__phone-title">
                                <p>Номер телефона<span>*</span></p>
                            </div>
                            <input type="tel" id="phone" name="phone" placeholder="Введите Ваш номер..." required>
                        </div>
                        <div class="form__description">
                            <p><span>*</span>Обязательные поля для заполнения</p>
                        </div>
                        <div class="form__submit button">
                            <div class="button__content call-button">
                                ЗАКАЗАТЬ ЗВОНОК
                            </div>
                            <input type="submit" value="ЗАКАЗАТЬ ЗВОНОК" class="submit-button">
                            <a href="#">
                                <img src="images/right-arrow.svg" class="button__arrow-img form-arrow">
                            </a>
                        </div>
                        <div class="form__description2">
                            <p>Нажимая на кнопку, Вы даёте согласие на использование своих персональных данных.</p>
                        </div>
                        <div class="form__message"></div>
                    </form>
                </div>
                <div class="popup__image">
                    <img src="images/builder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__background">
            <div class="footer__content">
                <div class="footer__wrapper">
                    <div class="footer__menu">
                        <div class="footer__container">
                            <div class="logo footer__logo">
                                <a href="#"><span class="logo-yellow">Б</span>етон<span class="logo-yellow">С</span>трой</a>
                            </div>
                            <div class="sections-container footer__sections">
                                <div class="header__sections">
                                    <a href="#">
                                        Калькулятор
                                    </a>
                                    <a href="#">
                                        Цены
                                    </a>
                                    <a href="#">
                                        Лаборатория
                                    </a>
                                    <a href="#">
                                        Контакты
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__contacts">
                        <div class="relevance">
                            <a href="#">© БетонСтрой 2022</a>
                        </div>
                        <div class="development">
                            <a href="#">Разработка сайта</a>
                        </div>
                    </div>
                </div>
                <div class="footer__kamaz">
                    <img src="images/footer-kamaz.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>