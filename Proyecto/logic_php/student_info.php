<?php
    include("connection.php");
    
    $boleta = $_SESSION["id_boleta"];
    $sqlInfBoleta = "SELECT * FROM student WHERE id_boleta = '$boleta'";
    $resInfBoleta = mysqli_query($connection, $sqlInfBoleta);
    $infInfBoleta = mysqli_fetch_row($resInfBoleta);
?>