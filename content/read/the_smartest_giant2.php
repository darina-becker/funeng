<?php
include '../../check_session.php';
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

    <title>Новый наряд великана</title>
<style>html, body {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        background-color: #009966;
        height: 100%;
        -webkit-font-smoothing: antialiased;
    }

    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .message {
        text-align: center;
        align-self: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0px 20px;
        max-width: 710px;
    }

    .message__logo {
        max-width: 200px;
        max-height: 200px;
        border: none;
    }

    .message__title {
        font-size: 40px;
        font-weight: 100;
        margin-top: 15px;
        color: #47494E;
        margin-bottom: 8px;
    }

    .message__subtitle {
        font-size: 23px;
        font-weight: 100;
        margin-top: 15px;
        color: #47494E;
        margin-bottom: 8px;
    }

    p {
        -webkit-margin-after: 0px;
        -webkit-margin-before: 0px;
        font-size: 15px;
        color: #7F828B;
        line-height: 21px;
        margin-bottom: 4px;
    }

    .w600px {
        max-width: 600px;
    }

    a, small {
        -webkit-margin-after: 0px;
        -webkit-margin-before: 0px;
        font-size: 14px;
        color: #7F828B;
        line-height: 21px;
        margin-bottom: 4px;
        margin-top: 20px;
        text-decoration: none;
    }

    a {
        font-size: 15px;
        color: #b80303;
        padding-bottom: 2px;
        text-decoration: underline;
    }
    .btn {
        display: inline-block;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 4px;
        margin-top: 10px;
        font-size: 14px;
        color: #7F828B;
        border: 1px solid #7F828B;
    }

    .btn-active {
        margin-top: 35px !important;
        background: #d10303;
        color: #fff !important;
        font-size: 17px;
        font-weight: 500;
        border: none;
    }

    .hk-logo, .app-icon {
        fill: #DBE1EC;
    }

    .info {
        fill: #9FABBC;
    }

    body.friendly {
        background: -webkit-linear-gradient(-45deg, #b80303 0%, #000 100%);
        background: linear-gradient(135deg, #b80303 0%, #000 100%);
    }

    body.friendly .message__title {
        color: #fff;
    }

    body.friendly p {
        color: rgba(255, 255, 255, 0.6);
    }

    body.friendly .hk-logo, body.friendly .app-icon {
        fill: rgba(255, 255, 255, 0.9);
    }

    body.friendly .info {
        fill: rgba(255, 255, 255, 0.9);
    }

    body.friendly .btn {
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.9);
    }

    .info_area {
        position: fixed;
        right: 12px;
        bottom: 12px;
    }

    .logo {
        position: fixed;
        left: 12px;
        bottom: 12px;
    }
    #footer {
        display: none;
    }

    .text
    {
        color: #dddddd;
        font-size: 20px;
        font-family: 'Caveat', cursive;
    }
    .text2{
        font-family: 'Caveat', cursive;
        color: #24292e;
    }
    </style>
</head>

<body>
<h1 class="text2">Новый наряд великана</h1>
<p class="text">Сказка Джулии Дональдсон об очень добром великане, который хотел выглядеть модно, но не смог пройти мимо чужого горя и остался при своем старом наряде.</p>

<iframe width="660" height="415" src="https://www.youtube.com/embed/cfiPrA8E3qE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<p class="text">Книга: <a href="books/The_Smartest_Giant.pdf" >The Smartest Giant</a></p>
<p class="text">Веселые задания: <a href="books/The_Smartest_Giant_activity.pdf"> The Smartes Giant - Activity book </a></p>

</body>
</html>