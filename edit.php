<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Welt - Administracija</title>
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

                    if(isset($_POST['update'])){
                        $naslov = $_POST['naslov'];
                        $tekst = $_POST['tekst'];
                        $sazetak = $_POST['sazetak'];
                        $kategorija = $_POST['kategorija'];
                        if(isset($_POST['arhiva'])){
                            $arhiva=1;
                        }
                        else{
                            $arhiva=0;
                        }
                        $query = "UPDATE vijesti SET naslov='$naslov',sazetak='$sazetak', tekst='$tekst',kategorija='$kategorija',arhiva='$arhiva' WHERE id=$id;";
                        
                        $rezultat = mysqli_query($dbc, $query);
                        echo "Članak je promijenjen";}

                
            echo '<form method="POST" enctype="multipart/form-data" action="" name="unos">
                        <label for="naslov">Naslov vijesti</label><br>
                        <input type="text" name="naslov" value = "'.$row['naslov'].'">
                        <br>
                        <label for="sadrzaj">Kratki sadržaj</label><br>
                        <textarea name="sadrzaj">'.$row['tekst'].'</textarea>
                        <br>
                        <label for="tekst">Sadržaj vijesti</label><br>
                        <textarea name="tekst">'.$row['tekst'].'</textarea>
                        <br>
                        <label for="kategorija">Kategorija vijesti</label><br>
                        <select name="kategorija" value="'.$row['kategorija'].'">
                            <option value="'.$row['kategorija'].'" >'.$row['kategorija'].'</option>
                            <option value="beruf">Beruf</option> 
                            <option value="food">Food</option> 
                            <option value="sport">Sport</option> 
                        </select>
                        <br>
                        <label for="arhiva">Spremiti u arhivu?</label>';
                        if($row['arhiva'] == 0){
                            echo '<input type="checkbox" name="arhiva"/>';
                        }
                        else{
                            echo '<input type="checkbox" name="arhiva" checked/>';
                        }
                        echo '<br>
                            <button type="reset" value="reset">Poništi</button>
                            <button type="submit" name="update" value="submit">Promijeni</button>
                            
                        </form>';

            ?>
                
        
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