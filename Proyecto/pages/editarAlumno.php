<?php
    session_start();
    if(isset($_SESSION["id_boleta"])){
      include("../logic_php/student_info.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Alumno</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<!--<link href="./../../css/general.css" rel="stylesheet">-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./../../js/alumnoEditar.js"></script>
<!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $infInfBoleta[1]; ?></div>
            </a>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3"><?php echo $infInfBoleta[0]; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Acciones
            </div>

            <li class="nav-item">
                <a class="nav-link" href="materiasAlumno.php">
                    <i class="fas fa-book"></i>
                    <span>Preinscribir</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="editarAlumno.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Modificar información</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="comprobante.php">
                    <i class="fas fa-pager"></i>
                    <span>Comprobante</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../logic_php/cerrar_sesion.php?nombreSesion=boleta">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Salir</span>
                </a>
            </li>
        </ul>
        <div class="container Editar">
            <h1 class="h3 mb-2 text-gray-800">&nbsp;</h1>
            <h1 class="h3 mb-2 text-gray-800">Configuración de la cuenta</h1>
            <div class="row">
                <form id="formEditar" autocomplete="off">
                <div class="col s12 m4 input-field">
                    <label for="boleta">Boleta</label>
                    <input type="text" id="boleta" name="boleta" maxLength="10" value="<?php echo $infInfBoleta[0];  ?>" readonly required name="boleta">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $infInfBoleta[1]; ?>" required name="nombre">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="primerApe">Primer apellido</label>
                    <input type="text" id="primerApe" name="primerApe" value="<?php echo $infInfBoleta[2]; ?>" required name="primerApe">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="segundoApe">Segundo apellido</label>
                    <input type="text" id="segundoApe" name="segundoApe" value="<?php echo $infInfBoleta[3]; ?>" required name="segundoApe">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="correo">Correo</label>
                    <input type="text" id="correo" name="correo" value="<?php echo $infInfBoleta[4]; ?>" required name="correo">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="correo">Tel&eacute;fono</label>
                    <input type="text" id="telefono" name="telefono" value="<?php echo $infInfBoleta[5]; ?>" required name="telefono">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="text" class="datepicker" id="fechaNac" name="fechaNac" readonly value="<?php echo $infInfBoleta[7]; ?>" required name="fechNac">
                </div>
                <div class="col s12 m4 input-field">
                    <a href="index.php" class="btn orange" style="width:100%;">Cancelar</a>
                </div>
                <div class="col s12 m4 input-field">
                    <input type="submit" class="btn blue" style="width:100%;" value="Actualizar" >
                </div>
                </form>
            </div><!--row-->
        </div><!--container Editar-->
    </div><!--wraper-->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Instituto Politécnico Nacional</span>
            <p>Escuela Superior de Cómputo</p>
          </div>
        </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
</body>

</html>
