<!-- 
include('../db.php');

if(isset($_POST['submit'])){
    $producto =  $_POST['producto'];
    $tipo_movimiento =  $_POST['tipo_movimiento'];
    $cantidad =  $_POST['cantidad'];
    $observacion =  $_POST['observacion'];

/*     echo $producto. $tipo_movimiento; */
    
    $query = "INSERT INTO movimientos(Id_producto, tipo_movimiento, cantidad, cantidad, observacion) 
    VALUES ('$producto', '$tipo_movimiento','$cantidad','$observacion')";

    if($conn->query($query)==TRUE){
        header('Location: ../nuevoMovimiento.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}
 -->

 <?php 
include('../db.php');

if(isset($_POST['submit'])){
    $producto =  $_POST['producto'];
    $tipo_movimiento =  $_POST['tipo_movimiento'];
    $cantidad =  $_POST['cantidad'];
    $observacion =  $_POST['observacion'];

    $query = "INSERT INTO movimientos(Id_producto, tipo_movimiento, cantidad, observacion) 
    VALUES ('$producto', '$tipo_movimiento', '$cantidad', '$observacion')";

    if($conn->query($query) === TRUE){
        header('Location: ../nuevoMovimiento.php');
    } else {
        echo "Error de procedimiento de ingreso de datos: " . $conn->error;
    }
}
?>




