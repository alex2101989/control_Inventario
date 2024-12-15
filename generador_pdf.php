<?php
require('fpdf/fpdf.php');
include("db.php");




$query = "    SELECT 
inv.id_producto,
inv.producto,
inv.descripción,
inv.cantidad,
inv.precio_unitario,
inv.fecha_ingreso,
inv.estado,
cat.nombre_categoria AS categoría, 
prov.nombre_proveedor AS proveedor
FROM
    inventario AS inv
LEFT JOIN 
categorias AS cat ON inv.id_categoria = cat.id_categoria
LEFT JOIN
proveedores AS prov ON inv.id_proveedor = prov.id_proveedor;";
$result= $conn->query($query);



//instancia para fpdf
$pdf = new FPDF();
$pdf->AddPage('L');  //por defecto vertical(), para horizontal('L')
$pdf->SetFont('Arial','B',14);  //par la fuente arial, negrita, tamano 14

//Título   //El 0 utiliza toda la pagina, el 10 es la altura de la celda, 'y agregar el texto'
// el priemer 1 indica el borde, segundo 1 es el salto de línea, y la letra C   que es centrado, LR en inglés

$pdf->Cell(0, 10, 'Inventario Disponible',1, 1,'C'); //ancho, alto, titulo,borde, salto de line, alinear
$pdf->Ln(5); //salto de linea o espacio en blanco


//Encabezado
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25, 10, 'Id producto',1);
$pdf->Cell(40, 10, 'producto',1);
$pdf->Cell(42, 10, 'descripcion',1);
$pdf->Cell(20, 10, 'cantidad',1);
$pdf->Cell(30, 10, 'precio unitario',1);
$pdf->Cell(30, 10, 'categoria',1);
$pdf->Cell(30, 10, 'proveeddor',1);
$pdf->Cell(30, 10, 'fecha de ingreso',1);
$pdf->Cell(30, 10, 'estado',1);
$pdf->Ln();


//tbody
$pdf->setFont('Arial','',8);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $pdf->Cell(25, 10, $row['id_producto'],1);
        $pdf->Cell(40, 10, $row['producto'],1);
        $pdf->Cell(42, 10, $row['descripción'],1);
        $pdf->Cell(20, 10, $row['cantidad'],1);
        $pdf->Cell(30, 10, $row['precio_unitario'],1);
        $pdf->Cell(30, 10, $row['categoría'],1);
        $pdf->Cell(30, 10, $row['proveedor'],1);
        $pdf->Cell(30, 10, $row['fecha_ingreso'],1);
        $pdf->Cell(30, 10, $row['estado'],1);
        $pdf->Ln();
    }
}




//salida archivo pdf
/* $pdf->Output('F', '/Users/marioalecxsander/Documents/pdf_generads/reporte.pdf'); // (D=Download, I= Internet, F=File), Nombre del reporte
 */
$pdf->Output('I','reporte.pdf'); //(D=Download, I= Internet, F=File), Nombre del reporte

?>