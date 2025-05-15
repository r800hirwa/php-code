<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="design.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    // session_start();
    // if(isset($_SESSION['UserName'])){
    //   header('location:login.php')
   
    ?>
    <br><br><br><br><br>
    <center>
        <div>
        <h1>LEADER FORM</h1>
    <form action="" method="post">
        <input type="text" name="FirstName" placeholder="enter first name" required><br><br>
        <input type="text" name="LastName" placeholder="enter last name" required><br><br>
        <input type="text" name="Position" placeholder="enter you description" required><br><br>
        <Select type="text" name="club">
            <option value="">select club</option>
            <?php
            include "connection.php";
            $select=mysqli_query($connect,"SELECT * FROM clubs");
            if(mysqli_num_rows($select)){
                while($row=mysqli_fetch_array($select)){
                    ?>
<option value="<?php echo $row['ClubId'];?>"><?php echo $row['ClubName'];?></option>
                    <?php
                }
            }
            
            ?>
        </Select>
        <br><br>
        <select name="member">
            <option value="">select member name</option>
            <?php
            include "connection.php";
            $select=mysqli_query($connect,"SELECT * FROM members");
            if(mysqli_num_rows($select)){
                while($row=mysqli_fetch_array($select)){
                    ?>
                    <option value="<?php echo $row['MemberId'];?>"><?php echo $row['FirstName'];?></option>
                    <?php
                }
            }

            ?>
        </select>
        <button type="submit" name="login">SIGN UP</button>
    </form>
    </div>
    </center>
    <?php
    include "connection.php";
    if(isset($_POST['login'])){
        $usn=$_POST['FirstName'];
        $lsn=$_POST['LastName'];
        $ps=$_POST['Position'];
        $club=$_POST['club'];
        $member=$_POST['member'];
        $insert=mysqli_query($connect,"INSERT INTO leaders VALUES(NULL,'$usn','$lsn','$ps','$club','$member')");
        if($insert){
            header("location:dashbord.php?leader");
        }
    }
    ?>
    <?php
//  }
// else{
//     header("location:login.php");
// }
?>   
</body>
</html>