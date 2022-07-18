<!DOCTYPE html>
<html>
<head>
    <title>Skripta</title>
    <meta charset="UTF-8">
    <meta name="author" content="Ivan Pavlinic">
	<meta name="description" content="Projekt">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        h2, h3 {
            text-align: center;
        }
        main img {
            margin-bottom: 30px;
        }
        p {
            padding: 0 40px;
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

    <?php
        if (isset($_POST['submit'])) {

            include 'connect.php';

            $picture = $_FILES['pphoto']['name'];
            // $picture = $_POST['pphoto'];
            $title = $_POST['title'];
            $about = $_POST['about'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $date = date('d.m.Y.');

            if (isset($_POST['archive']))
                $archive = 1;
            else
                $archive = 0;

            $target_dir = 'img/'.$picture;
            move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);

            $query = "INSERT INTO clanak (datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$archive')";

            $result = mysqli_query($dbc, $query) or die('Error querying database.');

            mysqli_close($dbc);
        }
        
    ?>

    <main class="container">
        <section>
            <h2><a href="kategorija.php">Parisien</a></h2>
            <article>
                <h3> <?php echo $title; ?> </h3>
                <p class="datum"> <?php echo $date; ?> </p>
                <?php echo "<img src='img/$picture'"; ?> <br>
                <p class="kratki"> <?php echo $about; ?> </p>
                <p> <?php echo $content; ?> </p>
            </article> 
        </section>
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