<?php 
include 'db.php';
include 'Functions/functions.php';
// $id=$_POST['data'];
// // extract($_POST);
// print_r($id);
$id ="id =".$_POST['data'];

$query=select_query($db,'my_customers','',$id,'','');

 $row=$query['result'];

echo json_encode($row);
    




?>