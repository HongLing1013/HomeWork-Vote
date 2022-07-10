<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員註冊</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/login.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <style>
    .container{
    width: 100vh;
    }
    h1{
  line-height: 0.5rem;
}
.txtb{
  margin: 1.3rem 8rem;
}
.txtb input{
  margin-top: 0.3vh;
  height: 20px;
}
.logbtn{
  margin-top: 5vh;
}
.inputBox{
            position: relative;
        }
    #toggle {
      position: absolute;
      transform: translateY(20%);
      width: 1.2rem;
      height: 1.2rem;
      background: url(./img/show.png);
      background-size: cover;
      cursor: pointer;
      margin-left: 0.2rem;
    }

    #toggle.hide {
      background: url(./img/hide.png);
      background-size: cover;
    }
  </style>
</head>
<body>
  <!-- 上方選單 -->
<nav>
    <?php include "./layout/front_nav.php";?>
    <script src="./js/nav.js"></script>
  </nav>
  <!-- 主要內容 -->
<div class="container">
  
  <form action="./add_member.php" method="post">
    <h1>會員註冊</h1>

    <div class="txtb">
      <input type="text" name="acc" id="" required="required">
      <span data-placeholder="帳號"></span>
    </div>
    <div class="txtb inputBox">
        <input type="password" name="pw" id="password" required="required">
        <span data-placeholder="密碼"></span>
      <!-- 偵測按下去時執行 function showHide的內容 -->
      <span id="toggle" onclick="showHide();"></span>
    </div>
    <div class="txtb">
      <input type="text" name="name" id="" required="required">
      <span data-placeholder="名字"></span>
    </div>
    <div class="txtb">
      <input type="date" name="birthday" id="" required="required">
      <span data-placeholder="生日"></span>
    </div>
    <div class="txtb">
      <input type="text" name="addr" id="" required="required">
      <span data-placeholder="住址"></span>
    </div>
    <div class="txtb">
      <input type="email" name="email" id="" required="required">
      <span data-placeholder="e-mail"></span>
    </div>
    <div class="txtb">
      <input type="passnote" name="passnote" id="" required="required">
      <span data-placeholder="密碼提示"></span>
    </div>

    <div>
      <input type="submit" class="logbtn" value="送出">
    </div>

  </form>
</div>
<!-- 頁尾 -->
<?php include "./layout/footer.php";?>

<script type="text/javascript">
    $(".txtb input").on("focus",function(){
      $(this).addClass("focus");
    });

    $(".txtb input").on("blur",function(){
      if($(this).val() == "")
      $(this).removeClass("focus");
    });
  </script>

<script>
    // 宣告一個password 是id-password裡面的內容
    const password = document.getElementById('password')
    // 宣告一個toggle 是取得id toggle的內容
    const toggle = document.getElementById('toggle')

    // 設定一個function 叫做showHide
    function showHide() {
      // 如果 password的內容 跟 password相同時
      if (password.type === 'password') {
        // 設定為文本顯示
        password.setAttribute('type', 'text')
        toggle.classList.add('hide')
      } else {
        // 反之 隱藏密碼
        password.setAttribute('type', 'password')
        toggle.classList.remove('hide')
      }
    }
  </script>
  
</body>
</html>