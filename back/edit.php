<?php
$id=$_GET['id'];//取得要編輯的序號
$subj=find('subjects',$id);//取得要編輯的內容
$opts=all('options',['subject_id'=>$id]);
// dd($subj);
// dd($opts);
?>

<!-- 新增表單傳送到處理頁面 -->
<form action="./api/edit_vote.php" method="post">
  <div>
    <label for="subject">投票主題:</label>
    <input type="text" name="subject" id="subject" value="<?=$subj['subject'];?>">
    <input type="button" value="新增選項" onclick="addOption()"> <!-- 點下這個按鈕 執行addOption的內容 -->
    <input type="hidden" name="subject_id" value="<?=$subj['id'];?>">
  </div>
  <div id="options">
    <?php
    foreach($opts as $opt){
    ?>
    <div>
      <label>選項:</label>
      <input type="text" name="option[<?=$opt['id'];?>]" value="<?=$opt['option'];?>">
    </div>
    <?php
    }
    ?>
  </div>
  <input type="submit" value="變更">

</form>

<script>
  function addOption(){
    let opt=`<div><label>選項:</label><input type="text" name="option[]"></div>`;
    let opts=document.getElementById('options').innerHTML;//取得ID為option的HTML節點 增加 並改變他
    opts=opts+opt;
    document.getElementById('options').innerHTML=opts;
  }
</script>