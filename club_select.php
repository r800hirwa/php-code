<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="new.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        margin-left: 400px;
        margin-top:-500px;
    }
        .loop{
text-align: center;
margin-top: -0.20px;
color: 

}
</style>
<body>
    <table width=60% border=dashed>
        <th>CLUB ID</th>
        <th>CLUB NAME</th>
        <th colspan=2>ACTION</th>
        <?php
        include "connection.php";
        $select=mysqli_query($connect,"SELECT * FROM clubs ");
        while($file=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $file['ClubId'];?></td>
            <td><?php echo $file['ClubName'];?></td>
            <td class="delete"><a href="club_update.php ?id=<?php echo $file['ClubId'];?>">UPDATE</a></td>
            <td class="update"><a href="club_delete.php ?id=<?php echo $file['ClubId'];?>">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <div class="loop">
    <button><a href="club_insert.php">ADD CLUB</a></button>
        </div>
</body>
</html>