<?php
include("connect.php");

$id=$_GET['id'];    
$qFavRemove="DELETE FROM `favoris` WHERE `favoris`.`produitId` = $id";
$resultFavRemove=mysqli_query($db,$qFavRemove);
if($resultFavRemove){
echo "console.log('item deleted to fav liste');";
}else{
echo "console.log('item doesn't deleted to fav liste');";
}
 header('location:productDetails.php?id='.$id);
?>