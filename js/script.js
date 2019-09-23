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

$('#sendDiscount').click(function () {
    var phone = $('.discount__form form input').val()
    var stat  = $('.discount__form__checkbox').attr('stat')
    var flag  = 0
    var error = ''

    $('.discount__form form input').css({"border": "1px solid #ebe5df"})
    $('.discount__form__checkbox').css({"border": "none"})

    if (phone == "") {
        $('.discount__form form input').css({"border": "1px solid red"})
        error += 'Введите номер телефона! '
        flag = 1
    }

    if (stat == 'uncheck') {
        $('.discount__form__checkbox').css({"border": "1px solid red"})
        error += 'Вы должны согласится с политикой обработки персональных данных!'
        flag = 1
    }

    if (flag == 0) {
        $('.form-error').text('')
        $('.discount__form form input').val('')
        alert('Спасибо за заявку! В ближайшее время мы Вам перезвоним')
    } else {
        $('.form-error').text(error)
    }

    return false;
})

$('#sendDiscount1').click(function () {
    var phone = $('.float-menu__form form input').val()
    var stat  = $('.float-menu__form__checkbox').attr('stat')
    var flag  = 0
    var error = ''

    $('.float-menu__form form input').css({"border": "1px solid #ebe5df"})
    $('.float-menu__form__checkbox').css({"border": "none"})

    if (phone == "") {
        $('.float-menu__form form input').css({"border": "1px solid red"})
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
        $('.form-error1').text(error)
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
        $('.form-error2').text(error)
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
});