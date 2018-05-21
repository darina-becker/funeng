var nav = document.getElementsByClassName('navigation')[0];
var btn = document.getElementsByClassName('btn-sign-in')[0];
var reg_btn = document.getElementsByClassName('btn-reg')[0];
var sign_in_form = document.getElementsByClassName('signInScene')[0];
var reg_form = document.getElementsByClassName('signUpScene')[0];
var modalSignIn = document.getElementsByClassName('signInScene')[0];
var modalSignUp = document.getElementsByClassName('signUpScene')[0];

btn.onclick = function () {
    sign_in_form.style.display = "block";
    nav.style.display = "none";
    /*header.style.display = "none";
    footer.style.display = "none";
    next.style.display = "none";
    prev.style.display = "none";*/
}

reg_btn.onclick = function () {
    reg_form.style.display = "block";
    nav.style.display = "none";
}


function closeSignInForm() {
    sign_in_form.style.display = "none";
    nav.style.display = "block";
    /*header.style.display = "flex";
    footer.style.display = "flex";
    next.style.display = "block";
    prev.style.display = "block";*/
}

function closeRegForm() {
    reg_form.style.display = "none";
    nav.style.display = "block";


}


window.onclick = function (event) {
    if (event.target == modalSignIn) {
        modalSignIn.style.display = 'none';
        nav.style.display = 'block';
    }
    if(event.target == modalSignUp){
        modalSignUp.style.display = 'none';
        nav.style.display = 'block';
    }
}


