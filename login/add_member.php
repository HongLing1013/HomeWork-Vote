<?php
include_once "connect.php"; //連線資料庫

$sql="INSERT INTO `users` (`acc`,`pw`,`name`,`birthday`,`addr`,`email`,`passnote`) 
                    values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['birthday']}','{$_POST['addr']}','{$_POST['email']}','{$_POST['passnote']}');";

$pdo->exec($sql);

header("location:login.php");

?>