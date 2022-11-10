<?php

// insert
$ticket_lines_arr = array("user_id" => $userid, "ticket_id" => $ticketnumber, "draw_id" => $drawid, "agent_id" => $_SESSION['memid'], "product_id" => $_POST[$pname], "orders" => $ticketnumber, "my3number" => $m3n, "raffle_id" => $rafflevalue, "invoice_no" => '', "type" => $omaftype, "deletes" => '0', "createdon" => $dubaidate_time);
$a_ticket_lines_insert = insert($con, "ticket_lines", "", $ticket_lines_arr, "", "", "");


// Select 
$user = select_query($con, "shi_admin", "", "`mobile` = '$mobile' AND `roll_id` = '0' AND `deletes`='0'", "", "");


// Update
$inv_arr = array("deletes" => '1');
$Inv_update = update($con, "invoice", "`id` = '$invoice_no' and `deletes`='0'", $inv_arr, "", "", "", "");


?>

<script>
    function saveformNew() {





        formdata.push({

            name: 'method',

            value: "test"

        });



        var post_data = formdata;
        var onsuccess = function (data) {

            var response = JSON.parse(data);

            if (response != "") {

                if (response.type == 1) {


                } else {



                }

            }

        }

        do_ajax_call(post_data, onsuccess);

    }
</script>