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

    

    $qty = $_POST['qty'];
    $len = $_POST['len'];
    $wei = $_POST['wei'];
    $hei = $_POST['hei'];
    $wid = $_POST['wid'];
    $desc = $_POST['desc'];
    $rti = $_POST['rti'];
    $sloc = $_POST['sloc'];
    $rloc = $_POST['rloc'];
    $flag = true;

    if(!empty($rti)){

        $sqluser = "SELECT * FROM user WHERE `pass` = '".$rti."' ";
        $result = $conn->query($sqluser);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
               // echo "id: " . $row["u_id"]. " - Name: " . $row["pass"]. " " . $row["userName"]. "<br>";
            }

            $pkgsql = "INSERT INTO package (`p_id`, `qty`, `length`, `width`, `height`, `weight`, `desc`, `hash`, `send_loc`, `rec_loc`) VALUES (NULL,".$qty.",".$len.",".$wid.",".$hei.",".$wei.",'".$desc."','".$rti."','".$sloc."','".$rloc."')";
            if($role="sender"){
                $conn->query($pkgsql);
            }
            $flag = true;
        }
        else
        {
        // echo '<script language="javascript">';
        // echo 'alert("User Tracking not found);';
        // //echo 'window.location = "login.php"';
        // echo '</script>';
        $flag = false;

        }

       
    }


if((!empty($username) || !empty($address) || !empty($cnic) || !empty($cno) || !empty($role)) && $flag){
    
    $sql = "INSERT INTO user (`u_id`, `userName`, `pass`, `role`, `cnic`, `address`, `contactNo`) VALUES (NULL,'".$username."','".$random_string."','".$role."',".$cnic.",'".$address."',".$cno.")";

    

    if ($conn->query($sql) === TRUE) {
        $fp = fopen('trackingId.txt', 'w');
        fwrite($fp, 'You\'re sucessfully register proceed to login '.$username.' : '.$random_string);
        
        if(file_exists('trackingId.txt')){
            $file_url = './trackingId.txt';
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
        readfile($file_url);
        fclose($fp);
        }
        
    }
    
    
    else {
        echo '<script language="javascript">';
        echo 'alert("registration failed");';
        //echo 'window.location = "login.php"';
        echo '</script>';
        //header("location:registertion.html");
    }
    $conn->close();
}else if(!$flag){
    echo '<script language="javascript">';
    echo 'alert("Tracking id not found");';
    //echo 'window.location = "login.php"';
    echo '</script>';
    die();
}else{
    echo '<script language="javascript">';
    echo 'alert("CHECK All fields are required");';
    //echo 'window.location = "login.php"';
    echo '</script>';
    die();

}




?>