<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    a{
        text-decoration:none;
        color:white;
        font-family: 'Courier New', Courier, monospace;
        
    }
    .delete{
        background-color: blue;
        text-align:center;
        border-radius: 4px;
        height: 35px;
        width: 150px;
    }
    .update{
        background-color: red;
        text-align:center;
        border-radius: 4px;
        height: 35px;
        width: 150px;
    }
    table{
        margin-top: -500px;
    }
    .loop{
        text-align: center;
        /* border-radius: 7px;
        height: 20px; */
    }
</style>
<?php
// include "connection.php";
// session_start();
// if(isset($_SESSION['UserName'])){
//     header("location:login.php")


?>
<body>
    <center>
    <table border="2">
        <th>ACTIVITY NO</th>
        <th>DESCRIPTION</th>
        <th>CLUB ID</th>
        <th colspan=2>ACTION</th>
        <?php
        include "connection.php";
        $select=mysqli_query($connect,"SELECT * FROM activities ");
        while($file=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $file['ActivityNo'];?></td>
            <td><?php echo $file['Description'];?></td>
            <td><?php echo $file['ClubId'];?></td>
            <td class="delete"><a href="activity_update.php ?id=<?php echo $file['ActivityNo'];?>">UPDATE</a></td>
            <td class="update"><a href="activity_delete.php ?id=<?php echo $file['ActivityNo'];?>">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
    <br>
    <div class="loop">
    <button><a href="activity_insert.php">ADD ACTIVITY</a></button>
        </div>
        <?php
        
    // }
    // else{
    //     header("location:login.php");
    // }
        ?>
</body>
</html>