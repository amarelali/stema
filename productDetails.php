<title>Product Detailes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/slides.css"/>
<script src="js/jquery.min.js"></script>
<style>
ul {list-style-type: none;}
.square{
  width:20px;
  height:20px;
  border-radius:50px;
  background-color:black;
  display: inline-block;
}
.contents{
  text-align:center;
  font-size:20px;
}
.InfoContainers{
  margin-bottom:10px;
}
@media screen and (min-width: 768px){ /* Mobile */

.ProductName {
     flex: 0 0 66.666667%;
    max-width: 66.666667%;
}
.Heart {
     flex: 0 0 33.333333%;
    max-width: 33.333333%;
}
.contents {
     flex: 0 0 25%;
    max-width: 25%;
}

}
@media screen and (max-width: 768px){ /* Mobile */

.ProductName {
     flex: 0 0 83.333333%;
    max-width: 83.333333%;
}
.Heart {
     flex: 0 0 16.666667%;
    max-width: 16.666667%;
}
.contents {
     flex: 0 0 50%;
    max-width: 50%;
}

}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 0px;
    width: 100%;
}
</style>
<?php
include("header.php");
include('connect.php');

if(isset($_GET['id'])){
  $idProd=$_GET['id'];
  $q="SELECT p.codeBar,p.PrimarykeyProduits,p.nameProd,p.imageProd,n.imageNutri,n.description,n.colorBorder,n.colorBackground,n.class FROM produits p INNER JOIN nutriscore n on p.NuritionalScoreId=n.PrimarykeyNutriScore WHERE p.PrimarykeyProduits = $idProd ";
}else if ( isset($_GET['codeBar'])){
  $code=$_GET['codeBar'];
  $q="SELECT p.codeBar,p.PrimarykeyProduits,p.nameProd,p.imageProd,n.imageNutri,n.description,n.colorBorder,n.colorBackground,n.class FROM produits p INNER JOIN nutriscore n on p.NuritionalScoreId=n.PrimarykeyNutriScore WHERE  p.codeBar= $code";
}

 $res=mysqli_query($db,$q);
while($row=mysqli_fetch_assoc($res)){
  $idByGet=$row['PrimarykeyProduits'];
?>
  <div class="row" style="margin-top:10px">
        <div class="col-12" style="margin-top: 20px;width: 100%;border-top: 8px solid  <?php echo $row['colorBorder']; ?>;margin: auto;border-bottom: 8px solid <?php echo $row['colorBorder']; ?>;background-color: <?php echo $row['colorBackground']; ?>;height: 81px;text-align: center;font-weight: bold;font-size: 22px;position:relative">
           <div class="row">
                <div class="ProductName" style="padding: 10px;"><?php  echo $row['nameProd']; ?></div>
                <div class="Heart">

                <form method="post" name="myForm" >
                <div class="myFav">
                <?php
                $idProd= $row['PrimarykeyProduits'];
                if((time() - @$_SESSION['Created']) < 60000){
                  $userId= $_SESSION['id'];

                  $qFavo="SELECT * FROM favoris where ProduitId = $idProd and userId= $userId";
                  $resqFavo=mysqli_query($db,$qFavo);
                  if(mysqli_fetch_assoc($resqFavo)>0){
                ?>
                <img  id="isFav" src="STema%20pics/heart-full.png" style="cursor:pointer;" onclick="DeleteData('<?php  echo $idProd ?>');"/>

                  
                <?php }else{?>
                  <img  id="isFav" src="STema%20pics/heart-empty.png" style="cursor:pointer" onclick="InsertData('<?php  echo $idProd ?>');"/>

                <?php }
                }else{?>
                <!--<img  id="isFav" src="STema%20pics/heart-empty.png" style="cursor:pointer" /> !--  onclick="InsertData(' ');" -->

               <?php }?>
                </div>
                </form>
                </div>
           </div>
           <img src="STema%20pics/Productdetailsnutriscoreselections/<?php echo $row['imageNutri']; ?>" style="position:absolute;height: 95%;top: 44px;left: 2%;z-index: 1;" />
        </div>

    </div> 
    


<div class="slideshow-container">

<div class="mySlides fade">
  <img class="slideImgs" src="img/<?php echo $row['imageProd']; ?>">
</div>

<div class="mySlides fade">
  <img class="slideImgs" src="img/<?php echo $row['imageProd']; ?>">
</div>

<div class="mySlides fade">
  <img class="slideImgs" src="img/<?php echo $row['imageProd']; ?>" > <!--style="width:100%"-->
</div>

</div> 

<br>
 <div style="text-align:right">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> 


<div class="row">
<p style="margin:auto;color:#e7440f;font-weight:600;font-size:26px">Nutriscore Classification</p>
</div>
<div class="row">
<p style="margin:auto;font-size: 23px;font-weight:500px"><?php echo $row['class']; ?> - <?php echo $row['description']; ?></p>
</div>
<?php }
?>
<div class="row">
<p style="margin:auto;color:#e7440f;font-weight:600;font-size:26px">Nutritional Scale</p>
</div>
<div class="row">
<div style="margin:auto;font-size: 23px;width:426px;">
<ul style="margin:auto;">
<?php
$q1="SELECT i.nameIngred,i.value FROM produits p INNER JOIN nutritionfacts n on p.PrimarykeyProduits=n.productId Inner JOIN ingredient i on i.PrimarykeyIngredient = n.ingredientId WHERE p.PrimarykeyProduits = $idProd";
$res1=mysqli_query($db,$q1);
while($row=mysqli_fetch_assoc($res1)){?>
   <li><div class="square"></div> &nbsp;<?php echo $row['nameIngred'];?> : <?php echo $row['value'];?></li>
   <?php }?>

</ul>
</div>
</div>
<div class="row">
<p style="margin:auto;color:#e7440f;font-weight:600;font-size:26px">Allergic Contents</p>
</div>
<div class="row">
<?php 
$q2="SELECT i.nameIngred FROM produits p INNER JOIN allergie a on p.PrimarykeyProduits=a.productId Inner JOIN ingredient i on i.PrimarykeyIngredient = a.ingredientId WHERE p.PrimarykeyProduits = $idProd";
$res2=mysqli_query($db,$q2);
while($row=mysqli_fetch_assoc($res2)){
?>
<div class="contents col-md-3 col-6"><?php echo $row['nameIngred'] ?></div>
<?php } ?>

</div>
<div class="row">
<p style="margin:auto;color:#e7440f;font-weight:600;font-size:26px">Original Information</p>
</div>
<div class="row">
<?php 
$q3="SELECT i.nameIngred FROM produits p INNER JOIN originalInfo o on p.PrimarykeyProduits=o.productId Inner JOIN ingredient i on i.PrimarykeyIngredient = o.ingredientId WHERE p.PrimarykeyProduits = $idProd";
$res3=mysqli_query($db,$q3);
while($row=mysqli_fetch_assoc($res3)){
?>
<div class="contents col-md-3 col-6"><?php echo $row['nameIngred'] ?></div>
<?php } ?>
</div>





<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


</script>


<?php 

if((time() - @$_SESSION['Created']) < 60000){
$time=date("Y-m-d H:i:s");
$idSession=$_SESSION['id'];
$qCheck="SELECT * FROM `history` WHERE produitId =$idByGet";
$resCheck=mysqli_query($db,$qCheck);
if($resCheck){
while($row=mysqli_fetch_assoc($resCheck)){
  $record=$row['produitId'];
  $qForDelete="DELETE FROM `history` where produitId =$record";
  $deleted=mysqli_query($db,$qForDelete);
  if($deleted){
    //echo "deleted";
  }else{
    //echo 'not deleted';
  }
}

}else{
//  echo "error";
}
$qH="INSERT INTO `history` (`PrimarykeyHistory`, `userId`, `produitId`, `date`) VALUES (NULL, '$idSession', '$idByGet', '$time')";
$resH=mysqli_query($db,$qH);
if($resH){
  // echo "inserted";
}else{
  // echo "ERROR ! not inserted";
}
}
?>
<script>
//My favorite 
var isFav = document.getElementById('isFav');
var isNotFav = document.getElementById('isNotFav');

function InsertData(id){
  
  isFav.removeAttribute("src");
  isFav.setAttribute("src","STema%20pics/heart-full.png");
console.log(id+"InsertData");
  document.forms['myForm'].action="InsertFav.php?id="+id;
  document.forms['myForm'].submit();
}
function DeleteData(id){
  isFav.removeAttribute("src");
  isFav.setAttribute("src","STema%20pics/heart-empty.png");
  console.log(id+"DeleteData");

  document.forms['myForm'].action="DeleteFav.php?id="+id;
  document.forms['myForm'].submit();
}

</script>
<?php mysqli_close($db);
?>

</html> 