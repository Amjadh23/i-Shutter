<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Update Data</title>
</head>
<body>

<?php

include("conn.php");

$id = $_POST['id'];
$cName = $_POST['cName'];
$cPhone = $_POST['cPhone'];
$cAddress = $_POST['cAddress'];
$bookingDate = $_POST['bookingDate'];

$sql_update = "UPDATE `client` SET `Client Name`='$cName',`Client Phone No.`='$cPhone',`Client Address`='$cAddress',`Booking Date`='$bookingDate' WHERE `Client Id` = '$id'";

if (mysqli_query($con, $sql_update))
{
    echo "<script>alert(\"Data Updated Successfully.\")</script>";

    echo "<script>
            setTimeout(function(){
                window.location.href = 'viewClient.php';
            }, 500);
            </script>";
}

else{
    echo "Error updating record: " .mysqli_error($con);
}


?>

</body>
<script src = "js/bootstrap.bundle.min.js"></script>
</html>

<style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url("../img/bg2.jpg") no-repeat center bottom/cover;
        height: 100vh;
    }
</style>