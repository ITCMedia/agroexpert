<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
<? require (__DIR__  . '/../header.php'); ?>

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
                <span itemprop="name">Личный кабинет</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <h1>Личный кабинет</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="user-info-block with-row-border">
                    <div class="row">
                        <div class="col-md-5">Контактное лицо</div>
                        <div class="col-md-7">Иванов Иван Иванович</div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">Компания</div>
                        <div class="col-md-7">ООО «Название компании»</div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">Эл. почта</div>
                        <div class="col-md-7"><a href="email:kormlina@info.ru">kormlina@info.ru</a></div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">Телефон</div>
                        <div class="col-md-7">8 900 800 70 60</div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">Адрес доставки</div>
                        <div class="col-md-7">Город, улица, дом</div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">Реквизиты</div>
                        <div class="col-md-7">Реквизиты</div>
                    </div>
                </div>
                <div class="row profile-buttons">
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-pen"></i><span>Редактировать личные данные</span></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><i class="fas fa-lock"></i><span>Изменить пароль</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="user-info right-information-block">
                    <div class="body">
                   <p>Здесь отображается информация о Вашем профиле.</p>

                    <p>Вы в любой момент можете изменить информацию о себе и вашей компании.</p>

                    <p>Так же можете изменить пароль от вашего личного кабинета.</p>
                    </div>
                </div>
                <div class="order-history-butt">
                    <a href="#">История заказов</a>
                </div>
            </div>
        </div>
    </div>
</section>

<? require (__DIR__  . '/../footer.php'); ?>

</body>
</html>