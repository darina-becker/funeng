function sign_in() {
    var login = $('#login_field').val();
    var pswd = $('#password_field').val();
    var token = $('#tokenAdmSignIn').val();
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
    $.post('admin_signin.php', {username:login, password:pswd, token:token},
        function (result) {
            if (result == 'OK')
            {
                window.location = '/admin_main.php';
            }
            else {
                alert(result);
            }
        });

}

var nav = document.getElementsByClassName('navigation')[0];

var btn = document.getElementsByClassName('btn-sign-in')[0];
var sign_in_form = document.getElementsByClassName('signInScene')[0];
var modalSignIn = document.getElementsByClassName('signInScene')[0];

btn.onclick = function () {

    sign_in_form.style.display = "block";
    nav.style.display = "none";
}

function closeSignInForm() {

    sign_in_form.style.display = "none";
    nav.style.display = "block";
}

window.onclick = function (event) {

    if (event.target == modalSignIn) {
        modalSignIn.style.display = 'none';
        nav.style.display = 'block';
    }

}