<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>

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
                <span itemprop="name">Личный кабинет</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="container">
        <h1>Личный кабинет</h1>
        <h2 class="subtitle">Редактирование личных данных</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="user-info-block edit">
                    <form class="lk-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServer01">Контактное лицо</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Контактное лицо" value="Иванов Иван Иванович" required>
                            </div>
                            <div class="col-md-6">
                                    <label for="validationServer01">Компания</label>
                                    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Компания" value="ООО «Название компании»" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServerUsername">Эл. почта</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationServerUsername" placeholder="Имя пользователя" value="kormlina@info.ru" aria-describedby="inputGroupPrepend3" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServerUsername">Телефон</label>
                                <input type="text" class="form-control is-invalid" id="validationServerPhone" placeholder="Телефон" aria-describedby="inputGroupPrependPhone" required>
                                <div class="invalid-feedback">
                                    Укажите верный телефон.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServerAddres">Адрес доставки</label>
                                <input type="text" class="form-control is-invalid" id="validationServerAddres" placeholder="Город, улица, дом" aria-describedby="inputGroupPrependAddres" required>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServerAddres">Реквизиты</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Реквизиты" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row profile-buttons">
                    <div class="col-md-1">
                        <button class="sendForm">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix mb-7"></div>
</section>

<? require (__DIR__  . '/../../footer.php'); ?>

</body>
</html>