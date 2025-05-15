<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=".css">
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
        margin-top: -500px;
        margin-right: -180px;
    }
    .loop{
        text-align: center;
    }
</style>
<body>
    <center>
    <table border=2 width=60%> 
        <th>MEMBERS ID</th>
        <th>MEMBERS FIRST NAME</th>
        <th>MEMBERS LASTT NAME</th>
        <th>MEMBERS ADDRESS</th>
        <th>CLUB ID</th>
        <th colspan=2>ACTION</th>
        <?php
        include "connection.php";
        $select=mysqli_query($connect,"SELECT * FROM members ");
        while($file=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $file['MemberId'];?></td>
            <td><?php echo $file['FirstName'];?></td>
            <td><?php echo $file['LastName'];?></td>
            <td><?php echo $file['Address'];?></td>
            <td><?php echo $file['ClubId'];?></td>
            <td class="update"><a href="member_update.php ?id=<?php echo $file['MemberId'];?>">UPDATE</a></td>
            <td class="delete"><a href="member_delete.php ?id=<?php echo $file['MemberId'];?>">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
    <br>
    <div class="loop">
    <button><a href="member_insert.php">ADD MEMBER</a></button>
        </div>
</body>
</html>