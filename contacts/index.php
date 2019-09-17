<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>

<? require(__DIR__ . '/../header.php'); ?>

<div class="top__wrap parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2"
     data-image-src="../images/hbg.png" data-natural-width="1440"
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
                    <span itemprop="name">Контакты</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-9">
                    <h1>Контакты</h1>
                </div>
                <div class="col-md-3">
                    <div class="have-questions">Есть вопросы? - <a href="#form">напишите нам</a></div>
                </div>
            </div>
            <div class="row no-gutters contact-data-row">
                <div class="col-md-7 contact-data">
                    <div class="contact-heder">
                        <p>8 (800) 250 37 95</p>
                        <p>Звонок по России бесплатный</p>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <p>Адрес:</p>
                            <p>Россия, 155900, Ивановская область, </p>
                            <p> г. Шуя, ул. Завокзальная, 1</p>
                            <a href="#map">Смотреть на карте</a>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <p>Режим работы:</p>
                            <p> Будни: с <span>8:00</span> до <span>16:30</span></p>
                            <p> Сб., вс.: выходной </p>
                        </div>
                        <div class="col-md-6 contact-time-info">
                            <div class="">
                                <div class="icon"></div>Заказы на сайте - круглосуточно
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <p>Телефоны:</p>
                            <p> +7 (49351) 4-73-71 </p>
                            <p> +7 (49351) 4-76-67 </p>
                            <p> +7 (49351) 4-74-47 </p>
                        </div>
                        <div class="col-md-6">
                            <p>Факс:</p>
                            <p> +7 (49351) 4-73-71 </p>
                            <p> +7 (49351) 4-74-47 </p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <p>Электронная почта:</p>
                            <p><a href="mail:info@agroexpert2007.ru">info@agroexpert2007.ru</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 float-sm-right">
                    <div class="requisites">
                        <div class="requisites-body">
                            <p>Реквизиты ООО «Агро-Эксперт»</p>
                            <ul>
                                <li>Общество с ограниченной ответственностью «Агро-Эксперт»</li>
                                <li>Юридический адрес: 155900, г. Шуя, ул. Завокзальная, 1</li>
                                <li>ОГРН: 1027700458543</li>
                                <li>ИНН / КПП: 7735092378/774301001</li>
                                <li>Генеральный директор: Посеуков Сергей Витальевич</li>
                            </ul>
                            <p>Банковские реквизиты:</p>
                            <ul>
                                <li>Расчетный счет №:
                                    40702810292000005704
                                </li>
                                <li>БИК: 044525823</li>
                                <li>Корреспондентский счет №:
                                    30101810200000000823
                                </li>
                                <li>Полное наименование банка: АО «ГПБ»
                                    г. Санкт-Петербург
                                </li>
                            </ul>
                            <hr>
                            <div class="row requisites-buttons">
                                <div class="col-6 buttonDownload">
                                    <a class="row" download href="">
                                        <div class=" col-3 buttondownload">
                                        </div>
                                        <p class=" col greenlink" >Скачать PDF</p></a>
                                </div>
                                <div class="col-6 buttonPrint">
                                    <a class="row" download href="">
                                        <div class=" col-3 buttonprint"></div>
                                        <p class=" col greenlink">Распечатать</p></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-map">
        <div class="container">
            <ul class="nav nav-pills mb-h-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a name="map" class="nav-link active" id="pills-map-tab" data-toggle="pill" href="#pills-map"
                       role="tab"
                       aria-controls="pills-map" aria-selected="true">Карта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-passage-tab" data-toggle="pill" href="#pills-passage" role="tab"
                       aria-controls="pills-passage" aria-selected="false">Как
                        добраться</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-mao-tab">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af0c9c4aac04eecf22b8741e4a62861a87375cda39da870215871ec2d7bb28645&amp;width=100%25&amp;height=585&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="tab-pane fade" id="pills-passage" role="tabpanel" aria-labelledby="pills-passage-tab">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af0c9c4aac04eecf22b8741e4a62861a87375cda39da870215871ec2d7bb28645&amp;width=100%25&amp;height=585&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="feedback-form">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6">
                <p><a name="form">Связаться с нами</a></p>
                <form class="col-md-11">
                    <div class="form-row">
                        <div class="col-12">
                            <label for="inputName">Представьтесь:</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Как к вам обращаться?">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Электронная почта:</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Введите e-mail">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Телефон:</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="+7">
                        </div>
                    </div>
                    <div class="mb-h-3">
                        <label for="validationTextarea">Сообщение</label>
                        <textarea class="form-control " rows="6" id="validationTextarea" required></textarea>
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
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">
                            Согласен на обработку <a class="greenlink" href="#">персональных данных</a> и с условиями <a
                                    class="greenlink" href="#">оферты</a>
                        </label>
                    </div>
                    <div class="form-row submit">
                        <button type="submit" class="btn btn-success">Отправить заявку</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 offset-1">
                <p>Контактные лица</p>
                <ul class="nav nav-pills mb-3" id="pills-personnel-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-opt-tab" data-toggle="pill" href="#pills-opt" role="tab"
                           aria-controls="pills-opt" aria-selected="true">
                            Опт
                        </a>
                        <span class="badge badge-secondary">5</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-retail-tab" data-toggle="pill" href="#pills-retail" role="tab"
                           aria-controls="pills-retail" aria-selected="false">
                            Розница
                        </a>
                        <span class="badge badge-secondary">2</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-tehnology-tab" data-toggle="pill" href="#pills-tehnology"
                           role="tab" aria-controls="pills-tehnology" aria-selected="false">
                            Технологии
                        </a>
                        <span class="badge badge-secondary">1</span>
                    </li>
                </ul>
                <div class="tab-content pills-personnel" id="pills-personnel-tabContent">
                    <div class="tab-pane fade show active" id="pills-opt" role="tabpanel"
                         aria-labelledby="pills-opt-tab">
                        <div class="media">
                            <img src="../images/personnel.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Салауров Александр Николаевич</p>
                                <p>Менеджер по оптовым продажам</p>
                                <p><a href="mail:salaurov@agroexpert2007.ru">salaurov@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media">
                            <img src="../images/personnel2.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Петрова Марина Алексеевна</p>
                                <p>Менеджер корпоративного сегмента</p>
                                <p><a href="mail:petrova@agroexpert2007.ru">petrova@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media">
                            <img src="../images/personnel3.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Каплан Валерия Александровна</p>
                                <p>Менеджер по оптовым продажам</p>
                                <p><a href="mail:kaplan@agroexpert2007.ru">kaplan@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media">
                            <img src="../images/personnel4.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Тополева Ольга Николаевна</p>
                                <p>Менеджер по розничным продажам</p>
                                <p><a href="mail:333">topoleva@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media">
                            <img src="../images/personnel5.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Никонова Тамара Алексеевна</p>
                                <p>Менеджер по оптовым продажам</p>
                                <p><a href="mail:333">topoleva@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-retail" role="tabpanel" aria-labelledby="pills-retail-tab">
                        <div class="media">
                            <img src="../images/personnel.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Салауров Александр Николаевич</p>
                                <p>Менеджер по оптовым продажам</p>
                                <p><a href="mail:salaurov@agroexpert2007.ru">salaurov@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media">
                            <img src="../images/personnel.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Петрова Марина Алексеевна</p>
                                <p>Менеджер корпоративного сегмента</p>
                                <p><a href="mail:petrova@agroexpert2007.ru">petrova@agroexpert2007.ru</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tehnology" role="tabpanel"
                         aria-labelledby="pills-tehnology-tab">
                        <div class="media">
                            <img src="../images/personnel.jpg" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0">Салауров Александр Николаевич</p>
                                <p>Менеджер по оптовым продажам</p>
                                <p><a href="mail:salaurov@agroexpert2007.ru">salaurov@agroexpert2007.ru</a></p>
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