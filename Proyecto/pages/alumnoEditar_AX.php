<?php
    session_start();
    include("../logic_php/student_info.php");

    $boleta = $_SESSION["id_boleta"];
    $sqlUpdstudent ="UPDATE student SET f_name = '$nombre', m_name = '$primerApe', l_name = '$segundoApe', email = '$correo',phone='$telefono',
         b_date = '$fechaNac' WHERE id_boleta = '$boleta'";
    $resUpdstudent = mysqli_query($conexion, $sqlUpdstudent);
    $infUpdstudent = mysqli_affected_rows($conexion);

    $respAX = [];
    if($infUpdstudent == 1){
        $respAX["val"] = 1;
        $respAX["msj"] = "<h5>Los datos se actualizaron correctamente. Gracias :)</h5>";
    }else{
        $respAX["val"] = 0;
        $respAX["msj"] = "<h5>No se pudo realizar la actualizaci&oacute;n de los datos. Favor de intentarlo nuevamente.</h5>";
    }

    echo json_encode($respAX);
?>