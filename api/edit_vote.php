<!-- 儲存vote -->
<?php
include_once "base.php";//引入資料庫function

$subject_id=$_POST['subject_id'];
$new_subject=$_POST['subject'];

$subject=find('subjects',$subject_id);
$subject['subject']=$new_subject;

// save('subjects',$subject);//儲存

$opts=all("options",['subject_id'=>$subject_id]);//取得資料表內原有的所有資料

  foreach($_POST['option'] as $key => $opt){
    $exist=false;
    foreach($opts as $ot){
      if($ot['id']==$key){
        $exist=true;
        break;
      }
    }

    if($exist){//判斷是T就更新F就新增
      $ot['option']=$opt;
      save("options",$ot);
    }else{
      $add_option=[
        'option'=>$opt,
        'subject_id'=>$subject_id
      ];
      save("options",$add_option);
    }
  }

to('../back.php');

?>

