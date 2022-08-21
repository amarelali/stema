<?php
session_start();
include('connect.php');
$id=$_SESSION['id'];
$cp=$_POST['currentPassword'];
$np=$_POST['newPassword'];
$rtp=$_POST['retypePassword'];



$query = "SELECT `Password` FROM `users` WHERE `userId`='".$_SESSION['id']."'";
$result =mysqli_query($db,$query);
while($rows = mysqli_fetch_assoc($result)){
    if($cp != ""){
        
        
    if($cp != $rows["Password"]){
        header("location:myProfile.php?error=Your password was incorrect");
    }else{
        if($np != $rtp){
            header("location:myProfile.php?error=retyping password is incorrect");
        }else{
        $encrypass=$np;
        $query_modify="UPDATE `users` SET `Password`='".$encrypass."' WHERE userId = '".$_SESSION['id']."'";
        echo $query_modify;
        echo"<br><br>";
        echo $encrypass;
        mysqli_query($db,$query_modify);
        header("location:myProfile.php?notify=Your Password has been successfully changed.");
        }
    }
}else{
    header("location:myProfile.php?error=Your Password was incorrectly typed.");
}

}
?>