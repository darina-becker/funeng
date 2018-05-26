<?php
    include 'check_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
<body>
<<<<<<< HEAD
<div>
    <nav class="navigation">
        <div class="logo">

            <img height="100" src="img/logo_on_bar.png" alt = "EnglishMen" class="logo"/>
        </div>
        <div>

            <ul>
                <?php if(isset($_COOKIE["login"])){
                    $user = $_COOKIE["login"];
                    echo "<li><a href='#'>" . $user . "</a></li>";
                }?>
                <li><a href="/content/read/start.php">Read</a></li>
                <li><a href="/content/learn/vocabulary/test-i-have-a.php">Tests</a></li>
                <li><a href="/content/listen-and-watch/start.php">Listen and Watch</a></li>
                <li><a href ="/logout.php"> Выход </a></li>
            </ul>
            <img width="250" src="img/logo3.png" alt = "EnglishMen" class="logo3"/>

        </div>

    </nav>
</div>

<!--не видно его на странице почему-то-->
<div class="contentText"><p><?php include "copyright.php"; ?></p></div>

=======
<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/navbar.php');
?>

<?php
include( $_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>
>>>>>>> 5b708f2e47aa8d5562c32776d7a90c1ecfbca146
</body>
</html>