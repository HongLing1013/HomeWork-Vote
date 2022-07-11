
  <!-- <link rel="stylesheet" href="./css/index.css"> -->
  <link rel="stylesheet" href="./css/login.css">
  <style>
    .container{
  width: 100vh;
  margin-top: 80vh;
}
.logbtn{
  width: 40%;
  margin-top: 1rem;
}
  </style>


  <!-- 主要內容 -->
<div class="container" style="margin-top:10px">

<?php

$subject=find("subjects",$_GET['id']);
$opts=all("options",['subject_id'=>$_GET['id']]);

?>

<h1 class="text-center"><?=$subject['subject'];?></h1>

<div style="width: 600px;margin:auto">
  <div style="text-align: center; margin:1rem;">總投票數:<?=$subject['total'];?></div>
  <table class="result-table">
    <tr>
      <td>選項</td>
      <td>投票數</td>
      <td>比例</td>
    </tr>
    <?php
    foreach($opts as $opt){
      $total=($subject['total']==0)?1:$subject['total'];
      $rate=$opt['total']/$total;
    ?>
    <tr>
      <td><?=$opt['option'];?></td>
      <td><?=$opt['total'];?></td>
      <td>
        <!-- 長條圖 -->
        <div style="display:inline-block;height:24px;background-image: linear-gradient(to top, #fed6e3 0%, #a8edea 100%);width:<?=300*$rate;?>px;"></div>
        <?=number_format($rate*100) . "%";?>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>


  <?php
    if (isset($_SESSION['user'])) {
    ?>
    <!-- 如果登入才顯示投票按鈕 -->
    <?php
    if(!empty($_SESSION['user_id'])){
      echo "<h1 style='color:red;margin-top:5vh'>不能重複投票</h1>";
    }else{
      ?>
          <button class="logbtn" onclick="location.href='?do=vote&id=<?=$_GET['id'];?>'">我要投票</button>
    <?php
    }
    }else{
      ?>
    <div>
    <a href="login.php"><input type="submit" class="logbtn" value="登入"></a>
    </div>
    <?php
    }
    ?>
    </div>
