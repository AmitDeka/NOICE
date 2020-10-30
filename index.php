<?php
include "./inc/connc.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOICE</title>
    <meta name="description" content="Custom T-Shirt Designer Website">

    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/navbar.js" defer></script>
    <script src="js/jqueryui.min.js"></script>
</head>
<body>
    <!-- loader end -->
    <!-- <div id="overlayer"></div>
    <span class="loader">
        <span class="loader-inner"></span>
    </span> -->
    <!-- loader end -->
    <header>
        <?php include"./inc/navbar.php"?>
    </header>
    
    <div class="content">
        <img src="imgs/bgTest.jpg" alt="">
        <img src="imgs/bgTest.jpg" alt="">
    </div>
    <!-- <script>
        $(window).load(function(){
            $(".loader").delay(2000).fadeOut("slow");
            $("#overlayer").delay(2000).fadeOut("slow");
        })
    </script> -->
</body>
</html>


