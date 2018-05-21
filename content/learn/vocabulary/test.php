<?php
	//Получаем данные из глобальной переменной $_POST, так как мы передаем данные методом POST
	$cat = $_POST['cat']; // Вытаскиваем ответ на первый вопрос в переменную
	$dog = $_POST['dog']; // Вытаскиваем ответ на второй вопрос в переменную
	$rabbit = $_POST['rabbit']; // Вытаскиваем ответ на третий вопрос в переменную
	$turtle = $_POST['turtle']; // Вытаскиваем ответ на первый вопрос в переменную
	$bird = $_POST['bird']; // Вытаскиваем ответ на второй вопрос в переменную
	$hamster = $_POST['hamster']; // Вытаскиваем ответ на третий вопрос в переменную

	$result = 0; // результат будет в процентах правильных ответов
	
	if ($cat == "cat") {
		$result += 1;
	}
	
	if ($dog == "dog") {
		$result += 1;
	}
	
	if ($rabbit == "rabbit") {
		$result += 1;
	}
	
	if ($turtle == "turtle") {
		$result += 1;
	}
	
	if ($bird == "bird") {
		$result += 1;
	}
	
	if ($hamster == "hamster") {
		$result += 1;
	}
	
	if($result>=5){
	echo "<center>Молодец! $result правильных ответов! </center>";}
	if($result<5 and $result>3){
	echo "<center>Хорошо! $result правильных ответов! </center>";}
	if($result<=3){
	echo "<center>$result правильных ответа. Попробуй ещё разок! </center>";}
?>


