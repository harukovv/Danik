// Создаём событие по нажатию на кнопку.
$("#submit").click(function(){
    // Валидация полей для ввода.
    if ($("#login").val() !== '' && $("#password").val() !== ''){
        // Подключение АПИ с присвоением данных к переменным.
        $.post("./api-auto.php" , {
            login : $("#login").val(),
            password : $("#password").val()
        }, function(data){
            alert(data);
            if(data != '0'){
                let link = "main1.php?name=" + $('#login').val();
                alert(link);
                window.location.replace(link);
            }
        });
    }else{
        // в случае,если поля для ввода являются пустыми.
        alert("Заполните все поля");
    }
});