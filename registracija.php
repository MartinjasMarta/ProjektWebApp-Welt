<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Welt - Registracija</title>
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

            <form method="POST">
                <label for="user">Korisničko ime:</label><br />
                <input name="user" id="user" type="text"/>
                <span id="porukaUsername"></span>
                <br />
                <label for="ime">Ime:</label><br />
                <input name="ime" id="ime" type="text"/>
                <span id="porukaIme"></span>
                <br />
                <label for="prezime">Prezime:</label><br />
                <input name="prezime" id="prezime" type="text"/>
                <span id="porukaPrezime"></span>
                <br />
                <label for="password">Lozinka:</label><br />
                <input name="password" id="password" type="password"/>
                <span id="porukaPass"></span>
                <br />
                <label for="password2">Ponovite lozinku:</label><br />
                <input name="password2" id="password2" type="password"/>
                <span id="porukaPassRep"></span>
                <br />
                <button name = "register" id="register">Registracija</button>
            </form>
                

            <script type="text/javascript">
                document.getElementById("register").onclick = function (event){
                    var slanje_forme = true;

                    var user = document.getElementById("user").value;
                    if(user.length == 0) {
                        slanje_forme= false;
                        document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br><br>";
                        document.getElementById("porukaUsername").style.color = "red";
                    }

                    var ime = document.getElementById("ime").value;
                    if(ime.length == 0) {
                        slanje_forme= false;
                        document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br><br>";
                        document.getElementById("porukaIme").style.color = "red";
                    }

                    var prezime = document.getElementById("prezime").value;
                    if(prezime.length == 0) {
                        slanje_forme= false;
                        document.getElementById("porukaPrezime").innerHTML="<br>Unesite prezime!<br><br>";
                        document.getElementById("porukaPrezime").style.color = "red";
                    }

                    var password = document.getElementById("password").value;
                    if(password.length == 0) {
                        slanje_forme= false;
                        document.getElementById("porukaPass").innerHTML="<br>Unesite lozinku!<br><br>";
                        document.getElementById("porukaPass").style.color = "red";
                    }

                    var password2 = document.getElementById("password2").value;
                    if(password != password2 || password2.length == 0) {
                        slanje_forme= false;
                        document.getElementById("porukaPassRep").innerHTML="<br>Lozinke moraju biti iste!<br><br>";
                        document.getElementById("porukaPassRep").style.color = "red";
                    }


                    if(slanje_forme != true) {
                        event.preventDefault();
                    }
                }
            </script> 
            

            <?php

                include 'connect.php';

                if (isset($_POST["register"])) {

                    $user = $_POST["user"];
                    $ime = $_POST["ime"];
                    $prezime = $_POST["prezime"];
                    $password = $_POST["password"];
                    $hashPassword = password_hash($password, CRYPT_BLOWFISH);

                    $query = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = '$user';";
                    $result = mysqli_query($dbc, $query) or die("Error");

                    if (mysqli_num_rows($result) >= 1)
                        echo "<p style='padding-left:150px;'>Korisničko ime se već koristi.</p>";
                    else {
                        $sql = "INSERT INTO korisnik (korisnicko_ime, ime, prezime, lozinka) values (?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($dbc);

                        if (mysqli_stmt_prepare($stmt, $sql)) {
                            mysqli_stmt_bind_param($stmt, 'ssss', $user, $ime, $prezime, $hashPassword);
                            mysqli_stmt_execute($stmt);
                            echo "<p style='padding-left:150px;'>Registracija je uspješna.</p>";
                        }
                    }
                }

                mysqli_close($dbc);

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