$(document).ready(function(){
    $("form").submit(function() { // Событие отправки с формы
        let form_data = $(this).serialize(); // Собираем данные из полей
        $.ajax({
            type: "POST", // Метод отправки
            url: "wp-content/themes/world-safety/world-safety/sendform.php", // Путь к PHP обработчику sendform.php
            data: form_data,
            success: function() {
                $('.popup_thanks').addClass('active');

            }
        });
        event.preventDefault();
    });
    $('.close-thanks').click(function () {
        $('.popup_thanks').removeClass('active');

    });


});

