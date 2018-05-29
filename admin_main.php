
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" >
    <title>funnyEnglish</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/uploadForm.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
<div>
    <nav class="navigation">
        <div>
            <img height="100" src="img/logo_on_bar.png" alt = "funnyEnglish" class="logo"/>
        </div>
        <div>
            <ul>
                <li><a href ="#" class="btn-upload-test"> Залить тесты</a></li>
                <li><a href ="#" > Залить видео </a></li>
                <li><a href ="#" > Ссылки на видео </a></li>
                <li><a href ="#" > Выход </a></li>
            </ul>
        </div>
    </nav>

</div>

<div class="uploadTestScene">
    <div class="uploadTestBlock">
        <div class="close">
            <span onclick="closeUploadTestForm()">×</span>
        </div>
        <div>
            <form id="uploadTestForm" action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload test" name="submit">
            </form>
        </div>
    </div>
</div>


<?php
include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/upload_files.js"></script>

</body>
</html>