<?php
include "connection.php";

if(isset($_GET['ClubId'])){
$id=$_GET['ClubId'];
$delete=mysqli_query($connect,"DELETE FROM clubs WHERE ClubId='$id'");
if($delete){
    header("location:club_select.php");
}
}
?>