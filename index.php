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
    <link rel="stylesheet" type="text/css" href="css/preferences.css">

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
<?php
    
    include("dbconnect.php");
    $con = Openconn();
    session_start();
    $user = $_SESSION['user'];


    if(isset($_POST['logout'])) //button if clicked
    {
        session_destroy();
        header('location: http://localhost/login.php', true, 307);
    }

?>


    <div id="tm-bg"></div>
    <div id="tm-wrap">
        
        <div class="tm-main-content">
            
            <div class="container tm-site-header-container">
                <div class="row">
                    
                    <div class="col-sm-12 col-md-6">
                        
                        <h3><b>Hola <?php  echo $user;  ?>!</b></h3>
                        After a lot of hussle and months of preparation, you are now finally free and ready to go to college.<br><br>
                        You might be seeking some advice about choice filling.
                        Let us help you to fill in your college preferences. Just fill in all the details, and you will be all set!

                        <br><br>
                        <form method="POST"><button type="submit" name="logout" class="btn logout"><b>Logout</b></button></form>

                    </div>
                    <!-- <div class="col-sm-12 col-md-3"></div> -->


                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        
                        <div class="content">
                            
                            <div class="grid">
                                <a href="dash.php">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Dashboard</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                    </div>
                                </div>
                                </a>

                                <a href="choicefill.php">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Choice Filling</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                    </div>
                                </div>
                                </a><a href="updatepref.php">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Display of List</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                    </div>
                                </div>
                                </a><a href="contactus.html">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contact Us</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                    </div>
                                </div>
                                </a>

<!-- 

                                <button><a href="contactus.php"><div class="grid__item">
                                <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Any Query?</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Contact Us</h2>        
                                                    </div>
                                                </div>

                                                
                                                </a></button> -->
                                            </div>
                                            
                    
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
          
        </div> <!-- .tm-main-content -->  
    </div>
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