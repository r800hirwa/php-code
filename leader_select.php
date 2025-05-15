<!DOCTYPE html>
<html lang="en">
<head>
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
        text-align:center;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <td class="new"><a href="leader_insert.php">ADD LEADER</a></td>
    <table width=60% border=1>
        <th>LEADERS ID</th>
        <th>LEADERS FIRST NAME</th>
        <th>LEADERS LAST NAME</th>
        <th>POSITION</th>
        <th>CLUB ID</th>
        <th>MEMBER ID</th>
        <th colspan=2>ACTION</th>
        <?php
        include "connection.php";
        $select=mysqli_query($connect,"SELECT * FROM leaders ");
        while($file=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $file['LeaderId'];?></td>
            <td><?php echo $file['FirstName'];?></td>
            <td><?php echo $file['LastName'];?></td>
            <td><?php echo $file['Position'];?></td>
            <td><?php echo $file['ClubId'];?></td>
            <td><?php echo $file['MemberId'];?></td>
            <td class="delete"><a href="leader_update.php ?id=<?php echo $file['LeaderId'];?>">UPDATE</a></td>
            <td class="update"><a href="leader_delete.php ?id=<?php echo $file['LeaderId'];?>">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <div class="loop">
    <button><a href="leader_insert.php">ADD LEADER</a></button>
        </div>
</body>
</html>