<?php include_once "./api/base.php";  // 因為要使用到資料庫 所以在最開端先引入 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投票管理中心</title>
  <link rel="stylesheet" href="./css/back.css">
</head>

<body>
  <!-- 上方選單 -->
  <nav>
    <?php include "./layout/header.php"; ?>
    <?php include "./layout/back_nav.php"; ?>
  </nav>

  <!-- 主要內容 -->
  <div class="container">
    <h1>投票管理中心</h1>
    
    <?php
      if(isset($_GET['do'])){//如果有取得do這個頁面的話執行
        $file="./back/".$_GET['do'].".php";//導向網址
      }

      if(isset($file) && file_exists($file)){//判斷如果有檔案在載入
        include $file;
      }else{
    ?>
      <button class=btn onclick="location.href='?do=add_vote'">新增投票</button><!-- get傳值檔案名稱 -->

      <div>
        <ul>

          <?php
          $subjects=all('subjects'); //取得所有投票列表
          foreach($subjects as $subject){
            echo "<li class='list-items'>";
            echo $subject['subject']; //只取得欄位
            echo "<a class='edit' href='?do=edit&id={$subject['id']}'>編輯</a>";
            echo "<a class='del' href='?do=del&id={$subject['id']}'>刪除</a>";
            echo "</li>";
          }
          ?>
          
        </ul>
      </div>

    <?php
      }
    ?>

  </div>

  <!-- 頁尾 -->
  <?php include "./layout/footer.php"; ?>
</body>

</html>