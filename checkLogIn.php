
<?php
include('connect.php');
echo "password : ".$_POST['password'];
if (isset($_POST['phone']) && isset($_POST['password']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$phNb = validate($_POST['phone']);
	$pass = validate($_POST['password']);
	if(empty($phNb) && empty($pass) ){
		header("Location: logIn.php?error=Phone number and Password is required");
	}else if (empty($phNb)) {
		header("Location: logIn.php?error=Phone number is required");
	    exit();
	}else if(empty($pass)){
        header("Location: logIn.php?error=Password is required");
	    exit();
	}else{

$q="SELECT * FROM `users` WHERE `phone` = '".$phNb ."'";//a3ti l pass

$res=mysqli_query($db,$q);
if(mysqli_num_rows($res)>0){//==1
 //exist   
$row=mysqli_fetch_assoc($res);
 echo $_POST['password'] ;
 echo "<br>";

if($_POST['password'] == $row["Password"]){
echo("ok<br>");

session_start();

	$_SESSION['Created']=time();
    $_SESSION['id']=$row['userId'];
	$_SESSION['name']=$row['FirstName']." ".$row['LastName'];
	$_SESSION['phone']=$row['phone'];
    $_SESSION['email']=$row['Email'];
    $_SESSION['password']=$row['Password'];


   header("location:accueil.php");
}else{ header("Location: logIn.php?error=Incorrect Phone number or password");
}
}else{

    header("location:signUp.php?error=You should create your account");
	}
	}
}
	
mysqli_free_result($res);//
mysqli_close($db);
?> 