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
    if(isset($_SESSION["user"]) &&  $_SESSION['loggedin'] == true)
    {
        header('Location: index.php');
    }
    // $con = mysqli_connect("localhost","root","","counselling");
    // 	if(mysqli_connect_errno($con))
    // 	{
    // 		echo mysqli_connect_error();
    // 	}
    if(isset($_POST['signup'])) //button if clicked
    {
        $user= $_POST['user'];
        $psw=$_POST['psw'];
        $psw2=$_POST['psw-repeat'];


        // checking for already existing username
        $sql = "SELECT * FROM userlogin WHERE Username='$_POST[user]'";

        if(!$qsql = mysqli_query($con,$sql))
        {
            echo mysqli_error($con);
        }
        else
        {
            if(mysqli_num_rows($qsql)==1)
            {
                // header('refresh');
                echo "<script>alert('Username already exists. Try a different name.')</script>";
            }
            else
            {
                // checking passwords
                if($psw==$psw2){
                    //   echo $psw;
                $query="INSERT INTO userlogin(Username, Password) VALUES ('$user','$psw')";
                // echo $query;
                if(mysqli_query($con, $query))
                {
                    // echo $psw;
                    // session_destroy();
                    session_start();
                    $_SESSION["user"] = $user;
                    $_SESSION['loggedin'] = true;
                    header('location: http://localhost/userdetails.php', true, 307); 
                    exit();
                }
                else
                {
                    session_destroy();
                    header('location: http://localhost/signup.php', true, 307);
                    // echo $con;
                    exit();
                }
                }
                else{
                    echo "Passwords do not match. Try again.";
                }
            	// echo "<script>alert('Invalid Login ID and password entered...')</script>";	
            }
        }
    }
?>

    <div id="tm-bg"></div>
    <!-- <div id="tm-wrap">
        <div class="tm-main-content"> -->
            <!-- <div class="container tm-site-header-container"> -->
                
                <fieldset style = "width: 45vw; margin:5vw 25vw ">
                    <form action="" method="post">
                        <div class="container">
                          <h2 id='heading' class="family">Student's Sign Up</h2><br>
                      
                          <label for="user"><div class="family">Username</div></label><br>
                          <input type="text" placeholder="Enter Username" name="user" required>
                      <br><br>
                          <label for="psw"><div class="family">Password</div></label>
                          <input type="password" placeholder="Enter Password" name="psw" required>
                      <br><br>
                          <label for="psw-repeat"><div class="family">Repeat Password</div></label>
                          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                        <br>
                      
                          <div class="clearfix"><br>
                            
                            <button type="submit" name="signup" class="submit family">Sign Up</button>
                          </div>
                          <div>
                            <div class="align"><br>Go back to<a href="login.php"> login page </a></div>
                        
                          </div>
                        </div>
                      </form>

                <!-- </div>                 -->
            <!-- </div>
          
        </div> .tm-main-content   -->
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