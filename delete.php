<?php
    include "connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM vijesti WHERE id =$id";
    mysqli_query($dbc,$query);
    header("Location: administracija.php");
    mysqli_close($dbc);
    exit();
?>