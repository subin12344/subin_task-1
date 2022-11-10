<?php





session_start();

error_reporting(0);

ob_start();



$inactive = 7200 * 60 * 60 * 24;



$_SESSION['timeout'] = time() + $inactive;







$server = "localhost";

$username = "root";

$password = "";

$db_name = "demowebsite"; // Database name

$con = mysqli_connect($server, $username, $password, $db_name);

mysqli_query($con, "SET SESSION sql_mode = ''");

// Check connection

if (mysqli_connect_errno()) {

    echo "Failed to connect to MySQL: " . mysqli_connect_error();

} else {

    //echo "connected";

}





date_default_timezone_set("Asia/Dubai");

$dubaidate_time = date("Y-m-d H:i:s");



$timezone = 5.5; //(GMT -5:00) EST (U.S. & Canada)

$timesss = date("H:i:s a", time() + 3600 * ($timezone + date("I")));

$days = 5.5; //(GMT -5:00) EST (U.S. & Canada)

$daysss = date("Y-m-d", time() + 3600 * ($days + date("I")));

//$daysss=date("Y-m-d");

$dateyeter = -24; //(GMT -5:00) EST (U.S. & Canada)

$yeterday = date("Y-m-d", time() + 3600 * ($dateyeter + date("I")));

$dayt = 0; //(GMT -5:00) EST (U.S. & Canada)

$daytimesss = date("Y-m-d H:i:s", time() + 3600 * ($dayt + date("I")));

//$daytimesss=date("Y-m-d H:i:s");

$endtime = 5; //(GMT -5:00) EST (U.S. & Canada)

$endtimesss = date("Y-m-d H:i:s a", time() + 3600 * ($endtime + date("I")));

$weekdate = date("Y-m-d", strtotime($start . "-7 day"));

$monthdate_time = date("Y-m-d H:i:s", strtotime($start . "-30 day"));

$monthdate = date('Y-m-d', strtotime('-1 second', strtotime('0 month', strtotime(date('m') . '/01/' . date('Y') . ' 00:00:00'))));

$thismonthend = date("Y-m-d", strtotime('-1 second', strtotime('+1 month', strtotime(date('m') . '/01/' . date('Y') . ' 00:00:00'))));

$str_NextSundayDate = date('Y-m-d', strtotime('next Sunday'));

$years = date('Y');
$lastyear = $years - 1;

$lastyear = $lastyear . "-12-31";

//session_start();

$sitename = 'secureadmin';

$settings = mysqli_query($con, "select * from `settings` where `id`='1'") or die(mysqli_error($con));

$settings1 = mysqli_fetch_array($settings);



///////////////////////////// Email Id ///////////////////////////////

$admin_form = $settings1[form_email_id];

$admin_to = $settings1[to_email_id];

///////////////////////////// Email Id ///////////////////////////////

///////////////////////////// Url and Title ///////////////////////////////

$baseurl = $settings1[base_url];

$siteurl = $settings1[site_url];

$mainurl = $settings1[main_url];

$adminurl = $settings1[admin_url];

$shopname = $settings1[title];

$domain_name = $settings1[domain_name];

///////////////////////////// Url and Title ///////////////////////////////

///////////////////////////// footer ///////////////////////////////

$footer = $settings1[footer_text];

$footer1 = $settings1[footer_text1];

$footer2 = $settings1[footer_text2];

$footer_link = $settings1[footer_link];

///////////////////////////// footer ///////////////////////////////

///////////////////////////// logo and favicon ///////////////////////////////

$logo = $baseurl . 'settings/' . $settings1[logo];

$favicon = $baseurl . 'settings/' . $settings1[favicon];

///////////////////////////// logo and favicon ///////////////////////////////

///////////////////////////// Contact info ///////////////////////////////

$c_email = $settings1[contact_email];

$c_phone = $settings1[contact_phone];

$c_address = $settings1[address];

$c_address1 = $settings1[address1];

$c_address2 = $settings1[address2];

$c_city = $settings1[city];

$c_state = $settings1[state];

$c_pincode = $settings1[pincode];

$c_country = $settings1[country];

///////////////////////////// Contact info ///////////////////////////////

///////////////////////////// Social Links ///////////////////////////////

$c_facebook = $settings1[facebook];

$c_google = $settings1[google];

$c_twitter = $settings1[twitter];

$c_youtube = $settings1[youtube];

$c_linkedin = $settings1[linkedin];

///////////////////////////// Social Links ///////////////////////////////

///////////////////////////// Payment ///////////////////////////////

$paypalmail = $settings1[paypalmail];

///////////////////////////// Payment ///////////////////////////////

///////////////////////////// currency & shipping ///////////////////////////////

$currency = $settings1[currency];

$shipping = $settings1[shipping];

$free_shipping = $settings1[free_shipping];

///////////////////////////// currency & shipping ///////////////////////////////

///////////////////////////// Url ///////////////////////////////

(!empty($_SERVER['HTTPS'])) ? "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] : "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$urld = $_SERVER['REQUEST_URI'];







$is_admin_url = $urld;



$urla = explode('/', $urld);



$subid1 = $urla[1];

$subid2 = $urla[2];

$subid3 = $urla[3];

$subid4 = $urla[4];

$subid5 = $urla[5];

$subid6 = $urla[6];

$subid7 = $urla[7];

$level1 = $baseurl . "" . $subid1 . "/";

$level2 = $baseurl . "" . $subid1 . "/" . $subid2 . "/";

$level3 = $baseurl . "" . $subid1 . "/" . $subid2 . "/" . $subid3 . "/";

$level4 = $baseurl . "" . $subid1 . "/" . $subid2 . "/" . $subid3 . "/" . $subid4 . "/";








///////////////////////////// Url ///////////////////////////////

///////////////////////////// Redirect ///////////////////////////////

function redirect($url)
{

    echo '<script type="text/javascript">window.location = "' . $url . '";</script>';

}



///////////////////////////// Redirect ///////////////////////////////