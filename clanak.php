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

            <?php
                include "connect.php";
                $target_dir = 'images/';
                $id = $_GET['id'];

                $query = "SELECT * from vijesti WHERE id = $id";
                $result = mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($result);
            ?>

            <h1>
                <?php
                echo "<span style = 'text-transform: uppercase; padding: 20px 0 0 80px;'>".$row['kategorija']."</span>";
                ?>
            </h1>
            <article id="clanak">
                <h2>
                    <?php 
                    echo $row['naslov'];
                    ?>
                </h2>
                <p class="date"><?php echo "Objavljeno: ".$row['datum']; ?></p>
                <?php 
                    echo '<img style="padding: 20px 0; width: 100%;" src="' . $target_dir . $row['slika'] . '">';
                ?> 
                
                <p id="tekst"> <?php echo nl2br($row['tekst']); ?> </p>
            </article>

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

