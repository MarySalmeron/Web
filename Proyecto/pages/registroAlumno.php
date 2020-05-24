<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "preinscripcion";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $respAX = [];
    $sqlChckBoleta = "SELECT * FROM student WHERE id_boleta = '$boleta'";
    $resChckBoleta = mysqli_query($conexion,$sqlChckBoleta);
    $infChckBoleta = mysqli_num_rows($resChckBoleta);
    if($infChckBoleta >= 1){
        $respAX["cod"] = 2;
        $respAX["msj"] = "<h5>La Boleta ya est&aacute; registrada. Favor de intentarlo nuevamente.</h5>";
    }else{
        $contrasena = md5($contrasena);
        $sqlInsBoleta = "INSERT INTO student VALUES('$boleta','$FirstName','$MiddleName','$LastName','$gender','$InputEmail','$b_date','$InputPassword',NOW())";
        $resInsBoleta = mysqli_query($conexion,$sqlInsBoleta);
        $infInsBoleta = mysqli_affected_rows($conexion);
        if($infInsBoleta == 1){
            $respAX["cod"] = 1;
            $respAX["msj"] = "<h5>El registro se realiz&oacute; correctamente. Gracias :)</h5>";
        }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "<h5>No se pudo realizar el registro. Favor de intentarlo nuevamente</h5>";
        }
    }

    echo json_encode($respAX);
$conn->close();
?>

