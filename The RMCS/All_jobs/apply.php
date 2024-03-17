<?php 
error_reporting(0);
include('../config.php');
session_start();
$cuser_email = $_SESSION['user_email'];

if(!isset($cuser_email)){
    header('location:../login.php');
 }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>

      <!-- custom js file link  -->
      <script src="../js/script.js"></script>

       <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .contain{
            min-height: 50vh;
            display:flex;
            text-align:center;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            background-color: var(--light-bg);
        }

        .success_box{
            width:400px;
            background-color:var(--wheat);
            padding : 100px 50px;
            border-radius:25px;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
        }


        .msg{
            text-shadow:0 .5rem 1rem rgba(0, 0, 0, .2);
            font-size:2.8rem;
            color:var(--logo);
            text-transform:uppercase;
            
        }

        .back{
            text-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
            color : var(--red);
            margin-top:10px;
            font-size:14px;
            font-weight:bold;
            cursor:pointer;
        }
        
        .back:hover{
            color : var(--black1);
        }

    </style>
</head>
<body>
     <!-- header section starts  -->

     <header class="header">

<section class="flex">

    <div id="menu-btn" class="fas fa-bars-staggered"></div>

    <a href="../home.php" class="logo"><i class="fas fa-briefcase"></i>RMCS</a>
    <nav class="navbar">
        <a href="../home.php">Home</a>
        <a href="../about.html">About us</a>
        <a href="../jobs.php">All jobs</a>
        <a href="../contact.html">Contact us</a>
        <a href="../profile.php">account</a>
    </nav>

    <a href="../home.php" class="btn" style="margin-top: 0;">find job</a>

    <img src="../images/moon.png" id="icon" class="m-logo" alt="" onclick="color_change()" >

</section>

</header>

<!-- header section ends  -->



<?php

if(isset($_POST['apply']))
{
    $location = $_SESSION['location'];
    $job = $_SESSION['job'];

    $select = mysqli_query($conn, "SELECT * FROM `userinfo` WHERE email = '$cuser_email'");
    if(mysqli_num_rows($select) > 0)
    {
        $fetch = mysqli_fetch_assoc($select);
    }
    $name=$fetch['name'];
    $email=$fetch['email'];
    $address=$fetch['address'];
    $qualification=$fetch['qualification'];
    $skills=$fetch['skills'];
    $description=$fetch['description'];
    $resume=$fetch['resume'];

    $select2 = mysqli_query($conn, "SELECT * FROM `admin_table` WHERE email = '$cuser_email'");
    if(mysqli_num_rows($select2) > 0){
        echo '<div class="contain">
        <div class="success_box">
            <img src="images/warning.png" width="50px" height="50px"><br><h2 class="msg" style="color:red"> Already Applied for a Post !!</h2>';
     }
     else{
        if(isset($cuser_email) && $cuser_email != 'admin.root@rmcs.com')
        {
            if(!empty($fetch['resume']))
            {
                if(!empty($fetch['address']) && !empty($fetch['qualification']))
                {
                    if(!empty($fetch['skills']) && !empty($fetch['description']))
                    {    
                        mysqli_query($conn,"DELETE FROM notify WHERE email = '$cuser_email'");
    
                        $insert = mysqli_query($conn, "INSERT INTO `admin_table`(email, name, address, description,location,job,qualification,skills,resume) VALUES('$email','$name','$address', '$description', '$location','$job','$qualification','$skills' , '$resume')");
                    }
                    else{
                        echo '<div class="contain">
                            <div class="success_box">
                            <img src="images/warning.png" width="50px" height="50px"><br><h2 class="msg" style="color:red; font-size:2rem">Profile Incomplete!!<br>Please make sure you filled all field of your Profile !<br><br><p style="color:var(--blue); font-size:1.4rem;">Redirecting to Edit Page ......</p></h2>';
                        echo "<script>setTimeout(\"location.href = '../edit_profile.php';\",5000);</script>";
    
                    } 
                }
                else{
                    echo '<div class="contain">
                        <div class="success_box">
                        <img src="images/warning.png" width="50px" height="50px"><br><h2 class="msg" style="color:red; font-size:2rem">Profile Incomplete!!<br>Please make sure you filled all field of your Profile !<br><br><p style="color:var(--blue); font-size:1.4rem;">Redirecting to Edit Page ......</p></h2>';
                    echo "<script>setTimeout(\"location.href = '../edit_profile.php';\",5000);</script>";

                } 
            }
            else{
                echo '<div class="contain">
                    <div class="success_box">
                    <img src="images/warning.png" width="50px" height="50px"><br><h2 class="msg" style="color:red; font-size:2rem">Profile Incomplete!!<br>Please add "CV" to your Profile !<br><br><p style="color:var(--blue); font-size:1.4rem;">Redirecting to Edit Page ......</p></h2>';
                echo "<script>setTimeout(\"location.href = '../edit_profile.php';\",5000);</script>";
            }
        }
        else{
            header('location:../profile.php');
        }
    }

    if($insert)
    {
        // echo "Applied Successfully !!";
        echo '<div class="contain">
        <div class="success_box">
            <img src="images/checked.png" width="50px" height="50px"><br><h2 class="msg">Applied Successfully !!</h2>';

    }
  
}
?>
    </div>
        <a class="back" onclick="goto()" class="delete-btn">&lt; Go Back</a>
        <script>
            function goto()
            {
                window.history.back();
            }
        </script>
    </div>


 <!-- footer section starts  -->

 <footer class="footer">

<section class="grid">

    <div class="box">
        <h3>quick links</h3>
        <a href="../home.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="../about.html"><i class="fas fa-angle-right"></i> about</a>
        <a href="../jobs.php"><i class="fas fa-angle-right"></i> jobs</a>
        <a href="../contact.html"><i class="fas fa-angle-right"></i> contact us</a>
        <a href="../home.php"><i class="fas fa-angle-right"></i> filter search</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="../profile.php"><i class="fas fa-angle-right"></i> account</a>
        <a href="../login.php"><i class="fas fa-angle-right"></i> login</a>
        <a href="../register.php"><i class="fas fa-angle-right"></i> register</a>
        <a href="../home.php"><i class="fas fa-angle-right"></i> post job</a>
        <a href="../home.php"><i class="fas fa-angle-right"></i> dashboard</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="http://facebook.com"><i class="fab fa-facebook-f"></i> facebook</a>
        <a href="http://twitter.com"><i class="fab fa-twitter"></i> twitter</a>
        <a href="http://instagram.com"><i class="fab fa-instagram"></i> instagram</a>
        <a href="http://linkedin.com"><i class="fab fa-linkedin"></i> linkedin</a>
        <a href="http://youtube.com"><i class="fab fa-youtube"></i> youtube</a>
    </div>

</section>

<div class="credit">&copy; copyright @2023 by <span> The RMCS group </span> | all right reserved!</div>

</footer>


<!-- footer section ends  -->


</body>
</html>

