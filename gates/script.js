$(document).ready(function() {
    // код для кнопки бургер-меню
    let burger = document.querySelector('.header-burger');
	let menu = document.querySelector('.nav-menu-mobile');
	let close = document.querySelector('.header-close');
	let menuElements = document.querySelectorAll('.nav-menu-mobile ul a');

    console.log(menuElements);

    for (let i = 0; i < menuElements.length; i++) {
        menuElements[i].addEventListener('click', function(e){
            e.preventDefault();
            console.log(this);

            

            let href = this.getAttribute('href');

            let currentSection = document.getElementById(href);
            console.log(document.getElementById(href));

            let offset = currentSection.offsetTop;

            menu.classList.remove('nav-menu-mobile-open');

            window.scrollTo(document.body, offset, 0);
        });
    }

    burger.addEventListener('click', function(e){
        e.preventDefault();
        menu.classList.add('nav-menu-mobile-open');
    });

    close.addEventListener('click', function(e){
        e.preventDefault();
        menu.classList.remove('nav-menu-mobile-open');
    });

    // код для кнопки "Обратный звонок", popup-окно
    function disableScroll() {
        $('html, body').on('mousewheel', function() {
            return false;
        });
    };

    function enableScroll() {
        $('html, body').off('mousewheel');
    };

    $('.header-button, .design-button-phone, .types-image').click(function () {
        $('.popup-container').fadeIn(400, disableScroll);
    });

    $('.popup-container').click(function (event) {
        if (event.target == this) {
            $(this).fadeOut(400, enableScroll);
        }
    });

    // код для валидации формы
    $('.form-header').each(function () {
        $(this).validate({
            errorPlacement(error, element) {
                return true;
            },
            focusInvalid: false,
            rules: {
                Телефон: {
                    required: true,
                },
                Имя: {
                    required: true,
                    maxlength: 10,
                }
            },
            messages: {
                Телефон: {
                    required: 'Нужно что-то ввести'
                },
                Имя: {
                    required: 'Нужно что-то ввести',
                    maxlength: 'Нужно ввести максимум 5 букв'
                }
            },
            submitHandler(form) {
                let th = $(form);

                $.ajax({
                    type: 'POST',
                    url: 'mail.php',
                    data: th.serialize(),
                    // eslint-disable-next-line func-names
                }).done(() => {
                    console.log("Отправлено");
                    th.trigger('reset');
                });

                return false;
            }

        });
    });
    

    // функция для выбора типа ворот

   

    $('.types-block .types-block-small:first-child').on('mouseenter', function() {
        $(this).append(`
            <div class="click-text">Кованые ворота станут не только средством защиты Вашей территории, а также ее отличным украшением. Большое разнообразие рисунков и уникальных декоративных кованых элементов для оформления откатных ворот позволяет не ограничивать фантазию.</div>
        `);
        $('.types-block .types-block-small:first-child .types-image').text("Заказать");
    });

    $('.types-block .types-block-small:first-child').on('mouseleave', function() {
        $('.types-block .types-block-small:first-child .click-text').remove();
        $('.types-block .types-block-small:first-child .types-image').text("Кованые");
    });

    $('.types-block .types-block-small:nth-child(2)').on('mouseenter', function() {
        $(this).append(`
            <div class="click-text">Наиболее популярным вариантом заполнения является обшивка листами профнастила. Откатные ворота из профнастила имеют небольшой вес. Это экономически выгодное решения, которое возможно исполнить в короткие сроки.</div>
        `);
        $('.types-block .types-block-small:nth-child(2) .types-image').text("Заказать");
    });

    $('.types-block .types-block-small:nth-child(2)').on('mouseleave', function() {
        $('.types-block .types-block-small:nth-child(2) .click-text').remove();
        $('.types-block .types-block-small:nth-child(2) .types-image').text("С обшивкой из профнастила");
    });

    $('.types-block .types-block-small:nth-child(3)').on('mouseenter', function() {
        $(this).append(`
            <div class="click-text">Красивые и качественные ворота станут не только средством защиты Вашей территории, а также ее отличным украшением. Большое разнообразие рисунков и уникальных декоративных кованых элементов для оформления откатных ворот позволяет не ограничивать фантазию.</div>
        `);
        $('.types-block .types-block-small:nth-child(3) .types-image').text("Заказать");
    });

    $('.types-block .types-block-small:nth-child(3)').on('mouseleave', function() {
        $('.types-block .types-block-small:nth-child(3) .click-text').remove();
        $('.types-block .types-block-small:nth-child(3) .types-image').text("С обшивкой из дерева");
    });

    $('.types-block .types-block-small:nth-child(4)').on('mouseenter', function() {
        $(this).append(`
            <div class="click-text">Красивые и качественные ворота станут не только средством защиты Вашей территории, а также ее отличным украшением. Большое разнообразие рисунков и уникальных декоративных кованых элементов для оформления откатных ворот позволяет не ограничивать фантазию.</div>
        `);
        $('.types-block .types-block-small:nth-child(4) .types-image').text("Заказать");
    });

    $('.types-block .types-block-small:nth-child(4)').on('mouseleave', function() {
        $('.types-block .types-block-small:nth-child(4) .click-text').remove();
        $('.types-block .types-block-small:nth-child(4) .types-image').text("С обшивкой из обрешетки");
    });

    $('.types-block .types-block-small:nth-child(5)').on('mouseenter', function() {
        $(this).append(`
            <div class="click-text">Современный элемент приусадебного участка, который позволяет создать имитацию деревянных поверхностей. Сэндвич-панели придадут оригинальный внешний вид вашим воротам.</div>
        `);
        $('.types-block .types-block-small:nth-child(5) .types-image').text("Заказать");
    });

    $('.types-block .types-block-small:nth-child(5)').on('mouseleave', function() {
        $('.types-block .types-block-small:nth-child(5) .click-text').remove();
        $('.types-block .types-block-small:nth-child(5) .types-image').text("С обшивкой из сэндвич-панелей");
    });

    $('.types-block .types-block-small:last-child').on('mouseenter', function() {
        $(this).append(`
            <div class="click-text">Красивые и качественные ворота станут не только средством защиты Вашей территории, а также ее отличным украшением. Большое разнообразие рисунков и уникальных декоративных кованых элементов для оформления откатных ворот позволяет не ограничивать фантазию.</div>
        `);
        $('.types-block .types-block-small:last-child .types-image').text("Заказать");
        $('.types-block .types-block-small:last-child .types-image').css({
            'line-height': '40px',
            'height': '40px'
        });
    });

    $('.types-block .types-block-small:last-child').on('mouseleave', function() {
        $('.types-block .types-block-small:last-child .click-text').remove();
        $('.types-block .types-block-small:last-child .types-image').text("С обшивкой из поликарбоната с коваными элементами");
        $('.types-block .types-block-small:last-child .types-image').css({
            'line-height': '20px',
            'height': '40px'
        });
    });



        
        

    // код для добавления выбранной конфигурации
    let width = 0;
    let height = 0;

    function configAddWidth() {
        width = $('.left-input').val();
        $('.choose-list li .input-text-width').val(width);

        
        // if (height != 0) {
        //     widthSend();
        // }
        // widthSend();
    }

    //$('form input').on('change', function(){
        
 
        
    // код для отправки формы через ajax
    function buildQuery() {
        let data = {};
        $("form").each(function (i) {
            $(this).serializeArray().forEach(function (el, key) {
                if (typeof data[el.name] == "undefinded") {
                    data[el.name] = el.value;
                } else {
                    if (el.value != "") {
                        data[el.name] = el.value;
                    }
                }
            });
        });
        $.ajax({
            method: "POST",
            url: 'controller.php',
            data: data,
            dataType: "json",
            success: function(result){
                //alert(result);
            } 
        })
        .done(function (msg) {
            //alert(msg);
            $('.choose-config-form .choose-config-input').val(msg);
            console.log(msg);
        });
    }
    $("form input").keyup(function (e) { buildQuery() });  
    $("form input").change(function (e) { buildQuery() }); 
    // function sendAjaxForm() {
        // $('.config-form').on("submit", function(event) { 
        //     event.preventDefault();
        //     let action = $(this).attr('action');
        //     $.ajax({
        //         url: action,
        //         type: 'POST',
        //         data: $(this).serialize(),
        //         success: function(result) {
        //             alert(result);
        //         }
        //     });
        // });
    // }

        // $("#config-form-btn").click(function() {
        //     sendAjaxForm();
        //     return false;
        // });
    // });

    
    
    
    
    function configAddHeight() {
        height = $('.right-input').val();
        // $('.choose-list li:first-child').append(`
        //     <span>${width}x${height}мм</span>
        // `);
        
        $('.multy-width-height').css('display', 'inline');
        $('.choose-list li .input-text-height').val(height);
        // if (width != 0) {
        //     heightSend();
        // }
        // heightSend();
    }

    // function widthSend() {
    //     $('.form-width').each(function () {
    //         $(this).validate({
    //             errorPlacement(error, element) {
    //                 return true;
    //             },
    //             focusInvalid: false,
    //             rules: {
    //                 ширина: {
    //                     required: true,
    //                     maxlength: 4,
    //                 },
    //             },
    //             messages: {
    //                 ширина: {
    //                     required: 'Нужно что-то ввести',
    //                     maxlength: 'Нужно ввести максимум 4 цифры',
    //                 },
    //             },
    //             submitHandler(form) {
    //                 let th = $(form);
    //                 $.ajax({
    //                     type: "POST",
    //                     url: "controller.php",
    //                     data: th.serialize(),
    //                 }).done(() => {
    //                     console.log("Отправлена ширина");
    //                     th.trigger('reset');
    //                 });
    
    //                 return false;
    //             }
    //         // let var_data = $(this).serialize();
            
    //         });
    //     });
    // }

    // function heightSend() {
    //     $('.form-height').each(function () {
    //         $(this).validate({
    //             errorPlacement(error, element) {
    //                 return true;
    //             },
    //             focusInvalid: false,
    //             rules: {
    //                 высота: {
    //                     required: true,
    //                     maxlength: 4,
    //                 },
    //             },
    //             messages: {
    //                 высота: {
    //                     required: 'Нужно что-то ввести',
    //                     maxlength: 'Нужно ввести максимум 4 цифры',
    //                 },
    //             },
    //             submitHandler(form) {
    //                 let th = $(form);
    //                 $.ajax({
    //                     type: "POST",
    //                     url: "controller.php",
    //                     data: th.serialize(),
    //                 }).done(() => {
    //                     console.log("Отправлена ширина");
    //                     th.trigger('reset');
    //                 });

    //                 return false;
    //             }
    //             // let var_data = $(this).serialize();

    //         });
    //     });
    // }
    

    $('.left-input').on('blur', function(){
        configAddWidth();
        if ($('.input-text-width').val() < 1000) {
            $('.input-text-width').css('width', '30px');
        }
        else {
            $('.input-text-width').css('width', '41px');
        }
        // widthSend();
        // $('.form-width').submit();
    });

    $('.right-input').on('blur', function(){
       
        // $('.choose-list li:first-child').remove(`
        //     <span>${width}x${height}мм</span>
        // `);
        // $('.choose-list li:first-child span').addClass('clear');
        configAddHeight();
        $('.tabs-links li:nth-child(2)').click();
        // $('.form-width').submit();
        // $('.form-height').submit();
        // width = $('.left-input').val('');
        // height = $('.right-input').val('');
        // $('.form-sub').click();
        // $('.choose-list li:first-child .input-text').val(width);
        // $('.choose-list li:first-child .input-text').val(height);
        
    });



    
    var type = document.querySelectorAll('.types-gate input[type="radio"]');
    for (var i=0; i<type.length; i++){
        type[i].addEventListener('click', function(event) {
            // $('.choose-list li:nth-child(2) span').addClass('clear');
            console.log(this.value);
            type = this.value;
            $('.choose-list li .input-text-type').val(type);
            $('.tabs-links li:nth-child(3)').click();
            // $('.choose-list li:nth-child(2)').append(`
            // <span>${type}</span>
            // `);
            // $('.form-type').submit();
        });

    }

    var gateSmall = document.querySelectorAll('.tabs-pane-three input[type="radio"]');
    for (var i=0; i<gateSmall.length; i++){
        
        gateSmall[i].addEventListener('click', function(event) {
            // $('.choose-list li:nth-child(3) span').addClass('clear');
            console.log(this.value);
            gateSmall = this.value;
            $('.choose-list li .input-text-gate-small').val(gateSmall);
            $('.tabs-links li:nth-child(4)').click();
        //     $('.choose-list li:nth-child(3)').append(`
        //     <span>${gateSmall}</span>
        // `);
            // $('.form-gate-small').submit();
        });

    }

    var automatic = document.querySelectorAll('.tabs-pane-four input[type="radio"]');
    for (var i=0; i<automatic.length; i++){
        automatic[i].addEventListener('click', function(event) {
            if ($('input[value="Автоматическое"]').checked) {
                $('input[name="pane-radio-4.1"]').removeAttr('disabled');
            }
            // event.preventDefault();
            // if ($('input[name="pane-radio-4"]').checked) {
            //     $('input[name="pane-radio-4.1"]').disabled = 0;
            // } 
            // else {
            //     $('input[name="pane-radio-4.1"]').disabled = 1;
            // }
            // $('.choose-list li:nth-child(4) span').addClass('clear');
            console.log(this.value);
            automatic = this.value;
            $('.choose-list li .input-text-automatic').val(automatic);
            $('.tabs-links li:nth-child(5)').click();
        //     $('.choose-list li:nth-child(4)').append(`
        //     <span>${automatic}</span>
        // `);
            // $('.form-automatic').submit();
        });

    
    }
    // console.log($('input[name="pane-radio-4.1"]').text);
    
    // let a = $('.form-work input:checked');
    console.log($('.form-work .input-check').val());
    
     
    
    let values = [];
    $('.form-work input[type="checkbox"]').on('click', function(){
        // if (this.checked==false) {

        // }

        
        if (this.checked==true) {
            // $('[name="work_name"]:checked').each(function(){
                values.push($(this).val());
            //});
        }
            
        
        $('.calc-pars input:first-child').val(values[0]);
        console.log(values[1]);
        $('.calc-pars .input-text-check-2').val(values[1]);
        console.log(values[2]);
        $('.calc-pars input:last-child').val(values[2]);
        // if (values.length == 3) {
        //     $('.config-form').each(function () {
        //         $(this).validate({
        //             errorPlacement(error, element) {
        //                 return true;
        //             },
        //             focusInvalid: false,
        //             rules: {
        //                 Телефон: {
        //                     required: true,
        //                 },
        //                 Имя: {
        //                     required: true,
        //                     maxlength: 10,
        //                 }
        //             },
        //             messages: {
        //                 Телефон: {
        //                     required: 'Нужно что-то ввести'
        //                 },
        //                 Имя: {
        //                     required: 'Нужно что-то ввести',
        //                     maxlength: 'Нужно ввести максимум 5 букв'
        //                 }
        //             },
        //             submitHandler(form) {
        //                 let th = $(form);
        
        //                 $.ajax({
        //                     type: 'POST',
        //                     url: 'controller.php',
        //                     data: th.serialize(),
        //                     // eslint-disable-next-line func-names
        //                 }).done(() => {
        //                     console.log("Отправлено");
        //                     // th.trigger('reset');
        //                 });
        
        //                 return false;
        //             }
        
        //         });
        //     });
        //     // $('.config-form').submit();
        // }
        
            
    });
    console.log(values);

    // функция для табов

    

    $('.tabs-links li').on('click', function(e){
        e.preventDefault();

        $('.tabs-links li').removeClass('active');
        $(this).addClass('active');

        $('.tabs-links a').removeClass('active-link');

        let href = $(this).attr('href');
        $('.tabs-pane').removeClass('active');
        $(href).addClass('active');
    });
});