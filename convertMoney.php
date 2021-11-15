<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Convert</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="convert.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <nav>
        
        <h1 class="newsFont"><i class="fas fa-money-bill-wave"></i> WEMS MONEY CONVERT</h1>
    </nav>
    <form action="convertConnect.php" method="post">
    <div class="form__group">
    <input type="text" class="form__input1" id="name" placeholder="Enter your username" name = "user" />
    <p class="convertPoints1"><i class="fas fa-user"></i></p>
        <input type="number" class="form__input" id="name" placeholder="Enter your points" name = "money" />
       <p class="convertPoints"><i class="fas fa-coins"></i></p>
       
    </div>
    <div class="submitPoints">
       <!-- <input type="submit" class="subs" value="CONVERT"> -->
       <button type = "submit" class="subs">CONVERT</button>

    </div>
    </form>
    <div class = "points">
        <img src="image/points.jpg" alt="points">
    </div>

    <!-- <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>POINTS</th>
                <th>PHP MONEY</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>100</td>
                <td>1 Peso</td>
              
            </tr>
        
                <td>200</td>
                <td>2 Pesos</td>
               
            </tr>
            <tr>
                <td>300</td>
                <td>3 Pesos</td>
             
            </tr>
            <tr>
                <td>400</td>
                <td>4 Pesos</td>
               
            </tr>
            <tr>
                <td>500</td>
                <td>5 Pesos</td>
              
            </tr>
            <tr>
                <td>600</td>
                <td>6 Pesos</td>
              
            </tr>
            <tr>
                <td>700</td>
                <td>7 Pesos</td>
                
            </tr>
            <tr>
                <td>800</td>
                <td>8 Pesos</td>
         
            </tr>
            <tr>
                <td>900</td>
                <td>9 Pesos</td>
               
            </tr>
            <tr>
                <td>1000</td>
                <td>10 Pesos</td>
               
            </tr>
            <tbody>
        </table>
    </div> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/ef88416dbc.js" crossorigin="anonymous"></script>
</body>
</html>