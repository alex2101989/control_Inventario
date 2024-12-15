<?php
include('../db.php');

// Consulta a la base de datos
$sql = "SELECT c.nombre_categoria, SUM(i.cantidad * i.precio_unitario) as totalXcategoria 
FROM inventario i 
JOIN categorias c ON c.id_categoria = i.id_categoria
GROUP BY c.nombre_categoria";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    $data[] = ['Producto', 'Cantidad'];
    while ($row = $result->fetch_assoc()) {
        $data[] = [$row['nombre_categoria'], (int)$row['totalXcategoria']];
    }
}

echo json_encode($data);

?>

