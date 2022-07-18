<?php
session_start();
include 'connect.php';
$uspjesnaPrijava = false;
$admin =false;
if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
    $stmt=mysqli_stmt_init($dbc);
    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,'s',$username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }    
    mysqli_stmt_bind_result($stmt,$username,$hash,$lvl);
    mysqli_stmt_fetch($stmt);
    if(password_verify($password,$hash)){
        $_SESSION['username']=$username;
        $_SESSION['level']=$lvl;
        $uspjesnaPrijava=true;
        $admin=$lvl;
    }else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Korisničko ime ne postoji. Registrirajte se!");'; 
        echo 'window.location.href = "registracija.php";';
        echo '</script>';
    }
};
?>


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

            if(($uspjesnaPrijava == true && $admin == true) || (isset($_SESSION['username'])) && $_SESSION['level'] == 1){
                echo '<form action="logout.php">
                    <button class="logout" type="submit">Click here to log out</button>
                 </form>';
                ?>
                <section>
                <h2 style="padding-left: 100px;"> Popis svih članaka </h2>
                <?php
                $target_dir = "images/";
                $query = "SELECT * FROM vijesti ORDER BY id DESC;";
                $result = mysqli_query($dbc, $query);
                while($row = mysqli_fetch_array($result)){
                    echo "<div style='padding: 100px;'>";
                    echo "<img style='width: 25%;' src='".$target_dir.$row['slika']."' />";
                    echo '<div class="podpopis">';
                    echo "<h4>" . $row['naslov']. "</h4>";
                    echo "<p>".$row['kategorija']. "</p>";
                    echo '</div>';
                    echo "<p>".$row['datum']."</p>";
                    echo '<a style="color: black; text-align: initial"; href="edit.php?id='.$row['id'].'">Izmijeni</a>';
                    echo '<a style="color: black; text-align: initial"; href="delete.php?id='.$row['id'].'">Obriši</a>';
                    echo "</div>";
                }
                ?>
                </section> 
            }

            <?php
            

                
                }else if(isset($_SESSION['username']) && $_SESSION['level'] == 0){
                    echo '<section>
                            <p style="padding: 50px 0 0 100px;">Pozdrav '.$_SESSION['username'].'! Uspješno ste prijavljeni, ali niste administrator.</p>';
                    echo '<form action="logout.php">
                                <button type="submit">Click here to log out</button>
                            </form>';
                            echo "</section> ";
                }else if($uspjesnaPrijava == false){
                    ?>

                        <section>
                        <form class="prijava"  method="POST" action="">
                            <div>
                            <label for="username">Korisničko ime </label><br>
                            <input type="text" id="username" name="username"><br>
                            <span id="porukaUser"></span>
                            </div>
                            <div>
                            <label for="password">Lozinka </label><br>
                            <input type="password" id="password" name="password"><br>
                            <span id="porukaPass"></span>
                            <br>
                            </div>
                            <button type="submit" id="login" name="login">Log in</button>
                            <button id="registracija" onclick="location.href = 'registracija.php'" type="button"> Registracija </button>
                        </form>
                        </section>
                    <script type="text/javascript">
                        document.getElementById('login').onclick = function (event){
                        var slanje_forme = true;
                        var username= document.getElementById("username").value;
                        if(username.length== 0) {
                            slanje_forme= false;
                            document.getElementById("porukaUser").innerHTML="<br>Unesite korisničko ime!<br><br>";
                            document.getElementById("porukaUser").style.color = "red";
                        } else{
                            document.getElementById("porukaUser").innerHTML="";
                        };
                        var pass= document.getElementById("password").value;
                        if(pass.length== 0) {
                            slanje_forme= false;
                            document.getElementById("porukaPass").innerHTML="<br>Unesite lozinku!<br><br>";
                            document.getElementById("porukaPass").style.color = "red";
                        } else{
                            document.getElementById("porukaPass").innerHTML="";
                        };
                        if(slanje_forme!= true) {event.preventDefault();};
                        };
                    </script> 
            <?php
                
            };

        ?>
        
                
            <footer id="login-footer">
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