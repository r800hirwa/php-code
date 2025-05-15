<?php
include "connection.php";

if(isset($_GET['id'])){
$id=$_GET['id'];
$delete=mysqli_query($connect,"DELETE FROM members WHERE MemberId='$id'");
if($delete){
    header("location:dashbord.php?members");
}
}
?>