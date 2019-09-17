<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Смена пароля</title>

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
        <h2 class="subtitle">Изменение пароля</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="user-info-block edit">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServer01">Старый пароль</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Введите старый пароль" value="Иванов Иван Иванович" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServerPhone">Новый пароль</label>
                                <input type="text" class="form-control is-invalid" id="validationServerPhone" placeholder="Введите новый пароль" aria-describedby="inputGroupPrependPhone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServerRequisites">Подтверждение</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Подтвердите новый пароль" aria-describedby="inputGroupPrependRequisites" required>
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
</section>

<? require (__DIR__  . '/../../footer.php'); ?>

</body>
</html>