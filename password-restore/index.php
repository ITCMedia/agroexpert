<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Восстановление пароля</title>

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
                <span itemprop="name">Восстановление пароля</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-9">
                <h1>Восстановление пароля</h1>
            </div>
            <div class="col-md-3">
                <div class="have-questions">Есть вопросы? - <a href="#">напишите нам</a></div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="user-info-block edit">
                    <form>
                        <div class="row">
                            <div class="col-11">
                                <label for="validationServer01">Эл. почта</label>
                                <input type="text" class="form-control" id="validationServer01" placeholder="Введите e-mail, указаный при регистрации" value="" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row profile-buttons">
                    <div class="col-md-1">
                        <button class="sendForm">Далее</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="registration-info__block down-shadow__block">
                    <div class="registration-info__text mb-4">
                        <p>Введите свой e-mail и нажмите кнопку Далее.</p>
                        <p>Если введенный e-mail есть в базе портала, на указанный почтовый ящик придет новый пароль.</p>
                        <p>Если пароль не пришел в течение 10 минут, то введенный e-mail не зарегистрирован в базе портала.</p>
                        <p>Для того, чтобы испльзовать все возможности портала, пройдите процесс регистрации.</p>
                    </div>
                    <div class="registration-info-buttons__block">
                        <a class="login-but" href="#">Войти</a>
                        <a class="reg-btn" href="#">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? require (__DIR__  . '/../footer.php'); ?>

<script>
    $('.js-dynamic-select').change(function () {
        var $this = $(this), hide_fild = $('.js-hide-field');
        hide_fild.hide();

        switch ($this.val()) {
            case '1':
                hide_fild.eq(1).show();
                hide_fild.eq(2).show();
                break;
            case '2':
                hide_fild.eq(0).show();
                hide_fild.eq(3).show();
                break;
            case '3':
                hide_fild.eq(2).show();
                break;
        }
    });
</script>

</body>
</html>