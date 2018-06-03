
<?php
function build($file)
{
    /*загружаем файл (из бд)*/
//    $file=$_GET['test'];
    $xml = simplexml_load_file($_SERVER["DOCUMENT_ROOT"]."/content/tests/xml/" . $file . ".xml");

    /*проверка на ошибки*/
    if ($xml === false) {
        echo "Failed loading XML: ";
        foreach (libxml_get_errors() as $error) {
            echo "<br>", $error->message;
        }
    } else {
        /*парсинг xml файла и верстка теста*/
        echo "<h1>", $xml->caption, "</h1>";
        $qid = 1;
        foreach ($xml->quest as $quest) {
            echo "<p><div class=\"text\">", $quest->title, "</div></p>";
            $qid++;
            $id = 1;
            $ransw = $quest->ransw;
            echo "<div class = testbtn>";
            foreach ($quest->answ as $answ) {
                if ($answ->image) {
                    echo "<button  onclick=\"check(", $id, ",", $ransw, ",", $id, $qid, ")\", id=\"", $id, $qid, "\"><img src=\"", $answ->image, "\"></button>";
                    $id++;
                } else {
                    echo "<button onclick=\"check(", $id, ",", $ransw, ",", $id, $qid, ")\" id=\"", $id, $qid, "\">", $answ, "</button>";
                    $id++;
                }
            }
            echo "</div>";
        }
    }
    echo "<br><p class=\"readListen\"><a href=\"javascript:location.reload(true)\">Ещё раз</a></p>";
}
?>


<!---Скрипт проверки теста-->
<script type="text/javascript">

    function check(num, rightnum, id){
        if(num != rightnum)
        {
            document.getElementById(id).style.backgroundColor = '#ffbdad';
        }
        else {
            document.getElementById(id).style.backgroundColor = '#d0ff00';
        }
    }

</script>

