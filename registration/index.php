<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>

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
                <span itemprop="name">Регистрация</span>
            </li>
        </ul>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Регистрация</h1>
            </div>
            <div class="col-md-6">
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
                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Введите e-mail" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                <label for="validationServerPhone">Организационная форма</label>
                                <select class="form-control js-dynamic-select" id="exampleFormControlSelect1" required aria-describedby="inputGroupPrependPhone">
                                    <option>Выбор организационно-правовой формы</option>
                                    <option value="1">Индивидуальный предприниматель</option>
                                    <option  value="2">Общество с ограниченной ответственностью</option>
                                    <option  value="3">Физическое лицо</option>
                                </select>
                            </div>
                        </div>
                        <div class="row js-hide-field">
                            <div class="col-11">
                                <label for="validationServerRequisites">Название компании</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Введите название компании" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                        <div class="row js-hide-field">
                            <div class="col-11">
                                <label for="validationServerRequisites">ИНН</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Введите ИНН" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                        <div class="row js-hide-field">
                            <div class="col-11">
                                <label for="validationServerRequisites">ФИО</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Введите ФИО полностью" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                        <div class="row js-hide-field">
                            <div class="col-11">
                                <label for="validationServerRequisites">ОГРН</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Введите ОГРН" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                <label for="validationServerRequisites">Пароль</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Придумайте пароль" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                <label for="validationServerRequisites">Пароль еще раз</label>
                                <input type="text" class="form-control is-invalid" id="validationServerRequisites" placeholder="Подтвердите ввод пароля" aria-describedby="inputGroupPrependRequisites" required>
                            </div>
                        </div>
                        <div class="row custom-control custom-checkbox">
                            <div class="col-12">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label registration-confirm__text" for="customCheck1">
                                    Согласен на обработку <a href="#">персональных данных</a> и с условиями <a href="#">оферты</a>
                                </label>
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
            <div class="col-6">
                <div class="registration-info__block down-shadow__block">
                    <div class="registration-info__text mb-4">
                        <p>Для регистрации на нашем сайте Вам необходимо выбрать организационно-правовую форму.</p>
                        <p>После регистрации юридического лица в Личном кабинете Вы сможете заполнить свои реквизиты для совершения покупок и выставления счетов.</p>
                        <p>Если в процессе входа или регистрации у Вас возникли поблемы, попробуйте восстановить пароль.</p>
                        <p>Если восстановление пароля не помогло, свяэитесь с нашей технической поддержкой <a href="#">по почте</a>.</p>
                    </div>
                    <div class="registration-info-buttons__block">
                        <a class="login-but" href="#">Войти</a>
                        <a class="pass-restore-but" href="#">Восстановить пароль</a>
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