<?php
include "conn.php";

if(isset($_POST['submit']))
{

$cName = $_POST['cName'];
$cPhone = $_POST['cPhone'];
$cAddress = $_POST['cAddress'];
$bookingDate = $_POST['bookingDate'];

$sql_insert = "INSERT INTO `client`(`Client Name`, `Client Phone No.`, `Client Address`, `Booking Date`) VALUES ('$cName','$cPhone','$cAddress','$bookingDate')";
$res = mysqli_query($con,$sql_insert);

echo "<script>alert(\"Data Successfully added.\")</script>";

    echo "<script>
            setTimeout(function(){
                window.location.href = 'viewClient.php';
            }, 500);
            </script>";
}
?>
<html>
    <head>
        <title>Insert Data to the Database</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link href="css/bootstrap.min.css">
        <link rel="icon" href="img/man.ico">
        <title>Insert Client</title>
    </head>
    <body>
        <div class="container">
            <p class="h1" style="text-align:center; font-weight:bold;">SPOTIZ ARENA BADMINTON
                <img src="img/man.png" height="60px" weight="60px" style="margin-right:10px;">
            </p>
            <center>
                <small class="form-text text-muted">
                    <strong>Add new client by entering the details below.</strong>
                </small>
            </center>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">
                        <strong>Client Name</strong>
                    </label>
                    <input type="text" name="cName" class="form-control" id="cName" required>
                </div>
                <div class="form-group">
                    <label for="matric">
                        <strong>Client Phone No.</strong>
                    </label>
                    <input type="text" name="cPhone" class="form-control" id="cPhone" required>
                </div>
                <div class="form-group">
                    <label for="subjek">
                        <strong>Client Address</strong>
                    </label>
                    <input type="text" name="cAddress" class="form-control" id="cAddress" required>
                </div>
                <div class="form-group">
                    <label for="subjek">
                        <strong>Booking Date</strong>
                    </label>
                    <input type="date" name="bookingDate" min='2022-11-28' class="form-control" id="bookingDate" required>
                </div>
                <a href="chooseOperation.php" class='btn btn-warning'>Go back</a>
                <input type="submit" class='btn btn-warning' name="submit">
                <hr>
            </form>
        </div>
    </body>
    <script src="js/bootstrap.bundle.min.js"></script>
</html>

<style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url("./img/bg2.jpg") no-repeat center bottom/cover;
        height: 100vh;
    }

    .container {
        box-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px;
        border-top-left-radius: 20px 20px;
        border-top-right-radius: 20px 20px;
        border-bottom-left-radius: 20px 20px;
        border-bottom-right-radius: 20px 20px;
        margin-top: 20px;
        background: white;
    }

    .h1 {
        color: #ffa800;
        text-shadow: 2px 2px black;
    }
</style>