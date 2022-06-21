<?php
include "connect.php";//連線資料庫

$acc=$_POST['acc'];
$pw=$_POST['pw'];//接收帳號密碼

$sql="SELECT * FROM `users` WHERE `acc`='$acc' && `pw`='$pw'";//尋找資料表的acc跟pw是否相符
$user=$pdo->query($sql)->fetch();

$error='';

if($acc==$users['acc'] && $pw==$users['pw']){
  // 登入成功
  header("location:member_center.php");
}else{
  // 登入失敗
  $error="帳號密碼錯誤";
  header("location:login.php?error=$error");
}
?>