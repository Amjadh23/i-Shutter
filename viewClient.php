<html>
    <head>
        <title>Show All Data From Database</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href = "css/bootstrap.min.css">
        <link rel="icon" href="img/man.ico">
    </head>
<body>

<div class = "container">
<p class="h1" style = "text-align:center; font-weight:bold;">SPOTIZ ARENA BADMINTON
<img src = "img/man.png" height = "60px" weight = "60px" style = "margin-right:10px;">
</p>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Bil.</th>
      <th scope="col">Client Name</th>
      <th scope="col">Client Phone No.</th>
      <th scope="col">Client Address</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php

include("conn.php");

$sql_display = "SELECT * FROM `client`";

$res_display = mysqli_query($con,$sql_display);

$bil = 1;

while($row=mysqli_fetch_array($res_display))
{
    $data_id = $row[0];
    $data_name = $row[1];
    $data_phone = $row[2];
    $data_address = $row[3];
    $data_date = $row[4];


    echo "<tr>";
        echo "<td>";
            echo $bil++;
        echo "</td>";echo "<td>";
            echo $data_name;
        echo "</td>";
        echo "<td>";
            echo $data_phone;
        echo "</td>";
        echo "<td>";
            echo $data_address;
        echo "</td>";
        echo "<td>";
            echo $data_date;
        echo "</td>";
        echo "<td>";
            echo "<a class = 'btn btn-primary' style = 'margin-right:8px;'  href=\"updateClient.php?id=". $data_id . "\">Update";
            echo "<a class = 'btn btn-danger' href=\"deleteClient.php?id=". $data_id . "\" onclick=\"return confirm('You want to delete this client?')\">Delete";
        echo "</td>";
    echo "</tr>";

}

mysqli_close($con);

?>

</table>
<a class = 'btn btn-warning'  href='chooseOperation.php'>Go back</a>
</div>

</body>
<script src = "js/bootstrap.bundle.min.js"></script>
</html>

<style>
    .container
    {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-top-left-radius: 20px 20px;
        border-top-right-radius: 20px 20px;
        border-bottom-left-radius: 20px 20px;
        border-bottom-right-radius: 20px 20px;
        margin-top:20px;
        background:white;
    }

    .btn-warning
    {
        margin-bottom:20px;
    }

    body {
        height: 200vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url("./img/bg2.jpg") no-repeat center bottom/cover;
    }

    .h1
    {
        color:#ffa800;
        text-shadow: 2px 2px black;
    }
    </style>