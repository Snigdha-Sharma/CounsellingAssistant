<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pop HTML5 Template</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               <!-- Templatemo style -->
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>

<?php
    
    include("dbconnect.php");
    $con = Openconn();
    session_start();
    if($_SESSION["user"] &&  $_SESSION['loggedin'] = true)
    {
        
    }
    else{
        // echo "<script>alert('You need to login first.')</script>";
        header('Location: login.php');
    }

    
    $user = $_SESSION["user"];
?>


    <div id="tm-bg"></div>
    <!-- <div id="tm-wrap">
        <div class="tm-main-content"> -->
            <!-- <div class="container tm-site-header-container"> -->
                
            <fieldset style = "width: 60vw; margin:4vw 20vw ">
                    <form method="post" action='#'>
                    <button  name="aaa" class="btn logout"><a href="index.php" class="white">Go back to home page</a></button><br>
                        <div class="container">
                          <h2 id='heading' class="family">Preferences</h2><br>
                         
    <!-- </div> -->
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>