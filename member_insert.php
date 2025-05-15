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
        <h1>MEMBERS FORM</h1>
    <form action="" method="post">
        <input type="text" name="FirstName" placeholder="enter your First Name" required><br><br>
        <input type="text" name="LastName" placeholder="enter your Last Name" required><br><br>
        <input type="text" name="Address" placeholder="enter your address" required><br><br>
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
        <button type="submit" name="login">SIGN UP</button>
    </form>
    </center>
    <?php
    include "connection.php";
    if(isset($_POST['login'])){
        $usn=$_POST['FirstName'];
        $ln=$_POST['LastName'];
        $add=$_POST['Address'];
        $club=$_POST['club'];
        $insert=mysqli_query($connect,"INSERT INTO members VALUES(NULL,'$usn','$ln','$add','$club')");
        if($insert){
            header("location:dashbord.php?members");
        }
    }
    ?>
    </div>
    <?php
//  }
// else{
//     header("location:login.php");
// }
?>   
</body>
</html>