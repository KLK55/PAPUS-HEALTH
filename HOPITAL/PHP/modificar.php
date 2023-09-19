<!DOCTYPE html>
<head>
    <title> Index de Imagenes </title>
</head>
<body>
            <?php
                include("conexion.php");

                $id = $_REQUEST['id'];

                $query ="SELECT * FROM tabla_imagen WHERE id ='$id'";
                $resultado = $conexion->query($query);
                $row = $resultado->fetch_assoc();
            ?>

    <center><br/><br/><br/>
    <form action="proc_modificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];  ?>"/><br/><br/>
        <img height= "150px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>">
        <input type="file" REQUIRED name="Imagen"/> <br/><br/>
        <input type="submit" value="Aceptar">
    </form>
    </center>
    
    
</body>
</html>