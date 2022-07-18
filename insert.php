<?php 
            
    include 'connect.php'; 

    if(isset($_POST['submit'])){

        $slika = $_FILES['slika']['name']; 
        $naslov = $_POST['naslov']; 
        $sazetak = $_POST['sazetak']; 
        $tekst = $_POST['tekst']; 
        $kategorija = $_POST['kategorija']; 
        $datum = date('d.m.Y.'); 
                    
        if (isset($_POST['arhiva'])){ 
            $arhiva=1; 
        } else { 
            $arhiva=0; 
        }

        $target_dir = 'images/'.$slika; 
        move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir); 

        $query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$datum', '$naslov', '$sazetak', '$tekst', '$slika', '$kategorija', '$arhiva')"; 
        $result = mysqli_query($dbc, $query) or die('Error querying databese.'); 

        }

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Welt - <?php echo $naslov; ?></title>
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

            <section class = "article-section">
                <h1><?php echo $kategorija; ?></h1>
                <hr/>
                <article class="article">
                    <h2><?php echo $naslov; ?></h2>
                    <p>Stand: <?php echo $datum; ?></p>
                    <?php echo "<img src='images/$slika' alt='template'/>"; ?>
                    <p><?php echo $tekst; ?></p>
                    </article>
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