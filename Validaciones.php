<?php

/**
 * Clase Validaciones - realiza validaciones utilizando patrones definidos en un archivo XML.
 */

class Validaciones
{
    /**
     * @var array Almacena los patrones cargados desde el archivo XML.
     */
    private $patrones;

    /**
     * Constructor de la clase. Carga los patrones desde el archivo XML al inicializar la instancia.
     *
     * @throws Exception Si hay un error al cargar el archivo XML.
     */
    public function __construct()
    {
        $this->Cargar_Patrones();
    }

    /**
     * Carga los patrones desde un archivo XML y los almacena en la propiedad $patrones.
     *
     * @throws Exception Si hay un error al cargar el archivo XML.
     */
    private function Cargar_Patrones()
    {
        $xmlPath = __DIR__ . '/src/expresiones.xml';
        $xml = simplexml_load_file($xmlPath);

        if ($xml) {
            foreach ($xml->children() as $patron) {
                $this->patrones[$patron->getName()] = (string) $patron->pattern;
            }
        } else {
            throw new Exception("Error al cargar el archivo XML");
        }
    }

    /**
     * Valida un valor con el patrón correspondiente.
     *
     * @param string $patron El nombre del patrón a utilizar.
     * @param mixed $valor El valor a validar.
     * @return bool Devuelve true si el valor cumple con el patrón, false en caso contrario.
     */
    public function Validar($patron, $valor)
    {
        return preg_match($this->patrones[$patron], $valor);
    }

    /**
     * Comprueba si un valor está vacío o no está definido.
     *
     * @param mixed $valor El valor a comprobar.
     * @return bool Devuelve true si el valor está vacío o no está definido, false en caso contrario.
     */
    public function Comprobar($valor)
    {
        return empty($valor) && isset($valor);
    }

    /**
     * Limpia los datos eliminando caracteres especiales y etiquetas HTML.
     *
     * @param mixed $data Los datos a limpiar.
     * @return string Los datos limpios.
     */
    public function Datos_Limpios($data)
    {
        return htmlspecialchars(strip_tags(stripslashes(trim($data))));
    }

    /**
     * Verifica la longitud de un valor.
     *
     * @param string $valor El valor a verificar.
     * @param int $minimo La longitud mínima permitida.
     * @param int $maximo La longitud máxima permitida.
     * @return bool Devuelve true si el valor cumple con la longitud permitida, false en caso contrario.
     */
    public function Longitud($valor, $minimo, $maximo)
    {
        $longitud = strlen($valor);
        return $longitud >= $minimo && $longitud <= $maximo;
    }

    /**
     * Valida el tipo de atributo.
     *
     * @param mixed $valor El valor a validar.
     * @param string $tipo El tipo de atributo permitido ('string', 'integer', 'float', 'boolean', 'array', 'object', 'null', 'numeric').
     * @return bool Devuelve true si el valor tiene el tipo de atributo correcto, false en caso contrario.
     */
    public function Tipo($valor, $tipo)
    {
        switch ($tipo) {
            case 'string':
                return is_string($valor);
            case 'integer':
                return is_int($valor);
            case 'float':
                return is_float($valor);
            case 'boolean':
                return is_bool($valor);
            case 'array':
                return is_array($valor);
            case 'object':
                return is_object($valor);
            case 'null':
                return is_null($valor);
            case 'numeric':
                return is_numeric($valor);
            case 'file':
                return is_file($valor);
            default:
                return false;
        }
    }

}
