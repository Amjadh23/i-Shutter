<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <title>Delete Data</title>
    </head>
    <body>

    <?php

include("conn.php");

$id =  $_GET['id'];

$sql_delete = "DELETE FROM `client` WHERE `Client Id` = '$id'";

if (mysqli_query($con, $sql_delete))
{
    echo "<script>alert(\"Data Deleted Sucessfully.\")</script>";

    echo "<script>
            setTimeout(function(){
                window.location.href = 'viewClient.php';
            }, 500);
            </script>";
}

else{
    echo "This data can't be deleted! " .mysqli_error($con);
}

mysqli_close($con);

?>

    </body>
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