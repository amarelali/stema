<?php 
    include("header.php");
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<style>
    #nutritionist ,.searchLign{
        display:none;
    }
</style>
<div class="container-fluid" >
    <div class="row">
        <div class="col-12">
            <b>Insert Data</b>
        </div>
        <div class="row">
        <form method="post" action="InsertProduit.php">
            <div class="col-12">
                <span>Name of Product:</span> <input type="text" name="nameProuct"/>
            </div> 
            <div class="col-12">
                <span>BarCode:</span> <input type="text" name="BarCode"/>
            </div>
            <div class="col-12">
                <span>Nutritional Score: </span>
                <select name="nutriscore">
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                      <option value="4">D</option>
                      <option value="5">E</option>
                </select>
            </div>
            <div class="col-12">
                Image of Product:   <input type="file" id="img" name="imgProd" accept="image/*">
            </div>   
            <div class="col-12">
                <span>Nombre ingredient:</span> <input type="number" name="nbIngred"/>
            </div>   
            <div class="col-12"> 
                <input type="submit" name="submit" value="Insert Data">
            </div>
        </form>
        </div>
    </div>
</div>
<script>
</script>