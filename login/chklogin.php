<?php
include "connect.php";//連線資料庫

$acc=$_POST['acc'];
$pw=$_POST['pw'];//接收帳號密碼

$sql="SELECT count(*) FROM `users` WHERE `acc`='$acc' && `pw`='$pw'";//尋找資料表的acc跟pw是否相符
$chk=$pdo->query($sql)->fetchColumn();

$error='';

if($chk){//如果資料庫有這一筆資料的話就是Ture
  header("location:member_center.php");// 登入成功導向會員頁
}else{
  $error="帳號密碼錯誤";
  header("location:login.php?error=$error");// 登入失敗回到登入頁
}
?>