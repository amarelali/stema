<title>Getting credentials</title>
<link rel="stylesheet" type="text/css" href="css/account.css" />
<style>
#box span {
margin:auto;
}
</style>
<?php 
include('header.php');
include('connect.php');

$mail = $_POST['email'];

$q="SELECT * FROM users";
$res=mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($res)){
    if( $row["Email"] == $mail ){?>
    <div id="box" style="margin:auto">
<span>Your phone number is: <?php echo $row["phone"]; ?></span><br/>
<span>Your password is: <?php echo $row["Password"]; ?></span>
</div>
    <?php          
    }
}
?>
