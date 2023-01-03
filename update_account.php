<?php
// include database connection file 
include_once("config.php");

    $id = $_POST['ID'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $modifiedDate = date("Y-m-d");

    $result = mysqli_query($mysqli, "UPDATE tblaccounts
    SET Name='$name', Email='$email', Password='$pass', ModifiedDate='$modifiedDate' WHERE ID=$id");

    // Show message when data is updated
    echo "<script>alert('Data successfully updated.');</script>";
    echo "<script>window.location.href = 'ui_manage_account.php';</script>";

?>