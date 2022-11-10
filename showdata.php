<?php 
include 'db.php';
include 'Functions/functions.php';
$id=$_POST['id'];
$query=select_query($db,'my_customers','','id=$id','',1);

 $row=$query['result'];

echo json_encode($row);
    




?>