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
    include "connection.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $select=mysqli_query($connect,"SELECT * FROM members WHERE MemberId='$id'");
        while($row=mysqli_fetch_array($select)){
            $a=$row['FirstName'];
            $b=$row['LastName'];
            $c=$row['Address'];
        }
    }?>
     <br><br><br><br><br>
    <center>
        <div>
        <h1>UPDATING FORM</h1>
    <form action="" method="post">
        <input type="text" name="FirstName" value="<?php echo $a;?>"><br><br>
        <input type="text" name="LastName" value="<?php echo $b;?>"><br><br>
        <input type="text" name="Address" value="<?php echo $c;?>"><br><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
    </div>
    </center>
    <?php
        if(isset($_POST['update'])){
            $upd=$_POST['FirstName'];
            $ln=$_POST['LastName'];
            $add=$_POST['Address'];
            $update=mysqli_query($connect,"UPDATE members SET FirstName='$upd',LastName='$ln',Address='$add' WHERE MemberId='$id'");
            if($update){
        header("location:dashbord.php?members");
            }
            else{
                echo "not";
            }
        }
    
    
    ?>
</body>
</html>