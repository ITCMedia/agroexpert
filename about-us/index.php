<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>О нас</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../css/bootstrap-card.css" rel="stylesheet">
    <link href="../css/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../js/slick/slick-theme.css" rel="stylesheet">
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
                <span itemprop="name">О нас</span>
            </li>
        </ul>
    </div>
</section>

<section class="tab-section__block">
    <div class="container">
        <div class="row no-gutters">
            <h1 class="page-h1">О компании</h1>
        </div>
        <div class="row no-gutters">
            <ul class="nav inner-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Компания</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О продукции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Производство</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Документация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Отзывы <span class="nav-link__count">35</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="about-us-main__block">
    <div class="container about-info__block">
        <div class="row no-gutters mb-9">
            <div class="col-4">
                <div class="preview-text__block">
                    ООО «Агро-Эксперт» – это
                    производитель комбикормов
                    для крупного рогатого скота,
                    свиней, коз, кроликов
                    и сельскохозяйственной птицы:
                    кур, уток, индюков, перепелов
                </div>
                <div class="btt__block">
                    <button class="no-collor_btn">О производстве</button>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-7">
                <div class="text__block">
                    <p>
                        Новое комбикормовое производство запущено в 2009 году, уровень автоматизации и техническое
                        оснащение которого позволяет выпускать <b>продукцию высокого качества</b>. Процесс контроля качества
                        выпускаемой продукции регламентирован и осуществляется производственно-технической лабораторией,
                        аккредитованной по группам химического и технического анализа. Производство работает
                        круглосуточно. <b>Бизнес-процессы</b> заказов в <b>производство планируются и реализуются
                            современными
                            СRM-системами.</b>
                    </p>
                    <p>В 2017 году зарегистрированы <b>ТМ «Сытный»</b> и ТМ <b>«Сытный ПРО»</b>.
                        С 2019 года разработаны и выведены на рынок корма <b>ТМ «КОРМЛИНА».</b>
                        В производстве используется только качественное сырье. Часть зерна
                        выращивается по техническому заданию нашей производственной лаборатории сельскохозяйственными производителями, практикующими безопасное земледелие по
                        системе <b>«Био»</b>. В комбикормах «КОРМЛИНА» <b>нет антибиотиков и другой химии</b>, оказывающей негативное влияние на организм животного и здоровье человека,
                        потребляющего продукты животноводства. Среди наших клиентов животноводческие, птицеводческие комплексы и фермы, небольшие частные хозяйства, предприниматели
                        и личные подсобные хозяйства.
                    </p>
                </div>
            </div>
        </div>
        <div class="row no-gutters mb-5">
            <div class="col-8">
                <h2>Бренд «Кормлина» – это:</h2>
            </div>
            <div class="right-count__text col-4">
                <p>Более <span>120</span> точек продаж</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="card-deck infographic__block">
                <div class="card w-30 infographic-item down-shadow__block" style="width: 18rem;">
                    <i class="manufacture-icon"></i>
                    <div class="card-body">
                    <p class="title">
                        Современное автоматизированное <font>производство</font>
                    </p>
                    </div>
                </div>
                <div class="card w-30 infographic-item down-shadow__block" style="width: 18rem;">
                    <i class="quality-icon"></i>
                    <p class="title">
                        Продукция<br>высокого<br><font>качества</font>
                    </p>
                </div>
                <div class="card w-30 infographic-item down-shadow__block">
                    <i class="crm-icon"></i>
                    <p class="title">
                        Управление<br>заказами клиента в<br><font>CRM</font>
                    </p>
                </div>
                <div class="card w-30 infographic-item down-shadow__block">
                    <i class="manager-icon"></i>
                    <p class="title">
                        Персональный<br><font>менеджер</font>
                    </p>
                </div>
                <div class="card w-30 infographic-item down-shadow__block">
                    <i class="price-icon"></i>
                    <p class="title">
                        Лучшая <font>цена</font> на продукцию соответствующего качества
                    </p>
                </div>
                <div class="card w-30 infographic-item down-shadow__block">
                    <i class="fast-truck-icon"></i>
                    <p class="title">
                        Высокий <font>спрос</font><br>на всей территории<br>России
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mb-3">
            <p>Получайте выгоды и скидки от сотрудничества с торговой маркой «Kormlina»</p>
        </div>
        <div class="row justify-content-md-center ">
            <button type="button" class="btn btn-success custom-success">Стать партнером</button>
        </div>
    </div>
</section>

<section class="main-directions__block">
    <div class="container about-info__block mt-10">
        <div class="row no-gutters">
            <div class="col-4">
                <div class="preview-text__block mt-2">
                    <h2>Производство и продажа комбикормов</h2>
                    <p class="mt-2">Сбалансированный рацион и 100% натуральное сырье</p>
                </div>
                <div class="btt__block mt-2">
                    <button class="no-collor_btn">Подобрать корм</button>
                </div>
            </div>
            <div class="col-8 pt-3">
                <div class="row no-gutters">
                    <div class="result-list">
                        <div class="result-item row no-gutters">
                            <div class="col-12">
                                <div class="about-info-result__title">
                                    Более 40 видов кормов
                                </div>
                                <div class="about-info-result__title-desc">для всех видов сельскохозяйственных животных и птицы:</div>

                                <div class="about-info-result__description">
                                    <ul>
                                        <li><span>Коров</span></li>
                                        <li><span>Телят</span></li>
                                        <li><span>Коз</span></li>
                                        <li><span>Кур-несушек</span></li>
                                        <!---->
                                        <li><span>Бройлеров</span></li>
                                        <li><span>Цыплят</span></li>
                                        <li><span>Индюков</span></li>
                                        <li><span>Перепелов</span></li>
                                        <!---->
                                        <li><span>Свиней</span></li>
                                        <li><span>Поросят</span></li>
                                        <li><span>Кроликов</span></li>
                                    </ul>
                                    <p class="info__footer-block mt-2">
                                        <span><i class="fas fa-info"></i></span>Возможна продажа продукции для других с/х животных, таких как овцы, утки, гуси
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="result-list">
                        <div class="result-item row">
                            <div class="col-12">
                                <div class="about-info-result__title mb-3">Существует несколько линеек кормов отличных друг от друга по качественному составу , который в свою очередь определяется набором входящего в корм сырья, что в конечном итоге определяет и цену продукта.
                                    для всех видов сельскохозяйственных животных и птицы</div>
                                <div class="about-info-result__description">
                                    <ul class="inline-about-info__list">
                                        <li>эконом</li>
                                        <li>баланс</li>
                                        <li>сытный™</li>
                                        <li>сытный pro™</li>
                                    </ul>
                                    <p class="info__footer-block mt-3">
                                        <span><i class="fas fa-info"></i></span>Особенностью кормов является 100% натуральность, без вредных химический добавок
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-foto_block">
    <div class="container">
        <div class="row no-gutters">
            <div class = "col-xl-12">
                <div class="tabs mt-10">
                    <h2>Современное производство</h2>
                    <ul class="nav inner-nav photo-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Цеха</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Лаборатория</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class = "owl-carousel" id = "slider-gen">
                    <div class = "item">
                        <div class="row no-gutters">
                            <div class="col-xl-8 col-lg-8 col-md-8 img-col">
                                <img src="/images/about-us-photo-1.png">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 no-gutters">
                                <div class="col-lg-12 img-col"><img src="/images/about-us-photo-2.png"></div>
                                <div class="col-lg-12 img-col"><img src="/images/about-us-photo-3.png"></div>
                            </div>
                        </div>
                        <div class="row bottom no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-4.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-1.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-2.png"></div>
                        </div>
                    </div>
                    <div class = "item">
                        <div class="row bottom no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-4.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-1.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4"><img src="/images/about-us-photo-2.png"></div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-xl-8 col-lg-8 col-md-8 img-col">
                                <img width="330" src="/images/about-us-photo-1.png">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 no-gutters">
                                <div class="col-xl-12 img-col"><img src="/images/about-us-photo-2.png"></div>
                                <div class="col-xl-12 img-col"><img src="/images/about-us-photo-3.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class = "item">
                        <div class="row no-gutters">
                            <div class="col-xl-8 col-lg-8 col-md-8 img-col">
                                <img src="/images/about-us-photo-1.png">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 no-gutters">
                                <div class="col-lg-12 img-col"><img src="/images/about-us-photo-2.png"></div>
                                <div class="col-lg-12 img-col"><img src="/images/about-us-photo-3.png"></div>
                            </div>
                        </div>
                        <div class="row bottom no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-4.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-1.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-2.png"></div>
                        </div>
                    </div>
                    <div class = "item">
                        <div class="row bottom no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-4.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-1.png"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col"><img src="/images/about-us-photo-2.png"></div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-xl-8 col-lg-8 col-md-8 img-col">
                                <img width="330" src="/images/about-us-photo-1.png">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 img-col no-gutters">
                                <div class="col-xl-12"><img src="/images/about-us-photo-2.png"></div>
                                <div class="col-xl-12"><img src="/images/about-us-photo-3.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class = "slider-gen__prev"></button>
                <button class = "slider-gen__next"></button>
            </div>
        </div>
        <div class="row counters__block no-gutters mt-10">
            <div class="col-4 about-info__block">
                <div class="preview-text__block mt-2">
                    <h2>Производство<br>в цифрах</h2>
                    <p class="mt-2">Показатели «Агро-Эксперт» за последний год</p>
                </div>
                <div class="btt__block mt-2">
                    <button class="no-collor_btn">Сотрудничать</button>
                </div>
            </div>
            <div class="col-4">
                <div class="row no-gutters">
                    <div class="result-list">
                        <div class="result-item row no-gutters">
                            <div class="col-12">
                                <div class="about-info-result__title"><span>400</span> тонн/сутки</div>
                                <div class="about-info-result__description">
                                    <p>
                                        Мощность производства комбикорма
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="result-list">
                        <div class="result-item row no-gutters">
                            <div class="col-12">
                                <div class="about-info-result__title"><span>130</span> человек</div>
                                <div class="about-info-result__description">
                                    Штат сотрудников предприятия
                                    <p class="info__footer-block">
                                        <a class="more-btn">Вакансии <i class="fas fa-chevron-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row no-gutters">
                    <div class="result-list">
                        <div class="result-item row no-gutters">
                            <div class="col-12">
                                <div class="about-info-result__title"><span>900+</span> клиентов</div>
                                <div class="about-info-result__description">
                                    <p>
                                        Постоянно растущая клиентская база
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="result-list">
                        <div class="result-item row no-gutters">
                            <div class="col-12">
                                <div class="about-info-result__title"><span>200+</span> постащиков</div>
                                <div class="about-info-result__description">
                                    Помогают производить качественные корма
                                    <p class="info__footer-block">
                                        <a class="more-btn">Поставщикам <i class="fas fa-chevron-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="diller-map__block">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-4">
                <p class="pre-tilte mt-10">Точки продаж</p>
                <h2 class="title">Дилерская сеть</h2>
                <div class="description mt-2">Реализация комбикормов более, чем в 20 регионах России</div>
                <button type="button" class="btn btn-success custom-success mt-4">125 точек продаж</button>
                <p class="partner-program mt-10">
                    Партнерская <a href="#">программа</a>
                </p>
            </div>
            <div class="col-8">
                <div id="russian-map"></div>
            </div>
        </div>
    </div>
</section>

<? require(__DIR__ . '/../footer.php'); ?>

<script type="text/javascript" src="../js/slick/slick.min.js"></script>
<script type="text/javascript" src="raphael-min.js"></script>
<script type="text/javascript" src="russian-map.js"></script>

<script>
    // запрос на получение json регионов
    window.onload = function() {
        fetch('./with-regions.json').then(function(response) {
            response.json().then(function(data) {
                new RussianMap({
                    viewPort: data.viewPort,
                    mapId: 'russian-map',
                    width: 862,
                    height: 497,
                    // дефолтовые атрибуты для контуров регионов
                    defaultAttr: {
                        fill: '#d8d8d8', // цвет которым закрашивать
                        stroke: '#ffffff', // цвет границы
                        'stroke-width': 1, // ширина границы
                        'stroke-linejoin': 'round' // скруглять углы
                    },
                    mouseMoveAttr: {
                        fill: '#25669e'
                    },
                    onMouseMove: function(event) {
                        console.log('mouse on ' + this.region.name + ' (ident: ' + this.region.ident + ')');
                    },
                    onMouseOut: function(event) {
                        console.log('out on ' + this.region.name + ' (ident: ' + this.region.ident + ')');
                    },
                    onMouseClick: function(event) {
                        console.log('clicked on ' + this.region.name);
                    }
                }, data.regions);
            });
        });
    };
    $(document).ready(function() {
        $(".slider").slick({
            slidesToShow: 2,
            dots: true,
            slide: 'div',
            respondTo: 'slider',
            rows: 2,
            infinite: false
        });
    });
</script>

</body>
</html>