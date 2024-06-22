<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : '';
    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;


    if ($nombre === 'Luis' && $contrasena === 'Mendoza' && $edad >= 18) {
        echo "Bienvenido, " . $nombre;
    } else {
        echo "Acceso restringido. Verifica que el nombre sea 'Luis', la contraseña 'Mendoza' y que tengas más de 18 años.";
    }
}
?>