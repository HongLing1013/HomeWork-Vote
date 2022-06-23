<!-- 儲存vote -->
<?php
include_once "base.php";//引入資料庫function

$subject=$_POST['subject'];//接收表單傳來的投票主題內容

$add_subject=[//建立資料庫內容
  'subject'=>$subject,
  'type_id'=>1,
  'multiple'=>$_POST['multiple'],
  'start'=>date("Y-m-d"),
  'end'=>date("Y-m-d",strtotime("+10 days")),
];

save('subjects',$add_subject);//儲存

$id=find('subjects',['subject'=>$subject])['id'];// 取得資料庫內此筆儲存檔案的id

if(isset($_POST['option'])){
  foreach($_POST['option'] as $opt){
    if($opt!=""){//避免空選項
      $add_option=[
        'option'=>$opt,
        'subject_id'=>$id
      ];  
      save("options",$add_option);
    }
  }
}

to('../back.php');

?>

