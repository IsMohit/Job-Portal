<?php

include '../config.php';
session_start();

$job =$_SESSION['job'];
$location =$_SESSION['location'];

$select = mysqli_query($conn, "SELECT * FROM `jobinfo` WHERE job = '$job' AND location = '$location'");
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Jobs</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
<style>
    span{
        text-transform:capitalize;
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


    <!-- view job section starts  -->


    <section class="job-details">

        <h1 class="heading">job details </h1>

        <div class="details">
            <div class="job-info">
                <h3><?php echo $fetch['job']?></h3>
                <a>RMCS.pvt</a>
                <p><i class="fas fa-map-marker-alt"></i><?php echo $fetch['location']?></p>
            </div>
            <div class="basic-details">
                <h3>salary</h3>
                <p><?php echo $fetch['salary']?></p>
                <h3>job type</h3>
                <p><?php echo $fetch['job_type']?></p>
                <h3>schedule</h3>
                <p><?php echo $fetch['schedule']?></p>
            </div>
            <ul>
                <h3>requirements</h3>
                
                <?php 
                $req = explode("*",$fetch['requirements']);
                for($i = 1 ; $i <count($req) ; $i++)
                {
                    echo '<span><li>'.$req[$i].'</li></span>';
                }
                ?>
                
            </ul>
            <ul>
                <h3>qualifications</h3>
                <?php 
                $qua = explode("*",$fetch['qualifications']);
                for($i = 1 ; $i <count($qua) ; $i++)
                {
                    echo '<span><li>'.$qua[$i].'</li></span>';
                }
                ?>
              
            </ul>
            <ul>
                <h3>skills</h3>
                <?php 
                $skill = explode("*",$fetch['skills']);
                for($i = 1 ; $i <count($skill) ; $i++)
                {
                    echo '<span><li>'.$skill[$i].'</li></span>';
                }
                ?>

            </ul>
            
            <div class="description" >
                <h3>job description</h3>
                <?php  echo '<p>'.$fetch["job_description"].'</p>'; ?>
            </div>
            
            <div>
           <h2 class="msg" style="color:red; font-size:1.6rem; margin-top:4rem">*Before Applying , Please make sure your profile is Completed!</h2>'
            </div>
            <form action="apply.php" method="post" class="flex-btn">

                <input type="submit" value="apply now" name="apply" class="btn">
            </form>
        </div>

    </section>


    <!-- view job section ends  -->


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

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>


</body>

</html>