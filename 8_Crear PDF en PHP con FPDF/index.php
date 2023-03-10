<?php
 //Agregamos la libreria FPDF
 require('fpdf/fpdf.php');

$pdf = new FPDF('P','mm',array(100,150)); //Formato de pagina personalizado en 100x150mm
$pdf = new FPDF('P','mm','letter'); //Hoja tamaño carta
$pdf = new FPDF('L','mm','legal'); // Hoja tamaño oficio horizontal

 $pdf = new FPDF(); //Creamos un objeto de la librería
 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetFont('Arial','B',16); //Establecemos tipo de fuente, negrita y tamaño 16
//Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha
 $pdf->Cell(40,10,'Hola Mundo',1,0,'L'); 
 $pdf->Output(); //Mostramos el PDF creado


 
?>