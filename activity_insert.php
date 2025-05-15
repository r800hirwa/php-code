<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: skyblue;
    }
    form{
        background-color: beige;
        height: 300px;
        width: 450px;
        border-radius: 10px;
        box-shadow: 10px 12px 20px black;

        
    }
    input{
        height: 35px;
        width: 410px;
        text-transform: capitalize;
        border-right: none;
        border-left: none;
        border-top: none;
        cursor: pointer;
    
    }
    select{
        height: 40px;
        width: 420px;
        text-transform: capitalize;
        border-right: none;
        border-left: none;
        border-top: none;
        cursor: pointer;

    }
    button{
        background-color: black;
        margin-top: 5px;
        color: white;
        height: 40px;
        width: 130px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        font-family: italic;
        cursor: pointer;
    }
    button:hover{
        background-color: blue;
        transition: 2s;
        

    }
    h1{
        font-weight: bold;
        color: green;
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<body>
<?php 
    // session_start();
    // if(isset($_SESSION['UserName'])){
    //   header('location:login.php')
   
    ?>
    <br><br><br><br><br>
    <center>
        
    <form action="" method="post">
    <h1>ACTIVITY FORM</h1>
        <input type="text" name="Description" placeholder="enter your activity" required><br><br>
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
        </Select><br><br>
        <input type="date" name="date"><br><br>
        <button type="submit" name="login">ADD ACTIVITY</button>
    </form>
    </center>
    <?php
    include "connection.php";
    if(isset($_POST['login'])){
        $usn=$_POST['Description'];
        $club=$_POST['club'];
        $date=$_POST['date'];
        $insert=mysqli_query($connect,"INSERT INTO activities VALUES(NULL,'$usn','$club','$date')");
        if($insert){
            header("location:dashbord.php?activity");
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