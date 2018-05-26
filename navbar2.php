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
                <?php if(isset($_COOKIE["login"])){
                    $user = $_COOKIE["login"];
                    echo "<li><a href='#'>" . $user . "</a></li>";
                }?>
                <li><a href="/content/read/start.php">Read</a></li>
                <li><a href="/content/learn/vocabulary/test-i-have-a.php">Tests</a></li>
                <li><a href="/content/listen-and-watch/start.php">Watch and listen</a></li>
                <li><a href ="/logout.php"> Выход </a></li>
            </ul>
        </div>

    </nav>
</div>