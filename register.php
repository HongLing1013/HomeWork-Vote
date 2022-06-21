<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員註冊</title>
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  <!-- 上方選單 -->
<nav>
    <?php include "./layout/header.php";?>
  </nav>
  <!-- 主要內容 -->
<div class="container">
  <h1>會員註冊</h1>

  <form action="/add_member.php" method="post">
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
        <td>名稱</td>
        <td><input type="text" name="name" id=""></td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="birthday" id=""></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="addr" id=""></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="email" name="email" id=""></td>
      </tr>
      <tr>
        <td>密碼提示</td>
        <td><input type="passnote" name="passnote" id=""></td>
      </tr>
    </table>
    <div>
      <input type="submit" value="送出">
      <input type="reset" value="重置">
    </div>
  </form>
</div>
<!-- 頁尾 -->
<?php include "./layout/footer.php";?>
</body>
</html>