<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
            <link rel="icon" href="img/man.ico">
        <title>Update Data</title>
    </head>
    <body>

        <?php

include ("conn.php");

$id = $_GET['id'];

$sql_display = "SELECT * FROM `client` WHERE `Client Id` = " . $id;

$res_display = mysqli_query($con, $sql_display);

while($row=mysqli_fetch_array($res_display))
{
    $data_id = $row[0];
    $data_name = $row[1];
    $data_phone = $row[2];
    $data_address = $row[3];
    $data_date = $row[4];
}

mysqli_close($con);

?>

        <div class="container">
            <p class="h1" style="text-align:center; font-weight:bold;">SPOTIZ ARENA BADMINTON
                <img src="img/man.png" height="60px" weight="60px" style="margin-right:10px;">
            </p>
            <center>
                <small class="form-text text-muted">
                    <strong>Update the data here.</strong>
                </small>
            </center>
            <form action="updateClientConfirmed.php" method="post">
                <div class="form-group">
                    <label for="nama">
                        <strong>Client Name</strong>
                    </label>
                    <input
                        type="text"
                        name="cName"
                        class="form-control"
                        id="cName"
                        value="<?php echo $data_name;?>" required>
                </div>
                <div class="form-group">
                    <label for="matric">
                        <strong>Client Phone No.</strong>
                    </label>
                    <input
                        type="text"
                        name="cPhone"
                        class="form-control"
                        id="cPhone"
                        value="<?php echo $data_phone;?>" required>
                </div>
                <div class="form-group">
                    <label for="subjek">
                        <strong>Client Address</strong>
                    </label>
                    <input
                        type="text"
                        name="cAddress"
                        class="form-control"
                        id="cAddress"
                        value="<?php echo $data_address;?>" required>
                </div>
                <div class="form-group">
                    <label for="subjek">
                        <strong>Booking Date</strong>
                    </label>
                    <input
                        type="date"
                        name="bookingDate"
                        class="form-control"
                        id="bookingDate"
                        value="<?php echo $data_date;?>" required>
                </div>
                <a href="viewClient.php" class='btn btn-warning'>Go back</a>
                <input type="submit" class='btn btn-warning' name="submit">
                <input type="hidden" name="id" value="<?php echo $data_id?>">
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