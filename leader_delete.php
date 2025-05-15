<?php
include "connection.php";

if(isset($_GET['id'])){
$id=$_GET['id'];
$delete=mysqli_query($connect,"DELETE FROM leaders WHERE LeaderId='$id'");
if($delete){
    header("location:leader_select.php");
}
}
?>