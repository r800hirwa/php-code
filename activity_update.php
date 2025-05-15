<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $select=mysqli_query($connect,"SELECT * FROM activities WHERE ActivityNo='$id'");
        while($row=mysqli_fetch_array($select)){
            $a=$row['Description'];
        }
    }?>
     <br><br><br><br><br>
    <center>
        <h1>UPDATING FORM</h1>
    <form action="" method="post">
        <input type="text" name="Description" value="<?php echo $a;?>"><br><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
    </center>
    <?php
        if(isset($_POST['update'])){
            $upd=$_POST['Description'];
            $update=mysqli_query($connect,"UPDATE activities SET Description='$upd' WHERE ActivityNo='$id'");
            if($update){
        header("location:dashbord.php?activity");
            }
            else{
                echo "not";
            }
        }
    
    
    ?>
</body>
</html>