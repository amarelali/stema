<title>Forget Password</title>
<link rel="stylesheet" type="text/css" href="css/account.css" />

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
<?php 
include('header.php');
?>
<div class="signUp" style="max-width: 377px !important;">   <!--style="display:inline-block;" -->
    <form method="post" action="gettingCredentials.php"> 
    <strong style="font-size:20px">Enter your email to send to you your phone number and password </strong><br><br>
	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div>
            Email:<br><input type="email" name="email"/>
        </div>
       <div class="ancer">
            <input type="submit" style="height: 29px !important;"> <br/>
    <!--    <a href="signUp.php"> Create account</a>
            <a href="ForgetPassword.php" style="float:right"> Forget Password?</a>
        </div> -->
    </form>
</div>