<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: beige;
            height: 200px;
            width: 300px;
            margin-top:180px;
            font-family: 'Courier New', Courier, monospace;

            
        }
        input{
width: 250px;
border-left:none;
border-right:none;
border-top:none;
        }
        
    </style>
    <?php 
    // session_start();
    // if(isset($_SESSION['UserName'])){
    //   header('location:login.php')
   
    ?>
    <body>
    
    <center>
    <div>
    <form action="" method="post"><b><br>
    <h1>REISTRATION OF CLUB</h1>
    <input type="text" name="ClubNames" placeholder="enter your club name" required><br><br>
    <button type="submit" name="create">CREATE</button>
    </div>
    </form>
    <?php
    include "connection.php";
    if(isset($_POST['create'])){
        $usn=$_POST['ClubNames'];
        $insert=mysqli_query($connect,"INSERT INTO clubs VALUES(NULL,'$usn')");
        if($insert){
            header("location:dashbord.php?club");
        }
    }
    ?>
    </center>
</head>
<?php
//  }
// else{
//     header("location:login.php");
// }
?>   
</body>
</html>