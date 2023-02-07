<?php
include 'connect.php';
    $id=$_GET['editid'];
    $requt4 = mysqli_query($con, "UPDATE `menuetudio` set firstname='".$_POST['firstname']."',familyname='".$_POST['familyname']."',note=".$_POST['note'].",email='".$_POST['email']."' where num=".$_GET['editid']);
    header("location:website.php");
?>