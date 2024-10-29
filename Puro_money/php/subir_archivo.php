<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $rutaTemporal = $_FILES['archivo']['tmp_name'];


        $rutaDestino = '../uploads/' . $nombreArchivo;


        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo "Archivo subido exitosamente: " . $nombreArchivo;
        } else {
            echo "Error al subir el archivo.";
        }
    } else {
        echo "No se ha seleccionado un archivo o ha ocurrido un error.";
    }
}
?>
