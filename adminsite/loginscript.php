<?php
 session_start();
include("config.php");

//get form user and pass value from login.php
$user = $_POST['username'];
$pass = $_POST['hash'];

$user = stripcslashes($user);
$pass = stripcslashes($pass);
$user = mysqli_real_escape_string($conn,$user);
$pass = mysqli_real_escape_string($conn,$pass);

 if($_SERVER["REQUEST_METHOD"] == "POST") {

    // $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $sql = "SELECT * FROM user WHERE userName = '$user'";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
       printf("Error: %s\n", mysqli_error($conn));
       exit();
    }
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if($count == 1) { 
      if ($row['userName'] == $user && $row['pass'] == $pass && $row['role']=='admin') {

      //  $_SESSION['login_user'] = $row['userName'];
       
       echo "<script type=\"text/javascript\">".
       "alert('success');".
       "</script>";
       $_SESSION['loginuser'] = $user;
        header("location:index.php");
       }
       else{
         echo '<script language="javascript">';
         echo 'alert("CHECK USERNAME OR PASSWORD");';
         echo 'window.location = "page_login.php"';
         echo '</script>';
     }
    }else{
        echo '<script language="javascript">';
        echo 'alert("CHECK USERNAME OR PASSWORD");';
        echo 'window.location = "page_login.php"';
        echo '</script>';
      
    }

 }


?>

