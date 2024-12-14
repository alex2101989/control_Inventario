<?php 
include('../db.php');

if(isset($_POST['submit'])){
    $producto =  $_POST['producto'];
    $descripción =  $_POST['descripción'];
    $cantidad =  $_POST['cantidad'];
    $precio_unitario =  $_POST['precio_unitario'];
    $categoría =  $_POST['categoría'];
    $proveedor =  $_POST['proveedor'];
    $estado =  $_POST['estado'];
    
    $query = "INSERT INTO inventario(producto,descripción,cantidad,precio_unitario,id_categoria, id_proveedor, estado) 
    VALUES ('$producto', '$descripción','$cantidad','$precio_unitario', '$categoría','$proveedor', '$estado')";
    if($conn->query($query)==TRUE){
        header('Location: ../nuevoProducto.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}

?>

