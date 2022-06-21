<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <style>
    nav{
      width: 90px;
      margin: auto;
      text-align: right;
    }
    h1{
      text-align: center;
    }
  </style>
</head>
<body>
  <nav>
    <a href="login.php">登入</a>
    <a href="logout.php">登出</a>
  </nav>
  <h1>問卷</h1>

  <!-- 撈出資料庫會員資料 -->
  <?php
  include_once "connect.php"; //連線資料庫

  $sql="select * from `users` ";//撈出users這個資料表的全部內容

  $users=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

  foreach($users as $user){
    echo $user['acc']."<br>";
  }
  ?>

</body>
</html>