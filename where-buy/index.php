<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Где купить</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
<? require(__DIR__ . '/../header.php'); ?>

<div class="top__wrap parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="../images/hbg.png" data-natural-width="1440"
     data-natural-height="1492">

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
                    <span itemprop="name">Где купить</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <h1>Где купить</h1>
                </div>
                <div class="col-md-4">
                    <div class="have-questions">Не нашли свой регион? <a href="#">Оставьте заявку</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="content region-tab">
        <div class="container">
            <div class="row no-gutters">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="list-title">
                        Области:
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="region-tab-1" data-toggle="tab" href="#region-1" role="tab" aria-controls="region-1" aria-selected="true">Архангельская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-2" data-toggle="tab" href="#region-2" role="tab" aria-controls="region-2" aria-selected="false">Владимирская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-3" data-toggle="tab" href="#region-3" role="tab" aria-controls="region-3" aria-selected="false">Вологодская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-4" data-toggle="tab" href="#region-4" role="tab" aria-controls="region-4" aria-selected="false">Ивановская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-5" data-toggle="tab" href="#region-5" role="tab" aria-controls="region-5" aria-selected="false">Калининградская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-6" data-toggle="tab" href="#region-6" role="tab" aria-controls="region-6" aria-selected="false">Калужская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-7" data-toggle="tab" href="#region-7" role="tab" aria-controls="region-7" aria-selected="false">Кировская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-8" data-toggle="tab" href="#region-8" role="tab" aria-controls="region-8" aria-selected="false">Костромская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-9" data-toggle="tab" href="#region-9" role="tab" aria-controls="region-9" aria-selected="false">Краснодарский край</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-10" data-toggle="tab" href="#region-10" role="tab" aria-controls="region-10" aria-selected="false">Ленинградская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-11" data-toggle="tab" href="#region-11" role="tab" aria-controls="region-11" aria-selected="false">Московская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-12" data-toggle="tab" href="#region-12" role="tab" aria-controls="region-12" aria-selected="false">Мурманская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-13" data-toggle="tab" href="#region-13" role="tab" aria-controls="region-13" aria-selected="false">Нижегородская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-14" data-toggle="tab" href="#region-14" role="tab" aria-controls="region-14" aria-selected="false">Псковская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-15" data-toggle="tab" href="#region-15" role="tab" aria-controls="region-15" aria-selected="false">Республика Карелия</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-16" data-toggle="tab" href="#region-16" role="tab" aria-controls="region-16" aria-selected="false">Республика Чувашия</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-17" data-toggle="tab" href="#region-17" role="tab" aria-controls="region-17" aria-selected="false">Рязанская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-18" data-toggle="tab" href="#region-18" role="tab" aria-controls="region-18" aria-selected="false">Смоленская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-19" data-toggle="tab" href="#region-19" role="tab" aria-controls="region-19" aria-selected="false">Тверская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-20" data-toggle="tab" href="#region-20" role="tab" aria-controls="region-20" aria-selected="false">Тульская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="region-tab-21" data-toggle="tab" href="#region-21" role="tab" aria-controls="region-21" aria-selected="false">Ярославская</a>
                    </li>
                </ul>
            </div>
            <div class="row no-gutters">
                <div class="tab-content col-12" id="myTabContent">
                    <div class="tab-pane fade show active" id="region-1" role="tabpanel" aria-labelledby="region-tab-1">
                        <div class="phone-tabs">
                            <ul class="row">
                                <li class="col-3">
                                    <input type="checkbox" id="hd-1" class="hide"/>
                                    <label for="hd-1">
                                        Магазин «Новый Фермер» <span class="phone">+7 (4935) 14-73-71</span>
                                    </label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                                <li class="col-3">
                                    <input type="checkbox" id="hd-2" class="hide"/>
                                    <label for="hd-2">Магазин «Артель» <span class="phone">+7 (4935) 14-73-71</span></label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                                <li class="col-3">
                                    <input type="checkbox" id="hd-3" class="hide"/>
                                    <label for="hd-3">Магазин «Агродом» <span>+7 (4935) 14-73-71</span></label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                                <li class="col-3">
                                    <input type="checkbox" id="hd-4" class="hide"/>
                                    <label for="hd-4">Магазин «Фермер» <span>+7 (4935) 14-73-71</span></label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                                <li class="col-3">
                                    <input type="checkbox" id="hd-5" class="hide"/>
                                    <label for="hd-5">Магазин «Русагро» <span>+7 (4935) 14-73-71</span></label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                                <li class="col-3">
                                    <input type="checkbox" id="hd-6" class="hide"/>
                                    <label for="hd-6">Магазин «Радуга» <span>+7 (4935) 14-73-71</span></label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                                <li class="col-3">
                                    <input type="checkbox" id="hd-7" class="hide"/>
                                    <label for="hd-7">Магазин «Агромастер» <span>+7 (4935) 14-73-71</span></label>
                                    <div>Ногинский район, Обухово рп. Кудинское шоссе, д. 6</div>
                                </li>
                            </ul>
                        </div>
                        <div class="down-shadow__block ">
                            <script type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A322193335fd40689590be5db77a1aa41561564911fb615766fada8e7dec8ce88&amp;width=100%25&amp;height=580&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="region-2" role="tabpanel" aria-labelledby="region-tab-2">...</div>
                    <div class="tab-pane fade" id="region-3" role="tabpanel" aria-labelledby="region-tab-3">...</div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment-method content">
        <div class="container">
            <div class="row no-gutters down-shadow__block">
                <div class="col-12 payment-method__block">
                    <p class="payment__icon mb-2"><i class="payment-icon"></i></p>
                    <p class="payment__title mb-3">Удобные способы оплаты</p>
                    <p class="payment__description">Наличные, банковские карты, переводы. <a href="#">Все способы</a></p>
                </div>
            </div>
            <div class="row receipt-bottom__block justify-content-md-center mt-4">
                <p>Разработаем индивидуальный <a href="#">рецепт</a> комбикорма под ваши нужды</p>
            </div>
        </div>
    </section>
</div>

<? require(__DIR__ . '/../footer.php'); ?>

</body>
</html>