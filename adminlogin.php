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
    <link rel="stylesheet" type="text/css" href="css/css_login.css">
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
<?php
include("dbconnect.php");
// echo $abc;
// $con=mysqli_connect("localhost","root","","counselling");
// if(mysqli_connect_errno($con))
// {
//     echo mysqli_connect_error();
// }
$con = Openconn();
if(isset($_SESSION["user"]) &&  $_SESSION['loggedin'] == true)
{
	header('Location: admin-index.php');
}

function getUser()
{
    return $user;
}

if(isset($_POST["submit"]))
{
	//if($_POST["usertype"]==1)
	$sql = "SELECT * FROM adminlogin WHERE UserName='$_POST[user]' AND Password ='$_POST[psw]'";

	if(!$qsql = mysqli_query($con,$sql))
	{
		echo mysqli_error($con);
	}
	else
	{
		if(mysqli_num_rows($qsql)==1)
		{
			session_start();
			$rs = mysqli_fetch_array($qsql);
			$_SESSION["user"] = $rs['Username'];
            $_SESSION['loggedin'] = true;			
			// $_SESSION["password"] = $rs['Password'];			
			//$_SESSION["user_type"] = $rs[type];
			// echo $_SESSION["user"];
			header('Location: admin-index.php', true, 307);
    }
		else
		{
            // echo $_SESSION["user"];
			echo "<script>alert('Invalid Login ID and password entered...')</script>";	
		}
	}
}
?>
    <div id="tm-bg"></div>
    <!-- <div id="tm-wrap">
        <div class="tm-main-content"> -->
            <!-- <div class="container tm-site-header-container"> -->
                
                <fieldset style = "width: 45vw; margin:5vw 25vw ">
                    <form method="POST" action="#">
                        <div class="new">
                            <div class="white">
                        <!-- <div class="left1"><br>
                       
                      </div> -->
                    
                      <div class="container">
                             <div class="center family"><h2>Admin Login</h2><br></div>
                        <label for="user"><div class="family">Username</div></label>
                        <input type="text" size="4" placeholder="Enter Username" name="user" required>
                    
                        <label for="psw"><div class="family">Password</div></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                            <div class="black">
                              <br><button name="submit" type="submit" class="submit family">Login</button>
                        </div>
                    <div class="align">
                        <div class="family"><br>Not registered yet ? <a href="adminsignup.php">Sign Up </a> <br>
                        For Student login, <a href="login.php">Click here </a> 
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