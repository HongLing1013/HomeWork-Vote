<!-- 上方選單顯示 -->

<header>
<a href="./index.php" class="logo">Vote</a>
        <ul>
        <?php
    if (isset($_SESSION['user'])) {
      if($_SESSION['user']=='admin') {
    ?>
      <li><a href="back.php">管理投票</a></li>
      <li><a href="logout.php">登出</a></li><!-- 如果有登入資料就顯示登出 -->
      <li><a href="member_center.php">會員中心</a></li>
    <?php
    }else{
    ?>
      <li><a href="logout.php">登出</a></li><!-- 如果有登入資料就顯示登出 -->
      <li><a href="member_center.php">會員中心</a></li>
    <?php
    }
  }
    else {
    ?>
      <li><a href="login.php">登入</a></li><!-- 如果沒有登入資料就顯示登入 -->
    <?php
    }
    ?>
        </ul>
    </header>

 