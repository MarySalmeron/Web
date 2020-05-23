<?php
    session_start();
    if(isset($_SESSION["id_boleta"])){
      include("../logic_php/student_info.php");
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
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Intenciones de inscripción a los alumnos</h6>
                </div>
                <div class="card-body">
                  <p>El objetivo es desarrollar un sistema de información web que permita a la
                    comunidad estudiantil de la ESCOM manifestar sus intenciones de
                    inscripción al semestre inmediato superior del que están cursando y por
                    ende permita a la administración de la escuela tener mayor número de
                    elementos para la planeación del número de grupos que se han de ofertar. </p>

                  <p>Toma en cuenta las siguientes consideraciones:</p>
                  <p>- Puedes realizar un registro de intenciones de 1 hasta 7 unidades de aprendizaje</p>
                  <p>- Indica en cada unidad de aprendizaje si se trataría de la primera vez que 
                    la inscribes o se trata de un recursamiento</p>
                  <p>- Una vez hecha tu confirmación no puedes modificar las intenciones de unidades
                    de aprendizaje, únicamente podrás consultar y obtener un comprobante</p>
                
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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