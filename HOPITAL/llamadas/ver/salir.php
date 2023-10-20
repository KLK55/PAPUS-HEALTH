<?php

session_start();


session_destroy();

header("Location: index.php"); // Cambia "inicio.php" al nombre de tu página de inicio
exit();
?>
