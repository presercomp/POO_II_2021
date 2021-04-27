<?php

/**
 * Clase Arimetica
 */
class Arimetica {

    /**
     * Suma los dos números dados
     *
     * @param integer $primero primer número
     * @param integer $segundo segundo número
     * @return integer resultado
     */
    public function sumar(int $primero, int $segundo): int{
        return $primero + $segundo;
    }

    /**
     * Resta los dos números dados
     *
     * @param integer $primero primer número
     * @param integer $segundo segundo número
     * @return integer resultado
     */
    public function restar(int $primero, int $segundo): int{
        return $primero - $segundo;
    }

    /**
     * Multiplica los dos números dados
     *
     * @param integer $primero Primer número
     * @param integer $segundo Segundo número
     * @return integer resultado
     */
    public function multiplicar(int $primero, int $segundo): int{
        return $primero * $segundo;
    }

    /**
     * Divide los dos números dados
     *
     * @param integer $primero primer número
     * @param integer $segundo segundo número
     * @return float resultado
     */
    public function dividir(int $primero, int $segundo): float{
        return $primero / $segundo;
    }


}