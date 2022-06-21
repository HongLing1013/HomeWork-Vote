<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>忘記密碼</title>
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  <!-- 上方選單 -->
<nav>
    <?php include "./layout/header.php";?>
  </nav>

  <!-- 主要內容 -->
<div class="container">
  <h1>忘記密碼</h1>
  <form action="chk_acc.php" method="post">
    <p>請輸入你要找回密碼的帳號：</p>
    <input type="text" name="acc" id=""><br>
    <input type="submit" value="檢查">
  </form>
</div>

<!-- 頁尾 -->
<?php include "./layout/footer.php";?>
</body>
</html>