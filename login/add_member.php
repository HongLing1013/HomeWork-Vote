<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=vote";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `users` (`acc`,`pw`,`name`,`birthday`,`addr`,`email`) 
                    values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['birthday']}','{$_POST['addr']}','{$_POST['email']}');";

$pdo->exec($sql);

header("location:login.php");

?>