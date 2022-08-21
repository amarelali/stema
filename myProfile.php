<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/account.css" />
<title>My Profile </title>
<style>
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.notify{
    background-color: #def0d8;
    color: #769671;
    padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>

<?php
include('header.php');
include('connect.php');
$id=$_SESSION['id'];
$query = "SELECT * FROM `users` WHERE `userId`='".$_SESSION['id']."'";
$result =mysqli_query($db,$query);
while($rows = mysqli_fetch_assoc($result)){
    $FN= $rows['FirstName']." ".$rows['LastName'];
    $p= $rows['phone'];
    $e= $rows['Email'];
}


?>

 <div class="signUp" style="background-image: linear-gradient(to right,green,yellow);">   <!--display:inline-block; -->
    <form method="post" action="passwordModified.php">
        <strong style="font-size:20px">My Profile</strong><br>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <?php if (isset($_GET['notify'])) { ?>
     		<p class="notify"><?php echo $_GET['notify']; ?></p>
     	<?php } ?>
        <div>
            Full Name:<br><input type="text" name="fullName" value="<?php echo $FN ?>" readonly/>
        </div>
        <div>
            Phone Number:<br><input type="text" name="phoneNumber" value="<?php echo $p ?>" readonly/>
        </div>
        <div>
            Email:<br><input type="email" name="email" value="<?php echo $e ?>" readonly/>
        </div>

        <div>
        Current Password:<br><input type="password" name="currentPassword"/>
        </div>

        <div>
        New Password:<br><input type="password" name="newPassword"/>
        </div>
        <div>
        Retype new password:<br><input type="password" name="retypePassword"/>
        </div>
        <div>
            <input type="submit" name="submit" value="Click to modify" style="height: 30px !important;"/>
        </div>
    </form>
</div>
<script>


</script>