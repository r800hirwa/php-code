<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dashboad.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-color: skyblue;
  }
  .new{
    /* background-color: black; */
  }
</style>
<?php
// session_start();
// if(isset($_SESSION['UserName'])){


?>
<body>
    <div class="all_control">
        <br>
    <a href="dashbord.php?club">CLUB NAME</a>
    <a href="dashbord.php?members">MEMBERS</a>
    <a href="dashbord.php?leader">LEADER</a>
    <a href="dashbord.php?activity">ACTIVITY</a>
    <!-- <a href="dashbord.php?report">REPORT</a> -->
    <a href="logout.php">LOG OUT</a>
    </div>
    <div class="get">
    </div>
    <div class="new">
      <?php
      include "connection.php";
      session_start();
      $name=$_SESSION['UserName'];
      // session_destroy();
      ?>
      <h3>WELCOME USER:<?php echo $name;?></h3>

    </div>
    <?php
      if (isset($_GET['club'])) {
        include 'club_select.php';  
      }elseif (isset($_GET['members'])) {
        include 'member_select.php';
      }
        elseif (isset($_GET['leader'])) {
            include 'leader_select.php';
        }
        elseif (isset($_GET['activity'])) {
include 'activity_select.php';
        }
        elseif (isset($_GET['report'])) {
include 'report.php';
        }
      
    ?>
    <?php
    
//       }
//       else {
// header("location:login.php"); 
// // session_destroy();   
      // }
    ?>
</body>
</html>