<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 23.05.2018
 * Time: 2:26
 */

?>

<div>
    <nav class="navigation">
        <div class="logo">
            <img height="100" src="/img/logo_on_bar.png" alt = "EnglishMen" class="logo"/>
        </div>
        <div>
            <ul>
                <?php
                include "db.php";


                if(isset($_COOKIE["id"])){

                    $id_from_cookie = $_COOKIE["id"];
                    $login_from_bd = "SELECT login FROM `users` WHERE id = '" . $id_from_cookie . "'";
                if ($result = mysqli_query($connection, $login_from_bd)) {
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $login = $row["login"];
                    echo "<li><a href='#'>" . $login . "</a></li>";
                    }
                }


                }?>
                <li><a href="/content/read/start.php">Watch and read</a></li>
                <li><a href="/content/tests/start.php">Tests</a></li>
                <li><a href="/content/learn/start.php">Learn</a></li>
                <li><a href="/content/listen-and-watch/start.php">Watch and listen</a></li>
                <li><a href ="/logout.php"> Выход </a></li>
            </ul>
        </div>

    </nav>
</div>