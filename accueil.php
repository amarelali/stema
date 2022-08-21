
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> -->
<link rel="stylesheet" type="text/css" href="css/firstPage.css" />
<title>Stema</title>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>

</style>
</head>
<?php

include("header.php");
include("connect.php");
?>
<div class="row" >
    <img src="Stema%20pics/nutriscore-logo-home-page.png" style="margin:auto"/>
</div>
<div class="containerNutriScore" >
<?php
$q="SELECT * FROM `nutriscore`";
$res=mysqli_query($db,$q);
while($row=mysqli_fetch_assoc($res)){?>
<div class="row">    
    <div class="nutriScore" style="display: inherit;margin:0px"> 
        <span style="color:<?php echo $row['colorBorder']?>"><?php echo $row['class']?> - </span>
        <div style="width: 48%;margin-left: 10px;margin-top: 10px;line-height: 19px;color:<?php echo $row['colorBorder']?>">
            <?php echo $row['description']?>
        </div>
    </div>
</div> 
<?php
}

?>

 </div>

</html>
