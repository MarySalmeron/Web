<?php
    include("connection.php");
    //$nivel=$_POST['tipo']; //p_nivel

    $sqlInfSubject = "SELECT * FROM subject";
    $resInfSubject = mysqli_query($connection, $sqlInfSubject);
    //$infInfSubject = mysqli_fetch_row($resInfSubject);
    $row=mysqli_fetch_array($resInfSubject)
?>