$(document).ready(function() {
    // код для кнопки бургер-меню
    let burger = document.querySelector('.header-burger');
	let menu = document.querySelector('.nav-menu-mobile');
	let close = document.querySelector('.header-close');
	let menuElements = document.querySelectorAll('.nav-menu-mobile ul a');

    //console.log(menuElements);

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

    $('.header-button, .design-button, .design-button-phone, .types-image, .measure-button, .header-login').click(function () {
        $('.popup-container').fadeIn(400, disableScroll);
    });

    $('.popup-container').click(function (event) {
        if (event.target == this) {
            $(this).fadeOut(400, enableScroll);
        }
    });

    // код для валидации формы
    $('.form-footer').each(function () {
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
            'line-height': '40px',
            'height': '40px'
        });
    });



        
        

    // код для добавления выбранной конфигурации
    let width = 0;
    let height = 0;

    function configAddWidth() {
        width = $('.left-input').val();
        $('.choose-list li .input-text-width').val(width);

        
        
    }

    
        
 
        
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
    

    
    
    
    
    function configAddHeight() {
        height = $('.right-input').val();
        
        
        $('.multy-width-height').css('display', 'inline');
        $('.choose-list li .input-text-height').val(height);
        $('.mm-width-height').css('display', 'inline');
        
    }

    
            
    
    

    $('.left-input').on('blur', function(){
        configAddWidth();
        if ($('.input-text-width').val() < 1000) {
            $('.input-text-width').css('width', '30px');
        }
        else {
            $('.input-text-width').css('width', '41px');
        }
        
    });

    $('.right-input').on('blur', function(){
       
        
        configAddHeight();
        $('.tabs-links li:nth-child(2)').click();
        
        
    });




    $('.types-gate li:first-child, .types-gate li:nth-child(3n), .types-gate li:nth-child(4n), .types-gate li:last-child').click(function(){
        // $('.choose-list li .input-text-type').val(this.value);
        $('.popup-container').fadeIn(400, disableScroll);

    });

    // $('.types-gate li:nth-child(6n), .types-gate li:last-child').click(function(){
    //     $("br").empty();
    //    $('.choose-list li:nth-child(2)').append(`<br>`);
    // });

    var type = document.querySelectorAll('.types-gate input[type="radio"]');
    for (var i=0; i<type.length; i++){
        
        type[i].addEventListener('click', function(event) {
            
            
                //console.log(this.value);
                type = this.value;
                $('.choose-list li .input-text-type').val(type);
                $('.tabs-links li:nth-child(3)').click();
            
            
            
           
        });

    }

    var gateSmall = document.querySelectorAll('.tabs-pane-three input[type="radio"]');
    for (var i=0; i<gateSmall.length; i++){
        
        gateSmall[i].addEventListener('click', function(event) {
            
            console.log(this.value);
            gateSmall = this.value;
            $('.choose-list li .input-text-gate-small').val(gateSmall);
            $('.tabs-links li:nth-child(4)').click();
        
        });

    }

    var automatic = document.querySelectorAll('.tabs-pane-four input[type="radio"]');
    //console.log(automatic);
    $('.gates-border').hide();
    
    for (var i=0; i<automatic.length; i++){
        automatic[i].addEventListener('click', function(event) {
            
            if (this.value == "Автоматическое") {
                if ($('.choose-list li .input-text-automatic').val() == "Ручное") {
                    $('.choose-list li .input-text-automatic').val(" ");
                }
                $('.gates-border').show();
                // automatic = this.value;
                // $('.choose-list li .input-text-automatic').val(automatic);
            }
            if (this.value == "Ручное") {
                $('#ruch').on('click', function() {
                    let obj = document.getElementsByName("pane-radio-4.1");
                         for (let i = 0; i < obj.length; i++) {
                             obj[i].checked = false;
                         }
                });
                
                $('.gates-border').hide();
                $('.tabs-links li:nth-child(5)').click();
                automatic = this.value;
                $('.choose-list li .input-text-automatic').val(automatic);
            }
            if (this.value == "Alutech" || this.value == "Nice" || this.value == "CAME") {
                $('.tabs-links li:nth-child(5)').click();
                automatic = this.value;
                $('.choose-list li .input-text-automatic').val(automatic);
            }



            
            console.log(this.value);
            automatic = this.value;

           
        });

    
    }
    
    //console.log($('.form-work .input-check').val());
    
     
    
    let values = [];
    $('.form-work input[type="checkbox"]').on('click', function(){
        
        
        if (this.checked == true) {
            
                values.push($(this).val());
            
        }

        if (this.checked == false && $(this).val() == "Монтаж ворот" && values[2] == "Монтаж ворот") {
            values.pop();
        }

        else if (this.checked == false && $(this).val() == "Монтаж ворот" && values[1] == "Монтаж ворот") {
            values.splice(1,1);
        }

        else if (this.checked == false && $(this).val() == "Монтаж ворот" && values[0] == "Монтаж ворот") {
            values.shift();
        }

        if (this.checked == false && $(this).val() == "Выемка грунта + бетонирование основания" && values[2] == "Выемка грунта + бетонирование основания") {
            values.pop();
        }

        else if (this.checked == false && $(this).val() == "Выемка грунта + бетонирование основания" && values[1] == "Выемка грунта + бетонирование основания") {
            values.splice(1,1);
        }

        else if (this.checked == false && $(this).val() == "Выемка грунта + бетонирование основания" && values[0] == "Выемка грунта + бетонирование основания") {
            values.shift();
        }

        if (this.checked == false && $(this).val() == "Бетонирование отдельно стоящих столбов" && values[2] == "Бетонирование отдельно стоящих столбов") {
            values.pop();
        }

        else if (this.checked == false && $(this).val() == "Бетонирование отдельно стоящих столбов" && values[1] == "Бетонирование отдельно стоящих столбов") {
            values.splice(1,1);
        }

        else if (this.checked == false && $(this).val() == "Бетонирование отдельно стоящих столбов" && values[0] == "Бетонирование отдельно стоящих столбов") {
            values.shift();
        }

        


        $('.calc-pars input:first-child').val(values[0]);
        console.log(values[1]);
        $('.calc-pars .input-text-check-2').val(values[1]);
        console.log(values[2]);
        $('.calc-pars input:last-child').val(values[2]);
        
        
            
    });
    //console.log(values);

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

    // let action = "send_mail.php";
    // $(function () {
    //     $('.form-header').on('submit', function() {
    //         // let dataMail = $(this).serialize();
    //         let data = $('.config-form').serialize();
    //         // $.post(action, dataMail);
    //         $.post(action, data);
    //     });
    // });
});