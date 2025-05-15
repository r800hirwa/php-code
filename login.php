<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<br><br><br><br><br>
    <center>
        <fieldset>
        <h1>LOGIN FORM</h1>
    <form action="" method="post">
        <input type="text" name="UserName" placeholder="enter you username"><br><br>
        <input type="password" name="Password" placeholder="enter your password"><br><br>
       <button><a href="user.php" style="color: white; background-color: black;">SIGN UP</a></button> <button type="submit" name="login">LOGIN</button>
        
    </form>
    </fieldset>
    </center>
    <?php
    include "connection.php";
    session_start();
    if(isset($_POST['login'])){
        $usn=$_POST['UserName'];
        $pass=$_POST['Password'];
        $select=mysqli_query($connect,"SELECT * FROM users WHERE UserName='$usn' AND Password='$pass'");
        while($row=mysqli_fetch_array($select)){
        if(mysqli_num_rows($select)==1){
        if($pass===$row['Password']){
            $_SESSION['UserName']=$row['UserName'];
            header("location:dashbord.php");
       
        }
    }
        else{
            echo "<script> alert('invalid username or password')</script>";
        }
        
    }}
    ?>
</body>
</html>