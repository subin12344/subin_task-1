<?php

include "db.php";
include "Functions/functions.php";

// print_r($_POST);

if (isset($_POST["name"])) {
    extract($_POST);


    if (!empty($name) && !empty($countryCode) && !empty($phone) && !empty($email) && !empty($passport) && !empty($exp_date)) {
        extract($_POST);
        if (preg_match('/^[0-9]{10}+$/', $phone)) {
            extract($_POST);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                extract($_POST);
                // print_r($_POST);
                $phone1=$countryCode.$phone;
                // print_r($phone1);

                $datas = array("Name" => $name, "Phone_number" => $phone1, "Email_ID" => $email, "Passport_ID" => $passport,"Expiry_Date"=>$exp_date);


                $insert = update($db, 'my_customers', "`id`='$hid'", $datas, '', '', '');

                // $sql = "INSERT INTO `my_customers` (`Name`,`Phone_number`,`country_code`,`Email_ID`,`Passport_ID`,`Expiry_Date`) VALUES ('$name','$countryCode','$phone','$email','$passport','$exp_date')";
                // $result = $db->query($sql);

                if ($insert) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else {
                echo 3;
            }
        }else{
            echo 4;
        }
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }


?>