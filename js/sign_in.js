function sign_in() {
    var login = $('#login_field').val();
    var pswd = $('#password_field').val();
    var token = $('#tokenSignIn').val();

/*
    $.ajax({
        type: "POST",
        url: "/sign_in.php",
        username: login,
        password: pswd,
        success: function(msg) {
            alert(msg);
        }
    });*/
    $.post('sign_in.php', {username:login, password:pswd, token:token},
        function (result) {
            if (result == 'OK')
            {
                window.location = '/main.php';
            }
            else {
                alert(result);
            }
        });

}

