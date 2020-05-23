<?php
    include ("connection.php");
    session_start();
    $boleta=$_POST['boleta'];
    $pass=$_POST['pass'];

    $q= "SELECT COUNT(*) as contar from student where id_boleta='$boleta' and password='$pass' ";
    $consulta=mysqli_query($connection, $q);
    $array=mysqli_fetch_array($consulta); 

    if($array['contar']>0){
        $_SESSION['id_boleta']=$boleta; 
        header("location: ../pages/index.php");
    }
    else{
        echo("Error");
    }
?>