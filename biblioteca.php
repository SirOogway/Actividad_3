<?php

function operaciones($operacion, $num1, $num2)
{
    switch ($operacion) {
        case 'S':
            return $num1 + $num2;
            break;
        case 'R':
            return $num1 - $num2;
            break;
        case 'M':
            return $num1 * $num2;
            break;
        case 'D':
            return $num1 / $num2;
            break;
        default:
            return 'Operacion no valida, intente con S, R, M o D';
    }
}