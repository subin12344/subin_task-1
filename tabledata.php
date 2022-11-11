<?php    
include 'db.php';
include 'Functions/functions.php';

echo " <tr>
<th>Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Passport</th>
<th>Exp_date</th>
<th>Action</th>
</tr>";

// $sql="SELECT * FROM `my_customers`";
// $datas = array("deletes" => '0');
// `deletes` ='0'
 $data="`deletes`=0";
$query=select_query($db,'my_customers','',$data,'',1);



foreach($query['result'] as $row ){
    
        echo " <tr $row[id]>

    <td>$row[Name]</td>
    <td>$row[Phone_number]</td>
    <td>$row[Email_ID]</td>
    <td>$row[Passport_ID]</td>
    <td>$row[Expiry_Date]</td>
    <td>
    <button class='btn btn-outline-info' data-bs-toggle='modal' data-bs-target='#exampleModal' id='edit' data-id='$row[id]'>edit</button>
    <button class='btn btn-outline-danger 'id='delate' data-id='$row[id]'>delate</button>

    </td>
   </tr>";
};


// $result=$db->query($sql);
// while($row=$result->fetch_assoc()){
//     echo " <tr $row[id]>

//     <td>$row[Name]</td>
//     <td>$row[Phone_number]</td>
//     <td>$row[Email_ID]</td>
//     <td>$row[Passport_ID]</td>
//     <td>$row[Expiry_Date]</td>
//    </tr>";
// }
?>

