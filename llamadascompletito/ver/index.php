<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container py-4 text-center">
            <h2>Registro de llamadas</h2>
            <?php
            session_start();

            if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
                echo '<button onclick="location.href=\'../registrollamadas.php\'">Crear Nuevo Registro</button>';
                echo '<form method="post" action="salir.php">';
                echo '<input type="submit" value="Cerrar Sesión">';
                echo '</form>';
            } else {
                echo '<button onclick="location.href=\'admin.php\'">Acceder como Administrador</button>';
            }
            ?>
            <form method="post" id="form-busqueda">
                <div class="row g-4">
                    <div class="col-auto">
                        <label for="campo" class="col-form-label">Buscar: </label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="campo" id="campo" class="form-control" value="">
                    </div>
                </div>
            </form>
            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <th>N° llamada</th>
                            <th>Nombre</th>
                            <th>Motivo</th>
                            <th>Urgencia</th>
                            <th>Fecha</th>
                            <?php
                            if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
                                echo '<th>Acciones</th>';
                                echo '<button onclick="location.href=\'../registrollamadas.php\'">Registrar otra llamada</button>';
                            }
                            ?>
                        </thead>
                        <tbody id="resultados">
                            <?php
                            // Código para mostrar registros aquí
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function buscarEnTiempoReal() {
            var campo = $("#campo").val();
            $.ajax({
                type: "POST",
                url: "buscar.php", // El archivo PHP que maneja la búsqueda
                data: { campo: campo },
                success: function (data) {
                    $("#resultados").html(data);
                }
            });
        }
        $("#campo").on("input", function () {
            buscarEnTiempoReal();
        });
        buscarEnTiempoReal();
    </script>
</body>
</html>
