<?php
//include database connection file
include_once("config.php");


$name = $_POST['Name'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$createdDate = date("Y-m-d");
$modifiedDate = date("Y-m-d");

// insert data into table
$result = mysqli_query($mysqli, "INSERT INTO tblaccounts(Name,Email,Password,CreatedDate,ModifiedDate)
VALUES('$name','$email','$pass','$createdDate','$modifiedDate')");

//show message when data is added
echo "<script>alert('Data added successfully.');</script>";
echo "<script>window.location.href = 'index.php';</script>";
?>  