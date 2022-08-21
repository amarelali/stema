 <?php 
  include('thankYou.php');

 include('connect.php');
 $fn=$_POST['firstName'];
 $ln=$_POST['lastName'];
 $phNb=$_POST['phoneNumber'];
 $e=$_POST['email'];
 $p=$_POST['password'];
 $rp=$_POST['repassword'];
 $encrypass=$p;

 $vkey=md5(time().$fn);

 if(empty($fn) || empty($ln)||empty($phNb) ||empty($e) ||empty($p) ||empty($rp) || $p != $rp){
    header('location:signUp.php');
    
 }else{
$q="INSERT INTO `users` (`userId`, `FirstName`, `LastName`, `phone`, `Email`, `vkey`, `verified`, `Password`) VALUES (NULL, '$fn', '$ln', '$phNb', '$e', '$vkey', '0', '$encrypass')";

if(mysqli_query($db,$q)){
    // echo 'mail';
    // $to= $e;
    // $subject = 'Email Verification';
    // $message = "<a href='http://localhost/registration/verify.php?vkey=$vkey'> Register Account </a>";
    // $headers="From: Stema@gmail.com \r\n";
    // mail($to,$subject,$message,$headers);
   // header('location:thankYou.php');
    echo "<div>
<p>Dear user,thank you for registering at Stema .</br> 
To verify your email ,please click on the link<a href='http://localhost/Stema/verify.php?vkey=$vkey' target='_blank'> Account verified </a>
to continue browsing the website .</p>
<img src='img/mailIcon.png'/>
</div>";
}

//header("location:accueil.php");
 }
 mysqli_close($db);
  ?>
 

