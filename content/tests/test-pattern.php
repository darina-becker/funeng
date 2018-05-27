
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
    echo "<p class=\"text\">", $xml->caption, "</p><br>";
    $qid =1;
    foreach ($xml->quest as $quest) {
        echo "<p class=\"text\">", $quest->title,  "</p><br><div>";

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
    var countQuest = 0;
    var plus = 0;
    var test_start = 0;

    function check(num, rightnum, id){
        if(num != rightnum)
        {
            document.getElementById(id).style.backgroundColor = '#ffbdad';
        }
        else {
            document.getElementById(id).style.backgroundColor = '#d0ff00';
        }

       /* if(num == 4){

            document.getElementById('area').style.display='block'; //
            document.getElementById('start').style.display='none';
            document.getElementById('end').style.display='inline';

            if(test_start == 0){

                // Заполниить массив вопросов
                var questions = ["Hello","Дом","Дерево","Homeland"];

                //Заполнить массивы вариантов ответов
                var number1 = ["Как дела","House","House"];
                var number2 = ["Привет","Cat","Door"];
                var number3 = ["Пока","Dog","Wall"];
                var number4 = ["Дом","Tree","Tree"];

                document.getElementById('question').innerHTML=questions[countQuest];

                document.getElementById('option1').innerHTML=number1[countQuest];
                document.getElementById('option2').innerHTML=number2[countQuest];
                document.getElementById('option3').innerHTML=number3[countQuest];
                document.getElementById('option4').innerHTML=number4[countQuest];

                //Массив правильных ответов
                var answer = [1,0,3,1];

                test_start = 1;
            }
        }
        else{
            //Массив вопросов
            var questions = ["Hello","Дом","Дерево","Homeland"];

            //Массивы вариантов ответов
            var number1 = ["Как дела","House","House","Природа"];
            var number2 = ["Привет","Cat","Door","Родина"];
            var number3 = ["Пока","Dog","Wall","Остров"];
            var number4 = ["Дом","Tree","Tree","Планета"];

            //Массив правильных ответов
            var answer = [1,0,3,1];

            if(num == answer[countQuest]) plus++;

            if(questions.length - 1> countQuest){

                countQuest++;

                document.getElementById('question').innerHTML=questions[countQuest];

                document.getElementById('option1').innerHTML=number1[countQuest];
                document.getElementById('option2').innerHTML=number2[countQuest];
                document.getElementById('option3').innerHTML=number3[countQuest];
                document.getElementById('option4').innerHTML=number4[countQuest];

            }
            else{

                document.getElementById('area').style.display='none';
                alert('У Вас ' + plus + ' правильных ответа!');
            }
        }*/
    }

</script>

