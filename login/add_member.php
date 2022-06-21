<?php
include_once "connect.php"; //連線資料庫

$sql="INSERT INTO `users` (`acc`,`pw`,`name`,`birthday`,`addr`,`email`) 
                    values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['birthday']}','{$_POST['addr']}','{$_POST['email']}');";

$pdo->exec($sql);

header("location:login.php");

?>