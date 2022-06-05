<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('Asia/Kolkata');


include_once('../includes/crud.php');

$db = new Database();
$db->connect();

if (empty($_POST['user_id'])) {
    $response['success'] = false;
    $response['message'] = "User Id is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['today_step_count'])) {
    $response['success'] = false;
    $response['message'] = "Today Step Count is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['calories'])) {
    $response['success'] = false;
    $response['message'] = "Calories is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['date'])) {
    $response['success'] = false;
    $response['message'] = "Date is Empty";
    print_r(json_encode($response));
    return false;
}
$user_id= $db->escapeString($_POST['user_id']);
$steps= $db->escapeString($_POST['today_step_count']);
$calories= $db->escapeString($_POST['calories']);
$date= $db->escapeString($_POST['date']);

$sql = "SELECT * FROM users WHERE id ='$user_id'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num == 1){
    $sql = "INSERT INTO steps(`user_id`,`date`,`steps`,`calories`)VALUES('$user_id','$date','$steps','$calories')";
    $db->sql($sql);
    $response['success'] = true;
    $response['message'] = "Steps Saved Successfully";
    print_r(json_encode($response));
}
else{
    $response['success'] = false;
    $response['message'] = "User Not Found";
    print_r(json_encode($response));


}



?>