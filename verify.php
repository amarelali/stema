<?php
include("connect.php");
include("header.php");
if(isset($_GET['vkey']) && $_GET['vkey'] !=""){
    $vkey=$_GET['vkey'];
    $q="SELECT verified,vkey FROM users WHERE verified = 0 AND vkey='$vkey' LIMIT 1";

    $resultSet =mysqli_query($db,$q);
    if(mysqli_num_rows($resultSet)==1){
        $modifyVkey="UPDATE users set verified = 1 WHERE vkey='$vkey' LIMIT 1";
        $update=mysqli_query($db,$modifyVkey);
        if($update){?>
            <div style="background-color: #76bb00;border-radius: 5px;height: auto;padding: 10px;margin:10px;text-align: center;color:#FFF">Your account have been verified . you may now login. </br>
            <a href="logIn.php">Go to logIn page</a></div>
       <?php }else{
            echo mysqli_error() ;
        }
    }else{?>
<div style="background-color: #76bb00;border-radius: 5px;height: 41px;padding: 10px;margin:10px;text-align: center;color:#FFF">This account invalid or already verified </div>   <?php }
}else{
    die('Something went wrong');
}
?>