# Microservicio de Validaciones

Este microservicio proporciona funciones de validación utilizando patrones definidos en un archivo XML. Se puede utilizar para validar diversos tipos de datos, desde números de teléfono hasta contraseñas y fechas.

## Estructura del Proyecto

- **src**: Contiene el archivo XML (`expresiones.xml`) que define los patrones de validación.
- **test**: Contiene las pruebas simples para verificar la funcionalidad del microservicio.

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/cheche482010/Validaciones.git
    ```

2. Accede al directorio del proyecto:

    ```bash
    cd validaciones
    ```

## Uso

1. Incluye la clase Validaciones en tu proyecto:

    ```php
    require_once 'path/to/Validaciones.php';
    ```

2. Crea una instancia de la clase Validaciones:

    ```php
    $validador = new Validaciones();
    ```

3. Utiliza las funciones de validación según tus necesidades:

    ```php
    // Ejemplo de validación de una cédula
    $resultado = $validador->Validar('cedula', '1234567');
    if ($resultado) {
        echo 'La cédula es válida.';
    } else {
        echo 'La cédula no es válida.';
    }
    ```

## Funciones Disponibles

- `Validar($patron, $valor)`: Valida un valor con el patrón correspondiente.
- `Comprobar($valor)`: Comprueba si un valor está vacío o no está definido.
- `Datos_Limpios($data)`: Limpia los datos eliminando caracteres especiales y etiquetas HTML.
- `Longitud($valor, $minimo, $maximo)`: Verifica la longitud de un valor.
- `Tipo($valor, $tipo)`: Valida el tipo de atributo.

## Patrones Disponibles

- `cedula`: Valida una cédula (formato: de 7 a 9 dígitos numéricos).
- `caracteres`: Valida caracteres (formato: letras mayúsculas, letras minúsculas, dígitos, espacios, caracteres especiales y acentos, entre 1 y 100 caracteres).
- `rif`: Valida un RIF (formato: letra 'V', 'E', 'J', 'P', 'G' seguida de 9 dígitos numéricos).
- `enteros`: Valida enteros (formato: de 1 a 2 dígitos numéricos).
- `decimal`: Valida números decimales (formato: número decimal con o sin signo, con coma o punto como separador decimal).
- `dinero`: Valida cantidades de dinero (formato: número decimal separado por comas cada tres dígitos, con o sin parte decimal).
- `base64`: Valida cadenas codificadas en Base64 (formato: cadena que representa datos en formato Base64).
- `numero_casa`: Valida un número de casa (formato: cadena que puede contener letras, dígitos y caracteres especiales, separados por puntos o guiones).
- `password`: Valida una contraseña segura (formato: contraseña que cumple con ciertos requisitos de longitud y contenido).
- `telefono`: Valida un número de teléfono (formato: número de teléfono en diferentes formatos, con extensiones opcionales).
- `fecha`: Valida una fecha (formato: fecha en formato 'YYYY-MM-DD' o 'YY-MM-DD').
- `hora`: Valida una hora (formato: hora en formato de 12 horas con minutos y segundos opcionales, y am/pm).
- `correo`: Valida una dirección de correo electrónico (formato: dirección de correo electrónico válida).
- `url`: Valida una URL (formato: URL válida con o sin protocolo (http://, https://)).
- `codigo_postal`: Valida un código postal de 5 dígitos (formato: número de 5 dígitos).
- `numero_tarjeta`: Valida un número de tarjeta de crédito de 16 dígitos (formato: número de tarjeta de crédito de 16 dígitos).
- `codigo_seguridad`: Valida un código de seguridad de tarjeta de crédito de 3 dígitos (formato: código de seguridad de tarjeta de crédito de 3 dígitos).
- `fecha_expiracion`: Valida una fecha de expiración de tarjeta de crédito en formato MM/YY o MM/YYYY (formato: fecha de expiración de tarjeta de crédito en formato MM/YY o MM/YYYY).
- `ipv4`: Valida una dirección IP en formato IPv4 (formato: dirección IP en formato IPv4).
- `ipv6`: Valida una dirección IP en formato IPv6 (formato: dirección IP en formato IPv6).
- `hexadecimal`: Valida un color hexadecimal en formato #RRGGBB o #RGB (formato: color hexadecimal en formato #RRGGBB o #RGB).
- `imagen`: Valida una imagen con extensión jpg, jpeg, png o gif (formato: nombre de archivo con extensión jpg, jpeg, png o gif).
- `audio`: Valida un archivo de audio con extensión mp3, wav u ogg (formato: nombre de archivo con extensión mp3, wav u ogg).
- `documento`: Valida un documento con extensión doc, docx, pdf o txt (formato: nombre de archivo con extensión doc, docx, pdf o txt).
- `nombre_propio`: Valida un nombre propio (formato: letras y espacios permitidos).
- `nombre_usuario`: Valida un nombre de usuario (formato: letras, números, guiones bajos y guiones medios permitidos, longitud de 3 a 16 caracteres).
- `direccion`: Valida una dirección (formato: longitud máxima de 255 caracteres).
- `ciudad`: Valida el nombre de una ciudad (formato: letras y espacios permitidos).
- `provincia_o_estado`: Valida el nombre de una provincia o estado (formato: letras y espacios permitidos).
- `pais`: Valida el nombre de un país (formato: letras y espacios permitidos).
- `edad`: Valida la edad (formato: valores entre 1 y 100).
- `codigo_de_area`: Valida un código de área internacional (formato: signo más seguido de hasta cuatro dígitos).
- `nombre_de_producto`: Valida el nombre de un producto (formato: longitud máxima de 100 caracteres).
- `numero_de_serie`: Valida un número de serie (formato: letras, números, guiones bajos y guiones medios permitidos, longitud de 6 a 20 caracteres).

## Pruebas

El directorio `test` contiene pruebas simples para asegurar el correcto funcionamiento del microservicio. 

## Contribuciones

¡Contribuciones son bienvenidas! Si encuentras un problema o tienes una mejora, por favor, abre un issue o envía un pull request.
