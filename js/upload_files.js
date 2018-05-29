var nav = document.getElementsByClassName('navigation')[0];
var btn_upload_test = document.getElementsByClassName('btn-upload-test')[0];
var upload_test_form = document.getElementsByClassName('uploadTestScene')[0];
var modalUploadTest = document.getElementsByClassName('uploadTestScene')[0];

btn_upload_test.onclick = function() {
    upload_test_form.style.display = "block";
    nav.style.display = "none";
}

function closeUploadTestForm() {
    upload_test_form.style.display = "none";
    nav.style.display = "block";
}

window.onclick = function (event) {

    if (event.target == modalUploadTest) {
        modalUploadTest.style.display = 'none';
        nav.style.display = 'block';
    }
}