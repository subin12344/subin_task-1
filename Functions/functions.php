<?php

function getUserIP()
{

    // Get real visitor IP behind CloudFlare network

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {

        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];

        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];

    }

    $client = @$_SERVER['HTTP_CLIENT_IP'];

    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];

    $remote = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {

        $ip = $client;

    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {

        $ip = $forward;

    } else {

        $ip = $remote;

    }

    return $ip;

}





function select_query($con, $table_name, $field_name, $condition, $limitations = '', $print = '')
{

    $resultArr = array();

    if ($field_name == "") {

        $field_name = "*";

    }

    $selectQ = "select $field_name from $table_name";

    if ($condition = "") {

        $selectQ .= " where $condition";

    }

    if ($limitations != "") {

        $selectQ .= " limit $limitations";

    }

    if ($print) {

        echo $selectQ . "<br>";

    }



    $resQuery = mysqli_query($con, $selectQ);

    $reserror = mysqli_error($con);



    $NumRows = mysqli_num_rows($resQuery);

    if ($limitations == 1) {

        $fetchArray = mysqli_fetch_array($resQuery);

        $fetchArray['nr'] = $NumRows;

        return $fetchArray;

    } else {

        while ($res = mysqli_fetch_array($resQuery)) {

            $resultArr[] = $res;

        }



        return array('Query' => $resQuery, 'nr' => $NumRows, 'result' => $resultArr, 'errors' => $reserror);

    }

}



function select_query_count($con, $table_name, $field_name, $condition, $limitations = '', $print = '')
{

    $resultArr = array();

    if ($field_name == "") {

        $field_name = "*";

    }

    $selfield = mysqli_query($con, "show columns from $table_name");

    $rowfield = mysqli_fetch_array($selfield);

    $selectQA = "select COUNT(" . $rowfield[0] . ") as C from $table_name ";

    if ($condition != "") {

        $selectQA .= " where $condition";

    }

    if ($print) {

        echo $selectQA . "<br>";

    }

    $gCQuery = mysqli_fetch_assoc(mysqli_query($con, $selectQA . " LIMIT 1"));

    $gC = $gCQuery['C'];

    return $gC;

}






function select_top_name($con, $table_name, $field_name, $condition, $returnvalue, $print = '')
{

    $resultArr = array();

    if ($field_name == "") {

        $field_name = "*";

    }



    $selectQA = "select $field_name from $table_name ";

    if ($condition != "") {

        $selectQA .= " where $condition";

    }

    if ($print) {

        echo $selectQA . "<br>";

    }

    $gCQuery = mysqli_fetch_assoc(mysqli_query($con, $selectQA . " LIMIT 1"));

    $gC = $gCQuery[$returnvalue];

    return $gC;

}




function insert($con, $table, $exist = '', $new_field ='', $up_folder = '', $newfilename = '', $print = '')
{

    $insertfield = '';

    $insertvalue = '';



    if ($up_folder == "") {

        $folder = "../upload/";

    } else {

        $folder = "../$up_folder/";

        #create dir

        if (!is_dir($folder)) {

            mkdir($folder, 0777);

        }

    }

    $selfield = mysqli_query($con, "show columns from $table");

    while ($rowfield = mysqli_fetch_assoc($selfield)) {

        $field[] = $rowfield['Field'];

    }



    foreach ($_POST as $key => $value) {

        if (in_array($key, $field)) {

            //DIRECT

            if (!$new_field[$key] && !array_key_exists($key, $new_field)) {

                $insertfield .= "`" . $key . "`, ";

                $insertvalue .= "'" . mysqli_real_escape_string($con, $_POST[$key]) . "', ";




            }

        }

    }

    if ($new_field) {

        foreach ($new_field as $key => $value) {

            if (in_array($key, $field)) {

                $insertfield .= "`" . $key . "`, ";

                $insertvalue .= "'" . $new_field[$key] . "', ";

            }

        }

    }



    if (@in_array("date", $field)) {

        $insert_field = $insertfield . "date";

        $insert_value = $insertvalue . "curdate()";

    } else {

        $insert_field = substr($insertfield, 0, strlen($insertfield) - 2);

        $insert_value = substr($insertvalue, 0, strlen($insertvalue) - 2);

    }



    $ins_query = "insert into $table($insert_field) values($insert_value)";

    if ($print) {

        print_r($ins_query);

    }



    $result = mysqli_query($con, $ins_query);

    if (mysqli_error($con)) {



        $reserror = mysqli_error($con);

    }else{
        $reserror ='';
    }

    $ar = mysqli_affected_rows($con);

    $insert_id = mysqli_insert_id($con);

    return array('ar' => $ar, 'id' => $insert_id, 'errors' => $reserror);



}




function update($con, $table, $upcond, $new_field = '', $up_folder = '', $checkbox = '', $newfilename = '', $print = '')
{



    $selfield = mysqli_query($con, "show columns from $table");

    while ($rowfield = mysqli_fetch_array($selfield)) {


        $fielddd[] = $rowfield['Field'];

    }


    foreach ($_POST as $key => $value) {

        if (in_array($key, $fielddd)) {



            if (!$new_field[$key] && !array_key_exists($key, $new_field)) {

                $updatefield .= "`$key` = " . "'" . $_POST[$key] . "', ";

            }

        }

    }


    $updatefield = "";

    if ($new_field) {

        foreach ($new_field as $key => $value) {

            if (in_array($key, $fielddd)) {

                $updatefield .= "`$key` = " . "'" . $new_field[$key] . "', ";

            }

        }

    }





    //echo $updatefield."-------";

    $insert_field = substr($updatefield, 0, strlen($updatefield) - 2);

    //echo $insert_field,"<br>";

    $up_query = "update $table set $insert_field where $upcond";

    if ($print) {

        echo $up_query . "<br>";

    }

    $result = mysqli_query($con, $up_query);


    if (mysqli_error($con)) {



        $reserror = mysqli_error($con);

    }else{
        $reserror=""; //...........................................error
    }

    $ar = mysqli_affected_rows($con); /*****db name not mentioned**** */

    return array('ar' => $ar, 'errors' => $reserror);

}




function setupdate($con, $table, $upcond, $new_field = '', $up_folder = '', $checkbox = '', $newfilename = '', $print = '')
{

    $selfield = mysqli_query($con, "show columns from $table");

    while ($rowfield = mysqli_fetch_array($selfield)) {

        //    echo $rowfield['Field'];

        $fielddd[] = $rowfield['Field'];

    }

    //print_r($fielddd);

    //exit;

    if ($new_field) {

        foreach ($new_field as $key => $value) {

            if (in_array($key, $fielddd)) {

                $updatefield .= "`$key` = " . "'" . $new_field[$key] . "', ";

            }

        }

    }

    //echo $updatefield."-------";

    $insert_field = substr($updatefield, 0, strlen($updatefield) - 2);

    //echo $insert_field,"<br>";

    $up_query = "update $table set $insert_field where $upcond";

    if ($print) {

        echo $up_query . "<br>";

    }

    $result = mysqli_query($con, $up_query);

    //echo $up_query."<br>";

    //exit;

    if (mysqli_error($con)) {

        //echo mysqli_error($con), "<br>", $ins_query;

        $reserror = mysqli_error($con);

    }

    $ar = mysqli_affected_rows();

    return array('ar' => $ar, 'errors' => $reserror);

}



function select_query_sum($con, $table_name, $field_name, $condition, $limitations = '', $print = '')
{

    $resultArr = array();

    $selectQA = "select SUM(" . $field_name . ") as C from $table_name ";

    if ($condition != "") {

        $selectQA .= " where $condition";

    }

    if ($print) {

        echo $selectQA . "<br>";

    }

    $gCQuery = mysqli_fetch_assoc(mysqli_query($con, $selectQA . " LIMIT 1"));

    $gC = $gCQuery['C'];

    return $gC;

}