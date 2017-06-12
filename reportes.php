<?php  

 require('pdf/fpdf/fpdf.php');
 require('conexion.php');

  $consulta="SELECT rut,nombres,apellidos,carrera,correo,situacion FROM nuevo_registro ORDER BY id_alumno DESC";
  $resultado=$mysqli->query($consulta);


  class PDF extends FPDF{
      
      
      function Header()
      {
          
       $this->Image('pdf/images/reporte.png',5,5,30);   
       $this->SetFont('Arial','U',20);    
       $this->Cell(40);      
       $this->Cell(200,10, 'Reporte de alumnos activos',0,0,'C');      
       $this->Ln(40);   
       
       $this->Image('pdf/images/reporte.png',5,8,33);   
          
          
     }
      
      function Footer()
      {
      
          $this->SetY(-15);
          $this->SetFont('Arial','I',8);
          $this->Cell(0,10,'Pagina '.$this->PageNo().'/ {nb} ',0,0,'C');    
      }        
  }




  $pdf=new PDF('L','mm','a4');
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',13);

  $pdf->SetFillColor(144,185,121); 
  $pdf->Cell(40,10,'Rut',1,0,'C',1);
  $pdf->Cell(40,10,'Nombres',1,0,'C',1);
  $pdf->Cell(40,10,'Apellidos',1,0,'C',1);
 // $pdf->Cell(40,10,utf8_decode('Teléfonos'),1,0,'C',1);
  $pdf->Cell(60,10,'Carrera',1,0,'C',1);
  $pdf->Cell(60,10,'Correo',1,0,'C',1);
  $pdf->Cell(40,10,utf8_decode('Situación'),1,1,'C',1);
  $pdf->SetFont('Arial','B',9);
  $pdf->SetFillColor(224,218,217); 
   
    while($fila=$resultado->fetch_assoc())
    {
        
     $pdf->Cell(40,10,$fila['rut'],1,0,'C',1 );   
     $pdf->Cell(40,10,utf8_decode($fila['nombres']),1,0,'C',1);    
     $pdf->Cell(40,10,utf8_decode($fila['apellidos']),1,0,'C',1);
   //  $pdf->Cell(40,10,$fila['telefonos'],1,0,'C',1);
     $pdf->Cell(60,10,utf8_decode($fila['carrera']),1,0,'C',1);
     $pdf->Cell(60,10,utf8_decode($fila['correo']),1,0,'C',1);
     $pdf->Cell(40,10,utf8_decode($fila['situacion']),1,1,'C',1);
           
    }

  $pdf->Output();

?>