<?php
require_once 'adr.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
if (!$link) {
die("Connection failed: " . mysqli_connect_error());
}
 



$name = strip_tags(trim($_POST['name']));
$tel = strip_tags(trim($_POST['tel']));
$cena = strip_tags(trim($_POST['cena']));
$prob = strip_tags(trim($_POST['prob']));


$sql = "INSERT INTO tab2 (name, tel, cena, prob) VALUES ('$name', '$tel', '$cena', '$prob')";
if (mysqli_query($link, $sql)) {
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);


		
?>