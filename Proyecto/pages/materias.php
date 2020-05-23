<?php
    session_start();
    if(isset($_SESSION["id_boleta"])){
      include("../logic_php/student_info.php");
      include("../logic_php/subject_info.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

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

</head>

<body id="page-top">

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
        <a class="nav-link" href="materias.php">
          <i class="fas fa-book"></i>
          <span>Preinscribir</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="editar.php">
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

  <div class="form-row align-items-left">
    <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="nivel" name="nivel">
        <option selected>Nivel</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="3">4</option>
      </select>
    </div>
  </div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Unidades de aprendizaje</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Estado</th>
            <th>Agregar</th>
          </tr>
        </thead>

        <tbody>
          <?php

            while($row=mysqli_fetch_array($resInfSubject)){?>
              <tr>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['tipo']?></td>
                <td>
                <form method = "post" action = "ejemplo.php">
                    <div>
                        <input type = "radio" name = "preg1" value = "foo" >Ordinario</input>
                        <input type = "radio" name = "preg1" value = "bar" >Recurse</input>
                    </div>
                </form>
                </td>
                <td>
                  <a href="materias.php"><i class="far fa-plus-square fa-2x"></i></a>
                </td>
              </tr>
          <?php } ?>
            
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

</div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Instituto Politécnico Nacional</span>
            <p>Escuela Superior de Cómputo</p>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="../js/materias.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>