<?php
include 'connect.php';
include 'select.php';
if (isset($_POST['click'])) {
    if (isset($_POST['firstname']) && isset($_POST['familyname']) && isset($_POST['note']) && isset($_POST['email'])) {
        $count = mysqli_num_rows($requt1);
        $firstname = $_POST['firstname'];
        $familyname = $_POST['familyname'];
        $note = $_POST['note'];
        $email = $_POST['email'];
        $requt = mysqli_query($con, "insert into menuetudio values('" . $firstname . "','" . $familyname . "'," . $note . ",'" . $email . "'," . $count++ . ")");
    }
}
header("location:website.php");
