<?php
//Esto es un comentario de 1 línea
/*
Esto es un 
comentario multi
linea
*/
/** Este es un comentario de documentación */
/** DECLARACION DE VARIABLES */
$edad = 20;
$edad = "veinte";
$edad = $edad+20; //"veinte20"
$dia = 10;
$siguiente = 3;
$actual = $dia + $siguiente; //13
/* Operadores utilizados en PHP */
// Asignación
$edad = 32;
$edad +=2; //Asigna y suma el valor indicado: $edad = $edad + 2;
$edad -=3; //Asigna y resta el valor indicado: $edad = $edad - 3;
$nombre = "Pedro";
$nombre .= " Cifuentes"; //Concatena un valor a una variable existente
// Operadores matemáticos: + - / * %
$suma            = 1 + 2; //3
$resta           = 2 - 1; //1
$multiplicacion  = 5 * 4; //20
$division        = 25 / 5; //5
$resto_o_modulo  = 25 % 10; //5
// Operadores comparativos: < > <= >= != !== == ===
$mayor_que           = 5 > 3;
$menor_que           = 3 < 5;
$mayor_o_igual_que   = 5 >= 3;
$menor_o_igual_que   = 3 <= 5;
$distinto_que        = "que" != "cual";
$no_identico         = "cual" !== "CUAL";
$igual_que           = "ave" == "AVE"; //true
$identico_que        = "ave" === "AVE"; //false

2 != "2" //Son iguales, resultado: false 
2 !== "2" //No son idénticos, resultado: true

2 != 2.0 //Son iguales, resultado: false
2 !== 2.0 //No son idénticos, resultado: true

// Operadores de control de errores:
$divisor = 0;
$divide = @25 / $divisor;

// Operadores lógicos
$a and $b; //Ambos valores deben ser verdadero para funcionar
$a && $b;  //Otra forma de hacer la linea de arriba

$a or $b;  //Basta con que una sentencia sea verdadera para funcionar (O inclusivo)
$a || $b;  //Otra forma de hacer la linea de arriba
$a xor $b; //Verdadero si $a o $b es verdadero, pero no ambos. (O exclusivo)

$primer_valor = 24;
$segundo_valor = 28;
$primer_valor < 25 or $segundo_valor < 30; //Esto funciona (ambos son true)
$primer_valor < 25 xor $segundo_valor < 30; //Esto NO funciona (ambos son true)

/* Estructuras de control utilizadas en PHP */
//Condicional Simple (IF)
if($condicion == true){
    //instrucciones si la condicion es verdadera
}
//Condicional Simple con ejecución diferente de falso
if($condicion == true){
    //instrucciones si la condicion es verdadera
} else {
    //instrucciones si la condicion es falsa
}
//Multiple condicion
if($primera_condicion == true){
    //instrucciones si la primera condicion es verdadera
} else if($segunda_condicion == true){
    //instrucciones si la segunda condicion es verdadera
} else if ($la_que_siga == true){
    //instrucciones si la evaluacion sea verdadera
} else {
    //instrucciones si ninguna de las condiciones anteriores es verdadera
}
//Condicional abreviado
//Caso: Si las horas de trabajo son mayores a 30, bono = 25000, sino, 15000
//Lo normal sería programarlo como:
$horas_trabajo = 30;
if($horas_trabajo > 30){
    $bono = 25000;
} else {
    $bono = 15000;
}
$bono = $horas_trabajo > 30 ? 25000 : 15000;
/* Estructura de repetición while, do-while, for, foreach, break, continue, switch*/
//While
while($condicion){
    //Bloque a repetir mientras la condicion sea verdadera
    //Puede que no se ejecute, si la condición al ingresar es falsa
}
//Do-While
do {
    //Bloque a repetir mientras la condicion sea verdadera
    //Se ejecuta al menos 1 vez, independiente de la condición
} while($condicion);
//Bloque For
for($i = 0; $i <= 10; $i++){
    //Repetirá las instrucciones paso a paso, según la programación de la variable
    //Se detendrá, cuand se cumpla la condición del segundo parámetro
    //La variable inicial (primer parametro), aumentará o disminuirá de valor
    //dependiendo de como se programe (tercer parámetro)
}



?>