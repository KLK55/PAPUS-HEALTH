<?php
if (isset($_POST['estado'])) {
    $tas = $_POST['estado'];
    header("Location: ../index.php");
}
?>