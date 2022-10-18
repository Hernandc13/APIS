<!DOCTYPE html>
<html lang="en">
<?php require_once "../Conexion/Conexion.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta por Categoria</title>
</head>

<body>
    <div>
        <form action="../Transacciones/ConsultaCategoria.php" method="post">
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
            <button type="submit">Consulta</button>
        </form>
        <?php
        require_once "../Conexion/Conexion.php";
        if (isset($_POST['categoria'])) {
            $nombre = $_POST['categoria'];
            $query = mysqli_query($conexion, "SELECT * FROM producto where Id_Categoria=$nombre");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                echo "Se encontraron " . $result . " Productos";
                echo "<br>";
                $queryCat = mysqli_query($conexion, "SELECT * FROM categoria where id=$nombre");
                $resultCat = mysqli_num_rows($queryCat);
                if ($resultCat > 0) {
                    while ($dataCat = mysqli_fetch_assoc($queryCat)) {
                        echo "<br>";
                        echo "Categoria: " . $dataCat['nombre'];
                        echo "<br>";
                    }
                }
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<br>";
                    echo '<img width="200px"  src="data:image/jpeg;base64,' . base64_encode($data["Foto"]) . ' "  />';
                    echo "Nombre: " . $data['Nombre'] . " => Precio: ";
                    echo "$" . $data['Precio'] . " => Descripción: ";
                    echo $data['Descripcion'];
                }
            } else {
                echo "No se encontro información";
            }
        }
        ?>
    </div>
</body>

</html>