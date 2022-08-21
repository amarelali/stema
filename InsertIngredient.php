<?php
$nb =$_GET['nb'];
include("connect.php");
if(isset($_POST['submitIngred'])){
    for($i=1;$i<=$nb;$i++){
        $iN= $_POST['nameIngred'.$i];
        $prodName = $_GET['produitName'];
        $img = $_POST['imgIngred'.$i];
        $value = $_POST['Value'.$i];
        $additive = $_POST['isAdditives'.$i];
        $allergie = $_POST['isAllergies'.$i];
        $OriginalInfo = $_POST['isoriginalInfo'.$i];
        $Nutritionalfacts= $_POST['isNutritionalfacts'.$i];

        $q1="SELECT * FROM produits WHERE nameProd = '$prodName'";
        $res1 = mysqli_query($db ,$q1);
        while($data = mysqli_fetch_assoc($res1)){
            $idProd = $data['PrimaryKeyProduits'];
        }
        echo $iN."-". $prodName ."-".$img."-".$additive."-".$allergie."-".$OriginalInfo."-".$Nutritionalfacts;
$q="INSERT INTO `ingredient` (`PrimarykeyIngredient`, `nameIngred`, `imageIngred`, `produitId`, `value`, `isAdditives`, `isAllergic`, `isOriginalInfo`, `isNutritionalFact`) VALUES (NULL, '$iN', '$img', '$idProd', '$value', '$additive', '$allergie', '$OriginalInfo', '$Nutritionalfacts')";
$res = mysqli_query($db,$q);
if($res){
    echo "ingredient inserted to data base";
    header("location:insertType.php?additive=$additive&allergie=$allergie&originalInfo=$OriginalInfo&nutritionalfact=$Nutritionalfacts");
}else{
    echo "ingredient not inserted to data base";
}

if($additive == 1){
    $q_additive = "INSERT INTO `additive` (`PrimarykeyAdditive`, `ingredientId`, `productId`) VALUES (NULL, '', '')";
}
    }
}
?>