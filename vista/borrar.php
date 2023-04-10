<?php
    // Verificar si se ha enviado una solicitud de eliminación
    if (isset($_POST['delete'])) {
        // Obtener el ID del registro a eliminar
        $id = $_POST['delete'];

        // Ejecutar la consulta para eliminar el registro
        $query = "DELETE FROM tabla WHERE id = $id";
        // ...

        // Redirigir a la página de lista de productos
        header("Location: lista_productos.php");
        exit();
    }

    // Si no se ha enviado una solicitud de eliminación, continuar con la edición
    // ...
?>
