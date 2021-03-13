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
    $con = Openconn();
    session_start();
    if(isset($_POST['submit']))
    {
        // $ch = $_POST['dur'];
        
        $_SESSION['chk1']=isset($_POST['chk1']) ? 1 : 0;
        $_SESSION['chk2']=isset($_POST['chk2']) ? 1 : 0;
        $_SESSION['chk3']=isset($_POST['chk3']) ? 1 : 0;
        $_SESSION['chk4']=isset($_POST['chk4']) ? 1 : 0;
        $_SESSION['chk5']=isset($_POST['chk5']) ? 1 : 0;

        $_SESSION['dur']=$_POST['dur'];

        $_SESSION['region1']=isset($_POST['region1']) ? 1 : 0;
        $_SESSION['region2']=isset($_POST['region2']) ? 1 : 0;
        $_SESSION['region3']=isset($_POST['region3']) ? 1 : 0;
        $_SESSION['region4']=isset($_POST['region4']) ? 1 : 0;
        $_SESSION['region5']=isset($_POST['region5']) ? 1 : 0;
        $_SESSION['region6']=isset($_POST['region6']) ? 1 : 0;

        $_SESSION['br1']=isset($_POST['br1']) ? 1 : 0;
        $_SESSION['br2']=isset($_POST['br2']) ? 1 : 0;
        $_SESSION['br3']=isset($_POST['br3']) ? 1 : 0;
        $_SESSION['br4']=isset($_POST['br4']) ? 1 : 0;
        $_SESSION['br5']=isset($_POST['br5']) ? 1 : 0;

        $_SESSION['r1']=isset($_POST['r1']) ? 1 : 0;
        $_SESSION['r2']=isset($_POST['r2']) ? 1 : 0;
        $_SESSION['r3']=isset($_POST['r3']) ? 1 : 0;
        $_SESSION['r4']=isset($_POST['r4']) ? 1 : 0;
        $_SESSION['r5']=isset($_POST['r5']) ? 1 : 0;
        $_SESSION['r6']=isset($_POST['r6']) ? 1 : 0;

        $_SESSION['ov1']=isset($_POST['ov1']) ? 1 : 0;
        $_SESSION['ov2']=isset($_POST['ov2']) ? 1 : 0;
        $_SESSION['ov3']=isset($_POST['ov3']) ? 1 : 0;
        $_SESSION['ov4']=isset($_POST['ov4']) ? 1 : 0;
        $_SESSION['ov5']=isset($_POST['ov5']) ? 1 : 0;
        $_SESSION['ov6']=isset($_POST['ov6']) ? 1 : 0;
        // echo $_SESSION['chk12'];
        // echo $_SESSION['chk1'];
        // echo $check_value;

        // $qsql = "INSERT INTO trial(chk1, duration) VALUES ('$check_value', '$ch')";
        // if(mysqli_query($con, $qsql))
        //   {
        //         // echo $psw;
        //         // session_destroy();
                header('location: http://localhost/index.php', true, 307);
        //         exit();
        //     }
        //     else
        //     {
        //         header('location: http://localhost/index.php', true, 307);
        //         // echo "error in entering user details";
        //         exit();
        //     }
    }
// $result=null;
    // if(isset($_POST['branch']))
    // {
        // $sql = "SELECT * FROM branches";
        // $result = mysqli_query($con, $sql);
        // echo $result;
        // if(!$result) echo "aaaaaaaaaaa";
        if ($con->connect_error) {
            die('Connect Error (' .
            $con->connect_errno . ') '.
            $con->connect_error);
        }
        

    // }
    // error_reporting(0);
    // ini_set('display_errors', 0);
?>


    <div id="tm-bg"></div>
                <fieldset style = "width: 60vw; margin:4vw 20vw ">
                    <form method="post" action='#'>
                    <button  name="aaa" class="btn logout"><a href="index.php" class="white">Go back to home page</a></button><br>
                        <div class="container">
                        <!-- <button type="submit" name="branch" class="submit">Show Branch and Region numbers:</button> -->
                          <h2 id='heading' class="family">Questionnaire for Applicant Priorities</h2><br>
                      
                        <label class="container">
                            <h5>Do you strictly prefer institutes from your own region?</h5>
                            <input type="checkbox" class='container1' name="chk1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you strictly prefer institutes from your own state?</h5>
                            <input type="checkbox" class='container1' name="chk2">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5> If the college is one of the IIT’s this is more important than branch preference - True or False, tick for true.</h5>
                            <input type="checkbox" class='container1' name="chk3">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5> If the college is one of the NIT’s this is more important than branch preference - True or False, tick for true.</h5>
                            <input type="checkbox" class='container1' name="chk4">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5> If the college is one of the IIIT’s this is more important than branch preference - True or False, tick for true.</h5>
                            <input type="checkbox" class='container1' name="chk5">
                            <span class="checkmark"></span>
                        </label>
                        <!-- <label class="container">
                            <h5>Do you want branch preference to be given less importance if the institution is an IIT?</h5>
                            <input type="checkbox" class='container1' name="chk6">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you want branch preference to be given less importance if the institution is a NIT?</h5>
                            <input type="checkbox" class='container1' name="chk7">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you want branch preference to be given less importance if the institution is a IIIT?</h5>
                            <input type="checkbox" class='container1' name="chk8">
                            <span class="checkmark"></span>
                        </label> -->
                        <br>

                        <label for="dur">Preferred duration?</label><br>
                        <select name="dur">
                            <option value="Fouryears">Fouryears</option>
                            <option value="Fiveyears">Fiveyears</option>
                            <option value="Any">Any</option>
                        </select>                            
                        <br><br>

                        <!-- <label for="dur"><div class="family">What is the duration of course that you prefer?</div></label><br>
                          <select name="dur">
                        <option value="Female Only (Supernumerary)">Female Only (Supernumerary)</option>
                        <option value="Gender Neutral">Gender Neutral</option>
                        </select> -->




                        <p>Number the given regions from 1-6 according to your priority with 1 being the highest and 6 the lowest:</p>

                        <input type="number" id="region" name="region1" min="1" max="6">
                        <label for="region">North India</label>
                        <br>
                        <input type="number" id="region" name="region2" min="1" max="6">
                        <label for="region">South India</label>
                        <br>
                        <input type="number" id="region" name="region3" min="1" max="6">
                        <label for="region">East India</label>
                        <br>
                        <input type="number" id="region" name="region4" min="1" max="6">
                        <label for="region">West India</label>
                        <br>
                        <input type="number" id="region" name="region5" min="1" max="6">
                        <label for="region">Central India</label>
                        <br>
                        <input type="number" id="region" name="region6" min="1" max="6">
                        <label for="region">North East India</label>
                        <br>
                        <br>
                        <p>Fill in your top 5 branch preferences using branch numbers:</p>
                        <!-- <p>For example: If your branch preference is 1) Civil Engineering and 2) Bio Technology, then
                        you will fill the blank as: 12 4</p> -->
                        
                        <!-- <form method="POST"></form>
                        <br><br> -->
                        <input type="number" id="region" name="br1" min="1" max="25">
                        <label for="region">Pref 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="br2" min="1" max="25">
                        <label for="region">Pref 2</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="br3" min="1" max="25">
                        <label for="region">Pref 3</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="br4" min="1" max="25">
                        <label for="region">Pref 4</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="br5" min="1" max="25">
                        <label for="region">Pref 5</label>
                        <br>


                        <table>
                        <?php   // LOOP TILL END OF DATA  
                        // if(isset($_POST['branch']))
                        // {
                            $var=1;
                            $sql = "SELECT branch_id, Name FROM branches ";
                            $result = $con->query($sql);
                            // $conn->close();
                            while($rows=$result->fetch_assoc()) 
                            { 
                        ?> 
                        <tr> 
                            <!--FETCHING DATA FROM EACH  
                                ROW OF EVERY COLUMN--> 
                            
                            <td><?php echo $rows['Name'];?></td> 
                            <td><?php echo $rows['branch_id'];?></td> 
                            
                        </tr> 
                        <?php 
                            }
                            // header('Location: choicefill.php', true, 307);
                        // }
                        ?> 
                        </table>
                        <br>

                        <p>Fill in your region preferences using region numbers:</p>
                        <!-- <p>For example: If your branch preference is 1) Civil Engineering and 2) Bio Technology, then
                        you will fill the blank as: 12 4</p> -->
                        
                        <!-- <button type="submit" name="reg" class="submit">Show Region numbers:</button> -->
                        <!-- <br><br> -->
                        <input type="number" id="region" name="r1" min="1" max="6">
                        <label for="region">Pref 1</label>&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="r2" min="1" max="6">
                        <label for="region">Pref 2</label>&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="r3" min="1" max="6">
                        <label for="region">Pref 3</label>&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="r4" min="1" max="6">
                        <label for="region">Pref 4</label>&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="r5" min="1" max="6">
                        <label for="region">Pref 5</label>&nbsp;&nbsp;&nbsp;

                        <input type="number" id="region" name="r6" min="1" max="6">
                        <label for="region">Pref 6</label>
                        <br>
                        
                        <table>
                        <?php   // LOOP TILL END OF DATA  
                        // if(isset($_POST['branch']))
                        // {
                            $sql = "SELECT * FROM regions ";
                            $result = $con->query($sql);
                            // $conn->close();
                            while($rows=$result->fetch_assoc()) 
                            { 
                        ?> 
                        <tr> 
                            <!--FETCHING DATA FROM EACH  
                                ROW OF EVERY COLUMN--> 
                                <td><?php echo $rows['Region_Name'];?></td>
                            <td><?php echo $rows['region_id'];?></td> 
                            
                            
                        </tr> 
                        <?php 
                            }
                            // header('Location: choicefill.php', true, 307);
                        // }
                        ?> 
                        </table>
                        <br>

                        <p>Fill in your general preferences using 1-6 numbers, 1 -> most preferred, 6->least preferred:</p>
                        <!-- <p>For example: If your branch preference is 1) Civil Engineering and 2) Bio Technology, then
                        you will fill the blank as: 12 4</p> -->
                        
                        <input type="number" id="region" name="ov1" min="1" max="6">
                        <label for="region">NIRF stats</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="ov2" min="1" max="6">
                        <label for="region">Placements</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="ov3" min="1" max="6">
                        <label for="region">Branch</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="ov4" min="1" max="6">
                        <label for="region">Campus Beauty</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <input type="number" id="region" name="ov5" min="1" max="6">
                        <label for="region">How near college is from home</label>&nbsp;&nbsp;&nbsp;

                        <input type="number" id="region" name="ov6" min="1" max="6">
                        <label for="region">How old the college is (alumni base)</label>
                        <br>

                     <button type="submit" name="submit" class="submit">Submit</button>
                     
                
                     </form>
          
        </div>
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