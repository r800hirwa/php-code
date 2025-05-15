<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
     @media print{
        .hide{
            display:none;
        }
        }
    </style>
</head>
<body>
    <table border="2">
        <th>ACTIVITY NO</th>
        <th>DESCRIPTION</th>
        <th>CLUB ID</th>
        <th>ACTIVITY DATE</th>
        <?php
        include "connection.php";
        $day=date('y-m-d');
        $select=mysqli_query($connect,"SELECT * FROM activities");
        while($row=mysqli_fetch_array($select)){
        
        ?>
        <tr>
            <h3>DAYIL REPORT:<?php echo $day;?></h3>
            <td><?php echo $row['ActivityNo'];?></td>
            <td><?php echo $row['Description'];?></td>
            <td><?php echo $row['ClubId'];?></td>
            <td><?php echo $row['Activitie_Date'];?></td>
        </tr>
    </table>
    <?php
    }
    ?>
    <br><br>
    <button Onclick="window.print()" class="hide">print</button>
</body>
</html>
