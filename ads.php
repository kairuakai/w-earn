<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Ads</title>
    <link rel="stylesheet" href="adsStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
</head>
<body onload="get()">
    <nav>
        <div class="upper">
        <h1>WATCH ADS TO EARN MONEY</h1>
        <i class="fas fa-backward"></i> <a href="homepage.php" class="mainBack" >GO BACK</a>
        </div>
        <div class="adsPoints">
            <p><i class="fas fa-coins"></i></p>
            <p>Points : </p>
            <p id="claimPoints">0</p>
            <p><i class="fas fa-dollar-sign"></i></p>
        </div>
        </nav>

    <div class="wrapper">
        <video controls onended="addPoints()">
            <source src="video/food panda.mp4" type="video/mp4">
            <source src="video/lazada.mp4" type="video/mp4">
        </video>

        <video controls onended="addPoints()">
            <source src="video/lazada.mp4" type="video/mp4">
        </video>

        <video controls onended="addPoints()">
            <source src="video/shopee.mp4" type="video/mp4">
        </video>

        <video controls onended="addPoints()">
            <source src="video/grab.mp4" type="video/mp4">
        </video>

        <video controls onended="addPoints()">
            <source src="video/Great Taste White Coffee.mp4" type="video/mp4">
        </video>

        <video controls onended="addPoints()">
            <source src="video/Shakey's.mp4" type="video/mp4">
        </video>
    </div>
    <div>
        <button onclick="addOne()" id="adsBtn">FREE CLAIM</button>
        </div>

    <script src="https://kit.fontawesome.com/ef88416dbc.js" crossorigin="anonymous"></script>
    <script src="button.js"></script>
</body>
</html>