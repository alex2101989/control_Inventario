<?php include("../db.php"); ?>
<?php 


$query = "SELECT id_categoria, nombre_categoria FROM categorias";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<label for="categoria">Categoría</label>';
    echo '<select name="categoria" class="form-select">';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id_categoria'] . '">' . $row['nombre_categoria'] . '</option>';
    }
    echo '</select>';
} else {
    echo 'No hay categorías disponibles.';
}

$conn->close();
?>