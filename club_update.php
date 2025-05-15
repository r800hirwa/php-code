<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $select=mysqli_query($connect,"SELECT * FROM clubs WHERE ClubId='$id'");
        while($row=mysqli_fetch_array($select)){
            $a=$row['ClubName'];
        }
    }?>
     <br><br><br><br><br>
    <center>
        <div>
        <h1>UPDATING CLUB</h1>
    <form action="" method="post">
        <input type="text" name="ClubName" value="<?php echo $a;?>"><br><br>
        <button type="submit" name="update" class="btn btn btn-primary">UPDATE</button>
        </div>
    </form>
    </center>
    <?php
        if(isset($_POST['update'])){
            $upd=$_POST['ClubName'];
            $update=mysqli_query($connect,"UPDATE clubs SET ClubName='$upd' WHERE ClubId='$id'");
            if($update){
                header("location:dashbord.php?club");
            }
            else{
                echo "not";
            }
        }
    
    
    ?>
</body>
</html>