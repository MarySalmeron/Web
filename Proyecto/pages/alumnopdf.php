<?php
    session_start();
    if(isset($_SESSION["id_boleta"])){
      include("../logic_php/student_info.php");
    }
    include("../logic_php/fpdf182/fpdf.php");

    setlocale(LC_ALL, "es_MX");

    class PDF extends FPDF{
        function Header(){
            $this->Image("../img/header.jpg",18,10,260);
            $this->Ln(20);
        }
        function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,"Preisncrpciones ESCOM ".strftime("%Y"),0,0,'C');
        }
    
    }



    $sqlInfTable="SELECT distinct subject.id_subject, subject.tipo, subject.nombre from subject join student_subject on subject.id_subject=student_subject.subject_id_student JOIN student on student_subject.student_id_boleta=$boleta ";
    $resInfTable=mysqli_query($connection,$sqlInfTable);



    $pdf=new PDF();
    $pdf->AddPage('L');
    $pdf->SetFont('Arial','',10);
    $pdf->Ln(10);
    $pdf->Cell(0,7,"ESCOM-IPN, ".strftime("%A %d de %B de %Y"),0,1,"R");
    $pdf->Ln(12);
    $pdf->SetFont('Arial','b',18);
    $pdf->Cell(0,7,"Comprobante de Preinscripcion",0,1,"C");
    $pdf->Ln(15);
    $pdf->SetFont('Arial','b',13);
    $pdf->Cell(12,6,"",0,0);
    $pdf->Cell(0,7,"Boleta: $infInfBoleta[0]",0,1,"L");
    $pdf->Cell(12,6,"",0,0);
    $pdf->Cell(0,7,"Nombre: $infInfBoleta[2] $infInfBoleta[3] $infInfBoleta[1]",0,1,"L");
    $pdf->Cell(12,6,"",0,0);
    $pdf->Cell(0,7,"Carrera: Ingenieria en Sistemas Computacionales",0,1,"L");
    $pdf->Ln(20);
    $pdf->Cell(24,6,"",0,0);
    $pdf->Cell(15,6,"ID",1,0,"C");
    $pdf->Cell(15,6,"Nivel",1,0,"C");
    $pdf->Cell(107,6,"Nombre",1,1,"C");
    while($fila=$infInfTable=mysqli_fetch_array($resInfTable)){
        $pdf->Cell(24,6,"",0,0);
        $pdf->Cell(15,7,$fila[0],1,0,"L");
        $pdf->Cell(15,7,$fila[1],1,0,"L");
        $pdf->Cell(107,7,$fila[2],1,1,"L");
    }
    $pdf->Output();
?>