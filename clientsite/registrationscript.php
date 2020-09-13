<?php
session_start();
include('config.php');

$username = $_POST['username'];
$address = $_POST['address'];
$cnic = $_POST['cnic'];
$cno = $_POST['cno'];
$role = $_POST['role'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$input_length = strlen($permitted_chars);
    $random_string = '';
    for($i = 0; $i <26 ; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    
if(!empty($username) || !empty($address) || !empty($cnic) || !empty($cno) || !empty($role)){
    
    $sql = "INSERT INTO user (`u_id`, `userName`, `pass`, `role`, `cnic`, `address`, `contactNo`) VALUES (NULL,'".$username."','".$random_string."','".$role."',".$cnic.",'".$address."',".$cno.")";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script type=\"text/javascript\">".
       "alert('successfully registered);".
       "</script>";
        
        header("location:login.php");
        $fp = fopen('trackingId.txt', 'w');
        fwrite($fp, $random_string);
        fclose($fp);
    } else {
        echo '<script language="javascript">';
        echo 'alert("registration failed");';
        //echo 'window.location = "login.php"';
        echo '</script>';
        //header("location:registertion.html");
    }
    $conn->close();
}else{
    echo '<script language="javascript">';
    echo 'alert("CHECK All fields are required");';
    //echo 'window.location = "login.php"';
    echo '</script>';
    die();
}

?>