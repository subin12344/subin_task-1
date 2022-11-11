<?php
include 'db.php';
include 'Functions/functions.php';
extract($_POST);
$id=$_POST['data'];
// print_r($id);
$datas = array("deletes" => '1');
$insert = update($db, 'my_customers', "`id`='$id'", $datas, '', '', '');
// $sql="DELETE FROM `my_customers` WHERE id='$id'";
print_r($insert);
if($insert){
    echo 0;
}else{
    echo 1;
}






?>