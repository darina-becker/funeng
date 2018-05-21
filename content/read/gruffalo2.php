<?php
include '../../check_session.php';
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat|Indie+Flower|Lobster|Marck+Script&amp;subset=cyrillic" rel="stylesheet">

    <title>Груффало</title>
<style>html, body {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        background-color: #F7F8FB;
        height: 100%;
        -webkit-font-smoothing: antialiased;
    }

    body {
        background-color: #009966;
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
        color: #ffffff;
    }

    .message__logo {
        max-width: 200px;
        max-height: 200px;
        border: none;
        color: #ffffff;

    }

    .message__title {
        font-size: 40px;
        font-weight: 100;
        margin-top: 15px;
        color: #47494E;
        margin-bottom: 8px;
        color: #ffffff;

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
    .text{

        color: #24292e;
        font-family: 'Caveat', cursive;

    }
    .text2{
        color: #ffffff;

    }
    </style>
</head>

<body>
<h1 class="text">Груффало</h1>
<p class="text2">
Сказка Джулии Дональдсон об умном мышонке, который вымышленным чудовищем отпугнул своих обидчиков (лису, змею, сову).</p>

<iframe width="660" height="415"  src="https://www.youtube.com/embed/ThZqDoJi5S0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<p class="text2">Книга: <a href="books/Gruffalo.pdf" >The Gruffalo</a></p>
<p class="text2">Веселые задания: <a href="books/Gruffalo_activity.pdf"> The Gruffalo - Activity book </a></p>

</body>
</html>