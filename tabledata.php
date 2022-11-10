<?php    
include 'db.php';
include 'Functions/functions.php';

echo " <tr>
<th>Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Passport</th>
<th>exp_date</th>
</tr>";

// $sql="SELECT * FROM `my_customers`";
$query=select_query($db,'my_customers','','','',1);



foreach($query['result'] as $row ){
    
        echo " <tr $row[id]>

    <td>$row[Name]</td>
    <td>$row[Phone_number]</td>
    <td>$row[Email_ID]</td>
    <td>$row[Passport_ID]</td>
    <td>$row[Expiry_Date]</td>
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
