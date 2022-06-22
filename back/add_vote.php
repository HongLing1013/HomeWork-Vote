<!-- 新增表單傳送到處理頁面 -->
<form action="../api/add_vote.php" method="post">
  <div>
    <label for="subject">投票主題:</label>
    <input type="text" name="subject" id="subject">
    <input type="button" value="新增選項" onclick="addOption()"> <!-- 點下這個按鈕 執行addOption的內容 -->
  </div>
  <div id="options">
    <div>
      <label>選項:</label>
      <input type="text" name="option">
    </div>
  </div>
  <input type="submit" value="新增">

</form>

<script>
  function addOption(){
    let opt=`<div><label>選項:</label><input type="text" name="option"></div>`;
    let opts=document.getElementById('options').innerHTML;//取得ID為option的HTML節點 增加 並改變他
    opts=opts+opt;
    document.getElementById('options').innerHTML=opts;
  }
</script>