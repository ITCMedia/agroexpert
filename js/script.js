/*ymaps.ready(function () {
    var myMap = new ymaps.Map("mapContacts", {
        center: [56.851937, 41.350119],
        zoom: 15,
        controls: ['routeButtonControl', 'zoomControl']
    });

    var myPlacemark1 = new ymaps.Placemark([56.852809, 41.348276], {
        balloonContent: 'Россия, 155900, Ивановская область, г. Шуя, ул. Завокзальная, 1'
    }, {
        draggable: false, // Метку можно перемещать.
        iconLayout: 'default#image',
        iconImageHref: '/local/templates/.default/images/marker1.png',
        iconImageSize: [79, 80],
        iconImageOffset: [-40, -40]
    });

    myMap.geoObjects.add(myPlacemark1);

    var myPlacemark2 = new ymaps.Placemark([56.850624, 41.351780], {
        balloonContent: 'Станция Шуя, Северная железная дорога. Код станции: 319003'
    }, {
        draggable: false, // Метку можн.top-menu__gambо перемещать.
        iconLayout: 'default#image',
        iconImageHref: '/local/templates/.default/images/marker1.png',
        iconImageSize: [79, 80],
        iconImageOffset: [-40, -40]
    });

    myMap.geoObjects.add(myPlacemark2);
});
*/
$('.js-parallax').each(function(){
    var parallax = new Parallax(this, {
        invertX: false,
        invertY: false,
        hoverOnly: true
    });
});


$(function(){
    $('.js-animate-counter').each(function(){
       var animateCounter = $(this),
           from = animateCounter.data('from') || 0,
           to = +animateCounter.text(),
           counterIsDone = false;

       function counterStart(){
           counterIsDone = true;
           $({Counter: from}).animate({Counter: to}, {
               duration: 2000,
               easing: 'swing',
               step: function () {
                   animateCounter.text(Math.ceil(this.Counter));
               }
           });
       }

       $(window).scroll(function(){
           var wb = $(window).scrollTop() + $(window).height(),
               ct = animateCounter.offset().top;

          if(wb > ct && !counterIsDone){
              counterStart();
          }
       });
    });
});

$(function () {
    var spoilerBtn  = $('.js-spoiler-btn'),
        spoilerText = $('.js-spoiler-text'),
        isShow = false,
        textBtn = {
          'true': 'Скрыть',
          'false': spoilerBtn.text()
        };

    spoilerText.hide();

    spoilerBtn.click(function (e) {
        e.preventDefault();
        spoilerText.slideToggle();
        isShow = !isShow;
        spoilerBtn.text(textBtn[isShow]);
    });
});

function isEmailValid(emailAdress) {
    var EMAIL_REGEXP = new RegExp('^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$', 'i');
    return EMAIL_REGEXP.test(emailAdress)
}

jQuery(function () {
    jQuery(".phone").mask("+7(999) 999-9999");
});

$(function () {
    $("a.js-scroll[href^='#']").click(function () {
        var _href = $(this).attr("href")
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"}, 1000)
        return false
    })
})

$('.discount__form__checkbox').click(function () {
    var stat = $(this).attr('stat')

    if (stat == 'check') {
        $(this).attr('stat', 'uncheck')
    } else {
        $(this).attr('stat', 'check')
    }
})

$('.btn-readmore').click(function () {
    $this = $(this);

    $this.text($this[0].innerText.trim() == 'Развернуть' ? 'Свернуть' : 'Развернуть');
})

$('.float-menu__form__checkbox').click(function () {
    var stat = $(this).attr('stat')

    if (stat == 'check') {
        $(this).attr('stat', 'uncheck')
    } else {
        $(this).attr('stat', 'check')
    }
})

$('.popup__form__checkbox').click(function () {
    var stat = $(this).attr('stat')

    if (stat == 'check') {
        $(this).attr('stat', 'uncheck')
    } else {
        $(this).attr('stat', 'check')
    }
})

$('.discount__form form input').focus(function () {
    $(this).removeClass('input-error')
})

$('#sendDiscount').click(function () {
    var phone = $('.discount__form form input').val()
    var stat  = $('.discount__form__checkbox').attr('stat')
    var flag  = 0
    var error = ''

    $('.discount__form form input').attr('placeholder', '+7')
    $('.discount__form form input').css({"border": "1px solid #ebe5df"})
    $('.discount__form__checkbox').css({"border": "none"})

    if (phone == "") {

        $('.discount__form form input').addClass('input-error')

        $('.discount__form form input').attr('placeholder', 'Вы не ввели номер телефона')
        error += 'Введите номер телефона! '
        flag = 1
    }

    if (stat == 'uncheck') {
        $('.discount__form__checkbox').css({"border": "1px solid red"})
        error += 'Вы должны согласится с политикой обработки персональных данных!'
        flag = 1
    }

    if (flag == 0) {
        $.post('/send.php', {PHONE: phone, EVENT: 'action'}, function(data){
            $('.form-error').text('')
            $('.discount__form form input').val('')
            alert('Спасибо за заявку! В ближайшее время мы Вам перезвоним')
        })
    } else {
        //$('.form-error').text(error)
    }

    return false;
})

$('.float-menu__form form input').focus(function () {
    $(this).removeClass('input-error')
})

$('#sendDiscount1').click(function () {
    var phone = $('.float-menu__form form input').val()
    var stat  = $('.float-menu__form__checkbox').attr('stat')
    var flag  = 0
    var error = ''

    $('.float-menu__form form input').css({"border": "1px solid #ebe5df"})
    $('.float-menu__form__checkbox').css({"border": "none"})

    if (phone == "") {
        $('.float-menu__form form input').addClass('input-error')
        $('.float-menu__form form input').attr('placeholder', 'Вы не ввели номер телефона')
        error += 'Введите номер телефона! '
        flag = 1
    }

    if (stat == 'uncheck') {
        $('.float-menu__form__checkbox').css({"border": "1px solid red"})
        error += 'Вы должны согласится с политикой обработки персональных данных!'
        flag = 1
    }

    if (flag == 0) {
        $('.form-error1').text('')
        $('.float-menu__form form input').val('')
        alert('Спасибо за заявку! В ближайшее время мы Вам перезвоним')
    } else {
        // $('.form-error1').text(error)
    }

    return false;
})

$('#sendDiscount2').click(function () {
    var phone = $('.discount__form2 form input').val()
    var stat  = $('.discount__form2 .discount__form__checkbox').attr('stat')
    var flag  = 0
    var error = ''

    $('.discount__form2 form input').attr('placeholder', '+7')
    $('.discount__form2 form input').css({"border": "1px solid #ebe5df"})
    $('.discount__form2 .discount__form__checkbox').css({"border": "none"})

    if (phone == "") {

        $('.discount__form2 form input').addClass('input-error')

        $('.discount__form2 form input').attr('placeholder', 'Вы не ввели номер телефона')
        error += 'Введите номер телефона! '
        flag = 1
    }

    if (stat == 'uncheck') {
        $('.discount__form2 .discount__form__checkbox').css({"border": "1px solid red"})
        error += 'Вы должны согласится с политикой обработки персональных данных!'
        flag = 1
    }

    if (flag == 0) {
        $('.form-error').text('')
        $('.discount__form2 form input').val('')
        alert('Спасибо за заявку! В ближайшее время мы Вам перезвоним')
    } else {
        //$('.form-error').text(error)
    }

    return false;
})

$('.sendForm').click(function () {
    var name  = $('#name').val()
    var phone = $('#phone').val()
    var email = $('#email').val()
    var flag  = 0
    var error = ''
    var stat  = $('.usagr-pp .popup__form__checkbox').attr('stat')

    $('.usagr-pp input').css({"border": "1px solid #ebe5df"})
    $('.usagr-pp .popup__form__checkbox').css({"border": "none"})

    if (name == "") {
        $('#name').css({"border": "1px solid red"})
        error += 'Заполните имя! '
        flag = 1
    }

    if (phone == "") {
        $('#phone').css({"border": "1px solid red"})
        error += 'Заполните номер телефона! '
        flag = 1
    }

    if (email == "") {
        $('#email').css({"border": "1px solid red"})
        error += 'Заполните адрес почты! '
        flag = 1
    }

    if (email != "" && !isEmailValid(email)) {
        $('#email').css({"border": "1px solid red"})
        error += 'Некорректный адрес почты! '
        flag = 1
    }

    if (stat == 'uncheck') {
        $('.usagr-pp .discount__form__checkbox').css({"border": "1px solid red"})
        error += 'Вы должны согласится с политикой обработки персональных данных!'
        flag = 1
    }

    if (flag == 0) {
        $('.form-error2').text('')
        $('.usagr-pp input').val('')
        var popup = $('.popup:visible')
        popup.fadeOut(200, function () {
            $('.overlay').fadeOut(200)
        })
        alert('Спасибо за заявку! В ближайшее время мы Вам перезвоним')
    } else {
        //$('.form-error2').text(error)
    }

    return false;
})

$('[popup-target]').click(function (e) {
    var el     = $(this)
    var target = el.attr('popup-target')

    $('.overlay').fadeIn(200, function () {
        $('.popup.' + target).fadeIn(200)
        var top  = document.documentElement.clientHeight / 2 - $('.popup.' + target).height() / 2 + $(window).scrollTop()
        var left = $('body').width() / 2 - $('.popup.' + target).width() / 2
        left     = left - 21
        $('.popup.' + target).css('top', top).css('left', left)
    })

    return false
})

$('.overlay, .close1').click(function (e) {
    var popup = $('.popup:visible')
    popup.fadeOut(200, function () {
        $('.overlay').fadeOut(200)
    })
    return false;
})

function keyExit(e) {
    if (e.keyCode == 27) {
        var popup = $('.popup:visible')
        popup.fadeOut(200, function () {
            $('.overlay').fadeOut(200);
        })
    }
}

addEventListener("keydown", keyExit)

$('.top-menu__gamb').click(function () {
    $('.float-menu').animate({left: 0}, 300)
    $('html').css({"overflow-y": "hidden"})
    $('body').css({"position": "fixed"})
})

$('.float-menu__close').click(function () {
    $('.float-menu').animate({left: -100 + "%"}, 300)
    $('html').css({"overflow-y": "auto"})
    $('body').css({"position": "inherit"})
})

$(document).ready(function () {
    $('#slider').owlCarousel({
        loop           : true,
        margin         : 88,
        nav            : true,
        dots           : true,
        navText        : ['', ''],
        autoplay       : true,
        autoplayTimeout: 5000,
        responsive     : {
            0  : {
                items: 1
            },
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            767: {
                items: 1
            }
        }
    })

    function centerElements() {
        var mleft1 = $('.owl-carousel .owl-dots').width() / 2;
        $('.owl-carousel .owl-dots').css('margin-left', -mleft1);
    }

    centerElements();

    $(window).resize(function () {
        centerElements();
    });
})

/*-----------------NEWS------------------------------*/
$('.view-all-tags').click(function () {
    if ($(this).hasClass('active-tag')) {
        $('.right-tags').css({"max-height": "50px"})
        $(this).text('Показать все')
        $(this).removeClass('active-tag')
    } else {
        $('.right-tags').css({"max-height": "unset"})
        $(this).text('Скрыть')
        $(this).addClass('active-tag')
    }


})

$(document).ready(function () {
    $('#slider-new').owlCarousel({
        loop           : true,
        margin         : 88,
        nav            : true,
        dots           : true,
        navText        : ['', ''],
        autoplay       : true,
        autoplayTimeout: 5000,
        responsive     : {
            0  : {
                items: 1
            },
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            767: {
                items: 1
            }
        }
    })

    $('#slider-r').owlCarousel({
        loop           : true,
        margin         : 128,
        nav            : true,
        dots           : true,
        navText        : ['', ''],
        autoplay       : false,
        autoplayTimeout: 5000,
        responsive     : {
            0  : {
                items: 1
            },
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            767: {
                items: 1
            }
        }
    })

    var owl = $("#slider-gen")
    owl.owlCarousel({
        loop           : true,
        margin         : 8,
        nav            : true,
        dots           : true,
        navText        : ['', ''],
        autoplay       : false,
        autoplayTimeout: 5000,
        responsive     : {
            0  : {
                items: 1
            },
            320: {
                items: 1
            },
            576: {
                items: 2
            },
            767: {
                items: 1
            },
            991: {
                items: 2
            }
        }
    })

    $('.slider-gen__prev').click(function(){
        owl.trigger("prev.owl.carousel");
    })

    $('.slider-gen__next').click(function(){
        owl.trigger("next.owl.carousel");
    })

    var owl1 = $(".slider-product")
    owl1.owlCarousel({
        loop           : false,
        margin         : 0,
        nav            : false,
        dots           : true,
        navText        : ['', ''],
        autoplay       : false,
        autoplayTimeout: 5000,
        responsive     : {
            0  : {
                items: 1
            },
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            767: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    })
})


$('.radio-label').click(function () {
    $('.radio-label').removeClass('active')
    $(this).addClass('active')
})

$(function () {
    $("a[href^='#']").click(function () {
        var _href = $(this).attr("href")
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"}, 1000)
        return false
    })
})
/*
$('.order-discount').mousemove(function (e) {

    var offset = $(this).offset();
    //console.log(-(e.pageX-fromTop)/12 + $(this).width()/12);
    //console.log($(this).width()/2);
    //console.log($(this).height()/2);
    //var amountMovedX = (e.pageX * -1 / 12) + 150;
    //var amountMovedY = (e.pageY * -1 / 12) + 150;
    var amountMovedX = (-(e.pageX-offset.left)/10) + $(this).width()/5;
    var amountMovedY = (-(e.pageY-offset.top)/12) + $(this).height()/4;//150;
    $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
    //$(this).css('background-size', "100%");
    $(this).animate({'background-position-x': amountMovedX, 'background-position-y': amountMovedY},{duration: 50, queue: false, easing: 'linear'});
})
*/
$('.form-control').focus(function () {
    $(this).removeClass('input-error')
})

$('.form-control').blur(function(){
    if($(this).val() != ""){
        $(this).removeClass('is-invalid')
    }
})

$('.send__order__mess').click(function () {
    var email = $('#inputEmail4').val()
    var phone = $('#inputPassword4').val()
    var text  = $('#validationTextarea').val()
    var pol   = $('#customCheck1').prop("checked")
    var flag  = 0

    $('.custom-checkbox').css({'border': 'none'})
    $('.form-control').removeClass('input-error')

    if (email == "") {
        $('#inputEmail4').addClass('input-error')
        $('#inputEmail4').attr('placeholder', 'Введите свой E-mail')
        flag = 1
    }

    if (email !== "" && !isEmailValid(email)) {
        $('#inputEmail4').addClass('input-error')
        document.getElementById('inputEmail4').value=""
        $('#inputEmail4').attr('placeholder', 'Введите правильный E-mail')
        flag = 1
    }

    if (phone == "") {
        $('#inputPassword4').addClass('input-error')
        $('#inputPassword4').attr('placeholder', 'Введите свой телефон')
        flag = 1
    }

    if (text == "") {
        $('#validationTextarea').addClass('input-error')
        $('#validationTextarea').attr('placeholder', 'Пожалуйста заполните данное поле')
        flag = 1
    }

    if (pol == false) {
        $('.custom-checkbox').css({'border': '1px solid #ff9494'})
        flag = 1
    }

    if (flag == 0) {
        $('#inputEmail4').val('')
        $('#inputPassword4').val('')
        $('#validationTextarea').val('')
    } else {return false;}
})

$('#editLk').click(function(){
    var name = $('#validationServer01').val(),
        company = $('#validationServer02').val(),
        email = $('#validationServerUsername').val(),
        phone = $('#validationServerPhone').val(),
        addr = $('#validationServerAddres').val(),
        rekv = $('#validationServerRequisites').val(),
        uid   = $('#userId').val(),
        flag = 0


    if(name == ""){
        $('#validationServer01').addClass('is-invalid')
        flag = 1
    }else{
        $('#validationServer01').addClass('is-valid')
    }

    if(company == ""){
        $('#validationServer02').addClass('is-invalid')
        flag = 1
    }else{
        $('#validationServer02').addClass('is-valid')
    }

    if(email == ""){
        $('#validationServerUsername').addClass('is-invalid')
        flag == 1
    }else{
        $('#validationServerUsername').addClass('is-valid')
    }

    if(email != "" && !isEmailValid(email)){
        $('#validationServerUsername').addClass('is-invalid')
        $('#emailInvalid').css({"display":"block"})
        flag = 1
    }else{
        $('#validationServerUsername').addClass('is-valid')
        $('#emailInvalid').css({"display":"none"})
    }

    if(phone == ""){
        $('#validationServerPhone').addClass('is-invalid')
        flag = 1
    }else{
        $('#validationServerPhone').addClass('is-valid')
    }

    if(addr == ""){
        $('#validationServerAddres').addClass('is-invalid')
        flag = 1
    }else{
        $('#validationServerAddres').addClass('is-valid')
    }

    if(rekv == ""){
        $('#validationServerRequisites').addClass('is-invalid')
        flag = 1
    }else{
        $('#validationServerRequisites').addClass('is-valid')
    }

    if(flag == 0){
        $.post('/lk/edit/edit.php', {UID: uid, NAME: name, COMPANY: company, EMAIL: email, PHONE: phone, ADDR: addr, REKV: rekv}, function(data){
            alert(data)
        })
    }else{

    }

})

$('#changePass').click(function(){
    var oldPass = $('#oldPass').val(),
        newPass = $('#newPass').val(),
        confirm = $('#confirmPass').val(),
        uid     = $('#userId').val(),
        flag    = 0

    $.post('/lk/password-change/check.php', {UID: uid, OLDPASS: oldPass}, function(data){
        if(data == '0'){
            $('#oldPass').addClass('is-invalid')
            $('#confinvalid2').css({"display":"block"})
            flag = 1
        }else{
            $('#oldPass').addClass('is-valid')
            $('#confinvalid2').css({"display":"none"})
        }
    })

    if(oldPass == ""){
        $('#oldPass').addClass('is-invalid')
        flag = 1
    }else{
        $('#oldPass').addClass('is-valid')
    }

    if(newPass == ""){
        $('#newPass').addClass('is-invalid')
        flag = 1
    }else{
        $('#newPass').addClass('is-valid')
    }

    if(confirm == ""){
        $('#confirmPass').addClass('is-invalid')
        flag = 1
    }else{
        $('#confirmPass').addClass('is-valid')
    }

    if(confirm != newPass){
        $('#confirmPass').addClass('is-invalid')
        $('#newPass').addClass('is-invalid')
        $('#confinvalid').css({"display":"block"})
        flag = 1
    }else{
        $('#confirmPass').addClass('is-valid')
        $('#newPass').addClass('is-valid')
        $('#confinvalid').css({"display":"none"})
    }

    if(flag == 0){
        $.post('/lk/password-change/change.php', {UID: uid, OLDPASS: oldPass, NEWPASS: newPass, CONFIRM: confirm}, function(data){
            alert(data)
            $('#oldPass').val("")
            $('#newPass').val("")
            $('#confirmPass').val("")
        })
    }else{

    }
})

$('#authForm').submit(function(){
    return false
})

$('#authUser').click(function(){
    var login = $('#inputEmail').val(),
        pass = $('#inputPassword').val(),
        flag = 0

    if(login == ""){
        $('#inputEmail').addClass('is-invalid')
        flag = 1
    }else{
        $('#inputEmail').addClass('is-valid')
    }

    if(pass == ""){
        $('#inputPassword').addClass('is-invalid')
        flag = 1
    }else{
        $('#inputPassword').addClass('is-valid')
    }

    if(flag == 0){
        $.post('/lk/auth.php', {LOGIN: login, PASS: pass}, function(data){
            if(data == '1') {
                document.location.href = '/lk/'
            }else{
                alert('Неверный логин или пароль!')
            }
        })
    }else{

    }
})

$('#authUser2').click(function(){
    var login = $('#emailUser').val(),
        pass = $('#passUser').val(),
        flag = 0

    if(login == ""){
        $('#emailUser').addClass('is-invalid')
        flag = 1
    }else{
        $('#emailUser').addClass('is-valid')
    }

    if(pass == ""){
        $('#passUser').addClass('is-invalid')
        flag = 1
    }else{
        $('#passUser').addClass('is-valid')
    }

    if(flag == 0){
        $.post('/lk/auth.php', {LOGIN: login, PASS: pass}, function(data){
            if(data == '1') {
                document.location.href = '/lk/'
            }else{
                alert('Неверный логин или пароль!')
            }
        })
    }else{
        $('.auth__text').css({"display":"none"})
        $('.auth__text__err').css({"display":"block"})
    }
})

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


$('#regUser').click(function () {
    var forma = $('#exampleFormControlSelect1').val(),
        email = $('#emailUser').val(),
        company = $('#companyName').val(),
        inn = $('#innUser').val(),
        fio = $('#fioUser').val(),
        ogrn = $('#ogrnUser').val(),
        pass = $('#passUser').val(),
        confirm = $('#confirmPass').val(),
        policy = $('#customCheck1').prop("checked"),
        flag = 0

    if(email == ""){
        $('#emailUser').addClass('is-invalid')
        flag = 1
    }else{
        $('#emailUser').addClass('is-valid')
    }

    if(pass == ""){
        $('#passUser').addClass('is-invalid')
        flag = 1
    }else{
        $('#passUser').addClass('is-valid')
    }

    if(confirm == ""){
        $('#confirmPass').addClass('is-invalid')
        flag = 1
    }else{
        $('#confirmPass').addClass('is-valid')
    }

    if(pass != confirm){
        $('#confinvalid').css({"display":"block"})
        $('#passUser').addClass('is-invalid')
        $('#confirmPass').addClass('is-invalid')
        flag = 1
    }else{
        $('#confinvalid').css({"display":"none"})
        $('#passUser').addClass('is-valid')
        $('#confirmPass').addClass('is-valid')
    }

    if(policy == false){
        $('#customCheck1').addClass('is-invalid')
        flag = 1
    }else{
        $('#customCheck1').addClass('is-valid')
    }

    if(forma == 0){
        $('#exampleFormControlSelect1').addClass('is-invalid')
        flag = 1;
    }else{
        $('#exampleFormControlSelect1').addClass('is-valid')
    }

    if(forma == 1){

        if(inn == ""){
            $('#innUser').addClass('is-invalid')
            flag = 1
        }else{
            $('#innUser').addClass('is-valid')
        }

        if(fio == ""){
            $('#fioUser').addClass('is-invalid')
            flag = 1
        }else{
            $('#fioUser').addClass('is-valid')
        }

        if(flag == 0){
            $.post('/register/reg.php', {EMAIL: email, PASS: pass, CONFIRM: confirm, INN: inn, FIO: fio, EVENT: 'forma1'}, function(data){
                if(data == '1'){
                    alert('Пользователь успешно добавлен!')
                    $('#emailUser').val('')
                    $('#innUser').val('')
                    $('#fioUser').val('')
                    $('#passUser').val('')
                    $('#confirmPass').val('')
                }else {
                    alert(data)
                }
            })
        }
    }

    if(forma == 2){

        if(company == ""){
            $('#companyName').addClass('is-invalid')
            flag = 1
        }else{
            $('#companyName').addClass('is-valid')
        }

        if(ogrn == ""){
            $('#ogrnUser').addClass('is-invalid')
            flag = 1
        }else{
            $('#ogrnUser').addClass('is-valid')
        }

        $.post('/register/reg.php', {EMAIL: email, PASS: pass, CONFIRM: confirm, COMPANY: company, OGRN: ogrn, EVENT: 'forma2'}, function(data){
            if(data == '1'){
                alert('Пользователь успешно добавлен!')
                $('#emailUser').val('')
                $('#companyName').val('')
                $('#ogrnUser').val('')
                $('#passUser').val('')
                $('#confirmPass').val('')
            }else {
                alert(data)
            }
        })
    }

    if(forma == 3){

        if(fio == ""){
            $('#fioUser').addClass('is-invalid')
            flag = 1
        }else{
            $('#fioUser').addClass('is-valid')
        }

        $.post('/register/reg.php', {EMAIL: email, PASS: pass, CONFIRM: confirm, FIO: fio, EVENT: 'forma3'}, function(data){
            if(data == '1'){
                alert('Пользователь успешно добавлен!')
                $('#emailUser').val('')
                $('#fioUser').val('')
                $('#passUser').val('')
                $('#confirmPass').val('')
            }else {
                alert(data)
            }
        })

    }

})