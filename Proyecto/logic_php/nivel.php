<?php
    include("connection.php");
    $nivel=$_POST['p_nivel']; 
    
    $sqlInfSubject = "SELECT * FROM subject where tipo=$'nivel";
    $resInfSubject = mysqli_query($connection, $sqlInfSubject);
    //$infInfSubject = mysqli_fetch_row($resInfSubject);
    $row=mysqli_fetch_array($resInfSubject)
?>