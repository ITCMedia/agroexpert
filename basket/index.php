<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>

<? require(__DIR__ . '/../header.php'); ?>

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
                <span itemprop="name">Корзина</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="product-list-content__block container">
        <div class="row">
            <h1>Корзина</h1>
        </div>
        <div class="row mt-h-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-9">
                        <div class="product-list">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <div class="img__block">
                                        <img src="images/product-1.jpg">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="product-title uppercase">
                                        Комбикорм для КРС «Баланс» КК-60
                                        <div class="del__block">
                                            <a href="">Удалить</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>Сбалансированный комбикорм-концентрат для дойных коров
                                            в виде гранулы 4,8 мм. Ожидаемый удой достигается при
                                            соблюдении условий содержания и расходе корма 2,0 - 2,5 кг
                                            на голову в сутки и 200-400 г на надоенный литр.</p>
                                        <table class="collapse" id="collapseSummary-1">
                                            <caption>Питательная ценность:</caption>
                                            <tbody>
                                            <tr>
                                                <td>Обменная энергия:</td>
                                                <td>10,7</td>
                                                <td>Мдж/кг</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырого протеина:</td>
                                                <td>18,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырой клетчатки:</td>
                                                <td>8,7</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля кальция:</td>
                                                <td>0,50</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля фосфора:</td>
                                                <td>0,48</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля поваренной соли(NaCl):</td>
                                                <td>1,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля лизина:</td>
                                                <td>0,53</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля метионина + цистина:</td>
                                                <td>0,63</td>
                                                <td>%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a class="btn-readmore collapsed" data-toggle="collapse" href="#collapseSummary-1" aria-expanded="false" aria-controls="collapseSummary-1">
                                            Развернуть
                                        </a>
                                    </div>
                                    <div class="quantity__block row no-gutters">
                                        <div class="col-3">
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            Стоимость
                                            <div class="price">50 <i class="fa fa-ruble-sign" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="product-info-inline__block col-6">
                                            <ul>
                                                <li>Вес фасовки <span>30 кг</span></li>
                                                <li>Срок годности <span>6 мес.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <div class="img__block">
                                        <img src="images/product-2.jpg">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="product-title uppercase">
                                        Комбикорм для КРС «Баланс» КК-60
                                        <div class="del__block">
                                            <a href="">Удалить</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>Сбалансированный комбикорм-концентрат для дойных коров
                                            в виде гранулы 4,8 мм. Ожидаемый удой достигается при
                                            соблюдении условий содержания и расходе корма 2,0 - 2,5 кг
                                            на голову в сутки и 200-400 г на надоенный литр.</p>
                                        <table class="collapse" id="collapseSummary-2">
                                            <caption>Питательная ценность:</caption>
                                            <tbody>
                                            <tr>
                                                <td>Обменная энергия:</td>
                                                <td>10,7</td>
                                                <td>Мдж/кг</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырого протеина:</td>
                                                <td>18,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырой клетчатки:</td>
                                                <td>8,7</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля кальция:</td>
                                                <td>0,50</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля фосфора:</td>
                                                <td>0,48</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля поваренной соли(NaCl):</td>
                                                <td>1,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля лизина:</td>
                                                <td>0,53</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля метионина + цистина:</td>
                                                <td>0,63</td>
                                                <td>%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a class="btn-readmore collapsed" data-toggle="collapse" href="#collapseSummary-2" aria-expanded="false" aria-controls="collapseSummary-2">
                                            Развернуть
                                        </a>
                                    </div>
                                    <div class="quantity__block row no-gutters">
                                        <div class="col-3">
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            Стоимость
                                            <div class="price">50 <i class="fa fa-ruble-sign" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="product-info-inline__block col-6">
                                            <ul>
                                                <li>Вес фасовки <span>30 кг</span></li>
                                                <li>Срок годности <span>6 мес.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <div class="img__block">
                                        <img src="images/product-1.jpg">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="product-title uppercase">
                                        Комбикорм для КРС «Баланс» КК-60
                                        <div class="del__block">
                                            <a href="">Удалить</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>Сбалансированный комбикорм-концентрат для дойных коров
                                            в виде гранулы 4,8 мм. Ожидаемый удой достигается при
                                            соблюдении условий содержания и расходе корма 2,0 - 2,5 кг
                                            на голову в сутки и 200-400 г на надоенный литр.</p>
                                        <table class="collapse" id="collapseSummary-3">
                                            <caption>Питательная ценность:</caption>
                                            <tbody>
                                            <tr>
                                                <td>Обменная энергия:</td>
                                                <td>10,7</td>
                                                <td>Мдж/кг</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырого протеина:</td>
                                                <td>18,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырой клетчатки:</td>
                                                <td>8,7</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля кальция:</td>
                                                <td>0,50</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля фосфора:</td>
                                                <td>0,48</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля поваренной соли(NaCl):</td>
                                                <td>1,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля лизина:</td>
                                                <td>0,53</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля метионина + цистина:</td>
                                                <td>0,63</td>
                                                <td>%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a class="btn-readmore collapsed" data-toggle="collapse" href="#collapseSummary-3" aria-expanded="false" aria-controls="collapseSummary-3">
                                            Развернуть
                                        </a>
                                    </div>
                                    <div class="quantity__block row no-gutters">
                                        <div class="col-3">
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            Стоимость
                                            <div class="price">50 <i class="fa fa-ruble-sign" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="product-info-inline__block col-6">
                                            <ul>
                                                <li>Вес фасовки <span>30 кг</span></li>
                                                <li>Срок годности <span>6 мес.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <div class="img__block">
                                        <img src="images/product-1.jpg">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="product-title uppercase">
                                        Комбикорм для КРС «Баланс» КК-60
                                        <div class="del__block">
                                            <a href="">Удалить</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <p>Сбалансированный комбикорм-концентрат для дойных коров
                                            в виде гранулы 4,8 мм. Ожидаемый удой достигается при
                                            соблюдении условий содержания и расходе корма 2,0 - 2,5 кг
                                            на голову в сутки и 200-400 г на надоенный литр.</p>
                                        <table class="collapse" id="collapseSummary-4">
                                            <caption>Питательная ценность:</caption>
                                            <tbody>
                                            <tr>
                                                <td>Обменная энергия:</td>
                                                <td>10,7</td>
                                                <td>Мдж/кг</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырого протеина:</td>
                                                <td>18,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля сырой клетчатки:</td>
                                                <td>8,7</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля кальция:</td>
                                                <td>0,50</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля фосфора:</td>
                                                <td>0,48</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля поваренной соли(NaCl):</td>
                                                <td>1,0</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля лизина:</td>
                                                <td>0,53</td>
                                                <td>%</td>
                                            </tr>
                                            <tr>
                                                <td>Массовая доля метионина + цистина:</td>
                                                <td>0,63</td>
                                                <td>%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a class="btn-readmore collapsed" data-toggle="collapse" href="#collapseSummary-4" aria-expanded="false" aria-controls="collapseSummary-4">
                                            Развернуть
                                        </a>
                                    </div>
                                    <div class="quantity__block row no-gutters">
                                        <div class="col-3">
                                            <div class="number-input">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            Стоимость
                                            <div class="price">50 <i class="fa fa-ruble-sign" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="product-info-inline__block col-6">
                                            <ul>
                                                <li>Вес фасовки <span>30 кг</span></li>
                                                <li>Срок годности <span>6 мес.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info__col col-3">
                        <div class="product-info__block">
                            <div class="title">Итого</div>
                            <p class="in-basket-quantity">В корзине <span>2 товара</span></p>
                            <div class="price">7200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></div>
                            <p class="nds">Все цены указаны с учетом НДС</p>
                            <div class="row">
                                <a class="btn btn-success in-basket__butt">Оформить заказ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? require(__DIR__ . '/../footer.php'); ?>

</body>
</html>