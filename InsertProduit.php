<?php 
include('connect.php');
if(isset($_POST['submit'])){
$pN= $_POST['nameProuct'];
$Bc = $_POST['BarCode'];
$Nutri = $_POST['nutriscore'];
$img = $_POST['imgProd'];
$nbIngred= $_POST['nbIngred'];
echo $pN ."-". $Bc ."-".$Nutri."-".$img;
$query="SELECT * FROM produits ";
$res1=mysqli_query($db,$query);
while($row = mysqli_fetch_assoc($res1)){
    if($row['imageProd']==$img){
        $status ="exists";
    }else{
        $status ="";
    }
}
if($status ==""){
    $q="INSERT INTO `produits` (`PrimarykeyProduits`, `nameProd`, `codeBar`, `NuritionalScoreId`, `imageProd`) VALUES (NULL, '$pN', '$Bc', '$Nutri', '$img')";
    $res=mysqli_query($db,$q);
    if($res){
    echo "data inserted";
}
}

}
?>

<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <b>Insert Data</b>
        </div>
      
        <div class="row">
        <form method="post" action="InsertIngredient.php?produitName=Coco&nb=12" >
        <?php 
        $nb=12;
        for($i=1;$i<=$nb;$i++){
            echo "Ingredient Nb : ". $i."<br/>";?>
            <div class="col-12">
                <span>Name of Ingredient:</span> <input type="text" name="nameIngred<?php echo $i ?>"/>
            </div> 
            <div class="col-12">
                Image of Ingredient:   <input type="file" id="img" name="imgIngred<?php echo $i ?>" accept="image/*">
            </div>  
            <div class="col-12">
                Value :   <input type="text"  name="Value<?php echo $i ?>" accept="image/*">
            </div>  
            <div class="col-12">
                <span>Nutritional facts? </span>
                <select name="isNutritionalfacts<?php echo $i ?>">
                      <option value="1">true</option>
                      <option value="0">false</option>
                </select>
            </div>
            <div class="col-12">
                <span>Additives? </span>
                <select name="isAdditives<?php echo $i ?>">
                      <option value="1">true</option>
                      <option value="0">false</option>
                </select>
            </div> 
            <div class="col-12">
                <span>Allergies? </span>
                <select name="isAllergies<?php echo $i ?>">
                      <option value="1">true</option>
                      <option value="0">false</option>
                </select>
            </div>
            <div class="col-12">
                <span>Original info? </span>
                <select name="isoriginalInfo<?php echo $i ?>">
                      <option value="1">true</option>
                      <option value="0">false</option>
                </select>
            </div>
            <?php echo "<br/>" ?>
            <?php
}
?>
            <div class="col-12"> 
                <input type="submit" name="submitIngred" value="Insert Data">
            </div>
        </form>
        </div>
  
    </div>
</div>