<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новость</title>

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
                <span itemprop="name">Новости</span>
            </li>
        </ul>
    </div>
</section>

<section class="content news-detail">
    <div class="container">
        <div class="row no-gutters">
            <h1>В 2017 году зарегистрированы ТМ «Сытный» и ТМ «Сытный ПРО». С 2019 года разработаны и выведены на рынок корма ТМ «КОРМЛИНА».</h1>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="news-list">
                    <div class="news-list__item">
                        <div class="row">
                            <div class="col-xl-1 col-lg-1 col-md-2">
                                <p class = "news-list__item__data">
                                    <span>20</span>
                                    06.2018
                                </p>
                            </div>
                            <div class="col-xl-11 col-lg-11 col-md-10">
                                <img src="/images/new1.jpg" />
                                <div class="news-list__item__previewtext">
                                    <p>В производстве используется только качественное сырье. Часть зерна
                                        выращивается по техническому заданию нашей производственной лаборатории сельскохозяйственными производителями, практикующими безопасное земледелие по системе «Био».</p>
                                    <p>При разработке комбикормов учитываем:</p>
                                    <ul>
                                        <li>пол и возраст животных;</li>
                                        <li>требования к продуктивности;</li>
                                        <li>тип оборудования и кормораздатчиков;</li>
                                        <li>рацион кормления на предприятии и состав рациона;</li>
                                    </ul>
                                    <p><b>«Спецрецепт» разрабатываем БЕСПЛАТНО за 2 – 3 дня
                                            под ваши задачи и требования</b>. Согласовываем рецептуру с вашим зоотехником и запускаем в производство при заключении договора.Запустим комбикорм в производство за 3 – 5 дней.</p>
                                    <div id = "slider-new" class="owl-carousel">
                                        <div class="item">
                                            <img src="/images/slider.jpg"/>
                                        </div>
                                        <div class="item">
                                            <img src="/images/new2.jpg"/>
                                        </div>
                                    </div>
                                    <p>В производстве используется только качественное сырье. Часть зерна
                                        выращивается по техническому заданию нашей производственной лаборатории сельскохозяйственными производителями, практикующими безопасное земледелие по системе «Био».</p>
                                    <div class="news-list__item__tags">
                                        <a href="">#комбикорма</a>
                                        <a href="">#сытный про</a>
                                        <a href="">#жизнь компании</a>
                                    </div>
                                    <a href="" class = "news-list__item__break-page">Вернуться к списку новостей</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="other-news">
                    <p class = "other-news__head">Другие новости</p>
                    <div class="other-news__list">
                        <a href="" class="other-news__list__item">
                            <p>20.06.2018</p>
                            <div class="clear"></div>
                            <p>В 2017 году зарегистрированы ТМ «Сытный» и ТМ «Сытный ПРО».</p>
                        </a>
                        <a href="" class="other-news__list__item">
                            <p>20.06.2018</p>
                            <div class="clear"></div>
                            <p>В 2017 году зарегистрированы ТМ «Сытный» и ТМ «Сытный ПРО».</p>
                        </a>
                        <a href="" class="other-news__list__item">
                            <p>20.06.2018</p>
                            <div class="clear"></div>
                            <p>В 2017 году зарегистрированы ТМ «Сытный» и ТМ «Сытный ПРО».</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? require(__DIR__ . '/../../footer.php'); ?>

</body>
</html>

