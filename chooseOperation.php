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
        <title>Choose Operations</title>
    </head>
    <body>
        <div class="container">
            <p class="h1" style="text-align:center; font-weight:bold;">SPOTIZ ARENA BADMINTON
                <img src="img/man.png" height="60px" weight="60px" style="margin-right:10px;">
            </p>
            <hr>
            <div class="box">
                <div class="operation">
                    <a href="insertClient.php">
                        <img class="optionImages" src="img/insert.png" width="200px" height="200px"><br>
                    </a>
                    <h2 style="font-weight:bold;">Insert Data</h2>
                </div>
                <div class="operation">
                    <a href="viewClient.php">
                        <img class="optionImages" src="img/view.png" width="200px" height="200px"><br>
                    </a>
                    <h2 style="font-weight:bold;">View Data</h2>
                </div>
                <div class="operation">
                    <a href="index.php">
                        <img class="optionImages" src="img/logout.png" width="200px" height="200px"><br>
                    </a>
                    <h2 style="font-weight:bold; margin-right:30px;">Exit</h2>
                </div>
            </div>
        </div>

    </body>
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
        height: 400px;
    }

    .operation {
        margin-top: 20px;
        margin-left: 130px;
        text-align: center;
    }

    .box {
        display: flex;
    }

    .h1 {
        color: #ffa800;
        text-shadow: 2px 2px black;
    }

    .optionImages:hover {
        width: 220px;
        height: 220px;
        margin: 5px;
        cursor: pointer;
    }
</style>