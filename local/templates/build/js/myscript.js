!function() {    
    $(function() {

        $( ".input__input" ).keyup(function() {
            var val = $(this)[0].value
            var name = $(this)[0].offsetParent.innerText
            var nextElement = $(this)[0].nextElementSibling

            if(val.length < 3 && (name == "Ваше имя*" || name == "Компания/Должность*" || name == "Сообщение"))
            {
                nextElement.style.cssText = "opacity: 1; visibility: visible";
                nextElement.innerHTML  = "Поле должно содержать не менее 3-х символов";  
            }
            else if (name == "Email*" && val.length > 0 && (val.match(/.+?\@.+/g) || []).length !== 1) 
            {
                nextElement.style.cssText = "opacity: 1; visibility: visible";
                nextElement.innerHTML  = "Неверный формат почты"; 
            }
            else
            {
                nextElement.style.cssText = "";    
            }                                 

        });       
    });
}();


    //Отправка формы



