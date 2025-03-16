<?php
// Contraseña en texto plano que deseas encriptar
$password = 'tobby123';  // Cambia 'tu_contraseña' por la contraseña que deseas encriptar

// Generar el hash de la contraseña
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Mostrar el hash generado
echo "Contraseña encriptada: " . $passwordHash;
