
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/account.css" />
<script src="js/jquery.min.js"></script>
<title>Log In</title>
<style>

.ancer a ,.ancer a:hover{
    color:black;
    text-decoration: underline;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>
</head>
<?php
include('header.php');
?>
 <div class="signUp" >   <!--style="display:inline-block;" -->
    <form method="post" action="checkLogIn.php"> 
        <strong style="font-size:20px">Log In</strong><br>
	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div>
            Phone Number:<br><input type="text" autocomplete="off" name="phone" />
        </div>

        <div>
            Password:<br><input type="password" name="password" />
        </div>
        <div class="ancer">
            <input type="submit" style="height: 29px !important;"> <br/>
            <a href="signUp.php"> Create account</a>
            <a href="ForgetPassword.php" style="float:right"> Forget Password?</a>
        </div>
    </form>
</div>


