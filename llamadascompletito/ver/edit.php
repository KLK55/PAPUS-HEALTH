<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <?php
    include("conexion.php");
    session_start();

    if (isset($_GET['id'])) {
        $id_registro = $_GET['id'];

        $sql = "SELECT * FROM llamadas WHERE id_llamadas = $id_registro";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            ?>
            <h2>Editar Registro</h2>
            <form action="procesar_edicion.php?id=<?php echo $id_registro; ?>" method="POST">
                <label for="nombre">Nombre del Paciente:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>

                <label for="motivo">Motivo de la Llamada:</label>
                <textarea id="motivo" name="motivo" rows="4" required><?php echo $row['motivo']; ?></textarea><br>

                <label class="urgen" for="urgencia">Urgencia:</label>
                <select id="urgencia" name="urgencia">  
                    <option value="Normal" <?php if ($row['urgencia'] == 'Normal') echo 'selected'; ?>>Normal</option>
                    <option value="Emergencia" <?php if ($row['urgencia'] == 'Emergencia') echo 'selected'; ?>>Emergencia</option>
                    <option value="Por error" <?php if ($row['urgencia'] == 'Por error') echo 'selected'; ?>>Por error</option>
                </select>
                <br>

                <button class="btn" type="submit">Guardar Cambios</button>
                
            </form>
            <?php
            
        } else {
            echo "No se encontró el registro.";
        }
    } else {
        echo "ID de registro no válido.";
    }

    $conn->close();
    ?>
</body>
</html>
