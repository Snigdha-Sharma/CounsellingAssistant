<html>

<head>

<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

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
    // if(isset($_POST['branch'])){
    //     $sql = "SELECT * FROM branches";
    //     $result = $conn->query($sql);
    //     // echo $result;
    //     // $conn->close();
    // }

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
error_reporting(0);
ini_set('display_errors', 0);

?>


</head>
<body>
<header>
<div class="main">
  <div class="logo">
    <img src="logo2.png">
  </div>
  <ul><b>
  <li  class="active"><a href="home.php">Dashboard</a></li>
    <li><a href="form.php">Update Preferences</a></li>
    <li><a href="scholarship.php">Choice filling</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </b></ul>
  </div>
  <h2>
  <div class="white">
<fieldset style = "width: 600px; margin:  400px ">
  <div class="new">
    <div class="left2">
<br>
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
    <!-- Homestate : <br><br>--> 
</div>
<center>
<!-- <a href="details.php">Enter your details</a> -->
<br>
<button style="height:60px;width:200px" name="submit" type="submit"><h1><a href="login.php">Logout</a></h1><br></button>


  </header>

  
  </body>
  </html>
