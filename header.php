<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/firstPage.css" />
<script src="js/jquery.min.js"></script>
<style>
body{
    font-family: sans-serif;
}
</style>
</head>
<div class="header" style="position: relative;">
    <div class="row">
        <div id="menubtn" style="margin-top: 10px;">
            <img src="Stema%20pics/burger-menu.png">
        </div>
        <div id="stemaInHeader" style="margin-top: 6px;"><!--Stema-in-header.png-->
            <img src="Stema%20pics/Stema-in-header.png">
        </div>
        <div id="nutritionist" ><!--Stema-in-header.png-->
            <img src="Stema%20pics/nutriotionst-image.png" >
            <div id="descriptionForMobile">Nutrition<br> Book <br>Now !</div> 
            <div id="descriptionForLap">Nutrition Book Now !</div>
        </div>
    </div>
</div>
<div class="row searchLign" style="border-bottom: solid red;">
        <div class="col-2" id="searchIcon" style="padding:10px">
            <img src="Stema%20pics/search-icon.png"> 
        </div>
        <div class="col-6" id="searchContainer">
            <form method="post" action="searchResults.php">
                <input name="myTextSearch"  type="text" autocomplete="off" style="border:none;background: transparent;outline: 0;height: 60%;margin-top: 25px;width: 100%;font-size: 20px;text-align:center;" placeholder="Start Typing...">      
            </form>
        </div>
        <a class="col-4" id="scanContainer" href="scanner.php" target="_blank">
            <img id="scanImage" src="Stema%20pics/scan-image.png" style="padding: 10px;"> 
        </a>
    </div>
    <?php 
session_start();
if((time() - @$_SESSION['Created']) < 60000){
?>
<div class="containerMenu" id="menu" style="display:none;position: absolute;top: 53px;z-index: 1000;"> <!--style="display:none"-->
    <div class="row">
        <div  class="listOfMenu" >
            <div class="MenuBar row">
                <div class="buttons">
                    <img src="Stema%20pics/burger%20menu%20icons/immage.png" style="margin-left: 50px;margin-top: 9px;width: 50%;">
                       <hr>
                    </div>
                <a class="buttons" id="LogOut" href="logOut.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/log-in.png"  style="width: 28px;"/> 
                    <span >Log Out</span>
                    <hr>
                </a>
                <a class="buttons" id="profile" href="myProfile.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/myProfile.PNG"  style="width: 28px;"/> 
                    <span >My Profile</span>
                    <hr>
                </a>
                <a class="buttons" id="MyFavorites" href="myFav.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/my-favorites.png" style="width: 28px;"/> 
                    <span >My Favorites</span>
                    <hr>
                </a> 
                <a class="buttons" id="History" href="History.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/history.png" style="width: 28px;"/> 
                    <span>History</span>
                    <hr>
                </a>
                <a class="buttons" id="NutritionalFacts" href="NutritionalFacts.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/nutritional-fact.png" style="width: 28px;"/> 
                    <span >Nutritional facts</span>
                    <hr>
                </a>
                <a class="buttons" id="Allergies" href="Allergies.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/allergies.png" style="width: 28px;"/> 
                    <span >Allergies</span>
                    <hr>
                </a>
                <a class="buttons" id="Additives" href="Additives.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/Additives.png" style="width: 28px;"/> 
                    <span >Additives</span>
                    <hr>
                </a>
                <a class="buttons" id="Info" href="Info.php" target="_blank">
                    <img  src="Stema%20pics/burger%20menu%20icons/info.png" style="width: 28px;"/> 
                    <span >Info</span>
                    <hr>
                </a>
                
            </div>
        </div>
    </div>
</div>
<?php
}
else{?>
    <div class="containerMenu" id="menu" style="display:none;position: absolute;top: 53px;z-index: 1000;"> <!--style=""-->
    <div class="row">
        <div  class="listOfMenu" >
            <div class="MenuBar row">
                <div class="buttons">
                    <img src="Stema%20pics/burger%20menu%20icons/immage.png" style="margin-left: 50px;margin-top: 9px;width: 50%;">
                       <hr>
                    </div>
                <a class="buttons" id="LogIn" href="logIn.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/log-in.png" style="width: 28px;"/> 
                    <span >Log In</span>
                    <hr>
                </a>
                <a class="buttons" id="register" href="signUp.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/register.png" style="width: 28px;"/> 
                    <span >Register</span>
                    <hr>
                </a>
                <a class="buttons" id="NutritionalFacts" href="NutritionalFacts.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/nutritional-fact.png" style="width: 28px;"/> 
                    <span >Nutritional facts</span>
                    <hr>
                </a>
                <a class="buttons" id="Allergies" href="Allergies.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/allergies.png" style="width: 28px;"/> 
                    <span >Allergies</span>
                    <hr>
                </a>
                <a class="buttons" id="Additives" href="Additives.php">
                    <img  src="Stema%20pics/burger%20menu%20icons/Additives.png" style="width: 28px;"/> 
                    <span >Additives</span>
                    <hr>
                </a>
                <a class="buttons" id="Info" href="info.php" target="_blank">
                    <img  src="Stema%20pics/burger%20menu%20icons/info.png" style="width: 28px;"/> 
                    <span >Info</span>
                    <hr>
                </a>
                
            </div>
        </div>
    </div>
</div>
<?php
   // die("No session");
}
?>
<script>
$("#menubtn").click(function(){
     $("#menu").show();
    // $("#menu").toggleClass("display");
});
// if (event.target.closest('#menubtn')){$("#menu").hide();} 
$(document).on('click', function (event) {
        // if ( event.target.closest('#menubtn')) return;
        // $("#menu").hide();
        if ( !event.target.closest('#menubtn')) {$("#menu").hide();}
        
    }); 
// function search(){
//     console.log(myTextSearch.value);
// }

</script>
