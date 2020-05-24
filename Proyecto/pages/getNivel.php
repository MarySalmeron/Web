<?php
    session_start();
    if(isset($_SESSION["id_boleta"])){
      include("../logic_php/student_info.php");
      include("../logic_php/subject_info.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','preinscripcion');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"preinscripcion");
$sql="SELECT * FROM subject WHERE tipo = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Nombre</th>
<th>Nivel</th>
<th>Estado</th>
<th>Agregar</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['tipo'] . "</td>";
    echo "<td>
        <form method = 'post' action = 'ejemplo.php'>
            <div>
                <input type = 'radio' name = 'preg1' value = 'foo' >Ordinario</input>
                <input type = 'radio' name = 'preg1' value = 'bar' >Recurse</input>
            </div>
        </form>
    </td>";
    echo "<td>
        <a href=''><i class='far fa-plus-square fa-2x'></i></a>
    </td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>