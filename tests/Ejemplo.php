<?php
// Incluye el archivo que contiene el trait.
require_once '../Validaciones.php';
$validaciones = new Validaciones();

// Ejemplo de comprobación de un valor vacío o no definido.
$valor   = '';
$esVacio = $validaciones->Comprobar($valor);
echo "El valor está vacío o no definido: " . ($esVacio ? 'Sí' : 'No') . "</br>";

// Ejemplo de limpieza de datos.
$datoSucio  = '<script>alert("Hola");</script>';
$datoLimpio = $validaciones->Datos_Limpios($datoSucio);
echo "Dato limpio: $datoLimpio</br>";

// Ejemplo de verificación de longitud.
$nombre           = 'JohnDoe';
$longitudCorrecta = $validaciones->Longitud($nombre, 5, 10);
echo "La longitud del nombre es correcta: " . ($longitudCorrecta ? 'Sí' : 'No') . "</br>";

// Ejemplo de validación de tipo.
$edad         = '25';
$tipoCorrecto = $validaciones->Tipo($edad, 'integer');
echo "El tipo de la edad es correcto: " . ($tipoCorrecto ? 'Sí' : 'No') . "</br>";

// Ejemplos de validación con diferentes patrones.
echo "Cédula válida: " . ($validaciones->Validar('cedula', '123456789') ? 'Sí' : 'No') . "</br>";

echo "Caracteres válidos: " . ($validaciones->Validar('caracteres', 'abc123$%^') ? 'Sí' : 'No') . "</br>";

echo "RIF válido: " . ($validaciones->Validar('rif', 'V123456789') ? 'Sí' : 'No') . "</br>";

echo "Enteros válidos: " . ($validaciones->Validar('enteros', '42') ? 'Sí' : 'No') . "</br>";

echo "Decimal válido: " . ($validaciones->Validar('decimal', '-123.45') ? 'Sí' : 'No') . "</br>";

echo "Dinero válido: " . ($validaciones->Validar('dinero', '1,000,000.50') ? 'Sí' : 'No') . "</br>";

echo "Base64 válido: " . ($validaciones->Validar('base64', 'aGVsbG8gd29ybGQ=') ? 'Sí' : 'No') . "</br>";

echo "Número de casa válido: " . ($validaciones->Validar('numero_casa', '123-A') ? 'Sí' : 'No') . "</br>";

echo "Contraseña segura válida: " . ($validaciones->Validar('password', 'Abcd123!') ? 'Sí' : 'No') . "</br>";

echo "Número de teléfono válido: " . ($validaciones->Validar('telefono', '+1 (123) 456-7890') ? 'Sí' : 'No') . "</br>";

echo "Fecha válida: " . ($validaciones->Validar('fecha', '2024-01-09') ? 'Sí' : 'No') . "</br>";

echo "Hora válida: " . ($validaciones->Validar('hora', '12:30 pm') ? 'Sí' : 'No') . "</br>";

echo "Correo electrónico válido: " . ($validaciones->Validar('correo', 'usuario@example.com') ? 'Sí' : 'No') . "</br>";

echo "URL válida: " . ($validaciones->Validar('url', 'https://www.example.com') ? 'Sí' : 'No') . "</br>";

echo "Código postal válido: " . ($validaciones->Validar('codigo_postal', '12345') ? 'Sí' : 'No') . "</br>";

echo "Número de tarjeta válido: " . ($validaciones->Validar('numero_tarjeta', '1234567890123456') ? 'Sí' : 'No') . "</br>";

echo "Código de seguridad válido: " . ($validaciones->Validar('codigo_seguridad', '123') ? 'Sí' : 'No') . "</br>";

echo "Fecha de expiración válida: " . ($validaciones->Validar('fecha_expiracion', '01/2024') ? 'Sí' : 'No') . "</br>";

echo "IPv4 válida: " . ($validaciones->Validar('ipv4', '192.168.0.1') ? 'Sí' : 'No') . "</br>";

echo "IPv6 válida: " . ($validaciones->Validar('ipv6', '2001:0db8:85a3:0000:0000:8a2e:0370:7334') ? 'Sí' : 'No') . "</br>";

echo "Color hexadecimal válido: " . ($validaciones->Validar('hexadecimal', '#aabbcc') ? 'Sí' : 'No') . "</br>";

echo "Imagen válida: " . ($validaciones->Validar('imagen', 'foto.jpg') ? 'Sí' : 'No') . "</br>";

echo "Audio válido: " . ($validaciones->Validar('audio', 'musica.mp3') ? 'Sí' : 'No') . "</br>";

echo "Documento válido: " . ($validaciones->Validar('documento', 'documento.pdf') ? 'Sí' : 'No') . "</br>";
