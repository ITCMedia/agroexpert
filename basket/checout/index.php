<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Оформление заказа</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../../css/style.css" rel="stylesheet"/>
    <link href="../../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>

<? require(__DIR__ . '/../../header.php'); ?>

<section class="breadcrumb">
    <div class="container">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1"/>
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="">
                    <span itemprop="name">Корзина</span>
                </a>
                <meta itemprop="position" content="1"/>
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <span itemprop="name">Оформление заказа</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="product-list-content__block container">
        <div class="row">
            <h1>Оформление заказа</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-9">
                        <p class="inner-block-name">Как вам будет удобнее оплатить заказ?</p>
                        <div class="select-block">
                            <div class="form-group col-6">
                                <input name="payment" type="radio" id="custom"/>
                                <div class="select-item">
                                    <label for="custom">Счет на имя организации</label>
                                    <p class="select-item__description">Выставить счет на ИП или организации</p>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <input name="payment" type="radio" id="custom-2"/>
                                <div class="select-item">
                                    <label for="custom-2">Банковской картой</label>
                                    <p class="select-item__description">Картами Visa, MasterCard, МИР при получении товара</p>
                                </div>
                            </div>
                        </div>
                        <p class="inner-block-name">Где и как вы хотите получить заказ?</p>
                        <div class="select-block">
                            <div class="form-group col-6">
                                <input name="delivery" type="radio" id="custom"/>
                                <div class="select-item">
                                    <label for="custom">Доставка по Ярославской и Ивановской области</label>
                                    <p class="select-item__description"></p>
                                    <p class="select-item__subdescription">Возможна доставка по маршруту,
                                        доставка на дом и самовывоз </p>
                                </div>
                            </div>
                            <div class="form-group col-6  mb-7">
                                <input name="delivery" type="radio" id="custom-2"/>
                                <div class="select-item">
                                    <label for="custom-2">Доставка в другой регион РФ</label>
                                    <p class="select-item__description">Вес влияет на цену доставки</p>
                                    <p class="select-item__subdescription">Возможна доставка до специализированного магазина или на дом</p>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">
                            Указывая данные, Вы автоматически регистрируетесь на портале для оформления счета и отслеживания статуса по заказу. На указанный e-mail придет письмо с
                            доступами, скорректировать которые Вы можете в любой момент в личном кабинете
                        </p>
                        <form class="col-md-12">
                            <div class="form-row">
                                <div class="form__field-w100">
                                    <label for="inputName">Ваше имя:</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Как к вам обращаться?">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form__field">
                                        <label for="inputEmail4">Город, населенный пункт</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Укажите город или населенный пункт">
                                    </div>
                                    <div class="form__field">
                                        <label for="inputEmail4">Дом / корпус</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Укажите номер дома">
                                    </div>
                                    <div class="form__field">
                                        <label for="inputEmail4">Электронная почта:</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Укажите Вашу почту">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form__field">
                                        <label for="inputPassword4">Улица</label>
                                        <input type="text" class="form-control is-invalid" id="inputPassword4" placeholder="Укажите улицу">
                                        <div class="invalid-feedback">
                                            Пожалуйста заполните данное поле.
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <label for="inputPassword4">Квартира</label>
                                        <input type="text" class="form-control is-invalid" id="inputPassword4" placeholder="Укажите номер квартиры">
                                        <div class="invalid-feedback">
                                            Пожалуйста заполните данное поле.
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <label for="inputPassword4">Контактный телефон</label>
                                        <input type="text" class="form-control is-invalid" id="inputPassword4" placeholder="Укажите Ваш телефон">
                                        <div class="invalid-feedback">
                                            Пожалуйста заполните данное поле.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a href="" class="delivery_calc_btn">Расчитать стоимость доставки</a>
                        <p class="inner-block-name">Заказ № 1 386</p>
                        <ul class="toc">
                            <li>
                                <span class="title">Товары </span>
                                <span class="chapter">7200 ₽</span>
                            </li>
                            <li>
                                <span class="title">Достака </span>
                                <span class="chapter">1100 ₽</span>
                            </li>
                            <li>
                                <span class="title">К оплате </span>
                                <span class="chapter">8300 ₽</span>
                            </li>
                        </ul>
                        <div class="form-row submit">
                            <button type="submit" class="btn btn-success">Заказать</button>
                        </div>
                    </div>
                    <div class="product-info__col col-3">
                        <div class="product-info__block">
                            <div class="title">Итого</div>
                            <p class="dim__text">В заказе 4 товара на сумму <span></span></p>
                            <ul class="basket-list dim__text">
                                <li>
                                    <p class="product-name">Комбикорм «Сытный ПРО Теленок Старт КК-62»</p>
                                    <p class="quantity">20 шт. х 50 a</p>
                                </li>
                                <li>
                                    <p class="product-name">Комбикорм для КРС «Сытный PRO» Удой КК-60</p>
                                    <p class="quantity">20 шт. х 50 a </p>
                                </li>
                                <li>
                                    <p class="product-name">Комбикорм для КРС «Баланс» КК-60</p>
                                    <p class="quantity">20 шт. х 50 a</p>
                                </li>
                                <li>
                                    <p class="product-name">Комбикорм для КРС «Эконом» КК-60</p>
                                    <p class="quantity">20 шт. х 50 a</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? require(__DIR__ . '/../../footer.php'); ?>

</body>
</html>