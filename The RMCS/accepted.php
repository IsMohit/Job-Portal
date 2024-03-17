<?php

include 'config.php';
session_start();
error_reporting(0);
$cuser_email = $_SESSION['user_email'];

if(!isset($cuser_email))
{
    header('location:login.php');
}
else
{
    if($cuser_email != "admin.root@rmcs.com")
    {
    header('location:login.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepted Profiles</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- custom Js file link  -->
    <script src="js/script.js"></script>
    <style>
    
    .display_contain{
        min-height: 80vh;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .display{
        width : 60%;
        background-color:var(--fade);
        text-align:center;
        padding : 100px 20px;
        color:var(--title-color);
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
    }

    .display_table{
        padding : 20px 20px;
        font-size:1.4rem;
        width: 100%;
        text-align: center;
    }

    h2{
        text-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
        display:block;
        margin-bottom:85px;
        font-size:3.5rem;
    }
       
    th{
        background-color: var(--light-bg);
        padding:2rem;
        font-size:1.8rem;
    }

    .btn{
        background: var(--green);
    }

    .btn:hover{
         background: var(--dark-red);
    }
    

    .display_table td{
        padding:1rem;
        border-bottom: var(--border);
    }

    td{
        color : white;
        background-color:var(--hf-bg1);
    }

    @media (max-width:991px){
        html{
            font-size: 55%;
        }

    }

    @media (max-width:768px){
        .display{
            overflow-y:scroll;
        }
        .display .display_table{
            width: 80rem;
        }
     }
     @media (max-width:450px){
        html{
            font-size: 50%;
        }
    }



    </style>
</head>
<body>

    <!-- header section starts  -->

    <header class="header">

        <section class="flex">

            <div id="menu-btn" class="fas fa-bars-staggered"></div>

            <a href="home.php" class="logo"><i class="fas fa-briefcase"></i>RMCS</a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="dashboard.php">dashboard</a>
                <a href="admin.php">Admin Panel</a>
                <a href="admin_add.php">Add Post</a>
            </nav>

            <a href="logout.php" class="btn" style="margin-top: 0;">Logout</a>

            <img src="images/moon.png" id="icon" class="m-logo" alt="" onclick="color_change()" >

        </section>

    </header>

    <!-- header section ends  -->


    <!-- Body start -->

   <?php
   $status = "accept";
   $select = mysqli_query($conn, "SELECT * FROM accept WHERE status = '$status'");
   $num = mysqli_num_rows($select);
   ?>

   <div class="display_contain">
   <div class="display">
        
      <table class="display_table">
      <h2>Accepted Profiles</h2>
      <thead>
         <tr>
            <th>*</th>
            <th>Name</th>
            <th>Email</th>
            <th>Resume</th>
         </tr>
         </thead>
         
         <?php 
            if($num > 0){
                   while($row = mysqli_fetch_assoc($select)){?>
                  
         <tr>
            <td><img src="images/thumbsup.gif" width="50px" height="50px"></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo "<a href='Temp_file/".$row['resume']."' style='color:white; text-decoration:underline'>View CV</a>"; ?></td>
         </tr>
         <tr id='pop'></tr>

      <?php

            } 
        }
        else{
           echo "<img src='images/warning.png' width='30px'><h3 style='font-size:2.5rem ; color:red;'>No Entry Found !!</h3>";
        }
    ?>
      </table>
      <a href="admin.php" style="font-size:1.2rem; margin-top:5rem;" class="btn">&lt; Go Back</a>
    </div>
   </div>


    <!-- Body ends-->


     <!-- footer section starts  -->

     <footer class="footer">

<section class="grid">

    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="about.html"><i class="fas fa-angle-right"></i> about</a>
        <a href="jobs.php"><i class="fas fa-angle-right"></i> jobs</a>
        <a href="contact.html"><i class="fas fa-angle-right"></i> contact us</a>
        <a href="home.php"><i class="fas fa-angle-right"></i> filter search</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="profile.php"><i class="fas fa-angle-right"></i> account</a>
        <a href="login.php"><i class="fas fa-angle-right"></i> login</a>
        <a href="register.php"><i class="fas fa-angle-right"></i> register</a>
        <a href="home.php"><i class="fas fa-angle-right"></i> post job</a>
        <a href="home.php"><i class="fas fa-angle-right"></i> dashboard</a>
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


