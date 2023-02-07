<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $requt4 = mysqli_query($con, "DELETE FROM `menuetudio` WHERE `menuetudio`.`num` =".$id."");
}
header('location:website.php');
?>