
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/account.css" />
<title>Sign Up</title>
<script src="js/jquery.min.js"></script>
<style>

.ancer a ,.ancer a:hover{
    color:black !important;
    text-decoration: underline !important;
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
 <div class="signUp" >  <!--style="display:inline-block;" -->
    <form method="post" action="createAccout.php">
        <strong style="font-size:20px">Sign Up</strong><br>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div>
            First Name:<br><input type="text" autocomplete="off" name="firstName"/>
        </div>
        <div>
            Last Name:<br><input type="text" autocomplete="off" name="lastName"/>
        </div>
        <div>
            Phone Number:<br><input type="text" autocomplete="off" name="phoneNumber"/>
        </div>
        <div>
            Email:<br><input type="email" autocomplete="off" name="email"/>
        </div>

        <div>
            Password:<br><input type="password" name="password"/>
        </div>
        <div>
            RePassword:<br><input type="password" name="repassword"/>
        </div>
        <div class="ancer">
            <input type="submit" name="submit" style="height: 29px !important;"> Already have an account? <a href="logIn.php">Sign in</a>
        </div>
    </form>
</div>

