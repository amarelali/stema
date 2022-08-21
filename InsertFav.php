<?php
include("connect.php");
session_start();
    $id=$_GET['id'];
    $userId=$_SESSION['id'];
$qFavAdd="INSERT INTO `favoris` (`PrimarykeyFavoris`, `userId`, `produitId`) VALUES (NULL, '$userId', '$id')";
$resultFavAdd=mysqli_query($db,$qFavAdd);
if($resultFavAdd){
echo "console.log('item deleted to fav liste');";
}else{
echo "console.log('item doesn't deleted to fav liste');";
}
header('location:productDetails.php?id='.$id);

?>