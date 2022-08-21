<?php
include('header.php');

?>
<title>Stema</title>

<style>
 a , a:hover{
    color:black !important;
    text-decoration: none;
    width:290px;
}
.lettre{
    flex: 0 0 25%;
    max-width: 25%;
}
.nomProduit{
    flex: 0 0 75%;
    max-width: 75%;
}
@media screen and (min-width: 768px){
.ItemContainerfullscreen {
    flex: 0 0 25%;
    max-width: 25%;
}
}
@media screen and (max-width: 768px){

.ItemContainer {
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
}
}
</style>
<?php
include('connect.php');
if(isset($_POST['myTextSearch'])){
    $myTextSearch = $_POST['myTextSearch'];
    $q="SELECT DISTINCT p.nameProd,p.PrimarykeyProduits , n.colorBorder , n.class FROM produits p INNER JOIN nutriscore n on n.PrimarykeyNutriScore = p.NuritionalScoreId INNER JOIN ingredient i on p.PrimarykeyProduits = i.produitId WHERE nameIngred LIKE '%$myTextSearch%' OR nameProd LIKE '%$myTextSearch%'";
    $res=mysqli_query($db,$q);
    if($res){
    while($rows = mysqli_fetch_assoc($res)){?>
    <div class="row product" style="margin-top:10px;cursor: pointer;" id="product<?php echo $rows['PrimarykeyProduits'];?>">
        <a href="productDetails.php?id=<?php echo $rows['PrimarykeyProduits'] ?>" class="ItemContainer" style="margin-top: 20px;padding: 10px;border: 8px solid <?php echo $rows['colorBorder']?>;margin: auto;">
            <div class="row">
            <div class="lettre">
                <span style="font-size: 40px;font-weight: bold;color:<?php echo $rows['colorBorder']?>"><?php echo $rows['class']?></span>
            </div>
            <div class="nomProduit" style="padding: 10px;">
                 <span><?php echo $rows['nameProd'];?></span>  
                 <span style="float: right;">      
                 
                 <?php $v = $rows['nameProd'];
                  $Q="SELECT i.nameIngred,i.value FROM produits p INNER JOIN ingredient i on
                  p.PrimarykeyProduits = i.produitId WHERE p.nameProd='$v' And i.value<>0 Limit 1";
                  $r=mysqli_query($db,$Q);
                  while($row= mysqli_fetch_assoc($r)){ echo $row['nameIngred']." ".$row['value'];} ?>
                 
                 <span>
            </span></span>
            </div>
            </div>
        </a>
    </div> 
     <?php   
    }
}else{
    echo 'error';
}
}
mysqli_close($db);
?>

