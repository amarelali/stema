<?php
$db=mysqli_connect('localhost','root','','web2db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{
    echo ("<script>console.log('connect successfully' );</script>");
} 
?>