<?php
require_once 'adr.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
if (!$link) {
die("Connection failed: " . mysqli_connect_error());
}
 



$name = strip_tags(trim($_POST['name']));
$mail = strip_tags(trim($_POST['mail']));
$message = strip_tags(trim($_POST['message']));



$sql = "INSERT INTO tab1 (name, mail, message) VALUES ('$name', '$mail', '$message')";
if (mysqli_query($link, $sql)) {
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);


		
?>