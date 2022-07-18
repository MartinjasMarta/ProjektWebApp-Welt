<?php
    include 'connect.php';
    $target_dir = 'images/';
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Welt - <?php echo $id;?></title>
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
          
            
                <h1 style="text-transform: uppercase; padding: 20px 0 0 80px;"><?php echo $id;?></h1>
                
                <?php
                $query = "SELECT * FROM vijesti WHERE kategorija = '$id' AND arhiva = 1 ORDER BY id DESC";
                $result = mysqli_query($dbc, $query);
                ?>

                <div class="row">

                <?php
                while ($row = mysqli_fetch_array($result)){
                    echo '<div class="col-sm-12 col-md-4">';
                    echo "<article>";
                    echo '<a style="color:black; text-align:left;" href="clanak.php?id='.$row['id'].'">';
                    echo '<img style="width:100%;" src="' . $target_dir . $row['slika'] . '"';
                    echo '<h2 style="margin-top: 20px;">';  
                    echo $row['naslov']; 
                    echo '</h2></a>';
                    echo $row['sazetak'];
                    echo '<p class="date">'.$row['datum'].'</p>';
                    echo '</div>'; 
                    echo '</article>';
                }
                    mysqli_close($dbc); 
                ?> 

                </div>


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