<?php
$id=$_GET['id'];//取得要編輯的序號
$row=find('subjects',$id);//取得要編輯的內容
$opts=all('options',['subject_id'=>$id]);
dd($row);
dd($opts);
?>

編輯<?=$id;?>