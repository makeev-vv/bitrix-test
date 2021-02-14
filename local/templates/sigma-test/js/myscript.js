$(document).ready(function () {
    $('#form_1').submit(function(e) {
        // запрет стандартной отправки формы
        e.preventDefault();

        $.ajax(
            {
                url: "/local/ajax/formhandler.php", //Адрес, на который отправляется запрос
                type: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    let result = '';
                    if("error" in data){
                        result+= "<p>Данные не были переданы!</p>" 
                    }else{
                        $.each(data, function(key, item) {
                            if(item){
                                result += "<p>" + key + " = " + item + "</p><hr>";
                            }else{
                                result += "<p>" + key + " = \"\"</p><hr>";
                            }
                            
                        });
                    }
                    $('.btn-popup').css({
                        'opacity': '1',
                        'visibility': 'visible'
                    });
                    $('.popup__text').html(result);
                    popupToggle();
                }
            }
        )
    });
    
    $('.btn-popup').click(function () {
        popupToggle();
    });

    $('.popup__close').click(function () {
        popupToggle();
    });

    $('.popup__area').click(function () {
        popupToggle();
    });
    
    function popupToggle() {
        $('.popup').toggleClass("popup--open");
    }
});

