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



$sql = "INSERT INTO tab2 (name, tel, cena) VALUES ('$name', '$tel', '$cena')";
if (mysqli_query($link, $sql)) {
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);


		
?>