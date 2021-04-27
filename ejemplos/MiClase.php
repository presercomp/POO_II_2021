<?php
/* Estructura de una clase en PHP */
/**
 * Clase "MiClase"
 * Los nombres de las clases deben ser escritos en UpperCamelCase, al igual que el nombre del archivo
 * 
 */
class MiClase{
    //Primero se declaran los atributos o propiedades
    /*Convenciones:
    - Las propiedades en general deben ser declaradas en singular, snake_case y con visibilidad privada
    - Las propiedades deben ser escritas en lo posible sin caracteres latinos (ñ, á, é, í, ó, ú, etc)
    - visibilidades disponibles : private, public, protected
    - los tipos de dato deberán ser, si gusta en declarlarlo.
    */
    private $mi_propiedad; //propiedad inicializada sin tipo de dato
    private double $otra_propiedad; //propiedad inicializada con tipo de dato

    //Luego se declara el constructor. Éste puede o no recibir parámetros, indicados entre los paréntesis
    public function __construct() {

    }
    //Finalmente cualquier método

    private function metodoPrivado() {

    }

    public function metodoPublico() {

    }
}
