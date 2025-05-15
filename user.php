<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        background-color: cyan;
        width: 400px;
        height: 220px;
        background-color: beige;
        box-shadow: 5px 10px 20px greenyellow;
        border-radius: 10px;


    }
    input{
        width: 380px;
        height:30px;
        border-top: none;
        border-left:none;
        border-right: none;
        background-color: beige;
        font-weight: bold;
        text-transform: capitalize;
    }
    button:hover{
        background-color: blue;
        box-shadow: 2px 10px 14px cyan;
    }
    button{
        background-color:black;
        color: white;
        width: 100px;
        height: 40px;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 2px 5px 10px gold;
    }
</style>
<body>
    <br><br><br><br><br>
    <center>
        
    <form action="" method="post">
    <h1>CREATE AN ACCOUNT</h1>
        <input type="text" name="UserName" placeholder="enter you username" required><br><br>
        <input type="password" name="Password" placeholder="enter your password" required><br><br>
        <button type="submit" name="login">SIGN UP</button>
    </form>
    </center>
    <?php
    include "connection.php";
    if(isset($_POST['login'])){
        $usn=$_POST['UserName'];
        $pass=$_POST['Password'];
        $insert=mysqli_query($connect,"INSERT INTO users VALUES(NULL,'$usn','$pass')");
        if($insert){
            header("location:login.php");
        }
    }
    ?>
</body>
</html>