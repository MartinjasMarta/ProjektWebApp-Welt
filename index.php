<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Welt - Home</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <main class="page">

            <header>
                <div class="container-fluid">
                    <div class="row" id="header-logo">
                        <div class="col-sm-12 col-md-12">
                            <a href="index.php"><img src="images/welt-logo.png" alt="Welt logo"/></a>
                        </div>
                    </div>
                    <div class="row" id="nav">
                    <div class="col-sm-12 col-md-1" id="home">
                                <a href="index.php">Home</a>
                            </div>
                            <div class="col-sm-12 col-md-1">
                                <a href="kategorija.php?id=beruf">Beruf</a>
                            </div>
                            <div class="col-sm-12 col-md-1">
                                <a href="kategorija.php?id=food">Food</a>
                            </div>
                            <div class="col-sm-12 col-md-1">
                                <a href="kategorija.php?id=sport">Sport</a>
                            </div>
                            <div class="col-sm-12 col-md-1">
                                <a href="unos.html">Unos</a>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <a href="administracija.php">Login i Administracija</a>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <a href="registracija.php">Registracija</a>
                            </div>
                            <div class="col-sm-12 col-md-1">
                                <a href="logout.php">Log out</a>
                            </div>
                    </div>
                </div>
            </header>

            <section class="main-page-section">

                <?php

                    include 'connect.php';
                    $target_dir = 'images/';

                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h2>Beruf</h2>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                        $query = "SELECT * FROM vijesti WHERE arhiva = 0 AND kategorija = 'beruf' ORDER BY id DESC LIMIT 3";
                        $result = mysqli_query($dbc,$query);
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)){
                            echo '<div class="col-sm-12 col-md-4">';
                            echo '<a style="color:black; text-align: left;"href="clanak.php?id='.$row['id'].'">'; 
                            echo '<article class="main-page-article">';
                            echo '<img style="width:100%;" src="' . $target_dir . $row['slika'] . '""';
                            echo '<br><h3>';  
                            echo $row['naslov']; 
                            echo '</a></h3>';
                            echo $row['sazetak'];
                            echo '<p class="date">'.$row['datum'].'</p>';
                            echo '</article>';
                            echo '</div>';
                        }
                    ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h2>Food</h2>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                        $query = "SELECT * FROM vijesti WHERE arhiva = 0 AND kategorija = 'food' ORDER BY id DESC LIMIT 3";
                        $result = mysqli_query($dbc,$query);
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)){
                            echo '<div class="col-sm-12 col-md-4">';
                            echo '<a style="color:black; text-align: left;" href="clanak.php?id='.$row['id'].'">'; 
                            echo '<article class="main-page-article">';
                            echo '<img style="width:100%;" src="' . $target_dir . $row['slika'] . '""';
                            echo '<br><h3 style="padding-top:10px;">';  
                            echo $row['naslov']; 
                            echo '</a></h3>';
                            echo $row['sazetak'];
                            echo '<p class="date">'.$row['datum'].'</p>';
                            echo '</article>';
                            echo '</div>';
                        }
                    ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h2>Sport</h2>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                        $query = "SELECT * FROM vijesti WHERE arhiva = 0 AND kategorija = 'sport' ORDER BY id DESC LIMIT 3";
                        $result = mysqli_query($dbc,$query);
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)){
                            echo '<div class="col-sm-12 col-md-4">';
                            echo '<a style="color:black; text-align: left;" href="clanak.php?id='.$row['id'].'">'; 
                            echo '<article class="main-page-article">';
                            echo '<img style="width:100%;;" src="' . $target_dir . $row['slika'] . '""';
                            echo '<br><h3 style="padding-top:10px;">';  
                            echo $row['naslov']; 
                            echo '</a></h3>';
                            echo $row['sazetak'];
                            echo '<p class="date">'.$row['datum'].'</p>';
                            echo '</article>';
                            echo '</div>';
                        }
                    ?>
                    </div>

            </section>

            <footer>
                <div class="container-fluid">
                    <div class="row" id="footer-logo">
                        <div class="col-sm-12 col-md-12">
                            <img src="images/welt-logo.png" alt="Welt logo"/>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>