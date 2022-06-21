<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員中心</title>
</head>
  <?php
  include "connect.php";//連接資料庫

  $sql="select * from `users` where acc='{$_SESSION['user']}'";
  $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);//導出資料
  ?>
<body>
<a href="logout.php">登出</a>
  <h1>會員中心</h1>
  歡迎<?=$_SESSION['user'];?>
  <hr>
  <?php
  echo '序號:'.$user['id']."<br>";
  echo '帳號:'.$user['acc']."<br>";
  echo '密碼:'.$user['pw']."<br>";
  echo '姓名:'.$user['name']."<br>";
  echo '生日:'.$user['birthday']."<br>";
  echo '地址:'.$user['addr']."<br>";
  echo 'email:'.$user['email']."<br>";
  ?>
</body>
</html>