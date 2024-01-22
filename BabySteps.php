<?php

// Fácil
$nombre = "Luna";
$apellido = "Lovegood";
$edad = 42;
$Ravenclaw = true;

// Muestra el valor en consola y en pantalla
echo "Nombre: $nombre\n"; // Imprime en consola
echo "Apellido: $apellido\n"; // Imprime en consola
echo "Edad: $edad\n"; // Imprime en consola
echo "Ravenclaw: " . ($Ravenclaw ? 'true' : 'false') . "\n"; // Imprime en consola

// Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " . $apellido;
$presento_examen = (bool) 1;

echo "Promedio: $promedio\n";
echo "Nombre Completo: $nombre_completo\n";
echo "Presentó Examen: " . ($presento_examen ? 'true' : 'false') . "\n";

// Avanzado
$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo = $numero_respuestas / 1.0;
$nargles = 3 + "5 nargles";

echo "Tipo de dato de \$numero_preguntas: " . gettype($numero_preguntas) . "\n";
echo "Tipo de dato de \$numero_respuestas: " . gettype($numero_respuestas) . "\n";
echo "Tipo de dato de \$promedio_maximo: " . gettype($promedio_maximo) . "\n";
echo "Tipo de dato de \$nargles: " . gettype($nargles) . "\n";

// Tablas de verdad
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

$resultado1 = $es_un_michi_grande && $le_gusta_comer;
$resultado2 = $es_un_michi_grande || $sabe_volar; 
$resultado4 = !$le_gusta_comer;
$resultado5 = !$le_gusta_comer || $es_un_michi_grande;

echo "Resultado 1: " . ($resultado1 ? 'true' : 'false') . "\n";
echo "Resultado 2: " . ($resultado2 ? 'true' : 'false') . "\n";
echo "Resultado 3: " . ($resultado3 ? 'true' : 'false') . "\n";
echo "Resultado 4: " . ($resultado4 ? 'true' : 'false') . "\n";
echo "Resultado 5: " . ($resultado5 ? 'true' : 'false') . "\n";

// Funciones
function imprimirEnMayusculas($texto) {
    echo strtoupper($texto) . "\n";
}

function obtenerLongitud($texto) {
    echo "Longitud del texto: " . strlen($texto) . "\n";
}

function obtenerCantidadPalabras($texto) {
    $palabras = str_word_count($texto);
    echo "Cantidad de palabras: $palabras\n";
}

function invertirTexto($texto) {
    echo "Texto invertido: " . strrev($texto) . "\n";
}

function reemplazarPalabra($texto, $palabraOriginal, $palabraNueva) {
    $textoModificado = str_replace($palabraOriginal, $palabraNueva, $texto);
    echo "Texto modificado: $textoModificado\n";
}

// Pruebas de funciones
$textoEjemplo = "Hola Mundo";

imprimirEnMayusculas($textoEjemplo);
obtenerLongitud($textoEjemplo);
obtenerCantidadPalabras($textoEjemplo);
invertirTexto($textoEjemplo);
reemplazarPalabra($textoEjemplo, "Hola", "Saludos");

// Variables de tipo integer
$numero1 = 10;
$numero2 = 5;

// Suma de variables integer
$suma = $numero1 + $numero2;
echo "Suma de $numero1 y $numero2: $suma\n";

// Cambio de tipo de dato a booleano
$numero1 = (bool) $numero1;
$numero2 = (bool) $numero2;

echo "Tipo de dato de \$numero1: " . gettype($numero1) . "\n";
echo "Tipo de dato de \$numero2: " . gettype($numero2) . "\n";

// Función para sumar dos números
function sumarNumeros($num1, $num2) {
    return $num1 + $num2;
}

// Función para determinar si un número es par o impar
function esPar($numero) {
    return $numero % 2 == 0;
}

// Pruebas de funciones
$numero3 = 7;
$numero4 = 4;

$resultadoSuma = sumarNumeros($numero3, $numero4);
echo "Resultado de la suma: $resultadoSuma\n";

echo "$numero3 es " . (esPar($numero3) ? 'par' : 'impar') . "\n";
echo "$numero4 es " . (esPar($numero4) ? 'par' : 'impar') . "\n";

// Crear un array de 10 números
$arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Obtener el largo del array
echo "Largo del array: " . count($arrayNumeros) . "\n";

// Agregar un valor tipo string al array
$arrayNumeros[] = "Once";

// Imprimir el array
echo "Array con string: ";
print_r($arrayNumeros);

// Agregar 2 elementos más al array
$arrayNumeros[] = 11;
$arrayNumeros[] = 12;

// Imprimir el array
echo "Array con 2 elementos más: ";
print_r($arrayNumeros);

// Crear un nuevo array
$nuevoArray = [13, 14, 15];

// Concatenar los dos arrays
$arrayConcatenado = array_merge($arrayNumeros, $nuevoArray);

// Imprimir el array concatenado
echo "Array concatenado: ";
print_r($arrayConcatenado);

// Función para imprimir todos los números de un array en una lista
function imprimirListaNumeros($array) {
    echo "Lista de números:\n";
    foreach ($array as $numero) {
        echo "- $numero\n";
    }
}

// Pruebas de la función
imprimirListaNumeros($arrayNumeros);

// Función para añadir un número al array
function agregarNumero($array, $numero) {
    $array[] = $numero;
    return $array;
}

// Pruebas de la función
$arrayNumeros = agregarNumero($arrayNumeros, 16);
imprimirListaNumeros($arrayNumeros);

// Función para eliminar números pares del array
function eliminarPares($array) {
    $arrayFiltrado = array_filter($array, function ($numero) {
        return $numero % 2 != 0;
    });
    return array_values($arrayFiltrado);
}

// Pruebas de la función
$arrayNumeros = eliminarPares($arrayNumeros);
imprimirListaNumeros($arrayNumeros);

// Función para obtener el número mayor de un array
function obtenerMayor($array) {
    return max($array);
}

// Pruebas de la función
$numeroMayor = obtenerMayor($arrayNumeros);
echo "Número mayor: $numeroMayor\n";

// Función para obtener el número menor de un array
function obtenerMenor($array) {
    return min($array);
}

// Pruebas de la función
$numeroMenor = obtenerMenor($arrayNumeros);
echo "Número menor: $numeroMenor\n";

// Función para convertir en minúsculas todas las letras de un texto
function convertirMinuculas($texto) {
    return strtolower($texto);
}

// Pruebas de la función
$textoEnMinusculas = convertirMinuculas($textoEjemplo);
echo "Texto en minúsculas: $textoEnMinusculas\n";

// Función para convertir en mayúsculas todas las letras de un texto
function convertirMayusculas($texto) {
    return strtoupper($texto);
}

// Pruebas de la función
$textoEnMayusculas = convertirMayusculas($textoEjemplo);
echo "Texto en mayúsculas: $textoEnMayusculas\n";

// Función para capitalizar la primera letra de cada nombre en un array
function capitalizarNombres($arrayNombres) {
    return array_map('ucfirst', $arrayNombres);
}

// Pruebas de la función
$arrayNombres = ["juan", "maría", "pedro"];
$arrayNombresCapitalizados = capitalizarNombres($arrayNombres);
echo "Nombres capitalizados: ";
print_r($arrayNombresCapitalizados);

// Clase Coche
class Coche {
    private $marca;
    private $puertas;
    private $atributos;

    public function __construct($marca, $puertas, $atributos) {
        $this->marca = $marca;
        $this->puertas = $puertas;
        $this->atributos = $atributos;
    }

    public function obtenerMarca() {
        return $this->marca;
    }

    public function obtenerCantidadPuertas() {
        return $this->puertas;
    }

    public function obtenerAtributo($indice) {
        return $this->atributos[$indice];
    }
}

// Crear instancia de Coche
$cocheEjemplo = new Coche("Toyota", 4, ["Color" => "Rojo", "Modelo" => "Corolla"]);

// Obtener la marca del coche
$marcaCoche = $cocheEjemplo->obtenerMarca();
echo "Marca del coche: $marcaCoche\n";

// Obtener la cantidad de puertas del coche
$puertasCoche = $cocheEjemplo->obtenerCantidadPuertas();
echo "Cantidad de puertas del coche: $puertasCoche\n";

// Obtener un atributo específico del coche
$colorCoche = $cocheEjemplo->obtenerAtributo("Color");
echo "Color del coche: $colorCoche\n";

?>
