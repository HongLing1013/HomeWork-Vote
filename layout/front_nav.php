<!-- 上方選單顯示 -->
    <?php
    if (isset($_SESSION['user'])) {
    ?>
      <a href="logout.php">登出</a><!-- 如果有登入資料就顯示登出 -->
    <?php
    } else {
    ?>
      <a href="login.php">登入</a><!-- 如果沒有登入資料就顯示登入 -->
    <?php
    }
    ?>