<?php
    session_start();
    if(isset($_SESSION["id_boleta"])){
      include("../logic_php/student_info.php");
      include("../logic_php/subject_info.php");
    }
?>

<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alumno</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getNivel.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>
    <!-- Page Wrapper -->
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
                <span>Preinscribir</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="editarAlumno.php">
                <i class="fas fa-user-edit"></i>
                <span>Modificar información</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="comprobante.php">
                <i class="fas fa-pager"></i>
                <span>Comprobante</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../logic_php/cerrar_sesion.php?nombreSesion=boleta">
                <i class="fas fa-sign-out-alt"></i>
                <span>Salir</span></a>
            </li>


        </ul>

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">&nbsp;</h1>
            <p class="mb-4">Recuerda seleccionar de 1 a 7 unidades de aprendizaje y revisar antes de confirmar.</p>
            <form>
                <select name="users" onchange="showUser(this.value)">
                    <option value="">Nivel</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </form>
            <br>
            <div id="txtHint"><b>Nivel...</b></div>
            <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Instituto Politécnico Nacional</span>
                    <p>Escuela Superior de Cómputo</p>
                </div>
            </div>
        </footer>
        </div>
        
    </div>
</body>
</html>