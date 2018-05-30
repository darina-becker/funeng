function sign_up() {
    var login = $('#log_signUp').val();
    var email = $('#email_signUp').val();
    var pswd = $('#pass_signUp').val();
    var re_enter = $('#reenterpass').val();
    var msg = '';


    if (pswd == re_enter) {


        //проверка на пустоту
        //удаление пробелов
        $.post('sign_up.php', {username: login, password: pswd, email:email},
            function (result) {


                if (result == 'OK') {
                    ///msg = '<p>Поздравляем, Вы успешно зарегистрировались!</p>';
                    $("#signUpForm").css( "display", "none" );
                  //  result = 'GJkdngj';
                   // $('.note').html(result);

                   // $('.note').html(msg);
                   document.getElementById('note').innerHTML='Поздравляем, Вы успешно зарегистрировались!';


                }
                else {
                    //$('.note').html(result);
                    document.getElementById('note').innerHTML = result ;

                    // alert(result);

                }
            });
    }

}



