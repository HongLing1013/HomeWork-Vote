<?php
include "connect.php";//連線資料庫

$acc=$_POST['acc'];

$sql="SELECT * FROM `users` WHERE `acc`='$acc'";//尋找資料表的acc相符的資料

$user=$pdo->query($sql)->fetch();


if(empty($user)){//如果資料庫有這個帳號的話給密碼
  echo "查無此帳號";
}else{
  echo "你當初提供的密碼提示為:".$user['passnote'];
}
?>
<!-- 
<a href="index.php">回首頁</a>
<a href="login.php">重新登入</a> -->