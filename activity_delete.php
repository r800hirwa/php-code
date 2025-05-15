<?php
include "connection.php";

if(isset($_GET['id'])){
$id=$_GET['id'];
$delete=mysqli_query($connect,"DELETE FROM activities WHERE ActivityNo='$id'");
if($delete){
    header("location:dashbord.php?activity");
}
}
?>