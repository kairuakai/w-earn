<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body onload="get()">
    <!-- <img src="image/coffee.jpg" alt=""> -->

    <header>
            <nav>
                <div class="logo">
                    <h1><i class="fas fa-clock"></i><a href="homepage.php" class="back">WEMS</a></h1>
                </div>
                <!-- <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-google-plus-g"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div> -->
                
                <div class="nav-link">
                    <p><i class="fas fa-coins"></i></p>
                    <!-- <p><i class="fas fa-money-bill-wave"></i></p> -->
                    <p>Points :</p>
                    <p id="claimPoints">0</p>
                    <p id="claimPoints2"></p>
                    <p><i class="fas fa-dollar-sign"></i></p>
                </div>

                <div class="navLogout">
                    <p>Welcome <?php echo $_SESSION['username']; ?></p>
                    <br>
                    <p><i class="fas fa-sign-out-alt"></i><a href="index.php" class="logout">Logout</a></p>
                    <!-- <p>Logout</p> -->
                </div>
               
                <!-- <ul class="nav-link">
                    <li>Points :</li>
                    <li>0</li>
                </ul>     -->

            </nav>
            
            <div class="breaking-news-section">
                <span id="btext">Breaking News</span>
                <marquee direction="left">
                    <a href="#" class="breaking-news">
                        <p class="bntime">5 July 2021</p>
                        5 Filipinos in Indonesia die of COVID, infects ‘not more than 50’ others — envoy
                    </a>

                    <a href="#" class="breaking-news">
                        <p class="bntime">6 July 2021</p>
                        Japan to ship millions more COVID-19 vaccines to PH, Asian neighbors this week
                    </a>
                    <a href="#" class="breaking-news">
                        <p class="bntime">2 July 2021</p>
                        US report flags PH’s failure to convict officials complicit in trafficking crimes
                    </a>
                    <a href="#" class="breaking-news">
                        <p class="bntime">1 July 2021</p>
                        Developing resilience through positivity: Globe, DepEd tackle new ways of facing adversity
                    </a>
                </marquee>
            </div>
        </header>
    <main>
        <article id="popular-news">
            <div id="featured">
                <h2>FEATURED</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="image/carousel/minimalLaptop.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Best laptop games: 20 games for laptops that won't melt your machine</h5>
                            <p>20 June 2021</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="image/bulb.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="image/clock.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div id="latest">
                <h2>LATEST</h2>
                <section class="news">
                    <div class="news-container">
                        <img src="image/news/hontiveros.jpg" alt="hontiveros">
                       <a href="newsSite.php" target="_blank"><p class="popular-news-text"onclick="addPoints()">Call in China envoy anew over 100 more ‘likely Chinese’ ships in WPS, DFA told
                       </p></a>
                    </div>
                </section>
                <section class="news">
                    <div class="news-container">
                        <img src="image/news/drug.jpg" alt="drug">
                        <a href="newsSite2.php" target="_blank"><p class="popular-news-text" onclick="addPoints()">PNP continues to cover up drug war killings, obstructing justice — int’l rights group</p></a>
                    </div>
                </section>
            </div>
            <div id="our-picks">
                <h2>ENTERTAINMENT</h2>
                <section class="news">
                    <div class="news-container">
                        <img src="image/news/game.jpg" alt="ps5">
                        <a href="newsSite3.php" target="_blank"><p class="popular-news-text"onclick="addPoints()">PlayStation 5 consoles reach 7.8 million shipments worldwide, says Sony</p></a>
                    </div>
                </section>
                <section class="news">
                    <div class="news-container">
                        <img src="image/news/hackers.jpg" alt="hackers">
                        <a href="newsSite4.php" target="_blank" ><p class="popular-news-text"onclick="addPoints()">Hackers demand $70 M to restore data held by firms hit in mass cyberattack<p></a>
                    </div>
                </section>
            </div>
        </article>

        <section class="more-news">
            <div class="news-section">
                <article class="world">
                    <h2>GLOBAL NATION</h2>
                    <img src="image/news/gcash.jpg" alt="gcash">
                    <h3>Finance for all: GCash helps trike drivers and vendors cope with the pandemic</h3>
                    <p>Tricycle drivers and market vendors in Pasig City who have been searching for a safe and secure way to sustain their businesses while following safety protocols have found a reliable way to receive payments from their customers.</p>
                </article>
                <article class="sport">
                    <h2>SPORT</h2>
                    <img src="image/news/basketball.jpg" alt="basketball">
                    <h3>Paul Lee stays in great shape despite COVID-19 limitations</h3>
                    <p>MANILA, Philippines — Not even the COVID-19 pandemic could stop Paul Lee from staying in top shape during the extended PBA offseason.Ever since the pandemic began last year, Lee has lived a healthy lifestyle that has led to a dramatic weight loss.</p>
                </article>
            </div>
            <aside>
                <form class="adsVideo" action="ads.php" target="_blank">
                   <button onclick="watch()" id="adsBtn">ADS</button>
                </form>
                <button onclick="addOne(); return false;" id="btn">FREE CLAIM</button>
                <form class="adsVideo2" action="convertMoney.php" target="_blank">
                    <button onclick="convert()" id="adsBtn2">CONVERT</button>
                </form>
            </aside>

        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/ef88416dbc.js" crossorigin="anonymous"></script>
    <script src="button.js"></script>
</body>
</html>