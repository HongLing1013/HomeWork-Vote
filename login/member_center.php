<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員中心</title>
</head>
<body>
<a href="logout.php">登出</a>
  <h1>會員中心</h1>
  <?php session_start(); ?>
  歡迎<?=$_SESSION['user'];?>祝你有美好的一天
</body>
</html>