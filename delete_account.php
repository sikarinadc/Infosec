<?php
// include database connection file
include_once ("config.php");
$id = $_GET['id'];

// Delete data from table
$result = mysqli_query($mysqli, "DELETE FROM tblaccounts WHERE ID=$id");

// Show message when data is deleted
echo "<script>alert ('Data deleted successfully.');</script>";
echo "<script>window.location.href = 'ui_manage_account.php';</script>";
?>
