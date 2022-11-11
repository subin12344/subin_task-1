<?php
include 'db.php';
include 'Functions/functions.php';
extract($_POST);
$id=$_POST['data'];
// print_r($id);

$sql="DELETE FROM `my_customers` WHERE id='$id'";
$result=$db->query($sql);
if($result){
    echo 0;
}else{
    echo 1;
}






?>