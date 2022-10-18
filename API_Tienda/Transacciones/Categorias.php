<?php
require_once("../Conexion/Conexion.php");
$query = mysqli_query($conexion, "SELECT * from categoria");
$result = mysqli_num_rows($query);
if ($result > 0) {
    echo "Se encontraron " . $result . " Categorias";
    echo "<br>";
    echo "<br>";
    while ($data = mysqli_fetch_assoc($query)) {
        echo $data['id'];
        echo $data['nombre'];
        echo "<br>";
    }
} else {
    echo "No se encontro información";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>
    <form action="../Transacciones/Categorias.php" method="post">
        <select name="categoria" id="categoria">
            <option value="0">Seleccione una Categoria</option>
            <?php
            $query = mysqli_query($conexion, "SELECT * FROM categoria");
            while ($data = mysqli_fetch_assoc($query)) {     ?>
                <option value="<?php echo $data['id']; ?>"><?php echo $data['nombre']; ?></option>
            <?php
            }
            ?>
        </select>
        <button type="submit">Eliminar Categoria</button>
    </form>
</body>
<?php
if (isset($_POST['categoria'])) {
    $nombre = $_POST['categoria'];
    $query = mysqli_query($conexion, "DELETE FROM categoria where id=$nombre");
    echo "Se elimino la categoria";
}
?>

</html>