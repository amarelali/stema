<?php include('header.php');
     include('Alphabet.php');
     include('connect.php');
     ?>
     <title>Additives</title>
    
     <style>
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 0px;
    width: 100%;
}
.columnAlphabets {
    flex: 0 0 25%;
    max-width: 25%;
}
.AlphaBet{
    max-width: 100%;
    flex: 0 0 100%;
}
._ancer a  {
color:black;
text-decoration:none;
}
._ancer a:hover{
color:black;
text-decoration:underline;
}
</style>
<div class="container-fluid" style="padding:0px">
    <div class="row" style="height:100vh">
        <div class="columnAlphabets" style="padding:0px">
            <div class="row" id="alphabet">
                <!--DIv Appended-->
                <?php
foreach (range('A', 'Z') as $alphabet) {?>
    <a href="Additives.php?alphabet=<?php echo $alphabet ?>" class="col-12 AlphaBet" style="text-decoration:none;color:black;background-color:#008c00;background-image: linear-gradient(to right,green,yellow);border-bottom:1px solid black;height: 46px;padding: 10px;">
   <?php echo $alphabet ?>
   <img src="img/Arrow2.png" style="width:20px;transform: rotate(90deg);float: right;margin-top:7px"/>
   </a>
<?php }
?>
            </div>
        </div>
        <div class="columnAllergies" style="padding:0px">
            <div class="row" id="allergies">
                <!--DIv Appended-->
                <?php 
  if(isset($_GET['alphabet'] ) && isset($_GET['alphabet'] ) != ""){
     $value=$_GET['alphabet'];
     $q="SELECT  DISTINCT i.nameIngred  FROM additive d INNER JOIN ingredient i on d.ingredientId=i.PrimarykeyIngredient WHERE i.nameIngred LIKE '$value%'";
     $res=mysqli_query($db,$q);
     while($row=mysqli_fetch_assoc($res)){?>
          <div class="_ancer" style="width:100%">
          <a href="http://maps.google.com/search?q=<?php echo $row['nameIngred']; ?>" target="_blank"> <?php echo $row['nameIngred']; ?></a>
     </div>    
     <?php }
 }
     ?>
            </div>
        </div>
    </div>
</div>
