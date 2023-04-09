<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '');
define('DB', 'webbanhang');

function open_database()
{
    $conn = new mysqli(HOST, USER, PASS, DB);
    if ($conn->connect_error) {
        die('Connect error: ' . $conn->connect_error);
    }
    return $conn;
}

function login($user, $pass)
{
    $sql = "select * from account where username = ?";
    $conn = open_database();

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $user);
    if (!$stm->execute()) {
        return array('code' => 1, 'error' => 'Can not execute command');
    }

    $result = $stm->get_result();

    if ($result->num_rows == 0) {
        // Khong co user ton tai
        return array('code' => 1, 'error' => 'User does not exists');
    }

    $data = $result->fetch_assoc();

    $hash_password = $data['password'];
    if (!password_verify($pass, $hash_password)) {
        return array('code' => 2, 'error' => 'Invalid password');
    } else if ($data['activated'] == 0) {
        return array('code' => 3, 'error' => 'This account is no activated');
    }
    else return
        array('code' => 0, 'error' => '', 'data' => $data);


}
function is_emaile_xists($email)
{
    $sql = 'select username from account where email = ?';
    $conn = open_database();

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $email);
    if (!$stm->execute()) {
        die('Query error: ' . $stm->error);
    }

    $result = $stm->get_result();
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}
function register($user, $pass, $fullname, $email, $gender, $dob, $phone, $address, )
{

    if (is_emaile_xists($email)) {
        return array('code' => 1, 'error' => 'Email exists');
    }

    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $rand = random_int(0, 1000);
    $token = md5($user . '+' . $rand);

    $sql = 'insert into account(username,password,fullname,email,gender,dob,phone,address,activate_token) values (?,?,?,?,?,?,?,?,?)';

    $conn = open_database();
    $stm = $conn->prepare($sql);
    $stm->bind_param('sssssssss', $user, $hash, $fullname, $email, $gender, $dob, $phone, $address, $token);

    if (!$stm->execute()) {
        return array('code' => 2, 'error' => 'Can not execute command');
    }

    // send verification email
    sendActivationEmail($email,$token);

    return array('code' => 0, 'error' => 'Create account successful');

}
function sendActivationEmail($email, $token)
{


    $mail = new PHPMailer(true);

    try {

        $mail->IsSMTP(); // send via SMTP
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kralldolveny@hotmail.com';
        $mail->Password = 'Bienbien1';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('kralldolveny@hotmail.com', 'Admin web ban hang');
        $mail->addAddress($email, 'Người nhận');

        $mail->isHTML(true);
        $mail->Subject = 'Xác minh tài khoản của bạn';
        $mail->Body = "Click <a href='http://localhost/WAProject/activate.php?email=$email&token=$token'>vào đây</a> để xác minh tài khoản của bạn";
        $mail->CharSet = "UTF-8";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function activeAccount($email, $token){
    $sql = 'select username from account where email = ? and activate_token = ? and activated = 0';

    $conn = open_database();
    $stm = $conn->prepare($sql);
    $stm->bind_param('ss',$email,$token);

    if(!$stm->execute()){
        return array('code' => 1, 'error' => 'Can not execute command');
    }
    $result = $stm->get_result();
    if($result->num_rows == 0){
        return array('code' => 2, 'erroe' => 'Email address or token found');
    }
    // found

    $sql = "update account set activated = 1, activate_token = '' where email = ?";
    $stm = $conn->prepare($sql);
    $stm->bind_param('s',$email);
    if(!$stm->execute()){
        return array('code' => 1, 'error' => 'Can not execute command');
    }

    return array('code' => 0, 'message' => 'Account activated');
}
?>