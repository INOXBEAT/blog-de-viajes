<?php

include("conexion.php");

if (isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO consultas(nombre, email, mensaje)
        VALUES ('$name', '$email', '$message')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            // Envío exitoso
            header("Location: index.php?status=success");
            exit();
        } else {
            // Error en el envío
            header("Location: index.php?status=error");
            exit();
        }
    } else {
        // Campos incompletos
        header("Location: index.php?status=incomplete");
        exit();
    }
}

?>
