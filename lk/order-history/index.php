<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>История заказов</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../../css/style.css" rel="stylesheet"/>
    <link href="../../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
<? require (__DIR__  . '/../../header.php'); ?>

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
                    <span itemprop="name">Личный кабинет</span>
                </a>
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <span itemprop="name">История заказов</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="container">
        <h1>История заказов</h1>
        <div class="row">
            <div class="col-md-12  table-responsive">
                <table class="table order-table">
                    <thead>
                    <tr>
                        <th scope="col">№ заказа</th>
                        <th></th>
                        <th scope="col">Дата</th>
                        <th></th>
                        <th></th>
                        <th scope="col">Стоимость</th>
                        <th></th>
                        <th></th>
                        <th scope="col">Статус</th>
                        <th></th>
                        <th scope="col"></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" scope="row">1 375</td>
                        <td colspan="3">28 мая 2019</td>
                        <td colspan="3">7 200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                        <td colspan="2">Отправлен</td>
                        <td colspan="2"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr class="clickable collapsed" data-toggle="collapse" id="row-1" data-target=".row-1">
                        <td colspan="2" scope="row">1 374</td>
                        <td colspan="3">28 мая 2019</td>
                        <td colspan="3">7 200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                        <td colspan="2">Доставлен</td>
                        <td colspan="2"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <!-- subtable -->
                    <tr class="collapse row-1 subtable-row">
                        <td colspan="3"><a href="#">КРС Эконом (КК-65)</a></td>
                        <td>50 кг</td>
                        <td>20 шт.</td>
                        <td colspan="7">800 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                    </tr>
                    <tr class="collapse row-1 subtable-row">
                        <td colspan="3"><a href="#">Сытный™ PRO Телёнок рост</a></td>
                        <td>50 кг</td>
                        <td>20 шт.</td>
                        <td colspan="7">800 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                    </tr>
                    <tr class="collapse row-1 subtable-row">
                        <td colspan="3"><a href="#">КРС Эконом (КК-65)</a></td>
                        <td>50 кг</td>
                        <td>20 шт.</td>
                        <td colspan="7">800 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                    </tr>
                    <tr class="collapse row-1 subtable-row">
                        <td colspan="3"><a href="#">КРС Эконом (КК-65)</a></td>
                        <td>50 кг</td>
                        <td>20 шт.</td>
                        <td colspan="7">800 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                    </tr>
                    <!-- /subtable -->
                    <tr>
                        <td colspan="2" scope="row">1 373</td>
                        <td colspan="3">28 мая 2019</td>
                        <td colspan="3">7 200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                        <td colspan="2">Доставлен</td>
                        <td colspan="2"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2" scope="row">1 372</td>
                        <td colspan="3">28 мая 2019</td>
                        <td colspan="3">7 200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                        <td colspan="2">Доставлен</td>
                        <td colspan="2"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2" scope="row">1 371</td>
                        <td colspan="3">28 мая 2019</td>
                        <td colspan="3">7 200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                        <td colspan="2">Доставлен</td>
                        <td colspan="2"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2" scope="row">1 370</td>
                        <td colspan="3">28 мая 2019</td>
                        <td colspan="3">7 200 <i class="fa fa-ruble-sign" aria-hidden="true"></i></td>
                        <td colspan="2">Доставлен</td>
                        <td colspan="2"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<? require (__DIR__  . '/../../footer.php'); ?>

</body>
</html>