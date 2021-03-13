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
    // if(isset($_SESSION["user"]) &&  $_SESSION['loggedin'] == true)
    // {
    //     echo $_SESSION['user'];
    // }
    
    if(isset($_POST['enter'])) //button if clicked
    {
        $name= $_POST['name'];
        $email1=$_POST['email1'];
        $stype=$_POST['stype'];
        // $hsos= $_POST['hsos'];
        $category=$_POST['category'];
        $state=$_POST['state'];
        $mair1= $_POST['mair1'];
        $aair1=$_POST['aair1'];
        $mair2=$_POST['mair2'];
        $aair2=$_POST['aair2'];

        // echo $name;
        $user=$_SESSION['user'];
        // echo $user;

        $query1 = "SELECT state_id from states WHERE Name='$state'";

        if(!$qsql = mysqli_query($con, $query1))
        {
            echo mysqli_error($con);
        }
        else
        {
            if(mysqli_num_rows($qsql)==1)
            {
                $rs = mysqli_fetch_array($qsql);
                $statenum=$rs[0];
                $query = "INSERT INTO userdetails(username, Name, MainsRank, AdvancedRank, Gender, Category, email, HomeState)
                VALUES ('$user','$name', '$mair1', '$aair1', '$stype', '$category', '$email1', $statenum)";
        
                if(mysqli_query($con, $query))
                {
                    // echo $psw;
                    // session_destroy();
                    header('location: http://localhost/index.php', true, 307);
                    exit();
                }
                else
                {
                    header('location: http://localhost/login.php', true, 307);
                    // echo "error in entering user details";
                    exit();
                }
            }
        }

    }

?>


    <div id="tm-bg"></div>
    <!-- <div id="tm-wrap">
        <div class="tm-main-content"> -->
            <!-- <div class="container tm-site-header-container"> -->
                
                <fieldset style = "width: 45vw; margin:5vw 25vw ">
                    <form method="post" action='#'>
                        <div class="container">
                          <h2 id='heading' class="family">Preferences</h2><br>
                      
                          <label for="name"><div class="family">Name</div></label><br>
                          <input type="text" placeholder="Enter Name" name="name" required>
                      <br><br>
                          <label for="email1"><div class="family">Email ID</div></label><br>
                          <input type="email" placeholder="Enter Email" name="email1">
                      <br><br>
                          <label for="stype"><div class="family">Seat Type</div></label><br>
                          <select name="stype">
                        <option value="Female-only (including Supernumerary)">Female-only (including Supernumerary)</option>
                        <option value="Gender-Neutral">Gender-Neutral</option>
                        </select>
                        

                        <br><br>
                        <label for="category"><div class="family">Category</div></label>
                        <select name="category">
                        <option value="OPEN">OPEN</option>
                        <option value="OBC-NCL">OBC-NCL</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="EWS">EWS</option>
                        <option value="EWS (PwD)">EWS (PwD)</option>
                        <option value="OPEN (PwD)">Open (PwD)</option>
                        <option value="OBC-NCL (PwD)">OBC-NCL (PwD)</option>
                        <option value="SC (PwD)">SC (PwD)</option>
                        <option value="ST (PwD)">ST (PwD)</option>
                        </select>
                        <br><br>


                        <label for="state"><div class="family">Home State/Union Territory</div></label>
                        <select name="state">
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <!-- ------------------------------------- -->
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Pondicherry">Pondicherry</option>
                        </select>

                        <br><br>
                        <label for="mair1"><div class="family">JEE Mains AIR (Paper 1)</div></label><br>
                        <input type="text" placeholder="Enter JEE Mains AIR" name="mair1" required>
                        <br>
                        <label for="aair1"><div class="family">JEE Advanced AIR (Paper 1)</div></label><br>
                          <input type="text" placeholder="Enter JEE Advanced AIR" name="aair1">
                          <br>
                          <label for="mair2"><div class="family">JEE Mains AIR (Paper 2)</div></label><br>
                        <input type="text" placeholder="Enter JEE Mains AIR" name="mair2">
                        <br>
                        <label for="aair2"><div class="family">JEE Advanced AIR (Paper 2)</div></label><br>
                          <input type="text" placeholder="Enter JEE Advanced AIR" name="aair2">

                      <br>
                      
                          <div class="clearfix"><br>
                            
                            <button type="submit" name="enter" class="submit family">Submit!</button>
                          </div>
                          <div>
                            <div class="align family"><br>Go back to<a class="family" href="login.php"> login page </a></div>
                        
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