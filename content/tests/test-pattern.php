
<?php
/*загружаем файл (из бд)*/
$xml=simplexml_load_file("xml/i-have-a-pet.xml");

/*проверка на ошибки*/
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    /*парсинг xml файла и верстка теста*/
    echo "<h1>", $xml->caption, "</h1>";
    $qid =1;
    foreach ($xml->quest as $quest) {
        echo "<p><div class=\"text\">", $quest->title,  "</div></p>";
        $qid++;
        $id=1;
        $ransw = $quest->ransw;
        echo "<div class = testbtn>";
        foreach ($quest->answ as $answ) {
            if($answ->image){
                echo "<button  onclick=\"check(",$id,",",$ransw,",",$id,$qid,")\", id=\"",$id,$qid,"\"><img src=\"", $answ->image,  "\"></button>"; $id++;}
            else {echo "<button onclick=\"check(",$id,",", $ransw,",",$id,$qid,")\" id=\"",$id,$qid,"\">", $answ,  "</button>";$id++;}
        }
        echo "</div>";
    }
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

