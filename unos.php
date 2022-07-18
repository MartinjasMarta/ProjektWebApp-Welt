<!DOCTYPE html>
<html>
<head>
    <title>Unos</title>
    <meta charset="UTF-8">
    <meta name="author" content="Ivan Pavlinic">
	<meta name="description" content="Projekt">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .bojaPoruke {
            color: red;
        }
    </style>
</head>
<body>

    <header class="container-fluid">
        <div class="container">
            <h1><a href="unos.php"><img src="img/logo.png"></a></h1>
        </div>
        <hr>
        <div class="container">  
            <nav class="row">
                <a class="col-12 col-md-3" href="index.php">Home</a>
                <a class="col-12 col-md-3" href="kategorija.php?kategorija=sport">Sport</a>
                <a class="col-12 col-md-3" href="kategorija.php?kategorija=kultura">Kultura</a>
                <a class="col-12 col-md-3" href="administracija.php">Administracija</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section>
        <form enctype="multipart/form-data" action="skripta.php" method="POST">
            <div class="form-item">
                <label for="title">Naslov vjesti</label>
                <div class="form-field">
                    <input type="text" name="title" id="title" class="form-field-textual">
                    <span id="porukaTitle" class="bojaPoruke"></span>
                </div>
            </div>
            <div class="form-item">
                <label for="about">Kratki sadržaj vjesti (do 100 znakova)</label>
                <div class="form-field">
                    <textarea name="about" id="about" cols="30" rows="10" class="form-field-textual"></textarea>
                    <span id="porukaAbout" class="bojaPoruke"></span>
                </div>
            </div>
            <div class="form-item">
                <label for="content">Sadržaj vjesti</label>
                <div class="form-field">
                    <textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
                    <span id="porukaContent" class="bojaPoruke"></span>
                </div>
            </div>
            <div class="form-item">
                <label for="pphoto">Slika: </label>
                <div >
                    <input type="file" class="input-text" id="pphoto" name="pphoto"/>
                    <span id="porukaSlika" class="bojaPoruke"></span>
                </div>
            </div>
            <div class="form-item">
                <label for="category">Kategorija vjesti</label>
                <div class="form-field">
                    <select name="category" id="category" class="form-field-textual">
                        <option value="" disabled selected>Odabir kategorije</option>
                        <option value="sport">Sport</option>
                        <option value="kultura">Kultura</option>
                    </select>
                    <span id="porukaKategorija" class="bojaPoruke"></span>
                </div>
            </div>
            <div class="form-item">
                <label>Spremiti u arhivu:
                    <div class="form-field">
                        <input type="checkbox" name="archive" id="archive">
                    </div>
                </label>
            </div>
            <div class="form-item">
                <button type="reset" value="Poništi">Poništi</button>
                <button type="submit" value="Prihvati" id="submit" name="submit">Prihvati</button>
            </div>
        </form>
            
        </section>
    </main>

    <script type="text/javascript">
        // Provjera forme prije slanja
        document.getElementById("submit").onclick = function(event) {
        
            var slanjeForme = true;
            // Naslov vjesti (5-30 znakova)
            var poljeTitle = document.getElementById("title");
            var title = document.getElementById("title").value;
            if (title.length < 5 || title.length > 30) {
                slanjeForme = false;
                poljeTitle.style.border="1px dashed red";
                document.getElementById("porukaTitle").innerHTML="Naslov vjesti mora imati između 5 i 30 znakova!<br>";
            } else {
                poljeTitle.style.border="1px solid green";
                document.getElementById("porukaTitle").innerHTML="";
            }
            // Kratki sadržaj (10-100 znakova)
            var poljeAbout = document.getElementById("about");
            var about = document.getElementById("about").value;
            if (about.length < 10 || about.length > 100) {
                slanjeForme = false;
                poljeAbout.style.border="1px dashed red";
                document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
            } else {
                poljeAbout.style.border="1px solid green";
                document.getElementById("porukaAbout").innerHTML="";
            }
            // Sadržaj mora biti unesen
            var poljeContent = document.getElementById("content");
            var content = document.getElementById("content").value;
            if (content.length == 0) {
                slanjeForme = false;
                poljeContent.style.border="1px dashed red";
                document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
            } else {
            poljeContent.style.border="1px solid green";10
            document.getElementById("porukaContent").innerHTML="";
            }
            // Slika mora biti unesena
            var poljeSlika = document.getElementById("pphoto");
            var pphoto = document.getElementById("pphoto").value;
            if (pphoto.length == 0) {
                slanjeForme = false;
                poljeSlika.style.border="1px dashed red";
                document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
            } else {
                poljeSlika.style.border="1px solid green";
                document.getElementById("porukaSlika").innerHTML="";
            }
            // Kategorija mora biti odabrana
            var poljeCategory = document.getElementById("category");
            if(document.getElementById("category").selectedIndex == 0) {
                slanjeForme = false;
                poljeCategory.style.border="1px dashed red";
                document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
            } else {
                poljeCategory.style.border="1px solid green";
                document.getElementById("porukaKategorija").innerHTML="";
            }
            if (slanjeForme != true) {
                event.preventDefault();
            }
        };
    </script>

    <footer class="container-fluid">
        <div class="container">
            <p class="sakriven">@Le Parisien</p>
            <hr>
            <p>@Le Parisien</p>
        </div>
    </footer>

</body>
</html>