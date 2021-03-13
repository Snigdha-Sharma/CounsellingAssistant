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
    if($_SESSION["user"] &&  $_SESSION['loggedin'] = true)
    {
        
    }
    else{
        // echo "<script>alert('You need to login first.')</script>";
        header('Location: login.php');
    }

    
    $user = $_SESSION["user"];


    $name="";
    $homestate="";
    $mainsp1="";
    $advancedp1="";
    $gender="";
    $categ="";
    $email="";

    $result="";
    if(isset($_POST['branch'])){
        $sql = "SELECT * FROM branches";
        $result = $conn->query($sql);
        // echo $result;
        // $conn->close();
    }

    if(isset($_POST['logout'])) //button if clicked
    {
        session_destroy();
        header('location: http://localhost/login.php', true, 307);
    }
    if(isset($_POST['refresh'])){
        $qsql = "SELECT * FROM userdetails WHERE username='$user'";
        if(!$qsql = mysqli_query($con,$qsql))
        {
            echo mysqli_error($con);
        }
        else
        {
            if(mysqli_num_rows($qsql)==1)
            {
                $rs = mysqli_fetch_array($qsql);
                $name=$rs[1];
                $homestate=$rs[3];
                $mainsp1=$rs[4];
                $advancedp1=$rs[5];
                $gender=$rs[6];
                $categ=$rs[7];
                $email=$rs[8];
                // $name=$rs[1];
            }
        }
        // echo $name;
    }
    
    // error_reporting(0);
    // ini_set('display_errors', 0);
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


                        <?php // LOOP TILL END OF DATA
                        // echo "Avsxc";
                        // echo $result;
                        if($result!=null){
                            while($rows=$result->fetch_assoc())
                            {
                            ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH
                                    ROW OF EVERY COLUMN-->
                                <?php echo $rows['branch_id'];?>
                                <?php echo $rows['Name'];?>
                                <?php echo $rows['program_id'];?>
                            <?php
                            }
                        }
                            ?>
                        <br><br>
                        <form method="POST"><button type="submit" name="logout" class="btn logout"><b>Logout</b></button></form>

                    </div>
                    <!-- <div class="col-sm-12 col-md-3"></div> -->


                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        
                        <div class="content">
                            
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Dashboard</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Student Details</h2>
                                                    <form method="POST"><button type="submit" name="refresh" class="submit">Refresh</button></form>
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                               <br>
                                                JEE Mains Rank : <?php  
                                                echo $mainsp1;  ?><br><br>
                                                JEE Advanced Rank : <?php  
                                                echo $advancedp1;  ?><br><br>  
                                                Name : <?php  
                                                echo $name;  ?><br><br>
                                                Email ID : <?php  
                                                echo $email;  ?><br><br>
                                                Category : <?php  
                                                echo $categ;  ?><br><br>
                                                Gender : <?php  
                                                echo $gender;  ?><br><br>
                                                <!-- Homestate : <br><br>                                -->
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Choice Filling</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">

                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title"><center><b>Recommended List</b></center></h2>
                                                    </div>
                                                </div>
                                                <table role="table">
                                                    <thead role="rowgroup">
                                                        <tr role="row">
                                                            <th role="columnheader"><b>Serial Number</b></th>
                                                            <th role="columnheader"><b>Institute Name</b></th>
                                                            <th role="columnheader"><b>Program Name</b></th>
                                                            <th role="columnheader"><b>Branch</b></th>
                                                            <th role="columnheader"><b>Duration</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody role="rowgroup">
                                                        <tr role="row">
                                                            <td role="cell">1</td>
                                                            <td role="cell">Motilal Nehru National Institute Of Technology, Allahabad</td>
                                                            <td role="cell">Bachelor Of Technology</td>
                                                            <td role="cell">Computer Science and Engineering</td>
                                                            <td role="cell">4 years</td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td role="cell">2</td>
                                                            <td role="cell">Indian Institute of Technology Bombay</td>
                                                            <td role="cell">Bachelor Of Technology</td>
                                                            <td role="cell">Electrical Engineering</td>
                                                            <td role="cell">4 years</td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td role="cell">3</td>
                                                            <td role="cell">Smurf</td>
                                                            <td role="cell">Giving Exploding Presents</td>
                                                            <td role="cell">Smurflow</td>
                                                            <td role="cell">Smurf</td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td role="cell">4</td>
                                                            <td role="cell">Beyler</td>
                                                            <td role="cell">Sales Representative</td>
                                                            <td role="cell">Red</td>
                                                            <td role="cell">Wars</td>

                                                        </tr>
                                                        <tr role="row">
                                                            <td role="cell">5</td>
                                                            <td role="cell">Cool</td>
                                                            <td role="cell">Tree Crusher</td>
                                                            <td role="cell">Blue</td>
                                                            <td role="cell">Wars</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div align="center">
                                                <label for="choice1"></label>
                                                <input type="number" id="choice1" name="choice1">
                                                <label for="choice2"></label>
                                                <input type="number" id="choice2" name="choice2">
                                                <button type="button">Swap!</button>
                                            </div>
                                            <div align="right">
                                                <button type="button">Download</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Update preferences</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                              
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                    <div class="center family"><h2><b><u>Questionnaire for Applicant Priorities</u></b></h2><br></div>
                    </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                        
                    <div>
                        <label class="container">
                            <h5>Do you strictly prefer institutes from your own state?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Is placement ranking more important to you than overall NIRF ranking?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Is campus ranking more important to you than overall NIRF ranking?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Is campus ranking more important to you than placement ranking?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you prefer going into a college that is well established(i.e. established previously than other colleges)?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you want branch preference to be given less importance if the institution is an IIT?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you want branch preference to be given less importance if the institution is a NIT?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <h5>Do you want branch preference to be given less importance if the institution is a IIIT?</h5>
                            <input type="checkbox" class='container1'>
                            <span class="checkmark"></span>
                        </label>
                        <br />
                        <label for="duration">What is the duration of course that you prefer?</label><br />
                        <select name="duration">
                            <option value="4 years">4 years</option>
                            <option value="5 years">5 years</option>
                        </select>
                        <br /><br />
                        <p>Number the given regions from 1-6 according to your priority with 1 being the highest and 6 the lowest:</p>

                        <input type="number" id="region" name="region" min="1" max="6">
                        <label for="region">North India</label>
                        <br />
                        <input type="number" id="region" name="region" min="1" max="6">
                        <label for="region">South India</label>
                        <br />
                        <input type="number" id="region" name="region" min="1" max="6">
                        <label for="region">East India</label>
                        <br />
                        <input type="number" id="region" name="region" min="1" max="6">
                        <label for="region">West India</label>
                        <br />
                        <input type="number" id="region" name="region" min="1" max="6">
                        <label for="region">Central India</label>
                        <br />
                        <input type="number" id="region" name="region" min="1" max="6">
                        <label for="region">North East India</label>
                        <br />
                        <br />
                        <p>Write the branch numbers in your preference order using spaces:</p>
                        
                        <form method="POST" action="#"><button type="submit" name="branch" class="submit">Show Branch numbers:</button></form>
                        <input type="text" >


                    </div>
                    
                  
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
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
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>For any queries/doubts related to choice filling, you can fill the form below. Our team will contact you as soon as possible.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="index.html" method="post" class="contact-form">
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                  <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                  <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                              <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                            </div>
                                                            <button name="submit" type="submit" class="btn btn-primary tm-btn-submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
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