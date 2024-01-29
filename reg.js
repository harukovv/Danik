$('#submit').click(function () {
    // Проверяем, что все поля заполнены
    if ($('#name').val() !== '' && $('#lastname').val() !== '' && $('#middlename').val() !== '' &&
        $('#login').val() !== '' && $('#password').val() !== '' && $('#phone').val() !== '' &&
        $('#email').val() !== '') {
        // Все поля заполнены, отправляем запрос
        $.post('./api.php', {
            name: $('#name').val(),
            lastname: $('#lastname').val(),
            middlename: $('#middlename').val(),
            login: $('#login').val(),
            password: $('#password').val(),
            phone: $('#phone').val(),
            email: $('#email').val()
        }, function (data) {
            $('.chlken').append(data);
            window.location.replace("autoriz.html");
        });
    } else {
        // Не все поля заполнены, показываем сообщение об ошибке или выполняем другие действия
        alert('Заполните все поля');
    }
});

