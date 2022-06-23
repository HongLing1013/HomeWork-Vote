<?php
include_once "base.php";

$table=$_GET['table'];
$id=$_GET['id'];
if($table=='subjects'){//如果是這個主題 要連選項一起刪除
  del($table,$id);
  del('options',['subject_id'=>$id]);
}else{
  del($table,$id);
}

to("../back.php");
?>