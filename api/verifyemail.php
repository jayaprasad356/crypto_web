<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include_once('../includes/crud.php');
$db = new Database();
$db->connect();
if (empty($_POST['email'])) {
    $response['success'] = false;
    $response['message'] = "Email is Empty";
    print_r(json_encode($response));
    return false;
}
$email = $db->escapeString($_POST['email']);
$sql = "SELECT * FROM users WHERE email ='$email'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num == 1){
    $response['success'] = false;
    $response['message'] = "Email ID Already Registered";
    $response['data'] = NULL;
    print_r(json_encode($response));
}
else{
    $from ="verify@makein.store";
    $subject="verify-account-otp";
    $otp=rand(100000,999999);
    $message=strval($otp);
    $headers="From:" .$from;
    if(mail($email,$subject,$message,$headers)){
        $response['success'] = true;
        $response['message'] = "OTP Sent Successfully";
        $response['otp'] = $otp;
        $response['data'] = NULL;
        print_r(json_encode($response));
    }
    else{
        $response['success'] = false;
        $response['message'] = "OTP Sent Failed";
        $response['data'] = NULL;
        print_r(json_encode($response));

    }



}
   


?>
