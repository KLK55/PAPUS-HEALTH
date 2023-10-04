<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    <title>INDEX</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>

</head>
<body>
<video muted autoplay loop class="video">
     <source src="./estilo/videoplayback.webm" type="video/mp4" >
</video>
<div class="navbar">
        <nav>
            <img src="./estilo/logo.png" alt="logo">
            <button id="menuButton" class="menu-button">☰</button>
            <div id="menuDropdown" class="menu-dropdown">
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 2</a></li>
                </ul>
            </div>

            <button><a href="mapa.jpg" download="MAPA-HOSPITAL">Descargar Mapa</a></button>
        </nav>
  </div>

  <div class="todo">
    <div class="container p-5 my-5 bg-dark text-white koko">
        <div class="input-group mb-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Piso: <?php echo $datapac['piso'] ?>, Sala: <?php echo $datapac['quirofano'] ?></h2>
                    </div>
                    <div class="col">
                        <h2>Nombre de Paciente: <?php echo $datapac['nombre'] ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <button class="btn btn-info">Historial Medico</button>
                    </div>
                    <div class="col-lg-2 medio">
                        <form style="border-radius: 8px;" action="./PHP/estado.php" method="POST" name="estado">
                            <select class="form-select medio" aria-label="Default select example">
                                <option selected>Selecciona el estado del Paciente</option>
                                <option value="skull">ESQUELETO</option>
                                <option value="mal">Con Dolores</option>
                                <option value="bien">BIEN</option>
                                <option value="alta">DAR EL ALTA</option>
                            </select>
                            <button type="submit" class="btn btn-danger">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button id="showAlertBtn" type="submit" class="btn btn-primary espaciado">CODIGO AZUL</button>
        </div>
        <div id="customAlert" class="custom-alert">
            <div class="alert-content">
                <button class="download-btn">Descargar</button>
            </div>
        </div>
    </div>
</div>
    <footer>
        <div class="footer-content">
            <h3>Hola Mundo</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis corrupti dignissimos dolorum repellendus omnis, nihil blanditiis maiores laboriosam culpa dolorem. Dolorum dolore quia rerum quibusdam doloremque architecto quaerat eaque facere!</p>
            <div class="iconos">
                <container class="ig"><a href="#"><i class="fa-brands fa-instagram"></i></a></container>
                <container class="yt"><a href="#"><i class="fa-brands fa-youtube"></i></a></container>
                <container class="steam"><a href="#"><i class="fa-brands fa-steam"></i></a></container>
            </div>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 By: Los Angeles Customs</p>
        </div>
    </footer>
</body>
</html>