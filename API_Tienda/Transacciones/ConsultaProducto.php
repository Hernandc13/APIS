<?php
require_once("../Conexion/Conexion.php");
$query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.nombre FROM producto p INNER JOIN categoria c ON c.id = p.id_categoria");
$result = mysqli_num_rows($query);
if ($result > 0) {
    echo "Se encontraron " . $result . " Productos";
    echo "<br>";
    while ($data = mysqli_fetch_assoc($query)) {
        echo "<br>";
        echo '<img width="200px"  src="data:image/jpeg;base64,' . base64_encode($data["Foto"]) . ' "  />';
        echo "Categoria del Producto: ".$data['nombre']." =>";
        echo "Nombre: " . $data['Nombre'] . " => Precio: ";
        echo "$" . $data['Precio'] . " => Descripción: ";
        echo $data['Descripcion'];
    }
} else {
    echo "No se encontro información";
}
