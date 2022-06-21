<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員中心</title>
  <link rel="stylesheet" href="./css/index.css">
  <style>
    .remove{
      color: #eee;
    }
    .remove:hover{
      color: red;
    }
  </style>
</head>
  <?php
  include "connect.php";//連接資料庫

  $sql="select * from `users` where acc='{$_SESSION['user']}'";
  $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);//導出資料
  ?>
<body>
<nav>
    <?php include "./layout/header.php";?>
    <?php include "./layout/front_nav.php";?>
  </nav>
<div class="container">
  <h1>會員中心</h1>
  歡迎<?=$_SESSION['user'];?>
  <hr>
  <?php
  echo '序號:'.$user['id']."<br>";//將資料庫會員資料顯示出來
  echo '帳號:'.$user['acc']."<br>";
  echo '密碼:'."*******"."<br>";
  echo '姓名:'.$user['name']."<br>";
  echo '生日:'.$user['birthday']."<br>";
  echo '地址:'.$user['addr']."<br>";
  echo 'email:'.$user['email']."<br>";
  echo '密碼提示:'.$user['passnote']."<br>";
  ?>
    <form action="edit.php" method="post">
      <input type="hidden" name="id" value="<?=$user['id'];?>"> <!-- 隱藏按鈕帶參數過去 -->
      <input type="submit" value="編輯">
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <a class="remove" href="remove_acc.php?id=<?=$user['id'];?>">刪除帳號</a>
</div>
<?php include "./layout/footer.php";?>
</body>
</html>