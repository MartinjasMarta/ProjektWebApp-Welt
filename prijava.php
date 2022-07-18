<!DOCTYPE html>
<html>
<head>
    <title>Prijava</title>
    <meta charset="UTF-8">
    <meta name="author" content="Ivan Pavlinic">
	<meta name="description" content="Projekt">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <header class="container-fluid">
        <div class="container">
          <h1><a href="unos.php"><img src="img/logo.png"></a></h1>
        </div>
        <hr>
        <div class="container">  
            <nav class="row">
                <a class="col-12 col-md-2" href="index.php">Home</a>
                <a class="col-12 col-md-2" href="kategorija.php?kategorija=sport">Sport</a>
                <a class="col-12 col-md-2" href="kategorija.php?kategorija=kultura">Kultura</a>
                <a class="col-12 col-md-2" href="administracija.php">Administracija</a>
                <a class="col-12 col-md-2" href="prijava.php">Prijava</a>
                <a class="col-12 col-md-2" href="registracija.php">Registracija</a>
            </nav>
        </div>
    </header>

    <main class="container">

        <form method="POST">
            <div class="form-item">
                <label for="username">Username</label>
                <div class="form-field">
                    <input type="text" name="username" id="username">
                </div>
            </div>
            <div class="form-item">
                <label for="lozinka">Password</label>
                <div class="form-field">
                    <input type="password" name="lozinka" id="lozinka">
                </div>
            </div>
            <div class="form-item">
                <br>
                <button type="submit" value="Login" id="prijava" name="prijava">Login</button>
            </div>
        </form>

        <?php
            include 'connect.php';
            define('UPLPATH', 'img/');

            session_start();
            // Provjera da li je korisnik došao s login forme
            if (isset($_POST['prijava'])) {
                $user = $_POST["username"];
                $password = $_POST["lozinka"];
                $query = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?;";
                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $query)) {
                        mysqli_stmt_bind_param($stmt, 's', $user);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        mysqli_stmt_bind_result($stmt, $username, $hash, $razina);
                        mysqli_stmt_fetch($stmt);
                        if (password_verify($password, $hash)) {
                            echo "<br>Dobro došli $user, vaša razina je $razina<br>";
                            $_SESSION["username"] = $user;
                            $_SESSION["level"]=$razina;
                        }	else {
                            echo '<br>';
                            echo "<span style='color: red;'>Unijeli ste pogrešno korisničko ime ili lozinku.</span>";
                            echo "<br>";
                            echo "<span style='color: darkblue;'>Niste registrirani? Možete to napraviti na ";
                            echo '<a href="registracija.php"><b>sljedećoj stranici.</b></a></span>';
                        }
                    mysqli_stmt_close($stmt);
                }
            }
        ?>

    </main>

    <footer class="container-fluid">
        <div class="container">
            <p class="sakriven">@Le Parisien</p>
            <hr>
            <p>@Le Parisien</p>
        </div>
    </footer>

</body>
</html>