<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員登入</title>
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<nav>
    <?php include "./layout/header.php";?>
  </nav>
<div class="container">
  <h1>帳號登入</h1>
  <br>
  <br>
  <br>
  <?php
  if(isset($_GET['error'])){
    echo"<h2>{$_GET['error']}</h2>";//如果錯誤的話顯示帳密錯誤訊息
  }
  ?>
  <form action="chklogin.php" method="post">

  <table>
    <tr>
      <td>帳號</td>
      <td><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
      <td>密碼</td>
      <td><input type="password" name="pw" id=""></td>
    </tr>
    <tr>
      <td><a href="register.php">尚未註冊?</a></td>
      <td><a href="forgot.php">忘記密碼?</a></td>
    </tr>
  </table>
  <div class="btns">
    <input type="submit" value="登入">
    <input type="reset" value="重置">
  </div>
  </form>
</div>
<?php include "./layout/footer.php";?>
</body>
</html>