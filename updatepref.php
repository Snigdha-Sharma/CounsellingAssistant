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

// $result = $con->query($sql);
    
    include("dbconnect.php");
    $con = Openconn();
    session_start();
    if($_SESSION["user"] &&  $_SESSION['loggedin'] = true)
    {}
    else{
        // echo "<script>alert('You need to login first.')</script>";
        header('Location: login.php');
    }

    $user=$_SESSION['user'];
    // --------------------------------->>>>
    $ddr = "DROP TABLE FILTER1";
    $con->query($ddr);
    $ddr = "DROP TABLE FILTER2";
    $con->query($ddr);
    $ddr = "DROP TABLE FILTER3";
    $con->query($ddr);
    $ddr = "DROP TABLE FILTER4";
    $con->query($ddr);
    $ddr = "DROP TABLE allinst";
    $con->query($ddr);
    $ddr = "DROP TABLE FILTER5";
    $con->query($ddr);
    $ddr = "DROP TABLE allinstate";
    $con->query($ddr);
    $ddr = "DROP TABLE FILTER6";
    $con->query($ddr);
    $ddr = "DROP TABLE iitsonly";
    $con->query($ddr);
    $ddr = "DROP TABLE alliits";
    $con->query($ddr);
    $ddr = "DROP TABLE nitsonly";
    $con->query($ddr);
    $ddr = "DROP TABLE allnits";
    $con->query($ddr);
    $ddr = "DROP TABLE iiitsonly";
    $con->query($ddr);
    $ddr = "DROP TABLE alliiits";
    $con->query($ddr);

    $getseattype = "SELECT Category from userdetails where username='$user'";
    $seatnum="";
    if(!$getseattype = mysqli_query($con,$getseattype))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($getseattype)==1)
        {
            $rs = mysqli_fetch_array($getseattype);
            $seatnum=$rs[0];
        }
    }

    $seatn = "SELECT seat_type_id FROM seat_type WHERE Name='$seatnum'";
    $seatid="";
    if(!$seatn = mysqli_query($con,$seatn))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($seatn)==1)
        {
            $rs = mysqli_fetch_array($seatn);
            $seatid=$rs[0];
        }
    }
    // echo $seatid;
    $qsql = "CREATE TABLE FILTER1 SELECT * FROM rankings WHERE rankings.seat_type_id='$seatid';";
    $con->query($qsql);

// --------------------------------------------FILTER 1 ends--------------------------------------------
$getgendertype = "SELECT Gender from userdetails where username='$user'";
    $gendernum="";
    if(!$getgendertype = mysqli_query($con,$getgendertype))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($getgendertype)==1)
        {
            $rs = mysqli_fetch_array($getgendertype);
            $gendernum=$rs[0];
        }
    }

    $gendern = "SELECT gender_type_id FROM gender_type WHERE Name='$gendernum'";
    $genderid="";
    if(!$gendern = mysqli_query($con,$gendern))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($gendern)==1)
        {
            $rs = mysqli_fetch_array($gendern);
            $genderid=$rs[0];
        }
    }
    // echo $genderid;
    $qsql = "CREATE TABLE FILTER2 SELECT * FROM FILTER1 WHERE FILTER1.gender_type_id='$genderid';";
    $con->query($qsql);

// --------------------------------------------FILTER 2 ends--------------------------------------------

$getgendertype = "SELECT MainsRank from userdetails where username='$user'";
    $gendernum="";
    if(!$getgendertype = mysqli_query($con,$getgendertype))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($getgendertype)==1)
        {
            $rs = mysqli_fetch_array($getgendertype);
            $gendernum=$rs[0];
        }
    }

$qsql = "CREATE TABLE FILTER3 SELECT * FROM FILTER2 WHERE opening_rank>=('$gendernum'-3000) AND closing_rank<=('$gendernum'+3000);";
$con->query($qsql);
// --------------------------------------------FILTER 3 ends--------------------------------------------    
if($_SESSION['chk1']){

    $gendern = "select region_id from states, userdetails where userdetails.HomeState = states.state_id and username='$user'";
    $regionid="";
    if(!$gendern = mysqli_query($con,$gendern))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($gendern)==1)
        {
            $rs = mysqli_fetch_array($gendern);
            $regionid=$rs[0];
        }
    }
    $allinst = "CREATE TABLE allinst Select institute_id as istd from institutes, states where institutes.state_id = states.state_id and states.region_id='$regionid';";
    $con->query($allinst);

    $allsql = "CREATE TABLE FILTER4 SELECT * FROM FILTER3, allinst where FILTER3.institute_id=allinst.istd;";
    $con->query($allsql);
}
else
{
    $allinst = "CREATE TABLE FILTER4 SELECT * FROM FILTER3;";
    $con->query($allinst);
}

// --------------------------------------------FILTER 4 ends--------------------------------------------  

if($_SESSION['chk2']){

    $gendern = "select HomeState from userdetails where username='$user'";
    $regionid="";
    if(!$gendern = mysqli_query($con,$gendern))
    {
        echo mysqli_error($con);
    }
    else
    {
        if(mysqli_num_rows($gendern)==1)
        {
            $rs = mysqli_fetch_array($gendern);
            $regionid=$rs[0];
        }
    }
    // echo $regionid;
    $allinst = "CREATE TABLE allinstate Select institute_id as istdd from institutes, states where institutes.state_id = states.state_id and states.state_id='$regionid';";
    $con->query($allinst);
    $allinst = "CREATE TABLE FILTER5 select * from FILTER4, allinstate where FILTER4.institute_id=allinstate.istdd;";
    $con->query($allinst);
}
else
{
    $allinst = "CREATE TABLE FILTER5 SELECT * FROM FILTER4;";
    $con->query($allinst);
}
// --------------------------------------------FILTER 5 ends--------------------------------------------  
    
if($_SESSION['dur']=="Any"){
    $allinst = "CREATE TABLE FILTER6 SELECT * FROM FILTER5;";
    $con->query($allinst);
}
else if($_SESSION['dur']=="Fouryears")
{
    $sql = "CREATE TABLE allbranches Select branch_id as bid from branches, programs where branches.program_id=programs.SNo and programs.DurationOfCourse=4;";
    $con->query($sql);
    $sql = "CREATE TABLE filter6 SELECT * FROM filter5, allbranches WHERE filter5.branch_id=allbranches.bid;";
    $con->query($sql);
}
else
{
    $sql = "CREATE TABLE allbranches Select branch_id as bid from branches, programs where branches.program_id=programs.SNo and programs.DurationOfCourse=5;";
    $con->query($allinst);
    $sql = "CREATE TABLE filter6 SELECT * FROM filter5, allbranches WHERE filter5.branch_id=allbranches.bid;";
    $con->query($sql);
}
// --------------------------------------------FILTER 6 ends--------------------------------------------------------

if($_SESSION['chk3']){
    $sql = "CREATE TABLE alliits SELECT institute_id AS ind FROM  institutes WHERE institutes.Type='IIT';";
    $con->query($sql);
    $sql = "CREATE TABLE iitsonly SELECT * FROM filter6, alliits WHERE filter6.institute_id=alliits.ind;";
    $con->query($sql);
}
if($_SESSION['chk4']){
    $sql = "CREATE TABLE allnits SELECT institute_id AS inds FROM  institutes WHERE institutes.Type='NIT';";
    $con->query($sql);
    $sql = "CREATE TABLE nitsonly SELECT * FROM filter6, allnits WHERE filter6.institute_id=allnits.inds;";
    $con->query($sql);
}
if($_SESSION['chk5']){
    $sql = "CREATE TABLE alliiits SELECT institute_id AS ind1 FROM  institutes WHERE institutes.Type='IIIT';";
    $con->query($sql);
    $sql = "CREATE TABLE iiitsonly SELECT * FROM filter6, alliiits WHERE filter6.institute_id=alliiits.ind1;";
    $con->query($sql);
}

// --------------------------------------------FILTER 6 ends--------------------------------------------------------
$sql = "ALTER TABLE filter6 ADD COLUMN branchp int(10);";
$con->query($sql);
$abc1 = $_SESSION['br1'];
$abc2 = $_SESSION['br2'];
$abc3 = $_SESSION['br3'];
$abc4 = $_SESSION['br4'];
$abc5 = $_SESSION['br5'];

// echo $abc1;
// echo $abc2;
// echo $abc3;
$sql = "UPDATE filter6 SET branchp=0;";
$con->query($sql);
$sql = "UPDATE filter6 SET branchp=5 WHERE branch_id='$abc1';";
$con->query($sql);
$sql = "UPDATE filter6 SET branchp=4 WHERE branch_id='$abc2';";
$con->query($sql);
$sql = "UPDATE filter6 SET branchp=3 WHERE branch_id='$abc3';";
$con->query($sql);
$sql = "UPDATE filter6 SET branchp=2 WHERE branch_id='$abc4';";
$con->query($sql);
$sql = "UPDATE filter6 SET branchp=1 WHERE branch_id='$abc5';";
$con->query($sql);

$r1=$_SESSION['region1'];
$r2=$_SESSION['region2'];
$r3=$_SESSION['region3'];
$r4=$_SESSION['region4'];
$r5=$_SESSION['region5'];
$r6=$_SESSION['region6'];

// echo $r1;
// echo $r2;
$sql = "ALTER TABLE filter6 ADD COLUMN region_id int(10);";
$con->query($sql);
$sql = "UPDATE filter6 SET region_id = (SELECT region_id from states, institutes where states.state_id=institutes.state_id;";

$sql = "ALTER TABLE filter6 ADD COLUMN regionsp int(10);";
$con->query($sql);
$sql = "UPDATE filter6 SET regionsp=1 WHERE region_id='$r6'";
$con->query($sql);
$sql = "UPDATE filter6 SET regionsp=2 WHERE region_id='$r5'";
$con->query($sql);
$sql = "UPDATE filter6 SET regionsp=3 WHERE region_id='$r4'";
$con->query($sql);
$sql = "UPDATE filter6 SET regionsp=4 WHERE region_id='$r3'";
$con->query($sql);
$sql = "UPDATE filter6 SET regionsp=5 WHERE region_id='$r2'";
$con->query($sql);
$sql = "UPDATE filter6 SET regionsp=6 WHERE region_id='$r1'";
$con->query($sql);

$sql = "ALTER TABLE filter6 ADD COLUMN yoestd int(10);";
$con->query($sql);
$sql = "UPDATE filter6 SET yoestd=(SELECT year_of_establishment from institutes where institutes.institute_id=filter6.institute_id)";
$con->query($sql);

$sql = "ALTER TABLE filter6 ADD COLUMN placerank int(10);";
$con->query($sql);
$sql = "UPDATE filter6 SET placerank=(SELECT placement_ranking from institutes where institutes.institute_id=filter6.institute_id)";
$con->query($sql);

$sql = "ALTER TABLE filter6 ADD COLUMN camprat int(10);";
$con->query($sql);
$sql = "UPDATE filter6 SET camprat=(SELECT campus_ratings from institutes where institutes.institute_id=filter6.institute_id)";
$con->query($sql);


?>


    <div id="tm-bg"></div>
    <!-- <div id="tm-wrap">
        <div class="tm-main-content"> -->
            <!-- <div class="container tm-site-header-container"> -->
                
            <fieldset style = "width: 60vw; margin:4vw 20vw ">
                    <form method="post" action='#'>
                    <button  name="aaa" class="btn logout"><a href="index.php" class="white">Go back to home page</a></button><br>
                        <div class="container">
                          <h2 id='heading' class="family">Sample List</h2><br>
                          <table border="1">
                          <?php   // LOOP TILL END OF DATA  
                        // if(isset($_POST['branch']))
                        // {
                            
                            $sql = "SELECT institute_id, branch_id FROM filter6 ORDER BY branchp DESC, regionsp DESC, yoestd, placerank, camprat DESC";
                            $result = $con->query($sql);
                            // $conn->close();
                            while($rows=$result->fetch_assoc()) 
                            { 
                        ?> 
                        <tr> 
                            <!--FETCHING DATA FROM EACH  
                                ROW OF EVERY COLUMN--> 
                                <?php
                                $r1 = $rows['institute_id'];
                                $r2 = $rows['branch_id'];
                                $r11=""; $r22="";
                                    $sql1 = "SELECT Name FROM institutes WHERE institute_id='$r1';";
                                    if(!$sql1 = mysqli_query($con,$sql1))
                                    {
                                        echo mysqli_error($con);
                                    }
                                    else
                                    {
                                        if(mysqli_num_rows($sql1)==1)
                                        {
                                            $rs = mysqli_fetch_array($sql1);
                                            $r11=$rs[0];
                                        }
                                    }

                                    $sql2 = "SELECT Name FROM branches WHERE branch_id='$r2';";
                                    if(!$sql2 = mysqli_query($con,$sql2))
                                    {
                                        echo mysqli_error($con);
                                    }
                                    else
                                    {
                                        if(mysqli_num_rows($sql2)==1)
                                        {
                                            $rs = mysqli_fetch_array($sql2);
                                            $r22=$rs[0];
                                        }
                                    }
                                    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
                                    fwrite($myfile, $r11);
                                    fwrite($myfile, " ");
                                    fwrite($myfile, $r22);
                                    fwrite($myfile, "\n");
                                    fclose($myfile);
                                ?>

                            <td>&nbsp;&nbsp;<?php echo $r11;?>&nbsp;</td>  
                            <td> <td>
                            <td>&nbsp;&nbsp;<?php echo $r22;?>&nbsp;&nbsp;</td> 
                            
                        </tr> 
                        <?php 
                            }
                            // header('Location: choicefill.php', true, 307);
                        // }
                        ?> 
                        </table>
                            
                        <button  name="aaa" class="btn logout csss"><a href="newfile.txt" download="proposed_file_name">Download</a></button>
                         
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