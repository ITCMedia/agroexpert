<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корпоративным покупателям</title>

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
                <span itemprop="name">Корпоративным покупателям</span>
            </li>
        </ul>
    </div>
</section>

<section class="content cor-buyers">
    <div class="container">
        <div class="row no-gutters">
            <h1>Корпоративным покупателям</h1>
        </div>
        <div class = "row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="cor-buyers__sidebar">
                    <p>Увеличиваем продуктивность стада <span>до 30%</span> на основании данных о физиологическом состоянии животных. Разработаем рацион и запустим партию комбикорма в производство под заказ за <span>5 дней</span></p>
                    <a class="recipe-btn" target = "_blank" href = "https://sekhanov.github.io/agro-angular-quality-calc/">Расчитать рецепт</a>
                    <p class = "cor-buyers__sidebar__remark">Минимальный объем партии от 5 тонн. БЕСПЛАТНАЯ разработка рецептов. ОНЛАЙН-ФОРМА расчета состава комбикорма.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="cor-buyers__content">
                    <p>Разрабатываем рецептуру комбикорма под заказ для птицефабрик (куры, утки, индюки), животноводческих ферм (колхозы, совхозы, свинокомплексы),  сельскохозяйственных производственных кооперативов. Минимальный объем партии от 5 тонн.</p>
                    <p>При разработке комбикормов учитываем:</p>
                    <ul>
                        <li>требования к продуктивности животны;</li>
                        <li>пол и возраст животных;</li>
                        <li>физиологическое состояние животных(птицы);</li>
                        <li>текущий рацион кормления на предприятии;</li>
                        <li>тип оборудования и кормораздатчиков.</li>
                    </ul>
                    <p><b>«Спецрецепт» разрабатываем БЕСПЛАТНО за 2 – 3 дня под ваши задачи и требования</b>. Согласовываем рецептуру с вашим зоотехником и запускаем в производство при заключении договора.Запустим комбикорм в производство за 3 – 5 дней.</p>
                    <p>Наш завод НЕ использует небелковый азот и другие опасные химические соединения при производстве комбикорма. Мы делаем все, чтобы экологически чистый комбикорм только из натурального сырья помог Вам достигнуть планируемый результат без вложения опасной химии. Для этого у нас есть все необходимое сырье, знания, исследовательский опыт, программные продукты разработки и контроля качества комбикорма, сырье качества ГОСТ.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="discount order-discount">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="discount__form">
                    <div class="order__form__flag"></div>
                    <p class="order__form__head">Отправьте заявку. Ответим в течение 1 часа</p>
                    <p class="discount__form__subhead">или в ближайший рабочий день до обеда</p>
                    <form action="" method="POST">
                        <input type="text" class="phone" placeholder="+7"/>
                        <button id="sendDiscount">Отправить заявку</button>
                        <div class="clear"></div>
                        <p class="discount__form__checkbox" stat="check">Cогласен на обработку <a href="">персональных
                                данных</a> и с условиями <a href="">оферты</a></p>
                        <p class="form-error"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a class="to-bottom to-bottom__discount" href="#footer"></a>
</section>

<section class="offers">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="offers__left">
                    <h2>Предложение для корпоративных клиентов</h2>
                    <p>Руководство завода обеспечит комфортную работу над решением вашей задачи. Мы заинтересованы в долгосрочном сотрудничестве и готовы дать выгодное для вас предложение. </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="offers__right"><a href = "" target = "_blank">Предложение о заключении договора<span>PDF, 256Kb</span></a></div>
            </div>
        </div>
        <div class = "row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="offers__item infographic-item">
                    <img src="/images/ico1.png"/>
                    <p>Конкурентная цена<br/>в вашем регионе</p>
                    <p>Конкурентная  цена в больнинстве регионов России и ближнего зарубежья стала возможной благодаря целому комплексу проведенных на предприятии мероприятий. При этом качество нашей продукции гарантировано и будет соответствовать заявленному. Работаем с удаленными клиентами, предоставляя условия, способные конкурировать по цене с местными производителями комбикормов.  </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="offers__item infographic-item">
                    <img src="/images/ico2.png"/>
                    <p>Всегда в наличии<br/>сырье качества ГОСТ</p>
                    <p>Предприятие обладает необходимыми складскими емкостями бестарного хранения годового запаса зерновых и прочего сырья (элеватор) с внедренными системами автоматического контроля качества хранящегося сырья.  </p>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="offers__item infographic-item">
                    <img src="/images/ico3.png"/>
                    <p>Работа с персональным<br/>менеджером</p>
                    <p>Закрепим за вами персонального  менеджера, который будет оперативно решать все вопросы. А CRM-система контроля качества обслуживания покупателей поможет руководству предприятия быть уверенным в вопросе удовлетворенности клиента.  </p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="offers__item infographic-item">
                    <img src="/images/ico4.png"/>
                    <p>Точный состав комбикормов с необходимым набором<br/>качественных показателей</p>
                    <p>Комбикорма разрабатываем по вашему техническому заданию, а если у вас  недостаточно специалистов и текущих сведений о состоянии стада, то наш зоотехник поможет составить ТЗ на основе статистических данных. Берем на себя полную ответственность за эффективность комбикорма и закрепляем её договором.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="offers__item offers__item1 infographic-item">
                    <img src="/images/ico5.png"/>
                    <p>Онлайн система<br/>оповещения клиента о<br/>статусе заказа</p>
                    <p> Внедренная на предприяти система оповещения клиента о статусе Вашего заказа будет дополнять Вас спокойствием о достигнутых договоренностях. </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="offers__item offers__item1 infographic-item">
                    <img src="/images/ico6.png"/>
                    <p>Онлайн-расчет рецепта<br/>комбикорма</p>
                    <p> На сайте компании «Агро-Эксперт» открыта система расчета рецептов онлайн. Она бесплатная и позволяет как предварительно рассчитать рецепт, так и проверить рецепт производителя, подставив ключевые значения и состав. </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="offers__item offers__item1 infographic-item">
                    <img src="/images/ico7.png"/>
                    <p>Оперативный запуск<br/>в производство</p>
                    <p>Если Вас подводит Ваш основной партнер по срокам поставки комбикорма -  обращайтесь к нам. Разработанная на предприятии система планирования, состав и размещение технологических линий, а так же постоянное наличие большинства видов сырья, обеспечит ваше предприятие комбикормами в интересующие Вас сроки.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="discount order-discount1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="discount__form discount__form2">
                    <div class="order__form__flag"></div>
                    <p class="order__form__head">Подготовим для Вас предложение в течение 1 рабочего дня</p>
                    <p class="discount__form__subhead">Оставьте заявку удобным для себя способом и менеджер свяжется с вами для уточнения деталей в течение 1 часа или в ближайший рабочий день до обеда </p>
                    <form action="" method="POST">
                        <input type="text" class="phone" placeholder="+7"/>
                        <button id="sendDiscount2">Отправить заявку</button>
                        <div class="clear"></div>
                        <p class="discount__form__checkbox" stat="check">Cогласен на обработку <a href="">персональных
                                данных</a> и с условиями <a href="">оферты</a></p>
                        <p class="form-error"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recommendations">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="recommendation__head">
                    <h2>Рекомендации корпоративных клиентов</h2>
                    <p>С нами работают СПК, птицефабрики и частные фермеры. </p>
                </div>
            </div>
        </div>
        <div class="row mb-6">
            <div class="col-xl-12">
                <div id="slider-r" class="owl-carousel">
                    <div class="item">
                        <div class="item-wrap">
                            <div class="birds"></div>
                            <div class="row slide-r__head">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__data">30 сентября, 2019</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__name">Рекомендация:<span>«Птицефабрика»</span></p>
                                </div>
                            </div>
                            <div class="row slide-r__content">
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <p>Пять лет заказываем экологически чистые комбикорма для бройлеров у ООО  “Агро-Эксперт”. В результате внедрения “спецрецептов” в каждый период жизни бройлера, он достигает убойного веса за 46 дней. Это на 15% быстрее, чем на комбикормах прошлых производителей. Мы очень довольны. При этом качество мяса остается на высоком уровне, что называется со вкусом “домашней курочки”. Рекомендуем компанию “Агро-Эксперт” к сотрудничеству как </p>
                                    <a class = "read__all" href = "">Читать полностью</a>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <img src="/images/small-doc.jpg"/>
                                    <a href="" target="_blank">Оригинал</a>
                                </div>
                            </div>
                            <div class="row slide-r__bottom">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <a href = "">Читать полностью</a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a href = ""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrap">
                            <div class="birds"></div>
                            <div class="row slide-r__head">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__data">30 сентября, 2019</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__name">Рекомендация:<span>«Птицефабрика»</span></p>
                                </div>
                            </div>
                            <div class="row slide-r__content">
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <p>Пять лет заказываем экологически чистые комбикорма для бройлеров у ООО  “Агро-Эксперт”. В результате внедрения “спецрецептов” в каждый период жизни бройлера, он достигает убойного веса за 46 дней. Это на 15% быстрее, чем на комбикормах прошлых производителей. Мы очень довольны. При этом качество мяса остается на высоком уровне, что называется со вкусом “домашней курочки”. Рекомендуем компанию “Агро-Эксперт” к сотрудничеству как </p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <img src="/images/small-doc.jpg"/>
                                    <a href="" target="_blank">Оригинал</a>
                                </div>
                            </div>
                            <div class="row slide-r__bottom">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <a href = "">Читать полностью</a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a href = ""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrap">
                            <div class="birds"></div>
                            <div class="row slide-r__head">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__data">30 сентября, 2019</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__name">Рекомендация:<span>«Птицефабрика»</span></p>
                                </div>
                            </div>
                            <div class="row slide-r__content">
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <p>Пять лет заказываем экологически чистые комбикорма для бройлеров у ООО  “Агро-Эксперт”. В результате внедрения “спецрецептов” в каждый период жизни бройлера, он достигает убойного веса за 46 дней. Это на 15% быстрее, чем на комбикормах прошлых производителей. Мы очень довольны. При этом качество мяса остается на высоком уровне, что называется со вкусом “домашней курочки”. Рекомендуем компанию “Агро-Эксперт” к сотрудничеству как </p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <img src="/images/small-doc.jpg"/>
                                    <a href="" target="_blank">Оригинал</a>
                                </div>
                            </div>
                            <div class="row slide-r__bottom">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <a href = "">Читать полностью</a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a href = ""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrap">
                            <div class="birds"></div>
                            <div class="row slide-r__head">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__data">30 сентября, 2019</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__name">Рекомендация:<span>«Птицефабрика»</span></p>
                                </div>
                            </div>
                            <div class="row slide-r__content">
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <p>Пять лет заказываем экологически чистые комбикорма для бройлеров у ООО  “Агро-Эксперт”. В результате внедрения “спецрецептов” в каждый период жизни бройлера, он достигает убойного веса за 46 дней. Это на 15% быстрее, чем на комбикормах прошлых производителей. Мы очень довольны. При этом качество мяса остается на высоком уровне, что называется со вкусом “домашней курочки”. Рекомендуем компанию “Агро-Эксперт” к сотрудничеству как </p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <img src="/images/small-doc.jpg"/>
                                    <a href="" target="_blank">Оригинал</a>
                                </div>
                            </div>
                            <div class="row slide-r__bottom">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <a href = "">Читать полностью</a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a href = ""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-wrap">
                            <div class="birds"></div>
                            <div class="row slide-r__head">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__data">30 сентября, 2019</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <p class = "slide-r__head__name">Рекомендация:<span>«Птицефабрика»</span></p>
                                </div>
                            </div>
                            <div class="row slide-r__content">
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <p>Пять лет заказываем экологически чистые комбикорма для бройлеров у ООО  “Агро-Эксперт”. В результате внедрения “спецрецептов” в каждый период жизни бройлера, он достигает убойного веса за 46 дней. Это на 15% быстрее, чем на комбикормах прошлых производителей. Мы очень довольны. При этом качество мяса остается на высоком уровне, что называется со вкусом “домашней курочки”. Рекомендуем компанию “Агро-Эксперт” к сотрудничеству как </p>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <img src="/images/small-doc.jpg"/>
                                    <a href="" target="_blank">Оригинал</a>
                                </div>
                            </div>
                            <div class="row slide-r__bottom">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <a href = "">Читать полностью</a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a class = "fav" href = ""></a></li>
                                        <li><a href = ""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cooperation feedback-form">
    <div class="cooperation-wrap">
        <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="cooperation-left">
                    <p>Приглашаем к сотрудничеству</p>
                    <p>Задайте вопрос менеджеру<br/>по телефону</p>
                    <a href="tel:+78002503795">8 800 250 37 95</a>
                    <p>Перезвоним в ближайший рабочий<br/>день с 10:00 до 12:00 </p>
                    <p>или оставьте заявку через сайт </p>
                    <p>Подберем для вас лучшее решение</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="cooperation-right">
                    <p>Узнайте больше о компании “Агро-Эксперт”, <a href = "">производстве</a>, <a href = "">лаборатории</a> и <a href = "">качестве продукции</a>, чтобы принять взвешенное решение о сотрудничестве. Ещё на страницах нашего сайта вы убедитесь, что мы серьезно подходим к своей работе и готовы к конкуренции с лучшими комбикормовыми производствами РФ.</p>
                    <p><b>Запросите БЕСПЛАТНУЮ разработку рецепта</b>, чтобы испытать нас в реальном деле. Оцените работу наших специалистов, чтобы выбрать производителя комбикорма, который поможет вам достигнуть нужных результатов с помощью нашей продукции, выработанной из высококачественного сырья на современном производственном оборудовании.   </p>
                    <form class="col-md-11">
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label class = "radio-label active" for="type-order1"><span>Оставить заявку</span></label>
                                <input id = "type-order1" type="radio" name = "type-order" value = "Оставить заявку"/>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label class = "radio-label" for="type-order2"><span>Заказать звонок</span></label>
                                <input id = "type-order2" type="radio" name = "type-order" value = "Заказать звонок" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Электронная почта:</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Введите e-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Телефон:</label>
                                <input type="text" class="form-control phone" id="inputPassword4" placeholder="+7">
                            </div>
                        </div>
                        <div class="mb-h-3">
                            <label for="validationTextarea">Сообщение</label>
                            <textarea class="form-control " rows="6" id="validationTextarea"></textarea>
                            <!--is-invalid-->
                            <!--<div class="invalid-feedback">
                                Пожалуйста заполните данное поле.// сообщение вывести как плейсхолдер
                            </div>-->
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Прикрепить файлы</label>
                            <span>Можно прикрепить до 3-х файлов в формате .jpeg</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                            <label class="custom-control-label" for="customCheck1">
                                Согласен на обработку <a class="greenlink" href="#">персональных данных</a> и с условиями <a class="greenlink" href="#">оферты</a>
                            </label>
                        </div>
                        <div class="form-row submit">
                            <a href="javascript:void(0);" type="submit" class="btn send__order__mess">Отправить сообщение</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<? require(__DIR__ . '/../footer.php'); ?>

</body>
</html>
