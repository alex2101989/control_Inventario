<?php 
include('../db.php');

if(isset($_POST['submit'])){
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO usuarios(email, password, telefono) VALUES ('$email', '$password','$phone')";
    if($conn->query($query)==TRUE){
        header('Location: ../controlUsuarios.php');
    }else{
        echo "Error de procedimiento de ingreso de datos";
    }

}

?>

